@extends('layouts.university')

@php
    $universityName = 'paris-4-sorbonne';
@endphp

@section('title', __('university/paris-4-sorbonne.title'))
@section('keywords', __('university/paris-4-sorbonne.keywords'))
@section('description', __('university/paris-4-sorbonne.description'))

@section('header_class', 'bg-paris-4')
@section('breadcrumb_current', __('university/paris-4-sorbonne.breadcrumb_current'))
@section('page_title_heading', __('university/paris-4-sorbonne.main_heading'))

@section('toc', true)
@section('toc_title', __('university/paris-4-sorbonne.table_of_contents'))
@section('contact_title', __('university/paris-4-sorbonne.contact_us'))
@section('consultation_text', __('university/paris-4-sorbonne.consultation_request'))
@section('ask_question_title', __('university/paris-4-sorbonne.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/paris-4-sorbonne.useful_links') }}
        </h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://lettres.sorbonne-universite.fr/" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/paris-4-sorbonne.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%B3%D9%88%D8%B1%D8%A8%D9%86"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/paris-4-sorbonne.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/paris') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/paris-4-sorbonne.paris_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/paris-4-sorbonne.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Paris4/paris_4_university.webp")}}"
            alt="{{ __('university/paris-4-sorbonne.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.foundation_title') }}</h3>
        <p class="text-muted lead">{{ __('university/paris-4-sorbonne.foundation_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.location_title') }}</h3>
        <div class="map-container mb-4 rounded-4 overflow-hidden shadow-sm">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d84016.36851838519!2d2.2114415!3d48.8484556!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x47e671dd72611d13%3A0x441afe419f2bc6f1!2sUniversit%C3%A9%20Paris-Sorbonne!5e0!3m2!1sfr!2sfr!4v1690996098876!5m2!1sfr!2sfr"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="text-muted">{{ __('university/paris-4-sorbonne.location_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/paris-4-sorbonne.ranking_content') }}</p>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Paris4/paris_4_university_1.webp")}}"
            alt="{{ __('university/paris-4-sorbonne.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.facilities_title') }}</h3>
        <p class="text-muted">{{ __('university/paris-4-sorbonne.facilities_content') }}</p>
    </section>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.iranian_students_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/paris-4-sorbonne.iranian_students_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.tuition_fees_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/paris-4-sorbonne.tuition_fees_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.language_of_instruction_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/paris-4-sorbonne.language_of_instruction_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.career_opportunities_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/paris-4-sorbonne.career_opportunities_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.multicultural_environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/paris-4-sorbonne.multicultural_environment_content') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/paris-4-sorbonne.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/paris-4-sorbonne.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-primary-subtle border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Paris4/surbon_logo.webp")}}"
                    alt="{{ __('university/paris-4-sorbonne.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/paris-4-sorbonne.features') as $feature)
                        <div class="col-md-6">
                            <div class="d-flex align-items-start small text-primary-emphasis">
                                <i class='bx bx-check-double me-2 mt-1'></i>
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
    @php
        $currentLocale = app()->getLocale();
        $pageUrl = url($currentLocale.'/universities/paris-4-sorbonne');
        $universityId = $pageUrl.'#university';
        $officialUrl = 'https://lettres.sorbonne-universite.fr/';

        $webPage = new \App\Services\StructuredData\WebPageSchema(
            $pageUrl,
            __('university/paris-4-sorbonne.main_heading'),
            __('university/paris-4-sorbonne.description'),
            $currentLocale,
            $universityId,
            asset('assets/img/universities/Paris4/surbon_logo.webp')
        );

        $university = new \App\Services\StructuredData\UniversitySchema(
            $universityId,
            __('universities.paris_4_name'),
            $officialUrl,
            __('university/paris-4-sorbonne.introduction_content'),
            asset('assets/img/universities/Paris4/surbon_logo.webp'),
            [
                $officialUrl,
                'https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%B3%D9%88%D8%B1%D8%A8%D9%86',
            ]
        );

        $breadcrumb = \App\Services\StructuredData\BreadcrumbSchema::fromArray([
            ['name' => __('layout.home') ?? 'Home', 'url' => url($currentLocale.'/')],
            ['name' => __('universities.breadcrumb_universities'), 'url' => url($currentLocale.'/universities')],
            ['name' => __('university/paris-4-sorbonne.breadcrumb_current'), 'url' => $pageUrl],
        ]);
    @endphp

    <x-seo.structured-data :schema="$webPage" />
    <x-seo.structured-data :schema="$university" />
    <x-seo.structured-data :schema="$breadcrumb" />
@endpush
