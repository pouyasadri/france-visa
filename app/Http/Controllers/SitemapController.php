<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\House;
use Illuminate\Http\Response;
  
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): Response
    {
        $blogs = Blog::latest()->get();
        $houses = House::latest()->get();
        return response()->view('sitemap', [
            'blogs' => $blogs,
            'houses' => $houses
        ])->header('Content-Type', 'text/xml');
    }
}