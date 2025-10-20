@extends('layout')
@section('title', __('university/strasbourg.title'))
@section('keywords', __('university/strasbourg.keywords'))
@section('description', __('university/strasbourg.description'))
@section('content')

    <div class="page-title-area bg-university/strasbourg">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/strasbourg.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/strasbourg.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="/{{url(app()->getLocale()."universities")}}">
                            {{ __('university/strasbourg.breadcrumb_universities') }}</a></li>
                    <li>
                        {{ __('university/strasbourg.breadcrumb_current') }}
                    </li>
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
                            <h4 class="service-details-title">{{ __('university/strasbourg.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/strasbourg.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/strasbourg.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/strasbourg.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.unistra.fr/" target="_blank">
                                        {{ __('university/strasbourg.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%A7%D8%B3%D8%AA%D8%B1%D8%A7%D8%B3%D8%A8%D9%88%D8%B1%DA%AF"
                                       target="_blank">
                                        {{ __('university/strasbourg.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/university/strasbourg" target="_blank">
                                        {{ __('university/strasbourg.university/strasbourg_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>
                            {{ __('university/strasbourg.page_title') }}
                        </h2>
                        <div class="single-services-imgs mb-30">
                            <img
                                src="{{asset("assets/img/universities/university/strasbourg/university/strasbourg_university.webp")}}"
                                alt="{{ __('university/strasbourg.main_heading') }}">
                        </div>
                        <h3 class="mt-20">{{ __('university/strasbourg.history_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.history_content') }}</p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42231.37481409881!2d7.7123919!3d48.5818728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b605f59ca9f7%3A0x129f789501bb28a5!2sUniversit%C3%A9%20de%20university/strasbourg!5e0!3m2!1sfr!2sfr!4v1691013448430!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/strasbourg.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.ranking_content') }}</p>
                        <h3>{{ __('university/strasbourg.facilities_title') }}</h3>
                        <p>{{ __('university/strasbourg.facilities_content') }}</p>
                        <p class="mb-30">{{ __('university/strasbourg.facilities_research') }}</p>
                        <div class="rooms-details mb-30">
                            <img
                                src="{{asset("assets/img/universities/university/strasbourg/university/strasbourg_university_1.webp")}}"
                                alt="{{ __('university/strasbourg.main_heading') }}">
                        </div>
                        <h3 class="mt-20">{{ __('university/strasbourg.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.iranian_students_content') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.career_title') }}</h3>
                        <p>{{ __('university/strasbourg.career_content') }}</p>
                        <p class="mb-30">{{ __('university/strasbourg.career_research') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.academic_levels_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.academic_levels_content') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.environment_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.environment_content') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.language_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.language_content') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.achievements_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.achievements_content') }}</p>
                        <h3 class="mt-20">{{ __('university/strasbourg.famous_alumni_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.famous_alumni_intro') }}</p>
                        <ul>
                            @foreach(__('university/strasbourg.famous_alumni') as $alumni)
                                <li>{{ $alumni }}</li>
                            @endforeach
                        </ul>
                        <h3 class="mt-20">{{ __('university/strasbourg.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/strasbourg.conclusion_content') }}</p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img
                                            src="{{asset("assets/img/universities/university/strasbourg/university/strasbourg_logo.webp")}}"
                                            alt="{{ __('university/strasbourg.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/strasbourg.features') as $index => $feature)
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
                            <h3>{{ __('university/strasbourg.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/strasbourg.name_error') }}"
                                                   placeholder="{{ __('university/strasbourg.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/strasbourg.email_error') }}"
                                                   placeholder="{{ __('university/strasbourg.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/strasbourg.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/strasbourg.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/strasbourg.subject_error') }}"
                                                   placeholder="{{ __('university/strasbourg.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/strasbourg.message_error') }}"
                                                  placeholder="{{ __('university/strasbourg.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/strasbourg.send_message') }}
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
                "@id": "https://applyvipconseil.com/strasbourg"
              },
              "headline": "{{ __('university/strasbourg.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/university/strasbourg/university/strasbourg_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/strasbourg.schema_author') }}",
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
  "datePublished": "2023-11-12",
  "dateModified": "2025-10-16"
}
        @endverbatim
    </script>
@endpush
