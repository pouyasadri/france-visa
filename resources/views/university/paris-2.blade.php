@extends('layout')
@section('title', __('university/paris-2.title'))
@section("keywords", __('university/paris-2.keywords'))
@section("description", __('university/paris-2.description'))
@section('content')

    <div class="page-title-area bg-university/paris-2">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/paris-2.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/paris-2.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/paris-2.breadcrumb_universities') }}
                        </a>
                    </li>
                    <li>{{ __('university/paris-2.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/paris-2.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/paris-2.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/paris-2.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/paris-2.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.assas-universite.fr/fr" target="_blank">
                                        {{ __('university/paris-2.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%BE%D8%A7%D9%86%D8%AA%D8%A6%D9%88%D9%86-%D8%A2%D8%B3%D8%A7"
                                       target="_blank">
                                        {{ __('university/paris-2.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/paris-2.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-services-text mb-80">
                        <h2>{{ __('university/paris-2.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Paris2/paris_2_university.webp")}}"
                                 alt="{{ __('university/paris-2.main_heading') }}">
                        </div>
                        <h3>{{ __('university/paris-2.history_title') }}</h3>
                        <p>{{ __('university/paris-2.history_content') }}</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d84014.38810690024!2d2.2731241!3d48.8496359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c57f3afe85%3A0x835685727d0a10a6!2sUniversit%C3%A9%20Paris%20Panth%C3%A9on-Assas!5e0!3m2!1sfr!2sfr!4v1690997716460!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h3 class="mt-20">{{ __('university/paris-2.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.ranking_content') }}</p>

                        <h3>{{ __('university/paris-2.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.facilities_content') }}</p>

                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris2/paris_2_university_1.webp")}}"
                                 alt="{{ __('university/paris-2.main_heading') }}">
                        </div>

                        <h3>{{ __('university/paris-2.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.iranian_students_content') }}</p>

                        <h3>{{ __('university/paris-2.career_opportunities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.career_opportunities_content') }}</p>

                        <h3>{{ __('university/paris-2.multicultural_environment_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.multicultural_environment_content') }}</p>

                        <h3>{{ __('university/paris-2.university_achievements_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.university_achievements_content') }}</p>

                        <h3>{{ __('university/paris-2.application_deadline_title') }}</h3>
                        <p>{{ __('university/paris-2.application_deadline_paragraph_1') }}</p>
                        <p class="mb-30">{{ __('university/paris-2.application_deadline_paragraph_2') }}</p>

                        <h3>{{ __('university/paris-2.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-2.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("../assets/img/universities/Paris2/paris_2_logo.webp")}}"
                                             alt="{{ __('university/paris-2.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/paris-2.features') as $feature)
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
                    </div>

                    <div class="ask-question">
                        <h3>{{ __('university/paris-2.ask_question') }}</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                               data-error="{{ __('university/paris-2.name_error') }}"
                                               placeholder="{{ __('university/paris-2.name_placeholder') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                               data-error="{{ __('university/paris-2.email_error') }}"
                                               placeholder="{{ __('university/paris-2.email_placeholder') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                               data-error="{{ __('university/paris-2.phone_error') }}"
                                               class="form-control"
                                               placeholder="{{ __('university/paris-2.phone_placeholder') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                               required data-error="{{ __('university/paris-2.subject_error') }}"
                                               placeholder="{{ __('university/paris-2.subject_placeholder') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/paris-2.message_error') }}"
                                                  placeholder="{{ __('university/paris-2.message_placeholder') }}"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/paris-2.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/paris-2"
              },
              "headline": "{{ __('university/paris-2.schema_headline') }}",
  "image": "https://applyvipconseil.com/../assets/img/universities/Paris2/paris_2_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/paris-2.schema_author') }}",
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
  "datePublished": "2023-10-11",
  "dateModified": "2024-01-14"
}
        @endverbatim
    </script>
@endpush
