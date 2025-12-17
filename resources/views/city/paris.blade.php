@extends('layout')
@section('title', __('city/paris.title'))
@section('keywords', __('city/paris.keywords'))
@section('description', __('city/paris.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('city/paris.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('city/paris.breadcrumb_home') }}
                        </a>
                    </li>
                    <li><a href="{{url(app()->getLocale().'/cities')}}">
                            {{ __('city/paris.breadcrumb_cities') }}

                        </a></li>
                    <li>{{ __('city/paris.breadcrumb_paris') }}</li>
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
                            <h4 class="service-details-title">{{ __('city/paris.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/paris.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale().'/consult')}}">
                                        {{ __('city/paris.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('city/paris.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://en.wikipedia.org/wiki/Paris" target="_blank">
                                        {{ __('city/paris.paris_wikipedia') }}
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">


                        <h2>{{ __('city/paris.intro_heading') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/cities/Paris/paris-slider.webp")}}"
                                 alt="{{ __('city/paris.breadcrumb_paris') }}">
                        </div>
                        <p class="mt-30">
                            {{ __('city/paris.intro_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('city/paris.intro_paragraph_2') }}
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d168015.65294043656!2d2.3236891!3d48.8535464!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1691021825212!5m2!1sfr!2sfr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('city/paris.study_heading') }}</h3>
                        <p>{{ __('city/paris.study_paragraph_1') }}</p>
                        <p class="mb-30">
                            {{ __('city/paris.study_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/paris.universities_heading') }}
                        </h3>
                        <p class="mb-30">{{ __('city/paris.universities_paragraph_1') }}
                        <ul style="list-style: inside">
                            <li><a href={{url(app()->getLocale().'/universities/sorbonne-paris-nord')}}
                                   target="_blank">{{ __('city/paris.university_paris_north') }}</a></li>
                            <li><a href={{url(app()->getLocale().'universities/paris-7')}} target="_blank">
                                    {{ __('city/paris.university_paris_seven') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/paris-4-sorbonne")}} target="_blank">
                                    {{ __('city/paris.university_paris_four') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/paris-3")}} target="_blank">
                                    {{ __('city/paris.university_paris_three') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/paris-2")}} target="_blank">
                                    {{ __('city/paris.university_paris_two') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/paris-2")}} target="_blank">
                                    {{ __('city/paris.university_paris_two') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/pantheon-sorbonne")}} target="_blank">
                                    {{ __('city/paris.university_pantheon_sorbonne') }}</a></li>
                        </ul>
                        {{ __('city/paris.universities_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/paris.climate_heading') }}</h3>
                        <p class="mb-30">{{ __('city/paris.climate_paragraph') }}</p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Paris/paris4.webp")}}"
                                 alt="{{ __('city/paris.breadcrumb_paris') }}">
                        </div>
                        <h3 class="mt-20">{{ __('city/paris.living_costs_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/paris.living_costs_paragraph') }}
                        </p>

                        <h3 class="mt-20">
                            {{ __('city/paris.job_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/paris.job_paragraph_1') }}

                            {{ __('city/paris.job_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/paris.souvenirs_heading') }}
                        </h3>
                        <p class="mb-30">
                            <b>{{ __('city/paris.souvenirs_intro') }}</b>
                        <ul>
                            <li>{{ __('city/paris.souvenir_1') }}</li>
                            <li>{{ __('city/paris.souvenir_2') }}</li>
                            <li>{{ __('city/paris.souvenir_3') }}</li>
                            <li>{{ __('city/paris.souvenir_4') }}</li>
                            <li>{{ __('city/paris.souvenir_5') }}</li>
                            <li>{{ __('city/paris.souvenir_6') }}</li>
                            <li>{{ __('city/paris.souvenir_7') }}</li>
                            <li>{{ __('city/paris.souvenir_8') }}</li>
                        </ul>
                        </p>
                        <h3>
                            {{ __('city/paris.airports_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/paris.airports_paragraph_1') }}

                            {{ __('city/paris.airports_paragraph_2') }}
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Paris/paris6.webp")}}"
                                 alt="{{ __('city/paris.breadcrumb_paris') }}">
                        </div>
                        <h3 class="mt-20">
                            {{ __('city/paris.trains_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/paris.trains_paragraph_1') }}

                            {{ __('city/paris.trains_paragraph_2') }}

                            {{ __('city/paris.trains_paragraph_3') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/paris.investment_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/paris.investment_paragraph_1') }}

                            {{ __('city/paris.investment_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/paris.welfare_heading') }}
                        </h3>
                        <p class="mb-30">
                        {{ __('city/paris.welfare_paragraph_1') }}

                        {{ __('city/paris.welfare_paragraph_2') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/paris.welfare_item_1') }}</li>
                            <li>{{ __('city/paris.welfare_item_2') }}</li>
                            <li>{{ __('city/paris.welfare_item_3') }}</li>
                            <li>{{ __('city/paris.welfare_item_4') }}</li>
                        </ul>
                        {{ __('city/paris.welfare_paragraph_3') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/paris.benefit_1') }}</li>
                            <li>{{ __('city/paris.benefit_2') }}</li>
                            <li>{{ __('city/paris.benefit_3') }}</li>
                            <li>{{ __('city/paris.benefit_4') }}</li>
                            <li>{{ __('city/paris.benefit_5') }}</li>
                            <li>{{ __('city/paris.benefit_6') }}</li>
                            <li>{{ __('city/paris.benefit_7') }}</li>
                        </ul>
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/paris.conclusion_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/paris.conclusion_paragraph') }}
                        </p>
                        <div class="ask-question">
                            <h3>{{ __('city/paris.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('city/paris.form_error_name') }}"
                                                   placeholder="{{ __('city/paris.form_name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('city/paris.form_error_email') }}"
                                                   placeholder="{{ __('city/paris.form_email') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('city/paris.form_error_phone') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('city/paris.form_phone') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('city/paris.form_error_subject') }}"
                                                   placeholder="{{ __('city/paris.form_subject') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('city/paris.form_error_message') }}"
                                                  placeholder="{{ __('city/paris.form_message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('city/paris.form_send') }}
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
    <script type="application/ld+json">
        @verbatim
            {
              "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://applyvipconseil.com/{{ app()->getLocale() }}/cities/paris"
          },
          "headline": "{{ __('city/paris.intro_heading') }}",
          "image": "https://applyvipconseil.com/assets/img/cities/Paris/paris6.webp",
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
            @endverbatim
        </script>
    @endpush
