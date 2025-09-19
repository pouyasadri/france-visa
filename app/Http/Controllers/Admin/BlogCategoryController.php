<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogCategoryRequest;
use App\Http\Requests\UpdateBlogCategoryRequest;
use App\Models\BlogCategory;
use App\Services\BlogCategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogCategoryController extends Controller
{
    public function __construct(private readonly BlogCategoryService $service)
    {
        $this->middleware('auth');
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
        return redirect()->route('admin.blog.categories.index')->with('success', __('messages.category_saved'));
    }

    public function edit(BlogCategory $category): View
    {
        $parents = $this->service->getAllCategories();
        return view('blog.categories.edit', compact('category', 'parents'));
    }

    public function update(UpdateBlogCategoryRequest $request, BlogCategory $category): RedirectResponse
    {
        $this->service->updateCategory($category, $request->validated());
        return redirect()->route('admin.blog.categories.index')->with('success', __('messages.category_updated'));
    }

    public function destroy(BlogCategory $category): RedirectResponse
    {
        $this->service->deleteCategory($category);
        return redirect()->route('admin.blog.categories.index')->with('success', __('messages.category_deleted'));
    }
}

