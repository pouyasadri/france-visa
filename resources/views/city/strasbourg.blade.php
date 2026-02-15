@extends('layouts.city')

@php
    $currentLocale = app()->getLocale();
    $cityName = 'strasbourg';
@endphp

@section('title', __('city/strasbourg.title'))
@section('keywords', __('city/strasbourg.keywords'))
@section('description', __('city/strasbourg.description'))

@section('header_class', 'bg-strasbourg-city')
@section('breadcrumb_current', __('city/strasbourg.breadcrumb_strasbourg'))
@section('page_title_heading', __('city/strasbourg.main_heading'))

@section('toc_title', __('city/strasbourg.table_of_contents'))
@section('contact_title', __('city/strasbourg.contact_us'))
@section('consultation_text', __('city/strasbourg.consultation_request'))
@section('ask_question_title', __('city/strasbourg.ask_question'))

@section('useful_links')
    <div class="sidebar-widget p-4 rounded-5 shadow-sm bg-white mb-4 border-0">
        <h4 class="widget-title h5 fw-bold mb-3 border-bottom pb-2">{{ __('city/strasbourg.useful_links') }}</h4>
        <ul class="list-unstyled mb-0">
            <li>
                <a href="https://en.wikipedia.org/wiki/Strasbourg" target="_blank"
                    class="d-flex align-items-center text-decoration-none">
                    <i class="bx bxl-internet-explorer me-2 fs-5 text-primary"></i>
                    <span>{{ __('city/strasbourg.strasbourg_wikipedia') }}</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('city_content')
    <section class="mb-5">
        <h2 class="h3 fw-bold mb-4">{{ __('city/strasbourg.intro_heading') }}</h2>
        <div class="single-services-imgs mb-4">
            <img src="{{ asset('assets/img/cities/Strasbourg/strasbourg1.webp') }}"
                alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}" class="img-fluid rounded-4 shadow-sm w-100">
        </div>
        <p class="lead">{{ __('city/strasbourg.intro_paragraph') }}</p>
    </section>

    <div class="rounded-4 overflow-hidden shadow-sm mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d168925.80341772654!2d7.7507127!3d48.5824554!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8495e18b571%3A0x408ab2ae4aa9a30!2sStrasbourg!5e0!3m2!1sfr!2sfr!4v1691147551062!5m2!1sfr!2sfr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('city/strasbourg.study_heading') }}</h3>
        <p>{{ __('city/strasbourg.study_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.universities_heading') }}</h3>
        <p>{{ __('city/strasbourg.universities_paragraph') }}</p>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item bg-transparent border-0 ps-0">
                <i class="bx bx-right-arrow-alt text-primary me-2"></i>
                <a href="{{ url($currentLocale . '/universities/strasbourg') }}"
                    target="_blank">{{ __('city/strasbourg.university_strasbourg') }}</a>
            </li>
        </ul>
        <p>{{ __('city/strasbourg.student_life') }}</p>

        <h4 class="h5 fw-bold mt-4 mb-3">{{ __('city/strasbourg.programs_heading') }}</h4>
        <ul class="list-group list-group-flush mb-4">
            @for ($i = 1; $i <= 9; $i++)
                <li class="list-group-item bg-transparent border-0 ps-0">
                    <i class="bx bx-check-circle text-primary me-2"></i>
                    {{ __('city/strasbourg.program_' . $i) }}
                </li>
            @endfor
        </ul>
    </section>

    <div class="mb-5">
        <img src="{{ asset('assets/img/cities/Strasbourg/strasbourg.webp') }}"
            alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}" class="img-fluid rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('city/strasbourg.living_costs_heading') }}</h3>
        <p>{{ __('city/strasbourg.living_costs_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.housing_heading') }}</h3>
        <p>{{ __('city/strasbourg.housing_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.daily_life_heading') }}</h3>
        <p>{{ __('city/strasbourg.daily_life_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.transportation_heading') }}</h3>
        <p>{{ __('city/strasbourg.transportation_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.tourism_heading') }}</h3>
        <p>{{ __('city/strasbourg.tourism_paragraph') }}</p>
        <p>{{ __('city/strasbourg.tourism_paragraph_2') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.christmas_heading') }}</h3>
        <p>{{ __('city/strasbourg.christmas_paragraph') }}</p>

        <p>{{ __('city/strasbourg.christmas_food_intro') }}</p>
        <ul class="list-group list-group-flush mb-4">
            @for ($i = 1; $i <= 8; $i++)
                <li class="list-group-item bg-transparent border-0 ps-0">
                    <i class="bx bx-dish text-primary me-2"></i>
                    {{ __('city/strasbourg.christmas_food_' . $i) }}
                </li>
            @endfor
        </ul>
        <p>{{ __('city/strasbourg.christmas_food_conclusion') }}</p>
    </section>

    <div class="mb-5">
        <img src="{{ asset('assets/img/cities/Strasbourg/strasbourg3.webp') }}"
            alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}" class="img-fluid rounded-4 shadow-sm w-100">
    </div>

    <section class="mb-5">
        <h3 class="h4 fw-bold mb-3">{{ __('city/strasbourg.nightlife_heading') }}</h3>
        <p>{{ __('city/strasbourg.nightlife_paragraph') }}</p>
        <ul class="list-group list-group-flush mb-4">
            @for ($i = 1; $i <= 3; $i++)
                <li class="list-group-item bg-transparent border-0 ps-0">
                    <i class="bx bx-drink text-primary me-2"></i>
                    {{ __('city/strasbourg.nightlife_activity_' . $i) }}
                </li>
            @endfor
        </ul>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.storks_heading') }}</h3>
        <p>{{ __('city/strasbourg.storks_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.industries_heading') }}</h3>
        <ul class="list-group list-group-flush mb-4">
            @for ($i = 1; $i <= 4; $i++)
                <li class="list-group-item bg-transparent border-0 ps-0">
                    <i class="bx bx-buildings text-primary me-2"></i>
                    {{ __('city/strasbourg.industry_' . $i) }}
                </li>
            @endfor
        </ul>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.souvenirs_heading') }}</h3>
        <p>{{ __('city/strasbourg.souvenirs_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.economy_heading') }}</h3>
        <p>{{ __('city/strasbourg.economy_paragraph') }}</p>
        <p>{{ __('city/strasbourg.economy_activities') }}</p>
        <ul class="list-group list-group-flush mb-4">
            @for ($i = 1; $i <= 5; $i++)
                <li class="list-group-item bg-transparent border-0 ps-0">
                    <i class="bx bx-line-chart text-primary me-2"></i>
                    {{ __('city/strasbourg.economy_activity_' . $i) }}
                </li>
            @endfor
        </ul>
        <p>{{ __('city/strasbourg.economy_conclusion') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.jobs_heading') }}</h3>
        <p>{{ __('city/strasbourg.jobs_paragraph') }}</p>

        <h3 class="h4 fw-bold mt-4 mb-3">{{ __('city/strasbourg.conclusion_heading') }}</h3>
        <p>{{ __('city/strasbourg.conclusion_paragraph') }}</p>
    </section>

    <div class="car-service-list-wrap p-4 rounded-5 bg-light border-0 mt-5">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <i class='bx bxs-city text-primary' style="font-size: 5rem;"></i>
                <h4 class="h5 fw-bold mt-3">{{ __('city/strasbourg.breadcrumb_strasbourg') }}</h4>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start small text-muted">
                            <i class='bx bx-check-circle text-primary me-2 mt-1'></i>
                            <span>{{ __('city/strasbourg.intro_heading') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start small text-muted">
                            <i class='bx bx-check-circle text-primary me-2 mt-1'></i>
                            <span>{{ __('city/strasbourg.study_heading') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start small text-muted">
                            <i class='bx bx-check-circle text-primary me-2 mt-1'></i>
                            <span>{{ __('city/strasbourg.living_costs_heading') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start small text-muted">
                            <i class='bx bx-check-circle text-primary me-2 mt-1'></i>
                            <span>{{ __('city/strasbourg.tourism_heading') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('json')
    @php
        $pageUrl = url($currentLocale.'/cities/strasbourg');
        $cityId = $pageUrl.'#city';

        $webPage = new \App\Services\StructuredData\WebPageSchema(
            $pageUrl,
            __('city/strasbourg.main_heading'),
            __('city/strasbourg.description'),
            $currentLocale,
            $cityId,
            asset('assets/img/cities/Strasbourg/strasbourg3.webp')
        );

        $city = new \App\Services\StructuredData\CityGuideSchema(
            $cityId,
            __('city/strasbourg.breadcrumb_strasbourg'),
            __('city/strasbourg.intro_paragraph'),
            asset('assets/img/cities/Strasbourg/strasbourg3.webp'),
            ['https://en.wikipedia.org/wiki/Strasbourg'],
            ['lat' => 48.5846, 'lng' => 7.7507]
        );

        $breadcrumb = \App\Services\StructuredData\BreadcrumbSchema::fromArray([
            ['name' => __('layout.home') ?? 'Home', 'url' => url($currentLocale.'/')],
            ['name' => __('cities.breadcrumb_cities'), 'url' => url($currentLocale.'/cities')],
            ['name' => __('city/strasbourg.breadcrumb_strasbourg'), 'url' => $pageUrl],
        ]);
    @endphp

    <x-seo.structured-data :schema="$webPage" />
    <x-seo.structured-data :schema="$city" />
    <x-seo.structured-data :schema="$breadcrumb" />
@endpush
