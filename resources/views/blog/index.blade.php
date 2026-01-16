@extends('layout')
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
                @php
                    // Only show blog posts that have a translation in the current locale
                    $localizedBlogs = $blogs->filter(function($b) use ($locale) {
                        return (bool) $b->getTranslation($locale);
                    });
                @endphp

                @forelse($localizedBlogs as $blog)
                    @php
                        $translation = $blog->getTranslation($locale);
                    @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="single-news">
                                <div class="news-img">
                                    <a href="{{ route('blog.show', ['blog' => $blog]) }}">
                                        <img src="{{asset('storage/images/blogs/' . $blog->main_image)}}"
                                             alt="{{$translation->title}}"
                                             @if(!$blog->main_image) style="background-color: #f0f0f0;" @endif>
                                    </a>
                                    <div class="dates">
                                        <span>{{ $blog->category?->getTranslation($locale)?->name ?? 'Uncategorized' }}</span>
                                    </div>
                                </div>
                                <div class="news-content-wrap">
                                    <ul>
                                        <li>
                                            <i class="flaticon-user"></i>
                                            {{ $blog->author?->name ?? __('blog/index.author_label') }}
                                        </li>
                                    </ul>
                                    <a href="{{ route('blog.show', ['blog' => $blog]) }}">
                                        <h3>{{$translation->title}}</h3>
                                    </a>
                                    <p>{{$translation->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($translation->body), 120, '...')}}</p>
                                    <a class="read-more" href="{{ route('blog.show', ['blog' => $blog]) }}">
                                        {{ __('blog/index.read_more') }}
                                        <i class="flaticon-left-arrow"></i>
                                    </a>
                                </div>
                            </div>
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
        </div>
    </section>
    <!-- End News Area -->
@endsection
