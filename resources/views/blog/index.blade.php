@extends('layouts.main')
@section('title', __('blog/index.title'))
@section("keywords", __('blog/index.keywords'))
@section("description", __('blog/index.description'))
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('blog/index.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="/">
                            {{ __('blog/index.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>{{ __('blog/index.breadcrumb_blogs') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start News Area -->
    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('blog/index.section_title') }}</span>
                <h2>{{ __('blog/index.section_heading') }}</h2>
            </div>
            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <x-blog-card :blog="$blog" :showAuthor="true" />
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info" role="alert">
                            {{-- Prefer a locale-specific message if available, otherwise fall back to a generic one. --}}
                            {{ __('blog/index.no_blogs_in_locale', ['locale' => $locale]) ?: __('blog/index.no_blogs_found') }}
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="col-lg-12 col-md-12">
                <x-ui.pagination :items="$blogs" />
            </div>
        </div>
    </section>
    <!-- End News Area -->
@endsection