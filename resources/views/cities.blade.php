@extends('layout')
@section('title', __('cities.title'))
@section('keywords', __('cities.keywords'))
@section('description', __('cities.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp
        <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('cities.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            {{ __('cities.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>{{ __('cities.breadcrumb_cities') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Our Rooms Area -->
    <section class="our-rooms-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('cities.section_title') }}</span>
                <h2>{{ __('cities.section_heading') }}</h2>
            </div>
            <div style="padding-bottom: 1rem">
                <p>{{ __('cities.section_paragraph') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Paris/paris-slider.webp")}}" style="height: 350px"
                                 alt="{{ __('cities.paris_alt') }}">
                            <div class="single-rooms-three-content">
                                <h3>{{ __('cities.paris_title') }}</h3>
                                <span class="price">{{ __('cities.paris_description') }}</span>
                                <a href="{{url(app()->getLocale()."/cities/paris")}}" class="default-btn">
                                    {{ __('cities.read_more') }}
                                    <i class="{{ $arrowClass }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Lyon/lyon.webp")}}" style="height: 350px"
                                 alt="{{ __('cities.lyon_alt') }}">
                            <div class="single-rooms-three-content">
                                <h3>{{ __('cities.lyon_title') }}</h3>
                                <span class="price">{{ __('cities.lyon_description') }}</span>
                                <a href="{{url(app()->getLocale()."/cities/lyon")}}" class="default-btn">
                                    {{ __('cities.read_more') }}
                                    <i class="{{ $arrowClass }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Strasbourg/strasbourg.webp")}}" style="height: 350px"
                                 alt="{{ __('cities.strasbourg_alt') }}">
                            <div class="single-rooms-three-content">
                                <h3>{{ __('cities.strasbourg_title') }}</h3>
                                <span class="price">{{ __('cities.strasbourg_description') }}</span>
                                <a href="{{url(app()->getLocale()."/cities/strasbourg")}}" class="default-btn">
                                    {{ __('cities.read_more') }}
                                    <i class="{{ $arrowClass }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Nice/nice1.webp")}}" style="height: 350px"
                                 alt="{{ __('cities.nice_alt') }}">
                            <div class="single-rooms-three-content">
                                <h3>{{ __('cities.nice_title') }}</h3>
                                <span class="price">{{ __('cities.nice_description') }}</span>
                                <a href="{{url(app()->getLocale()."/cities/nice")}}" class="default-btn">
                                    {{ __('cities.read_more') }}
                                    <i class="{{ $arrowClass }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Toulouse/toulouse.webp")}}" style="height: 350px"
                                 alt="{{ __('cities.toulouse_alt') }}">
                            <div class="single-rooms-three-content">
                                <h3>{{ __('cities.toulouse_title') }}</h3>
                                <span class="price">{{ __('cities.toulouse_description') }}</span>
                                <a href="{{url(app()->getLocale()."/cities/toulouse")}}" class="default-btn">
                                    {{ __('cities.read_more') }}
                                    <i class="{{ $arrowClass }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Our Rooms Area -->
@endsection
@push("json")
    <script type="application/ld+json">
    @verbatim
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://applyvipconseil.com/cities"
              },
              "headline":
        @endverbatim"{{ __('cities.schema_headline') }}"@verbatim
            ,
                          "image": "https://applyvipconseil.com/assets/img/France/france1.webp",
                          "author": {
                            "@type": "Organization",
                            "name":
        @endverbatim"{{ __('cities.schema_author_name') }}"@verbatim,
                "url": "https://applyvipconseil.com/"
              },
              "publisher": {
                "@type": "Organization",
                "name": "",
                "logo": {
                  "@type": "ImageObject",
                  "url": ""
                }
              },
              "datePublished": "2023-10-01",
              "dateModified": "2024-01-28"
            }
        @endverbatim
    </script>
@endpush
