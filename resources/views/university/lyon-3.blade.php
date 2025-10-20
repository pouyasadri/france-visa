@extends('layout')
@section('title', __('university/lyon-3.title'))
@section("keywords", __('university/lyon-3.keywords'))
@section("description", __('university/lyon-3.description'))
@section('content')

    <div class="page-title-area bg-university/lyon-3">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/lyon-3.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/lyon-3.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/lyon-3.breadcrumb_universities') }}
                        </a>
                    </li>
                    <li>{{ __('university/lyon-3.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/lyon-3.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/lyon-3.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/lyon-3.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/lyon-3.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.univ-lyon3.fr/" target="_blank">
                                        {{ __('university/lyon-3.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%84%DB%8C%D9%88%D9%86"
                                       target="_blank">
                                        {{ __('university/lyon-3.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/lyon" target="_blank">
                                        {{ __('university/lyon-3.lyon_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/lyon-3.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Lyon3/lyon_3_university.webp")}}"
                                 alt="{{ __('university/lyon-3.main_heading') }}">
                        </div>
                        <h3>{{ __('university/lyon-3.history_title') }}</h3>
                        <p>{{ __('university/lyon-3.history_content') }}</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11136.680745538117!2d4.8530438!3d45.747734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4f7816ca8d%3A0x508d760befcb222d!2sUniversit%C3%A9%20Jean%20Moulin%20Lyon%203!5e0!3m2!1sfr!2sfr!4v1690998325482!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/lyon-3.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.ranking_content') }}</p>

                        <h3>{{ __('university/lyon-3.faculties_title') }}</h3>
                        <p class="mb-30">
                        {{ __('university/lyon-3.faculties_content') }}
                        <ul style="list-style: inside">
                            @foreach(__('university/lyon-3.faculties_list') as $faculty)
                                <li>{{ $faculty }}</li>
                            @endforeach
                        </ul>
                        {{ __('university/lyon-3.faculties_additional') }}
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Lyon3/lyon_3_university_1.webp")}}"
                                 alt="{{ __('university/lyon-3.main_heading') }}">
                        </div>
                        <h3>{{ __('university/lyon-3.admission_requirements_title') }}</h3>
                        <p class="mb-30">
                        {{ __('university/lyon-3.admission_requirements_content') }}
                        <ul style="list-style: inside">
                            @foreach(__('university/lyon-3.admission_requirements_list') as $requirement)
                                <li>{{ $requirement }}</li>
                            @endforeach
                        </ul>
                        </p>
                        <h3>{{ __('university/lyon-3.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.facilities_content') }}</p>
                        <h3>{{ __('university/lyon-3.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.iranian_students_content') }}</p>
                        <h3>{{ __('university/lyon-3.career_opportunities_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.career_opportunities_content') }}</p>
                        <h3>{{ __('university/lyon-3.multicultural_environment_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.multicultural_environment_content') }}</p>
                        <h3>{{ __('university/lyon-3.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-3.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Lyon3/lyon_3.webp")}}"
                                             alt="{{ __('university/lyon-3.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/lyon-3.features') as $feature)
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    {{ $feature }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ask-question">
                            <h3>{{ __('university/lyon-3.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/lyon-3.name_error') }}"
                                                   placeholder="{{ __('university/lyon-3.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/lyon-3.email_error') }}"
                                                   placeholder="{{ __('university/lyon-3.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/lyon-3.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/lyon-3.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/lyon-3.subject_error') }}"
                                                   placeholder="{{ __('university/lyon-3.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/lyon-3.message_error') }}"
                                                  placeholder="{{ __('university/lyon-3.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/lyon-3.send_message') }}
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
@push("styles")
    <style>
        p {
            line-height: 1.625;
        }
    </style>
@endpush
@push("json")
    <script type="application/ld+json">
    @verbatim
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://applyvipconseil.com/universities/lyon-3"
              },
              "headline": "{{ __('university/lyon-3.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Lyon3/lyon_3.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/lyon-3.schema_author') }}",
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
  "datePublished": "2023-11-06",
  "dateModified": "2024-01-10"
}
        @endverbatim
    </script>
@endpush
