@extends('layouts.university')

@php
    $universityName = 'toulouse';
@endphp

@section('title', __('university/toulouse.title'))
@section('keywords', __('university/toulouse.keywords'))
@section('description', __('university/toulouse.description'))

@section('header_class', 'bg-toulouse')
@section('breadcrumb_current', __('university/toulouse.breadcrumb_current'))
@section('page_title_heading', __('university/toulouse.main_heading'))

@section('toc', true)
@section('toc_title', __('university/toulouse.table_of_contents'))
@section('contact_title', __('university/toulouse.contact_us'))
@section('consultation_text', __('university/toulouse.consultation_request'))
@section('ask_question_title', __('university/toulouse.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('university/toulouse.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li class="mb-2">
                <a href="https://www.ut-capitole.fr/" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-globe me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/toulouse.official_website') }}</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%AA%D9%88%D9%84%D9%88%D8%B2"
                    target="_blank" class="d-flex align-items-center text-decoration-none">
                    <i class='bx bxl-wikipedia me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/toulouse.wikipedia_link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url(app()->getLocale() . '/cities/toulouse') }}" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class='bx bx-map-alt me-2 fs-5 text-primary'></i>
                    <span>{{ __('university/toulouse.university/toulouse_city_guide') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('university_content')
    <h2 class="h3 fw-bold mb-4">{{ __('university/toulouse.page_title') }}</h2>

    <div class="single-services-imgs mb-4">
        <img src="{{asset("assets/img/universities/Toulouse/toulouse_university.webp")}}"
            alt="{{ __('university/toulouse.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.history_title') }}</h3>
        <p class="text-muted lead">{{ __('university/toulouse.history_content') }}</p>
        <p class="text-muted">{{ __('university/toulouse.history_details') }}</p>
    </section>

    <div class="map-container mb-5 rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d184924.66022423725!2d1.4668153!3d43.5972167!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb61a0b5834d%3A0xedaa16152a9f760b!2sUniversit%C3%A9%20de%20university/toulouse!5e0!3m2!1sfr!2sfr!4v1691012269184!5m2!1sfr!2sfr"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.ranking_title') }}</h3>
        <p class="text-muted">{{ __('university/toulouse.ranking_content') }}</p>
    </section>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.academic_programs_title') }}</h3>
        <p class="text-muted mb-3">{{ __('university/toulouse.academic_programs_content') }}</p>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <h5 class="fw-bold text-primary mb-3">{{ __('university/toulouse.science_programs_intro') }}</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach(__('university/toulouse.science_programs') as $program)
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bx-check text-primary me-2"></i>
                                <span class="small">{{ $program }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <h5 class="fw-bold text-primary mb-3">{{ __('university/toulouse.humanities_programs_intro') }}</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach(__('university/toulouse.humanities_programs') as $program)
                            <li class="mb-2 d-flex align-items-center">
                                <i class="bx bx-check text-primary me-2"></i>
                                <span class="small">{{ $program }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="rooms-details mb-5">
        <img src="{{asset("assets/img/universities/Toulouse/toulouse_university_1.webp")}}"
            alt="{{ __('university/toulouse.main_heading') }}" class="rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-4">
        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.facilities_title') }}</h3>
        <p class="text-muted mb-2">{{ __('university/toulouse.facilities_content') }}</p>
        <p class="text-muted mb-4">{{ __('university/toulouse.facilities_research') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.iranian_students_title') }}</h3>
        <p class="text-muted mb-2">{{ __('university/toulouse.iranian_students_content') }}</p>
        <p class="text-muted mb-4">{{ __('university/toulouse.iranian_students_visa') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.career_title') }}</h3>
        <p class="text-muted mb-2">{{ __('university/toulouse.career_content') }}</p>
        <p class="text-muted mb-4">{{ __('university/toulouse.career_research') }}</p>

        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.environment_title') }}</h3>
        <p class="text-muted mb-4">{{ __('university/toulouse.environment_content') }}</p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-primary-subtle border-0 h-100">
                    <h5 class="fw-bold text-primary-emphasis mb-3">{{ __('university/toulouse.achievements_title') }}</h5>
                    <p class="small text-muted mb-0">{{ __('university/toulouse.achievements_content') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-light border-0 h-100">
                    <h5 class="fw-bold mb-3">{{ __('university/toulouse.alumni_title') }}</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach(__('university/toulouse.alumni') as $alumnus)
                            <li class="mb-1 d-flex align-items-center small">
                                <i class="bx bx-user-circle text-primary me-2"></i>
                                <span>{{ $alumnus }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <h3 class="h4 fw-bold mb-3">{{ __('university/toulouse.conclusion_title') }}</h3>
        <p class="text-muted mb-5">{{ __('university/toulouse.conclusion_content') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <img src="{{asset("assets/img/universities/Toulouse/toulouse_logo.webp")}}"
                    alt="{{ __('university/toulouse.main_heading') }}" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="row g-2">
                    @foreach(__('university/toulouse.features') as $feature)
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
    @php
        $currentLocale = app()->getLocale();
        $pageUrl = url($currentLocale.'/universities/toulouse');
        $universityId = $pageUrl.'#university';
        $officialUrl = 'https://www.ut-capitole.fr/';

        $webPage = new \App\Services\StructuredData\WebPageSchema(
            $pageUrl,
            __('university/toulouse.main_heading'),
            __('university/toulouse.description'),
            $currentLocale,
            $universityId,
            asset('assets/img/universities/Toulouse/toulouse_logo.webp')
        );

        $university = new \App\Services\StructuredData\UniversitySchema(
            $universityId,
            __('universities.toulouse_name'),
            $officialUrl,
            __('university/toulouse.introduction_content'),
            asset('assets/img/universities/Toulouse/toulouse_logo.webp'),
            [
                $officialUrl,
                'https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%AA%D9%88%D9%84%D9%88%D8%B2',
            ]
        );

        $breadcrumb = \App\Services\StructuredData\BreadcrumbSchema::fromArray([
            ['name' => __('layout.home') ?? 'Home', 'url' => url($currentLocale.'/')],
            ['name' => __('universities.breadcrumb_universities'), 'url' => url($currentLocale.'/universities')],
            ['name' => __('university/toulouse.breadcrumb_current'), 'url' => $pageUrl],
        ]);
    @endphp

    <x-seo.structured-data :schema="$webPage" />
    <x-seo.structured-data :schema="$university" />
    <x-seo.structured-data :schema="$breadcrumb" />
@endpush
