<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all()->take(3);
        $houses = House::all()->take(4);
        return view("index", compact(["blogs",'houses']));
    }
}
