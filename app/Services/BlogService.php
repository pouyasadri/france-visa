<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogService
{
    protected ImageManager $imageManager;

    public function __construct()
    {
        $this->imageManager = new ImageManager(new Driver());
    }

    public function getAllBlogs(bool $includeTrashed = false, ?string $locale = null): Collection
    {
        $query = Blog::with(['translations', 'category', 'category.translations', 'author'])
            ->orderBy('created_at', 'desc');

        if ($includeTrashed) {
            $query->withTrashed();
        }

        if ($locale) {
            $query->whereHas('translations', function ($q) use ($locale) {
                $q->where('locale', $locale);
            });
        }

        return $query->get();
    }

    public function getPublishedBlogs(?string $locale = null): Collection
    {
        $query = Blog::published()
            ->with(['translations', 'category', 'category.translations', 'author'])
            ->orderBy('published_at', 'desc');

        if ($locale) {
            $query->whereHas('translations', function ($q) use ($locale) {
                $q->where('locale', $locale);
            });
        }

        return $query->get();
    }

    public function getPaginatedBlogs(int $perPage = 9, ?string $locale = null, bool $includeTrashed = false): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $query = Blog::with(['translations', 'category', 'category.translations', 'author'])
            ->orderBy('published_at', 'desc');

        if (!$includeTrashed) {
            $query->published();
        } else {
            $query->withTrashed();
        }

        if ($locale) {
            $query->whereHas('translations', function ($q) use ($locale) {
                $q->where('locale', $locale);
            });
        }

        return $query->paginate($perPage);
    }

    public function getNextBlog(Blog $blog): ?Blog
    {
        return Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
    }

    public function getPreviousBlog(Blog $blog): ?Blog
    {
        return Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
    }

    public function storeBlog(array $validatedData): Blog
    {
        return DB::transaction(function () use ($validatedData) {
            $mainImagePath = null;
            if (!empty($validatedData['blog_main_image'])) {
                $mainImagePath = $this->uploadImage(
                    $validatedData['blog_main_image'],
                    config('app.blog_image_path')
                );
            }

            $blog = Blog::create([
                'category_id' => $validatedData['category_id'] ?? null,
                'author_id' => $validatedData['author_id'] ?? auth()->id(),
                'main_image' => $mainImagePath,
                'is_pinned' => $validatedData['is_pinned'] ?? false,
                'published_at' => $validatedData['published_at'] ?? now(),
            ]);

            // Create translations
            if (!empty($validatedData['translations']) && is_array($validatedData['translations'])) {
                foreach ($validatedData['translations'] as $translation) {
                    if (!empty($translation['locale'])) {
                        $slug = $translation['slug'] ?? $this->generateUniqueSlug(
                            $translation['title'] ?? '',
                            $translation['locale'],
                            $blog->id
                        );

                        $blog->translations()->create([
                            'locale' => $translation['locale'],
                            'title' => $translation['title'] ?? '',
                            'slug' => $slug,
                            'excerpt' => $translation['excerpt'] ?? null,
                            'body' => clean($translation['body'] ?? ''),
                        ]);
                    }
                }
            }

            return $blog->load(['translations', 'category', 'author']);
        });
    }

    public function updateBlog(Blog $blog, array $validatedData): Blog
    {
        return DB::transaction(function () use ($blog, $validatedData) {
            // Handle image replacement
            if (!empty($validatedData['blog_main_image'])) {
                if ($blog->main_image) {
                    Storage::delete($blog->main_image);
                }
                $validatedData['main_image'] = $this->uploadImage(
                    $validatedData['blog_main_image'],
                    config('app.blog_image_path')
                );
                unset($validatedData['blog_main_image']);
            } else {
                unset($validatedData['blog_main_image']);
                unset($validatedData['main_image']);
            }

            // Update blog
            $blog->update([
                'category_id' => $validatedData['category_id'] ?? $blog->category_id,
                'author_id' => $validatedData['author_id'] ?? $blog->author_id,
                'main_image' => $validatedData['main_image'] ?? $blog->main_image,
                'is_pinned' => $validatedData['is_pinned'] ?? $blog->is_pinned,
                'published_at' => $validatedData['published_at'] ?? $blog->published_at,
            ]);

            // Update translations
            if (!empty($validatedData['translations']) && is_array($validatedData['translations'])) {
                foreach ($validatedData['translations'] as $translation) {
                    if (!empty($translation['locale'])) {
                        $existingTranslation = $blog->translations()
                            ->where('locale', $translation['locale'])
                            ->first();

                        $slug = $translation['slug'] ?? $this->generateUniqueSlug(
                            $translation['title'] ?? '',
                            $translation['locale'],
                            $blog->id
                        );

                        if ($existingTranslation) {
                            $existingTranslation->update([
                                'title' => $translation['title'] ?? $existingTranslation->title,
                                'slug' => $slug,
                                'excerpt' => $translation['excerpt'] ?? $existingTranslation->excerpt,
                                'body' => clean($translation['body'] ?? $existingTranslation->body),
                            ]);
                        } else {
                            $blog->translations()->create([
                                'locale' => $translation['locale'],
                                'title' => $translation['title'] ?? '',
                                'slug' => $slug,
                                'excerpt' => $translation['excerpt'] ?? null,
                                'body' => clean($translation['body'] ?? ''),
                            ]);
                        }
                    }
                }
            }

            return $blog->refresh()->load(['translations', 'category', 'author']);
        });
    }

    public function deleteBlog(Blog $blog): void
    {
        if ($blog->main_image) {
            Storage::delete($blog->main_image);
        }

        $blog->delete();
    }

    public function restoreBlog(string $id): ?Blog
    {
        /** @var Blog|null $blog */
        $blog = Blog::withTrashed()->find($id);
        if ($blog) {
            $blog->restore();
            $blog->load(['translations', 'category', 'author']);
            return $blog;
        }
        return null;
    }

    protected function uploadImage($file, string $path): string
    {
        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $fullPath = $path . $filename;

        $image = $this->imageManager->read($file);

        if ($image->width() > 1920) {
            $image->scale(width: 1920);
        }

        $encoded = $image->toJpeg(quality: 80);
        Storage::put($fullPath, $encoded);

        // Return path relative to the 'public' disk root (remove 'public/' prefix if present)
        return str_replace('public/', '', $fullPath);
    }

    protected function generateUniqueSlug(string $title, string $locale, ?string $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while ($this->slugExists($slug, $locale, $excludeId)) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    protected function slugExists(string $slug, string $locale, ?string $excludeId = null): bool
    {
        $query = Blog::whereHas('translations', function ($q) use ($slug, $locale) {
            $q->where('locale', $locale)->where('slug', $slug);
        });

        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        return $query->exists();
    }
}
