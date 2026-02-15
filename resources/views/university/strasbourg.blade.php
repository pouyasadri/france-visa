@extends('layouts.university')

@php
    $universityName = 'strasbourg';
@endphp

@section('title', __('university/strasbourg.title'))
@section('keywords', __('university/strasbourg.keywords'))
@section('description', __('university/strasbourg.description'))

@section('header_class', 'bg-strasbourg')
@section('breadcrumb_current', __('university/strasbourg.breadcrumb_current'))
@section('page_title_heading', __('university/strasbourg.main_heading'))

@section('toc', true)
@section('toc_title', __('university/strasbourg.table_of_contents'))
@section('contact_title', __('university/strasbourg.contact_us'))
@section('consultation_text', __('university/strasbourg.consultation_request'))
@section('ask_question_title', __('university/strasbourg.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/strasbourg.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.unistra.fr/" target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/strasbourg.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%A7%D8%B3%D8%AA%D8%B1%D8%A7%D8%B3%D8%A8%D9%88%D8%B1%DA%AF"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/strasbourg.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/strasbourg') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/strasbourg.university/strasbourg_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/strasbourg.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Strasbourg/strasbourg_university.webp")}}"
            alt="{{ __('university/strasbourg.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.history_title') }}</h3>
        <p class="text-muted lead">{{ __('university/strasbourg.history_content') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42231.37481409881!2d7.7123919!3d48.5818728!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x4796b605f59ca9f7%3A0x129f789501bb28a5!2sUniversit%C3%A9%20de%20university/strasbourg!5e0!3m2!1sfr!2sfr!4v1691013448430!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/strasbourg.ranking_content') }}</p>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Strasbourg/strasbourg_university_1.webp")}}"
            alt="{{ __('university/strasbourg.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.facilities_title') }}</h3>
        <p class="text-muted mb-2">{{ __('university/strasbourg.facilities_content') }}</p>
        <p class="text-muted mb-4">{{ __('university/strasbourg.facilities_research') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/strasbourg.iranian_students_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.career_title') }}</h3>
        <p class="text-muted mb-2">{{ __('university/strasbourg.career_content') }}</p>
        <p class="text-muted mb-4">{{ __('university/strasbourg.career_research') }}</p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-light border-0 h-100">
                    <h5 class="fw-bold mb-3">{{ __('university/strasbourg.famous_alumni_title') }}</h5>
                    <p class="small text-muted mb-3">{{ __('university/strasbourg.famous_alumni_intro') }}</p>
                    <ul class="list-unstyled mb-0">
                        @foreach(__('university/strasbourg.famous_alumni') as $alumni)
                            <li class="mb-1 d-flex align-items-center small">
                                <i class="bx bx-award text-primary me-2"></i>
                                <span>{{ $alumni }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-primary-subtle border-0 h-100">
                    <h5 class="fw-bold text-primary-emphasis mb-3">{{ __('university/strasbourg.achievements_title') }}</h5>
                    <p class="small text-muted mb-0">{{ __('university/strasbourg.achievements_content') }}</p>
                </div>
            </div>
        </div>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.academic_levels_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/strasbourg.academic_levels_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/strasbourg.environment_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.language_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/strasbourg.language_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/strasbourg.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/strasbourg.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Strasbourg/strasbourg_logo.webp")}}"
                    alt="{{ __('university/strasbourg.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/strasbourg.features') as $feature)
                        <div class="col-md-6">
                            <div class="d-flex align-items-start small text-muted">
                                <i class='bx bx-check-circle text-primary me-2 mt-1'></i>
                                <span>{{ $feature }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push("json")
    <script type="application/ld+json">
                @verbatim
                    {
                      "@context": "https://schema.org",
                      "@type": "BlogPosting",
                      "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "https://applyvipconseil.com/strasbourg"
                      },
                      "headline": "{{ __('university/strasbourg.schema_headline') }}",
                      "image": "https://applyvipconseil.com/assets/img/universities/Strasbourg/strasbourg_logo.webp",
                      "author": {
                        "@type": "Organization",
                        "name": "Apply VIP Conseil",
                        "url": "https://applyvipconseil.com/"
                      },
                      "publisher": {
                        "@type": "Organization",
                        "name": "Apply VIP Conseil",
                        "logo": {
                          "@type": "ImageObject",
                          "url": "https://applyvipconseil.com/images/logo.png"
                        }
                      },
                      "datePublished": "2023-11-12",
                      "dateModified": "2025-10-16"
                    }
                @endverbatim
                </script>
@endpush