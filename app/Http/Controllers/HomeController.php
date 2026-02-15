<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use App\Services\PropertyService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        protected BlogService $blogService,
        protected PropertyService $propertyService
    ) {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        // PROPERTIES FEATURE DISABLED - COMING SOON
        // Original: $properties = $this->propertyService->getAllProperties();
        // To re-enable: Uncomment the line above and remove the line below
        // See PROPERTIES_DISABLED.md for full restoration guide
        $properties = collect(); // Empty collection prevents errors in view

        $blogs = $this->blogService->getAllBlogs();

        return view('home', compact('properties', 'blogs'));
    }
}
