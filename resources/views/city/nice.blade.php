@extends('layout')
@section('title', __('city/nice.title'))
@section('keywords', __('city/nice.keywords'))
@section('description', __('city/nice.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('city/nice.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('city/nice.breadcrumb_home') }}
                        </a>
                    </li>
                    <li><a href="{{url(app()->getLocale().'/cities')}}">
                            {{ __('city/nice.breadcrumb_cities') }}

                        </a></li>
                    <li>{{ __('city/nice.breadcrumb_nice') }}</li>
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
                            <h4 class="service-details-title">{{ __('city/nice.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/nice.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale().'/consult')}}">
                                        {{ __('city/nice.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('city/nice.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://en.wikipedia.org/wiki/Nice" target="_blank">
                                        {{ __('city/nice.nice_wikipedia') }}
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">


                        <h2>{{ __('city/nice.intro_heading') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/cities/Nice/nice.webp")}}"
                                 alt="{{ __('city/nice.breadcrumb_nice') }}">
                        </div>
                        <p class="mb-30">
                            {{ __('city/nice.intro_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('city/nice.intro_paragraph_2') }}
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92308.71776030952!2d7.2576159!3d43.6970927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0106a852d31%3A0x40819a5fd979a70!2sNice!5e0!3m2!1sfr!2sfr!4v1691064910510!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            {{ __('city/nice.intro_paragraph_3') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/nice.living_heading') }}</h3>
                        <p class="mb-30">{{ __('city/nice.living_paragraph') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/nice.living_activity_1') }}</li>
                            <li>{{ __('city/nice.living_activity_2') }}</li>
                            <li>{{ __('city/nice.living_activity_3') }}</li>
                            <li>{{ __('city/nice.living_activity_4') }}</li>
                        </ul>
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/nice.study_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/nice.study_paragraph') }}
                        </p>
                        <h3 class="mt-20">{{ __('city/nice.climate_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/nice.climate_paragraph') }}
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Nice/nice1.webp")}}"
                                 alt="{{ __('city/nice.breadcrumb_nice') }}">
                        </div>
                        <h3 class="mt-20">{{ __('city/nice.language_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/nice.language_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/nice.transportation_heading') }}
                        </h3>
                        <p class="mb-30">{{ __('city/nice.transportation_paragraph') }}
                        </p>
                        <h3 class="mt-30">
                            {{ __('city/nice.living_costs_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/nice.living_costs_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/nice.job_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/nice.job_paragraph') }}
                        </p>
                        <h3>
                            {{ __('city/nice.conclusion_heading') }}
                        </h3>
                        <p class="mb-30">{{ __('city/nice.conclusion_paragraph') }}
                        </p>
                        <div class="ask-question">
                            <h3>{{ __('city/nice.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('city/nice.form_error_name') }}"
                                                   placeholder="{{ __('city/nice.form_name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('city/nice.form_error_email') }}"
                                                   placeholder="{{ __('city/nice.form_email') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('city/nice.form_error_phone') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('city/nice.form_phone') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('city/nice.form_error_subject') }}"
                                                   placeholder="{{ __('city/nice.form_subject') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('city/nice.form_error_message') }}"
                                                  placeholder="{{ __('city/nice.form_message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('city/nice.form_send') }}
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
    "@id": "https://applyvipconseil.com/{{ app()->getLocale() }}/cities/nice"
  },
  "headline": "{{ __('city/nice.intro_heading') }}",
  "image": "https://applyvipconseil.com/assets/img/cities/Nice/nice.webp",
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
  "datePublished": "2023-11-15",
  "dateModified": "2024-03-12"
}
        </script>
    @endverbatim
@endpush
