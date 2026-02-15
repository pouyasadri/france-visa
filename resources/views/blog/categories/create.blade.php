@extends('layout')
@section('title', __('Create Blog Category'))
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('Create Blog Category') }}</h2>
                <ul>
                    <li><a href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('blog.categories.index', ['locale' => app()->getLocale()]) }}">{{ __('Categories') }}</a></li>
                    <li>{{ __('Create') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="ptb-100">
        <div class="container">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('blog.categories.store', ['locale' => app()->getLocale()]) }}"
                  method="POST">
                @csrf

                <div class="card mb-4">
                    <div class="card-header">
                        <h4>{{ __('Category Information') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="parent_id">{{ __('Parent Category') }}</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">{{ __('None (Top Level)') }}</option>
                                @foreach($parents as $parent)
                                    @php
                                        $parentTranslation = $parent->translations->where('locale', app()->getLocale())->first();
                                    @endphp
                                    <option value="{{ $parent->id }}" {{ old('parent_id') === $parent->id ? 'selected' : '' }}>
                                        {{ $parentTranslation->name ?? 'Category ' . $parent->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h4>{{ __('Translations') }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach(config('localization.supported_locales', ['en', 'fr', 'fa']) as $index => $locale)
                                <li class="nav-item">
                                    <a class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                       data-toggle="tab"
                                       href="#locale-{{ $locale }}"
                                       role="tab">
                                        {{ strtoupper($locale) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content mt-3">
                            @foreach(config('localization.supported_locales', ['en', 'fr', 'fa']) as $index => $locale)
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                     id="locale-{{ $locale }}"
                                     role="tabpanel">
                                    <input type="hidden" name="translations[{{ $index }}][locale]" value="{{ $locale }}">

                                    <div class="form-group">
                                        <label for="name_{{ $locale }}">{{ __('Name') }} ({{ strtoupper($locale) }})</label>
                                        <input type="text"
                                               class="form-control"
                                               id="name_{{ $locale }}"
                                               name="translations[{{ $index }}][name]"
                                               value="{{ old("translations.{$index}.name") }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug_{{ $locale }}">{{ __('Slug') }} ({{ strtoupper($locale) }})</label>
                                        <input type="text"
                                               class="form-control"
                                               id="slug_{{ $locale }}"
                                               name="translations[{{ $index }}][slug]"
                                               value="{{ old("translations.{$index}.slug") }}">
                                        <small class="form-text text-muted">{{ __('Leave empty to auto-generate from name') }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <a href="{{ route('blog.categories.index', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bx bx-save"></i> {{ __('Create Category') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

