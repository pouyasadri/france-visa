<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses = House::all();
        $blogs = Blog::all();
        return view('home',compact(['houses','blogs']));
    }
}
