@extends('layouts.university')

@php
    $universityName = 'lyon-2';
@endphp

@section('title', __('university/lyon-2.title'))
@section('keywords', __('university/lyon-2.keywords'))
@section('description', __('university/lyon-2.description'))

@section('header_class', 'bg-lyon-2')
@section('breadcrumb_current', __('university/lyon-2.breadcrumb_current'))
@section('page_title_heading', __('university/lyon-2.main_heading'))

@section('toc', true)
@section('toc_title', __('university/lyon-2.table_of_contents'))
@section('contact_title', __('university/lyon-2.contact_us'))
@section('consultation_text', __('university/lyon-2.consultation_request'))
@section('ask_question_title', __('university/lyon-2.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/lyon-2.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.univ-lyon2.fr/" target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-2.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%A4%DB%8C%D9%88%D9%84%D9%86"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-2.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/lyon') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-2.lyon_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/lyon-2.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Lyon2/lyon_2_university.webp")}}"
            alt="{{ __('university/lyon-2.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.history_title') }}</h3>
        <p class="text-muted lead">{{ __('university/lyon-2.history_content') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.017794861273!2d4.837165099999999!3d45.75078919999999!2m3!1f0!2f0!3f0!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4f3ec3e0c3%3A0xea72eb29eb3af1f6!2sUniversit%C3%A9%20Lumi%C3%A8re%20Lyon%202%20-%20Campus%20Berges%20du%20Rh%C3%B4ne!5e0!3m2!1sfr!2sfr!4v1691000454062!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-2.ranking_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.fields_of_study_title') }}</h3>
        <div class="p-4 rounded-4 bg-light">
            <p class="text-muted mb-3">{{ __('university/lyon-2.fields_of_study_content') }}</p>
            <div class="row g-2">
                @foreach(__('university/lyon-2.fields_list') as $field)
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small">
                            <i class="bx bx-check text-primary me-2"></i>
                            <span>{{ $field }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Lyon2/lyon_2_university_1.webp")}}"
            alt="{{ __('university/lyon-2.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.academic_levels_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-2.academic_levels_content') }}</p>
    </section>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.facilities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-2.facilities_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-2.iranian_students_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-2.career_opportunities_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-2.multicultural_environment_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-2.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/lyon-2.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-primary-subtle border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Lyon2/lyon_2_logo.webp")}}"
                    alt="{{ __('university/lyon-2.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/lyon-2.features') as $feature)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center small text-primary-emphasis">
                                <i class='bx bx-check-double me-2'></i>
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
                        "@id": "https://applyvipconseil.com/universities/lyon-2"
                      },
                      "headline": "{{ __('university/lyon-2.schema_headline') }}",
                      "image": "https://applyvipconseil.com/assets/img/universities/Lyon2/lyon_2_logo.webp",
                      "author": {
                        "@type": "Organization",
                        "name": "{{ __('university/lyon-2.schema_author') }}",
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
                      "datePublished": "2023-11-07",
                      "dateModified": "2024-01-11"
                    }
                @endverbatim
                </script>
@endpush