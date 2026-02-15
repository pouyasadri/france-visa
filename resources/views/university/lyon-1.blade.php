@extends('layouts.university')

@php
    $universityName = 'lyon-1';
@endphp

@section('title', __('university/lyon-1.title'))
@section('keywords', __('university/lyon-1.keywords'))
@section('description', __('university/lyon-1.description'))

@section('header_class', 'bg-lyon-1')
@section('breadcrumb_current', __('university/lyon-1.breadcrumb_current'))
@section('page_title_heading', __('university/lyon-1.main_heading'))

@section('toc', true)
@section('toc_title', __('university/lyon-1.table_of_contents'))
@section('contact_title', __('university/lyon-1.contact_us'))
@section('consultation_text', __('university/lyon-1.consultation_request'))
@section('ask_question_title', __('university/lyon-1.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/lyon-1.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.univ-lyon1.fr/" target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-1.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%DA%A9%D9%84%D9%88%D8%AF_%D8%A8%D8%B1%D9%86%D8%A7%D8%B1%D8%AF_%D9%84%DB%8C%D9%88%D9%86_%DB%B1"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-1.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/lyon') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-1.lyon_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/lyon-1.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Lyon1/lyon_1_university.webp")}}"
            alt="{{ __('university/lyon-1.title') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.history_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-1.history_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/lyon-1.history_paragraph_2') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11130.215642098558!2d4.864358!3d45.7801296!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea143dd86f25%3A0x7bfebbdcecc615b7!2sUniversit%C3%A9%20Claude%20Bernard%20Lyon%201!5e0!3m2!1sfr!2sfr!4v1691001138308!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-1.ranking_paragraph') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.facilities_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-1.facilities_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/lyon-1.facilities_paragraph_2') }}</p>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Lyon1/lyon_1_university_1.webp")}}"
            alt="{{ __('university/lyon-1.title') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-1.iranian_students_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/lyon-1.iranian_students_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.tuition_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-1.tuition_paragraph') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-1.career_opportunities_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/lyon-1.career_opportunities_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-1.multicultural_environment_paragraph') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-1.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/lyon-1.conclusion_paragraph') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Lyon1/lyon_1_logo.webp")}}"
                    alt="{{ __('university/lyon-1.title') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/lyon-1.prestigious_history') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/lyon-1.diverse_specializations') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/lyon-1.international_environment') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/lyon-1.modern_facilities') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small text-muted mb-2">
                            <i class='bx bx-check text-primary me-2'></i>
                            <span>{{ __('university/lyon-1.cutting_edge_research') }}</span>
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
                        "@id": "https://applyvipconseil.com/universities/lyon-1"
                      },
                      "headline": "دانشگاه لیون 1: مهد نوآوری و آموزش عالی",
                      "image": "https://applyvipconseil.com/assets/img/universities/Lyon1/lyon_1_logo.webp",
                      "author": {
                        "@type": "Organization",
                        "name": "تحصیل، زندگی، سرمایه گذاری: رویاهای شما در فرانسه با A.V.C",
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
                      "datePublished": "2023-11-08",
                      "dateModified": "2024-01-12"
                    }
                @endverbatim
                </script>
@endpush