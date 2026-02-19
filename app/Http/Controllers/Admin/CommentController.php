<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(): View
    {
        $comments = Comment::with('blog')->latest()->paginate(20);

        return view('admin.comments.index', compact('comments'));
    }

    public function update(Request $request, Comment $comment): RedirectResponse
    {
        $comment->is_approved = ! $comment->is_approved;
        $comment->save();

        $status = $comment->is_approved ? 'approuvé' : 'désapprouvé';

        return redirect()->back()->with('success', "Commentaire $status avec succès.");
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
    }
}
