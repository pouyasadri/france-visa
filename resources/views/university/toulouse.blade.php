@extends('layout')
@section('title', __('university/toulouse.title'))
@section('keywords', __('university/toulouse.keywords'))
@section('description', __('university/toulouse.description'))
@section('content')

    <div class="page-title-area bg-university/toulouse">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/toulouse.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/toulouse.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="/{{url(app()->getLocale()."universities")}}">
                            {{ __('university/toulouse.breadcrumb_universities') }}</a></li>
                    <li>
                        {{ __('university/toulouse.breadcrumb_current') }}
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
                            <h4 class="service-details-title">{{ __('university/toulouse.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/toulouse.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/toulouse.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/toulouse.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.ut-capitole.fr/" target="_blank">
                                        {{ __('university/toulouse.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%AA%D9%88%D9%84%D9%88%D8%B2"
                                       target="_blank">
                                        {{ __('university/toulouse.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/university/toulouse" target="_blank">
                                        {{ __('university/toulouse.university/toulouse_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/toulouse.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/university/toulouse/university/toulouse_university.webp")}}"
                                 alt="{{ __('university/toulouse.main_heading') }}">
                        </div>
                        <h3>{{ __('university/toulouse.history_title') }}</h3>
                        <p>{{ __('university/toulouse.history_content') }}</p>
                        <p class="mb-30">{{ __('university/toulouse.history_details') }}</p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d184924.66022423725!2d1.4668153!3d43.5972167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb61a0b5834d%3A0xedaa16152a9f760b!2sUniversit%C3%A9%20de%20university/toulouse!5e0!3m2!1sfr!2sfr!4v1691012269184!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/toulouse.ranking_title') }}</h3>
                        <p>{{ __('university/toulouse.ranking_content') }}</p>
                        <h3 class="mt-20">{{ __('university/toulouse.facilities_title') }}</h3>
                        <p>{{ __('university/toulouse.facilities_content') }}</p>
                        <p class="mb-30">{{ __('university/toulouse.facilities_research') }}</p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/university/toulouse/university/toulouse_university_1.webp")}}"
                                 alt="{{ __('university/toulouse.main_heading') }}">
                        </div>
                        <h3 class="mt-20">{{ __('university/toulouse.iranian_students_title') }}</h3>
                        <p>{{ __('university/toulouse.iranian_students_content') }}</p>
                        <p class="mb-30">{{ __('university/toulouse.iranian_students_visa') }}</p>
                        <h3 class="mt-20">{{ __('university/toulouse.career_title') }}</h3>
                        <p>{{ __('university/toulouse.career_content') }}</p>
                        <p class="mb-30">{{ __('university/toulouse.career_research') }}</p>
                        <h3 class="mt-20">{{ __('university/toulouse.environment_title') }}</h3>
                        <p>{{ __('university/toulouse.environment_content') }}</p>
                        <h3 class="mb-30">{{ __('university/toulouse.academic_programs_title') }}</h3>
                        <p>{{ __('university/toulouse.academic_programs_content') }}</p>
                        <p>
                            <b>{{ __('university/toulouse.science_programs_intro') }}</b>
                        <ul style="list-style: inside">
                            @foreach(__('university/toulouse.science_programs') as $program)
                                <li>{{ $program }}</li>
                            @endforeach
                        </ul>
                        <b>{{ __('university/toulouse.humanities_programs_intro') }}</b>
                        <ul style="list-style: inside">
                            @foreach(__('university/toulouse.humanities_programs') as $program)
                                <li>{{ $program }}</li>
                            @endforeach
                        </ul>
                        </p>
                        <h3>{{ __('university/toulouse.achievements_title') }}</h3>
                        <p>{{ __('university/toulouse.achievements_content') }}</p>
                        <h3>{{ __('university/toulouse.language_title') }}</h3>
                        <p>
                        {{ __('university/toulouse.language_intro') }}
                        <ul style="list-style: inside">
                            @foreach(__('university/toulouse.languages') as $language)
                                <li>{{ $language }}</li>
                            @endforeach
                        </ul>
                        </p>
                        <h3>{{ __('university/toulouse.alumni_title') }}</h3>
                        <p>{{ __('university/toulouse.alumni_intro') }}</p>
                        <ul style="list-style: inside">
                            @foreach(__('university/toulouse.alumni') as $alumnus)
                                <li>{{ $alumnus }}</li>
                            @endforeach
                        </ul>
                        <h3>{{ __('university/toulouse.conclusion_title') }}</h3>
                        <p>{{ __('university/toulouse.conclusion_content') }}</p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/university/toulouse/university/toulouse_logo.webp")}}"
                                             alt="{{ __('university/toulouse.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/toulouse.features') as $index => $feature)
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
                            <h3>{{ __('university/toulouse.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/toulouse.name_error') }}"
                                                   placeholder="{{ __('university/toulouse.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/toulouse.email_error') }}"
                                                   placeholder="{{ __('university/toulouse.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/toulouse.phone_error') }}" class="form-control"
                                                   placeholder="{{ __('university/toulouse.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/toulouse.subject_error') }}"
                                                   placeholder="{{ __('university/toulouse.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/toulouse.message_error') }}"
                                                  placeholder="{{ __('university/toulouse.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/toulouse.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/toulouse"
              },
              "headline": "{{ __('university/toulouse.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/university/toulouse/university/toulouse_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/toulouse.schema_author') }}",
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
  "datePublished": "2023-11-11",
  "dateModified": "2025-10-16"
}
        @endverbatim
    </script>
@endpush
