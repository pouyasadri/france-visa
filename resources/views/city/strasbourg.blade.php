@extends('layout')
@section('title', __('city/strasbourg.title'))
@section('keywords', __('city/strasbourg.keywords'))
@section('description', __('city/strasbourg.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('city/strasbourg.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('city/strasbourg.breadcrumb_home') }}
                        </a>
                    </li>
                    <li><a href="{{url(app()->getLocale().'/cities')}}">
                            {{ __('city/strasbourg.breadcrumb_cities') }}
                        </a></li>
                    <li>{{ __('city/strasbourg.breadcrumb_strasbourg') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- End Service Details Area -->
    <section class="service-details-area ptb-100">
        <div class="container" id="mydiv">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-sidebar-area">
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/strasbourg.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/strasbourg.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale().'/consult')}}">
                                        {{ __('city/strasbourg.consultation_request') }}
                                        <i class='bx bx-time'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@applyvipconseil.com">
                                        info@applyvipconseil.com
                                        <i class='bx bx-envelope'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/strasbourg.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://en.wikipedia.org/wiki/Strasbourg" target="_blank">
                                        {{ __('city/strasbourg.strasbourg_wikipedia') }}
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">

                        <h2>{{ __('city/strasbourg.intro_heading') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/cities/Strasbourg/strasbourg.webp")}}"
                                 alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}">
                        </div>
                        <p class="mb-30">
                            {{ __('city/strasbourg.intro_paragraph') }}
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84484.13406168342!2d7.762079299999999!3d48.5690744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8495e18b2c1%3A0x971a483118e7241f!2sStrasbourg!5e0!3m2!1sfr!2sfr!4v1691022735708!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('city/strasbourg.language_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.language_paragraph') }}
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Strasbourg/strasbourg1.webp")}}"
                                 alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}">
                        </div>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.study_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.study_paragraph') }}
                        </p>

                        <h3>
                            {{ __('city/strasbourg.living_costs_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.living_costs_paragraph') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/strasbourg.climate_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.climate_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.transportation_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.transportation_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.tourism_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.tourism_paragraph') }}
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Strasbourg/strasbourg3.webp")}}"
                                 alt="{{ __('city/strasbourg.breadcrumb_strasbourg') }}">
                        </div>

                        <h3 class="mt-20">
                            {{ __('city/strasbourg.christmas_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.christmas_paragraph') }}

                            {{ __('city/strasbourg.christmas_activities') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/strasbourg.christmas_activity_1') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_2') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_3') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_4') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_5') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_6') }}</li>
                            <li>{{ __('city/strasbourg.christmas_activity_7') }}</li>
                        </ul>
                        {{ __('city/strasbourg.christmas_food_intro') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/strasbourg.christmas_food_1') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_2') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_3') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_4') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_5') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_6') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_7') }}</li>
                            <li>{{ __('city/strasbourg.christmas_food_8') }}</li>
                        </ul>
                        {{ __('city/strasbourg.christmas_food_conclusion') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/strasbourg.nightlife_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.nightlife_paragraph') }}

                        <ul style="list-style: inside">
                            <li>{{ __('city/strasbourg.nightlife_activity_1') }}</li>
                            <li>{{ __('city/strasbourg.nightlife_activity_2') }}</li>
                            <li>{{ __('city/strasbourg.nightlife_activity_3') }}</li>
                        </ul>
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.storks_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.storks_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.industries_heading') }}
                        </h3>
                        <p class="mb-30">
                        <ul style="list-style: inside">
                            <li>{{ __('city/strasbourg.industry_1') }}</li>
                            <li>{{ __('city/strasbourg.industry_2') }}</li>
                            <li>{{ __('city/strasbourg.industry_3') }}</li>
                            <li>{{ __('city/strasbourg.industry_4') }}</li>
                        </ul>
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.souvenirs_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.souvenirs_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.economy_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.economy_paragraph') }}

                            {{ __('city/strasbourg.economy_activities') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/strasbourg.economy_activity_1') }}</li>
                            <li>{{ __('city/strasbourg.economy_activity_2') }}</li>
                            <li>{{ __('city/strasbourg.economy_activity_3') }}</li>
                            <li>{{ __('city/strasbourg.economy_activity_4') }}</li>
                            <li>{{ __('city/strasbourg.economy_activity_5') }}</li>
                        </ul>
                        {{ __('city/strasbourg.economy_conclusion') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.jobs_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.jobs_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/strasbourg.conclusion_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/strasbourg.conclusion_paragraph') }}
                        </p>
                        <div class="ask-question">
                            <h3>{{ __('city/strasbourg.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('city/strasbourg.form_error_name') }}"
                                                   placeholder="{{ __('city/strasbourg.form_name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('city/strasbourg.form_error_email') }}"
                                                   placeholder="{{ __('city/strasbourg.form_email') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('city/strasbourg.form_error_phone') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('city/strasbourg.form_phone') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('city/strasbourg.form_error_subject') }}"
                                                   placeholder="{{ __('city/strasbourg.form_subject') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('city/strasbourg.form_error_message') }}"
                                                  placeholder="{{ __('city/strasbourg.form_message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('city/strasbourg.form_send') }}
													<i class="flaticon-left-arrow"></i>
												</span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->
    <script src="{{asset("assets/js/createScrollLinks.js")}}"></script>

@endsection
@push("json")
    @verbatim
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://applyvipconseil.com/{{ app()->getLocale() }}/cities/strasbourg"
              },
              "headline": "{{ __('city/strasbourg.intro_heading') }}",
              "image": "https://applyvipconseil.com/assets/img/cities/Strasbourg/strasbourg3.webp",
              "author": {
                "@type": "Organization",
                "name": "{{ __('layout.site_title') }}",
                "url": "https://applyvipconseil.com/"
              },
              "publisher": {
                "@type": "Organization",
                "name": "{{ __('layout.site_title') }}",
                "logo": {
                  "@type": "ImageObject",
                  "url": ""
                }
              },
              "datePublished": "2023-11-29",
              "dateModified": "2024-03-12"
            }
        </script>
    @endverbatim
@endpush
