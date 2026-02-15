@extends('layouts.university')

@php
    $universityName = 'cote-d-azure';
@endphp

@section('title', __('university/cote-d-azure.title'))
@section('keywords', __('university/cote-d-azure.keywords'))
@section('description', __('university/cote-d-azure.description'))

@section('header_class', 'bg-nice')
@section('breadcrumb_current', __('university/cote-d-azure.breadcrumb_current'))
@section('page_title_heading', __('university/cote-d-azure.main_heading'))

@section('toc', true)
@section('toc_title', __('university/cote-d-azure.table_of_contents'))
@section('contact_title', __('university/cote-d-azure.contact_us'))
@section('consultation_text', __('university/cote-d-azure.consultation_request'))
@section('ask_question_title', __('university/cote-d-azure.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/cote-d-azure.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://univ-cotedazur.fr/" target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/cote-d-azure.official_website') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/nice') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/cote-d-azure.nice_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/cote-d-azure.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Nice/nice_university.webp")}}"
            alt="{{ __('university/cote-d-azure.title') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.history_title') }}</h3>
        <p class="text-muted">{{ __('university/cote-d-azure.history_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/cote-d-azure.history_paragraph_2') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92283.61537243958!2d7.1946494!3d43.7133965!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd01552258547%3A0xf160114745d1e06!2sUniversit%C3%A9%20Nice%20Sophia%20Antipolis!5e0!3m2!1sfr!2sfr!4v1691003788688!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/cote-d-azure.ranking_paragraph') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.facilities_title') }}</h3>
        <p class="text-muted">{{ __('university/cote-d-azure.facilities_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/cote-d-azure.facilities_paragraph_2') }}</p>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Nice/nice_university_1.webp")}}"
            alt="{{ __('university/cote-d-azure.title') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.departments_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.departments_paragraph') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.iranian_students_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.iranian_students_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.teaching_languages_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.teaching_languages_paragraph') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.career_opportunities_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.career_opportunities_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/cote-d-azure.multicultural_environment_paragraph') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/cote-d-azure.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/cote-d-azure.conclusion_paragraph') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Nice/nice_logo.webp")}}"
                    alt="{{ __('university/cote-d-azure.title') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/cote-d-azure.prestigious_history') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/cote-d-azure.diverse_specializations') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/cote-d-azure.international_environment') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/cote-d-azure.modern_facilities') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/cote-d-azure.cutting_edge_research') }}</span>
                        </div>
                    </div>
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
                    "@id": "https://applyvipconseil.com/universities/cote-d-azure"
                  },
                  "headline": "دانشگاه Cote d'Azur: قله علم و فرهنگ در ساحل مدیترانه",
                  "image": "https://applyvipconseil.com/assets/img/universities/Nice/nice_logo.webp",
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
                  "datePublished": "2023-11-10",
                  "dateModified": "2024-01-12"
                }
            @endverbatim
            </script>
@endpush