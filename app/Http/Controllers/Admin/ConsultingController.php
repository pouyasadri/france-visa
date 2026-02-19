<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultingSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ConsultingController extends Controller
{
    public function index(): View
    {
        $consultations = ConsultingSubmission::latest()->paginate(20);

        return view('admin.consulting.index', compact('consultations'));
    }

    public function show(ConsultingSubmission $consulting): View
    {
        return view('admin.consulting.show', compact('consulting'));
    }

    public function destroy(ConsultingSubmission $consulting): RedirectResponse
    {
        $consulting->delete();

        return redirect()->route('admin.consulting.index')->with('success', 'Consultation supprimée avec succès.');
    }
}
