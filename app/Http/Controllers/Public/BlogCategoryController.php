<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Services\BlogCategoryService;
use Illuminate\View\View;

class BlogCategoryController extends Controller
{
    public function __construct(private readonly BlogCategoryService $service)
    {
    }

    public function index(): View
    {
        $categories = BlogCategory::with('translations')->latest()->get();
        return view('blog.categories.index', compact('categories'));
    }

    public function show(string $locale, string $slug): View
    {
        $category = $this->service->findByLocaleAndSlug($locale, $slug);
        abort_if(!$category, 404);
        return view('blog.categories.show', compact('category'));
    }
}

