@extends('layout')
@section('title', __('university/paris-saclay-university.title'))
@section('keywords', __('university/paris-saclay-university.keywords'))
@section('description', __('university/paris-saclay-university.description'))
@section('content')
    <div class="page-title-area bg-paris-sud">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/paris-saclay-university.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/paris-saclay-university.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/paris-saclay-university.breadcrumb_universities') }}</a></li>
                    <li>{{ __('university/paris-saclay-university.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/paris-saclay-university.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/paris-saclay-university.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/paris-saclay-university.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/paris-saclay-university.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.universite-paris-saclay.fr/" target="_blank">
                                        {{ __('university/paris-saclay-university.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%BE%D8%A7%D8%B1%DB%8C%D8%B3_%D8%B3%D9%88%D8%AF"
                                       target="_blank">
                                        {{ __('university/paris-saclay-university.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/paris-saclay-university.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/paris-saclay-university.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("../assets/img/universities/Paris_Saclay/Paris_saclay_university.webp")}}"
                                 alt="{{ __('university/paris-saclay-university.page_title') }}">
                        </div>
                        <p class="mb-30">{{ __('university/paris-saclay-university.intro_content') }}</p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10532.85897962028!2d2.1478373!3d48.7013763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67fdbd65f8b35%3A0x99bf9ed96d86b4c0!2sUniversit%C3%A9%20Paris-Saclay!5e0!3m2!1sfr!2sfr!4v1690985486852!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/paris-saclay-university.global_leader_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/paris-saclay-university.global_leader_content') }}
                        </p>
                        <h3 class="mt-20">{{ __('university/paris-saclay-university.programs_title') }}</h3>
                        <p class="mb-30">
                        {{ __('university/paris-saclay-university.programs_content') }}
                        <ul>
                            @foreach(__('university/paris-saclay-university.subjects') as $subject)
                                <li>
                                    <strong>{{ $subject }}</strong>
                                </li>
                            @endforeach
                        </ul>
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris_Saclay/Paris_saclay_university_1.webp")}}"
                                 alt="{{ __('university/paris-saclay-university.page_title') }}">
                        </div>
                        <h3 class="mt-20">{{ __('university/paris-saclay-university.research_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/paris-saclay-university.research_content') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('university/paris-saclay-university.admission_title') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('university/paris-saclay-university.admission_content') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('university/paris-saclay-university.career_title') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('university/paris-saclay-university.career_content') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('university/paris-saclay-university.environment_title') }}
                        </h3>
                        <p class="mb-30">
                        {{ __('university/paris-saclay-university.environment_content') }}
                        <ul>
                            @foreach(__('university/paris-saclay-university.facilities') as $facility)
                                <li>
                                    <strong>
                                        {{ $facility }}
                                    </strong>
                                </li>
                            @endforeach
                        </ul>
                        </p>
                        <h3 class="mt-20">{{ __('university/paris-saclay-university.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-saclay-university.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img
                                            src="{{asset("assets/img/universities/Paris_Saclay/Paris_saclay_university_logo.webp")}}"
                                            alt="{{ __('university/paris-saclay-university.page_title') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/paris-saclay-university.features') as $index => $feature)
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
                            <h3>{{ __('university/paris-saclay-university.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/paris-saclay-university.name_error') }}"
                                                   placeholder="{{ __('university/paris-saclay-university.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/paris-saclay-university.email_error') }}"
                                                   placeholder="{{ __('university/paris-saclay-university.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/paris-saclay-university.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/paris-saclay-university.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required
                                                   data-error="{{ __('university/paris-saclay-university.subject_error') }}"
                                                   placeholder="{{ __('university/paris-saclay-university.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required
                                                  data-error="{{ __('university/paris-saclay-university.message_error') }}"
                                                  placeholder="{{ __('university/paris-saclay-university.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/paris-saclay-university.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/paris-sud-university"
              },
              "headline": "{{ __('university/paris-saclay-university.schema_headline') }}",
  "description": "{{ __('university/paris-saclay-university.schema_description') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Paris_Sud/paris_sud_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/paris-saclay-university.schema_author') }}",
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
  "dateModified": "2024-01-22"
}
        @endverbatim
    </script>
@endpush
