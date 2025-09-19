<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\House;

class IndexController extends Controller
{
    /**
     * Display the main page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch the latest 3 blogs
        $blogs = Blog::latest()->take(3)->get();

        // Fetch the latest 4 houses
//        $houses = House::latest()->take(4)->get();

        $houses = [];
        // Load the "index" view and pass data to it
        return view("index", compact('blogs', 'houses'));
    }
}
