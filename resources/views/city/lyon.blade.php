@extends('layout')
@section('title', __('city/lyon.title'))
@section('keywords', __('city/lyon.keywords'))
@section('description', __('city/lyon.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('city/lyon.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('city/lyon.breadcrumb_home') }}
                        </a>
                    </li>
                    <li><a href="{{url(app()->getLocale().'/cities')}}">
                            {{ __('city/lyon.breadcrumb_cities') }}

                        </a></li>
                    <li>{{ __('city/lyon.breadcrumb_lyon') }}</li>
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
                            <h4 class="service-details-title">{{ __('city/lyon.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/lyon.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale().'/consult')}}">
                                        {{ __('city/lyon.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('city/lyon.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://en.wikipedia.org/wiki/Lyon" target="_blank">
                                        {{ __('city/lyon.lyon_wikipedia') }}
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">


                        <h2>{{ __('city/lyon.intro_heading') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/cities/Lyon/lyon1.webp")}}"
                                 alt="{{ __('city/lyon.breadcrumb_lyon') }}">
                        </div>
                        <p class="mb-30">
                            {{ __('city/lyon.intro_paragraph') }}
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d178167.27644170693!2d4.8262037!3d45.7538785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1691146753003!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">
                            {{ __('city/lyon.history_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/lyon.history_paragraph') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/lyon.climate_heading') }}</h3>
                        <p class="mb-30">{{ __('city/lyon.climate_paragraph') }}</p>
                        <h3 class="mt-20">
                            {{ __('city/lyon.study_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/lyon.study_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/lyon.universities_heading') }}
                        </h3>
                        <p class="mb-30">
                        {{ __('city/lyon.universities_intro') }}
                        <ul style="list-style: inside">
                            <li><a href={{url(app()->getLocale()."/universities/lyon-1")}}
                                   target="_blank">{{ __('city/lyon.university_lyon_1') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/lyon-2")}}
                                   target="_blank">{{ __('city/lyon.university_lyon_2') }}</a></li>
                            <li><a href={{url(app()->getLocale()."/universities/lyon-3")}}
                                   target="_blank">{{ __('city/lyon.university_lyon_3') }}</a></li>
                        </ul>
                        </p>
                        <h3 class="mt-20">{{ __('city/lyon.tourism_heading') }}</h3>
                        <p class="mb-30">
                        {{ __('city/lyon.tourism_paragraph_1') }}
                        <ul style="list-style: inside">
                            @foreach(__('city/lyon.tourism_items') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        {{ __('city/lyon.tourism_paragraph_2') }}

                        {{ __('city/lyon.tourism_paragraph_3') }}

                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Lyon/lyon.webp")}}"
                                 alt="{{ __('city/lyon.breadcrumb_lyon') }}">
                        </div>
                        <h3 class="mt-20">{{ __('city/lyon.economy_heading') }}</h3>
                        <p class="mb-30">
                        {{ __('city/lyon.economy_paragraph_1') }}

                        <ul style="list-style: inside">
                            @foreach(__('city/lyon.economy_companies') as $company)
                                <li>{{ $company }}</li>
                            @endforeach
                        </ul>
                        {{ __('city/lyon.economy_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/lyon.living_costs_heading') }}</h3>
                        <p class="mb-30">{{ __('city/lyon.living_costs_paragraph') }}</p>
                        <h3 class="mt-20">{{ __('city/lyon.job_heading') }}</h3>
                        <p>{{ __('city/lyon.job_paragraph_1') }}</p>
                        <p class="mb-30">
                            {{ __('city/lyon.job_paragraph_2') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/lyon.visa_heading') }}
                        </h3>
                        <p class="mb-30">

                            {{ __('city/lyon.visa_paragraph') }}

                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Lyon/lyon2.webp")}}"
                                 alt="{{ __('city/lyon.breadcrumb_lyon') }}">
                        </div>

                        <h3 class="mt-20">
                            {{ __('city/lyon.conclusion_heading') }}
                        </h3>
                        <p class="mb-30">{{ __('city/lyon.conclusion_paragraph') }}
                        </p>
                        <div class="ask-question">
                            <h3>{{ __('city/lyon.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('city/lyon.form_error_name') }}"
                                                   placeholder="{{ __('city/lyon.form_name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('city/lyon.form_error_email') }}"
                                                   placeholder="{{ __('city/lyon.form_email') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('city/lyon.form_error_phone') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('city/lyon.form_phone') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('city/lyon.form_error_subject') }}"
                                                   placeholder="{{ __('city/lyon.form_subject') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('city/lyon.form_error_message') }}"
                                                  placeholder="{{ __('city/lyon.form_message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('city/lyon.form_send') }}
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
    <script src="{{asset("assets/js/createScrollLinks.js")}}"></script>
    <!-- End Service Details Area -->
@endsection
@push("json")
    @verbatim
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://applyvipconseil.com/{{ app()->getLocale() }}/cities/lyon"
          },
          "headline": "{{ __('city/lyon.intro_heading') }}",
          "image": "https://applyvipconseil.com/assets/img/cities/Lyon/lyon2.webp",
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
