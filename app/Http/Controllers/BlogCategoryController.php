<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogCategoryRequest;
use App\Models\BlogCategory;
use App\Services\BlogCategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogCategoryController extends Controller
{
    protected BlogCategoryService $service;

    public function __construct(BlogCategoryService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $categories = $this->service->getAllCategories();
        return view('blog.categories.index', compact('categories'));
    }

    public function create(): View
    {
        $parents = $this->service->getAllCategories();
        return view('blog.categories.create', compact('parents'));
    }

    public function store(StoreBlogCategoryRequest $request): RedirectResponse
    {
        $this->service->storeCategory($request->validated());
        return redirect()->route('blog.categories.index')->with('success', __('messages.category_saved'));
    }

    public function edit(BlogCategory $category): View
    {
        $parents = $this->service->getAllCategories();
        return view('blog.categories.edit', compact('category', 'parents'));
    }

    public function update(StoreBlogCategoryRequest $request, BlogCategory $category): RedirectResponse
    {
        $this->service->updateCategory($category, $request->validated());
        return redirect()->route('blog.categories.index')->with('success', __('messages.category_updated'));
    }

    public function destroy(BlogCategory $category): RedirectResponse
    {
        $this->service->deleteCategory($category);
        return redirect()->route('blog.categories.index')->with('success', __('messages.category_deleted'));
    }
}

