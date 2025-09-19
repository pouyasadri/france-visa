<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class BlogService
{
    public function getAllBlogs(): Collection
    {
        return Blog::orderBy('created_at', 'desc')->get();
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
        $blog_image_name = time() . '.' . $validatedData['blog_main_image']->getClientOriginalExtension();
        Storage::putFileAs(config('app.blog_image_path'), $validatedData['blog_main_image'], $blog_image_name);
        return Blog::create(array_merge($validatedData, ['blog_main_image' => $blog_image_name]));
    }

    public function deleteBlog(Blog $blog): void
    {
        if ($blog->blog_main_image) {
            Storage::delete(storage_path(config('app.blog_image_path') . $blog->blog_main_image));
        }

        $blog->delete();
    }
}
