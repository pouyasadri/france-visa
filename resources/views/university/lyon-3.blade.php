@extends('layouts.university')

@php
    $universityName = 'lyon-3';
@endphp

@section('title', __('university/lyon-3.title'))
@section('keywords', __('university/lyon-3.keywords'))
@section('description', __('university/lyon-3.description'))

@section('header_class', 'bg-lyon-3')
@section('breadcrumb_current', __('university/lyon-3.breadcrumb_current'))
@section('page_title_heading', __('university/lyon-3.main_heading'))

@section('toc', true)
@section('toc_title', __('university/lyon-3.table_of_contents'))
@section('contact_title', __('university/lyon-3.contact_us'))
@section('consultation_text', __('university/lyon-3.consultation_request'))
@section('ask_question_title', __('university/lyon-3.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/lyon-3.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.univ-lyon3.fr/" target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-3.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%A4%DB%8C%D9%88%D9%84%D9%86"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-3.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/lyon') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/lyon-3.lyon_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/lyon-3.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Lyon3/lyon_3_university.webp")}}"
            alt="{{ __('university/lyon-3.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.history_title') }}</h3>
        <p class="text-muted lead">{{ __('university/lyon-3.history_content') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11136.680745538117!2d4.8530438!3d45.747734!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4f7816ca8d%3A0x508d760befcb222d!2sUniversit%C3%A9%20Jean%20Moulin%20Lyon%203!5e0!3m2!1sfr!2sfr!4v1690998325482!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/lyon-3.ranking_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.faculties_title') }}</h3>
        <div class="p-4 rounded-4 bg-light">
            <p class="text-muted mb-3">{{ __('university/lyon-3.faculties_content') }}</p>
            <div class="row g-2">
                @foreach(__('university/lyon-3.faculties_list') as $faculty)
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small">
                            <i class="bx bx-check text-primary me-2"></i>
                            <span>{{ $faculty }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-muted small mt-3 mb-0">{{ __('university/lyon-3.faculties_additional') }}</p>
        </div>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Lyon3/lyon_3_university_1.webp")}}"
            alt="{{ __('university/lyon-3.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.admission_requirements_title') }}</h3>
        <div class="p-4 rounded-4 bg-primary-subtle border-0">
            <p class="fw-bold text-primary-emphasis mb-3">{{ __('university/lyon-3.admission_requirements_content') }}</p>
            <div class="row g-2">
                @foreach(__('university/lyon-3.admission_requirements_list') as $requirement)
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small">
                            <i class="bx bx-check-double text-primary me-2"></i>
                            <span>{{ $requirement }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.facilities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-3.facilities_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-3.iranian_students_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-3.career_opportunities_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/lyon-3.multicultural_environment_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/lyon-3.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/lyon-3.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Lyon3/lyon_3.webp")}}"
                    alt="{{ __('university/lyon-3.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/lyon-3.features') as $feature)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center small text-muted">
                                <i class='bx bx-check text-primary me-2'></i>
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
                        "@id": "https://applyvipconseil.com/universities/lyon-3"
                      },
                      "headline": "{{ __('university/lyon-3.schema_headline') }}",
                      "image": "https://applyvipconseil.com/assets/img/universities/Lyon3/lyon_3.webp",
                      "author": {
                        "@type": "Organization",
                        "name": "{{ __('university/lyon-3.schema_author') }}",
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
                      "datePublished": "2023-11-06",
                      "dateModified": "2024-01-10"
                    }
                @endverbatim
                </script>
@endpush