@extends('layouts.university')

@php
    $universityName = 'pantheon-sorbonne';
@endphp

@section('title', __('university/pantheon-sorbonne.title'))
@section('keywords', __('university/pantheon-sorbonne.keywords'))
@section('description', __('university/pantheon-sorbonne.description'))

@section('header_class', 'bg-pantheon')
@section('breadcrumb_current', __('university/pantheon-sorbonne.breadcrumb_current'))
@section('page_title_heading', __('university/pantheon-sorbonne.main_heading'))

@section('toc', true)
@section('toc_title', __('university/pantheon-sorbonne.table_of_contents'))
@section('contact_title', __('university/pantheon-sorbonne.contact_us'))
@section('consultation_text', __('university/pantheon-sorbonne.consultation_request'))
@section('ask_question_title', __('university/pantheon-sorbonne.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/pantheon-sorbonne.useful_links') }}
        </h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.pantheonsorbonne.fr/" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/pantheon-sorbonne.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%BE%D8%A7%D9%86%D8%AA%D8%A6%D9%88%D9%86-%D7%B3%D9%88%D8%B1%D8%A8%D9%86"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/pantheon-sorbonne.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/paris') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/pantheon-sorbonne.paris_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/pantheon-sorbonne.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Sorbonne/pantheon_university.webp")}}"
            alt="{{ __('university/pantheon-sorbonne.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.history_title') }}</h3>
        <p class="text-muted">{{ __('university/pantheon-sorbonne.history_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/pantheon-sorbonne.history_paragraph_2') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21003.212951968875!2d2.3073685!3d48.8505515!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x47e671dd98fffb41%3A0xfecd14d84c0a92b5!2sCampus%20des%20Cordeliers%20-%20Sorbonne%20Universit%C3%A9!5e0!3m2!1sfr!2sfr!4v1691002038922!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/pantheon-sorbonne.ranking_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.facilities_title') }}</h3>
        <p class="text-muted">{{ __('university/pantheon-sorbonne.facilities_paragraph_1') }}</p>
        <p class="text-muted">{{ __('university/pantheon-sorbonne.facilities_paragraph_2') }}</p>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Sorbonne/pantheon_university_1.webp")}}"
            alt="{{ __('university/pantheon-sorbonne.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.iranian_students_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.iranian_students_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.multicultural_environment_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.tuition_fees_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.tuition_fees_content') }}</p>

        <div class="p-4 rounded-4 bg-light mb-4 border-start border-primary border-4">
            <h5 class="fw-bold mb-3">{{ __('university/pantheon-sorbonne.university_achievements_title') }}</h5>
            <p class="small text-muted mb-3">{{ __('university/pantheon-sorbonne.university_achievements_content') }}</p>
            <div class="row g-2">
                @foreach(__('university/pantheon-sorbonne.achievements_list') as $achievement)
                    <div class="col-md-6">
                        <div class="d-flex align-items-center small">
                            <i class="bx bx-check text-primary me-2"></i>
                            <span>{{ $achievement }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.career_opportunities_paragraph_1') }}</p>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.career_opportunities_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.admission_requirements_title') }}</h3>
        <div class="p-4 rounded-4 bg-primary-subtle border-0 mb-4">
            <p class="fw-bold text-primary-emphasis mb-3">
                {{ __('university/pantheon-sorbonne.admission_requirements_content') }}
            </p>
            <ul class="list-unstyled mb-0">
                @foreach(__('university/pantheon-sorbonne.admission_requirements_list') as $requirement)
                    <li class="mb-2 d-flex align-items-center">
                        <i class="bx bx-check-double text-primary me-2"></i>
                        <span class="small">{{ $requirement }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.language_of_instruction_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/pantheon-sorbonne.language_of_instruction_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/pantheon-sorbonne.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/pantheon-sorbonne.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Sorbonne/pantheon_logo.webp")}}"
                    alt="{{ __('university/pantheon-sorbonne.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/pantheon-sorbonne.features') as $feature)
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
                            "@id": "https://applyvipconseil.com/universities/pantheon-sorbonne"
                          },
                          "headline": "{{ __('university/pantheon-sorbonne.schema_headline') }}",
                          "image": "https://applyvipconseil.com/assets/img/universities/Sorbonne/pantheon_logo.webp",
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
                          "datePublished": "2023-11-09",
                          "dateModified": "2024-01-12"
                        }
                    @endverbatim
                    </script>
@endpush