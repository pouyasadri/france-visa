<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuestionController extends Controller
{
    public function index(): View
    {
        $questions = QuestionSubmission::latest()->paginate(20);

        return view('admin.questions.index', compact('questions'));
    }

    public function show(QuestionSubmission $question): View
    {
        return view('admin.questions.show', compact('question'));
    }

    public function destroy(QuestionSubmission $question): RedirectResponse
    {
        $question->delete();

        return redirect()->route('admin.questions.index')->with('success', 'Question supprimée avec succès.');
    }
}
