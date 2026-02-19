<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'blogs' => \App\Models\Blog::count(),
            'questions' => \App\Models\QuestionSubmission::count(),
            'comments' => \App\Models\Comment::count(),
            'consultations' => \App\Models\ConsultingSubmission::count(),
            'pending_comments' => \App\Models\Comment::where('is_approved', false)->count(),
        ];

        // Fetch recent activity (simple implementation: latest 5 from each, merged and sorted could be complex,
        // starting with just latest 5 blogs/questions for now or just keeping it simple)
        $recentBlogs = \App\Models\Blog::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentBlogs'));
    }
}
