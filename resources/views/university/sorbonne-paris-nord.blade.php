@extends('layout')
@section('title', __('university/sorbonne-paris-nord.title'))
@section('keywords', __('university/sorbonne-paris-nord.keywords'))
@section('description', __('university/sorbonne-paris-nord.description'))
@section('content')

    <div class="page-title-area bg-paris-nord">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/sorbonne-paris-nord.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/sorbonne-paris-nord.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/sorbonne-paris-nord.breadcrumb_universities') }}</a></li>
                    <li>{{ __('university/sorbonne-paris-nord.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/sorbonne-paris-nord.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/sorbonne-paris-nord.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/sorbonne-paris-nord.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/sorbonne-paris-nord.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.univ-spn.fr/" target="_blank">
                                        {{ __('university/sorbonne-paris-nord.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%BE%D8%A7%D8%B1%DB%8C%D8%B3_%DB%B1%DB%B3"
                                       target="_blank">
                                        {{ __('university/sorbonne-paris-nord.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/sorbonne-paris-nord.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">

                        <h2>{{ __('university/sorbonne-paris-nord.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Paris_Nord/paris_nord_university/webp")}}"
                                 alt="{{ __('university/sorbonne-paris-nord.main_heading') }}">
                        </div>
                        <h3>{{ __('university/sorbonne-paris-nord.history_title') }}</h3>
                        <p>{{ __('university/sorbonne-paris-nord.history_content') }}</p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d41918.64710230801!2d2.3334787!3d48.9550959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66922af4c2e23%3A0xfe3113a781a13fca!2sUniversit%C3%A9%20Sorbonne%20Paris%20Nord!5e0!3m2!1sfr!2sfr!4v1690991649424!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/sorbonne-paris-nord.location_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.location_content') }}</p>
                        <p><strong>{{ __('university/sorbonne-paris-nord.campus_title') }}</strong>
                        <ol>
                            @foreach(__('university/sorbonne-paris-nord.campuses') as $campus)
                                <li>
                                    {{ $campus }}
                                </li>
                            @endforeach
                        </ol>
                        </p>
                        <h3>{{ __('university/sorbonne-paris-nord.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.ranking_content') }}</p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris_Nord/paris_nord_university_1.webp")}}"
                                 alt="{{ __('university/sorbonne-paris-nord.main_heading') }}">
                        </div>
                        <h3>{{ __('university/sorbonne-paris-nord.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.facilities_content') }}</p>
                        <h3>{{ __('university/sorbonne-paris-nord.programs_title') }}</h3>
                        <p class="mb-30">
                            <strong>{{ __('university/sorbonne-paris-nord.programs_intro') }}</strong>
                        <ul style="list-style: inside">
                            @foreach(__('university/sorbonne-paris-nord.programs') as $program)
                                <li>
                                    {{ $program }}
                                </li>
                            @endforeach
                        </ul>
                        </p>
                        <h3>{{ __('university/sorbonne-paris-nord.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.iranian_students_content') }}</p>
                        <h3>{{ __('university/sorbonne-paris-nord.tuition_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.tuition_content') }}</p>
                        <h3>{{ __('university/sorbonne-paris-nord.career_title') }}</h3>
                        <p>{{ __('university/sorbonne-paris-nord.career_content') }}</p>
                        <h3>{{ __('university/sorbonne-paris-nord.environment_title') }}</h3>
                        <p>{{ __('university/sorbonne-paris-nord.environment_content') }}</p>
                        <h3>{{ __('university/sorbonne-paris-nord.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/sorbonne-paris-nord.conclusion_content') }}</p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Paris_Nord/paris_nord_logo.webp")}}"
                                             alt="{{ __('university/sorbonne-paris-nord.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/sorbonne-paris-nord.features') as $index => $feature)
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    {{ $index + 1 }}. {{ $feature }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ask-question">
                            <h3>{{ __('university/sorbonne-paris-nord.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/sorbonne-paris-nord.name_error') }}"
                                                   placeholder="{{ __('university/sorbonne-paris-nord.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/sorbonne-paris-nord.email_error') }}"
                                                   placeholder="{{ __('university/sorbonne-paris-nord.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/sorbonne-paris-nord.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/sorbonne-paris-nord.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required
                                                   data-error="{{ __('university/sorbonne-paris-nord.subject_error') }}"
                                                   placeholder="{{ __('university/sorbonne-paris-nord.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required
                                                  data-error="{{ __('university/sorbonne-paris-nord.message_error') }}"
                                                  placeholder="{{ __('university/sorbonne-paris-nord.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/sorbonne-paris-nord.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/sorbonne-paris-nord"
              },
              "headline": "{{ __('university/sorbonne-paris-nord.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Paris_Nord/paris_nord_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/sorbonne-paris-nord.schema_author') }}",
    "url": "https://applyvipconseil.com/"
  },
  "publisher": {
    "@type": "Organization",
    "name": "",
    "logo": {
      "@type": "ImageObject",
      "url": ""
    }
  },
  "datePublished": "2024-01-01",
  "dateModified": "2025-10-15"
}
        @endverbatim
    </script>
@endpush
