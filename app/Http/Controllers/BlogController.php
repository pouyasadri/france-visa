<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     *
     * @return View
     */
    public function index(): View
    {
        $blogs = Blog::all();
        return view("blog.index", compact('blogs'));
    }

    /**
     * Display the specified blog.
     *
     * @param Blog $blog
     * @return View
     */
    public function show(Blog $blog): View
    {
        return view("blog.show", compact('blog'));
    }

    /**
     * Display the blog creation form.
     *
     * @return View
     */
    public function create(): View
    {
        $blogs = Blog::all();
        return view("blog.admin", compact("blogs"));
    }

    /**
     * Store a newly created blog in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validatedData = $request->validate([
                // Validation rules for blog fields
                'blog_title' => 'required',
                'blog_category' => 'required',
                'blog_slug' => 'required',
                'blog_body' => 'required',
                'blog_main_image' => 'required|image',
            ]);

            // Upload and store blog main image
            $blog_image_name = time() . '.' . $request->file('blog_main_image')->getClientOriginalExtension();
            $request->file('blog_main_image')->storeAs('public/images/blogs', $blog_image_name);

            // Create a new blog with validated data
            $blog = new Blog(array_merge($validatedData, ['blog_main_image' => $blog_image_name]));
            $blog->save();

            return redirect('/blog/admin')->with('success', 'وبلاگ با موفقیت ذخیره شد!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'خطایی در هنگام ذخیره وبلاگ رخ داده است.');
        }
    }

    /**
     * Remove the specified blog from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        try {
            // Delete associated image from storage
            if ($blog->blog_main_image) {
                Storage::delete('public/images/blogs/' . $blog->blog_main_image);
            }

            $blog->delete();

            return redirect('/blog/admin')->with('success', 'وبلاگ با موفقیت حذف شد!');
        } catch (ModelNotFoundException $e) {
            return redirect('/blog/admin')->with('error', 'وبلاگ یافت نشد.');
        } catch (Exception $e) {
            return redirect('/blog/admin')->with('error', 'خطایی در هنگام حذف وبلاگ رخ داده است.');
        }
    }
}
