@extends('layouts.admin')

@section('title', 'Administrateurs')

@section('header', 'Gestion des Administrateurs')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-users-cog me-1"></i> Liste des Administrateurs</span>
            <a href="{{ route('admin.admins.create') }}" class="btn btn-primary btn-sm">Ajouter un Admin</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">ID</th>
                            <th scope="col" style="width: 30%;">Nom</th>
                            <th scope="col" style="width: 35%;">Email</th>
                            <th scope="col" style="width: 20%;">Date de création</th>
                            <th scope="col" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($admins as $admin)
                            <tr>
                                <td class="fw-bold text-secondary">#{{ $admin->id }}</td>
                                <td class="fw-bold">{{ $admin->name }}</td>
                                <td class="text-muted">{{ $admin->email }}</td>
                                <td class="text-secondary">{{ $admin->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    @if($admin->id !== auth()->id())
                                        <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action btn-action-delete" title="Supprimer" data-bs-toggle="tooltip">
                                                <i class='bx bxs-trash fs-6'></i>
                                            </button>
                                        </form>
                                    @else
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary">Vous-même</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class='bx bx-user-x fs-1 d-block mb-2'></i>
                                    Aucun administrateur trouvé.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $admins->links() }}
            </div>
        </div>
    </div>
@endsection