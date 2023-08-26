@extends('layout')
@section('title',"اخبار")
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>اخبار</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>اخبار</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- End News Area -->
    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>وبلاگ ما</span>
                <h2>اخبار سایت </h2>
            </div>
            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-news">
                            <div class="news-img">
                                <a href="/blog/{{$blog->id}}">
                                    <img src="{{asset("/storage/images/blogs/".$blog->blog_main_image)}}"
                                         alt="{{$blog->blog_title}}">
                                </a>
                                <div class="dates">
                                    <span>{{$blog->blog_category}}</span>
                                </div>
                            </div>
                            <div class="news-content-wrap">
                                <ul>
                                    <li>
                                        <i class="flaticon-user"></i>
                                        مدیر
                                    </li>
                                </ul>
                                <a href="/blog/{{$blog->id}}">
                                    <h3>{{$blog->blog_title}}</h3>
                                </a>
                                <p>{{$blog->blog_slug}}</p>
                                <a class="read-more" href="/blog/{{$blog->id}}">
                                    ادامه خواندن
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                        هیچ خبر پیدا نشد!
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End News Area -->
@endsection
