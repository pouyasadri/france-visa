@extends('layouts.admin')

@section('title', 'Ajouter un Admin')

@section('header', 'Ajouter un Administrateur')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary btn-sm">
                        <i class='bx bx-arrow-back'></i> Retour
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.admins.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nom <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mot de passe <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" required minlength="8">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirmer le mot de passe <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection