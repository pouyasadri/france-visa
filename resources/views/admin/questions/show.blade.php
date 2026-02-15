@extends('layouts.admin')

@section('title', 'Détails de la Question')

@section('header', 'Détails de la Question #' . $question->id)

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary btn-sm">
                <i class='bx bx-arrow-back'></i> Retour
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>Nom:</strong>
                    <p>{{ $question->name }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Email:</strong>
                    <p><a href="mailto:{{ $question->email }}">{{ $question->email }}</a></p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Téléphone:</strong>
                    <p>{{ $question->phone_number ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Date:</strong>
                    <p>{{ $question->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Page:</strong>
                    <p>{{ $question->page_name }} ({{ $question->page_type }})</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Locale:</strong>
                    <p>{{ strtoupper($question->locale) }}</p>
                </div>
                <div class="col-12 mb-3">
                    <strong>Sujet:</strong>
                    <p>{{ $question->subject }}</p>
                </div>
                <div class="col-12 mb-3">
                    <strong>Message:</strong>
                    <div class="p-3 bg-light border rounded">
                        {!! nl2br(e($question->message)) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <form action="{{ route('admin.questions.destroy', $question->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette question ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class='bx bxs-trash'></i> Supprimer
                </button>
            </form>
        </div>
    </div>
@endsection