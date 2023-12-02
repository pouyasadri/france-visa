<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    protected BlogService $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(): View
    {
        $blogs = $this->blogService->getAllBlogs();
        return view("blog.index", compact('blogs'));
    }

    public function show(Blog $blog): View
    {
        $nextBlog = $this->blogService->getNextBlog($blog);
        $prevBlog = $this->blogService->getPreviousBlog($blog);
        return view("blog.show", compact('blog', 'nextBlog', 'prevBlog'));
    }

    public function create(): View
    {
        $blogs = $this->blogService->getAllBlogs();
        return view("blog.admin", compact("blogs"));
    }

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $blog = $this->blogService->storeBlog($request->validated());
        return redirect()->route('home')->with('success', __('messages.blog_saved'));
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $this->blogService->deleteBlog($blog);
        return redirect()->route('home')->with('success', __('messages.blog_deleted'));
    }
}
