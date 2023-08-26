<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view("blog.index", compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view("blog.show", compact('blog'));
    }

    public function create()
    {
        $blogs = Blog::all();
        return view("blog.admin", compact("blogs"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_category' => 'required',
            'blog_slug' => 'required',
            'blog_body' => 'required',
            'blog_main_image' => 'required',
        ]);
        $blog_image = "";
        if ($request->hasFile('blog_main_image')) {
            $name = time() . random_int(1, 100) . '.' . $request->file('blog_main_image')->getClientOriginalExtension();
            $request->file('blog_main_image')->storeAs('public/images/blogs', $name);
            $blog_image = $name;
        } else {
            $blog_image = "no image";
        }
        $blog = new Blog([
            'blog_title' => $request->get('blog_title'),
            'blog_category' => $request->get('blog_category'),
            'blog_slug' => $request->get('blog_slug'),
            'blog_body' => $request->get('blog_body'),
            'blog_main_image' => $blog_image,
        ]);
        $blog->save();
        return redirect('/blog/admin')->with('success', 'Blog saved!');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog/admin')->with('success', 'Blog Removed!');

    }
}
