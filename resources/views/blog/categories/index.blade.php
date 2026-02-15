@extends('layout')
@section('title', __('Blog Categories'))
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('Blog Categories') }}</h2>
                <ul>
                    <li><a href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                    <li>{{ __('Blog Categories') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="ptb-100">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>{{ __('All Categories') }}</h3>
                @auth
                    <a href="{{ route('blog.categories.create', ['locale' => app()->getLocale()]) }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> {{ __('Add Category') }}
                    </a>
                @endauth
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Slug') }}</th>
                            <th>{{ __('Parent') }}</th>
                            <th>{{ __('Posts Count') }}</th>
                            <th>{{ __('Created') }}</th>
                            @auth
                                <th>{{ __('Actions') }}</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            @php
                                $translation = $category->translations->where('locale', app()->getLocale())->first();
                                $parentTranslation = $category->parent?->translations->where('locale', app()->getLocale())->first();
                            @endphp
                            <tr>
                                <td>{{ $translation->name ?? 'No translation' }}</td>
                                <td><code>{{ $translation->slug ?? '-' }}</code></td>
                                <td>{{ $parentTranslation->name ?? ($category->parent_id ? 'Parent category' : '-') }}</td>
                                <td>{{ $category->posts->count() }}</td>
                                <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                @auth
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('blog.categories.edit', ['locale' => app()->getLocale(), 'category' => $category->id]) }}"
                                               class="btn btn-warning">
                                                <i class="bx bx-edit"></i> {{ __('Edit') }}
                                            </a>
                                            <a href="{{ route('blog.categories.delete', ['locale' => app()->getLocale(), 'category' => $category->id]) }}"
                                               class="btn btn-danger"
                                               onclick="return confirm('{{ __('Are you sure?') }}');">
                                                <i class="bx bx-trash"></i> {{ __('Delete') }}
                                            </a>
                                        </div>
                                    </td>
                                @endauth
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ auth()->check() ? '6' : '5' }}" class="text-center">
                                    {{ __('No categories found.') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

