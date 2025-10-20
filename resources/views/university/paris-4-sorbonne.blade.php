@extends('layout')
@section('title', __('university/paris-4-sorbonne.title'))
@section("keywords", __('university/paris-4-sorbonne.keywords'))
@section("description", __('university/paris-4-sorbonne.description'))
@section('content')

    <div class="page-title-area bg-paris-4">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/paris-4-sorbonne.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/paris-4-sorbonne.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/paris-4-sorbonne.breadcrumb_universities') }}
                        </a>
                    </li>
                    <li>{{ __('university/paris-4-sorbonne.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/paris-4-sorbonne.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/paris-4-sorbonne.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/paris-4-sorbonne.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/paris-4-sorbonne.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://lettres.sorbonne-universite.fr/" target="_blank">
                                        {{ __('university/paris-4-sorbonne.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D8%B3%D9%88%D8%B1%D8%A8%D9%86"
                                       target="_blank">
                                        {{ __('university/paris-4-sorbonne.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/paris-4-sorbonne.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/paris-4-sorbonne.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Paris4/paris_4_university.webp")}}"
                                 alt="{{ __('university/paris-4-sorbonne.main_heading') }}">
                        </div>
                        <h3>{{ __('university/paris-4-sorbonne.foundation_title') }}</h3>
                        <p>{{ __('university/paris-4-sorbonne.foundation_content') }}</p>

                        <h3 class="mt-20">{{ __('university/paris-4-sorbonne.location_title') }}</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d84016.36851838519!2d2.2114415!3d48.8484556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671dd72611d13%3A0x441afe419f2bc6f1!2sUniversit%C3%A9%20Paris-Sorbonne!5e0!3m2!1sfr!2sfr!4v1690996098876!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.location_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.ranking_content') }}</p>

                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris4/paris_4_university_1.webp")}}"
                                 alt="{{ __('university/paris-4-sorbonne.main_heading') }}">
                        </div>

                        <h3>{{ __('university/paris-4-sorbonne.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.facilities_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.iranian_students_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.tuition_fees_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.tuition_fees_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.language_of_instruction_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-4-sorbonne.language_of_instruction_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.career_opportunities_title') }}</h3>
                        <p>{{ __('university/paris-4-sorbonne.career_opportunities_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.multicultural_environment_title') }}</h3>
                        <p>{{ __('university/paris-4-sorbonne.multicultural_environment_content') }}</p>

                        <h3>{{ __('university/paris-4-sorbonne.conclusion_title') }}</h3>
                        <p>{{ __('university/paris-4-sorbonne.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Paris4/surbon_logo.webp")}}"
                                             alt="{{ __('university/paris-4-sorbonne.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/paris-4-sorbonne.features') as $feature)
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
                            <h3>{{ __('university/paris-4-sorbonne.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/paris-4-sorbonne.name_error') }}"
                                                   placeholder="{{ __('university/paris-4-sorbonne.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/paris-4-sorbonne.email_error') }}"
                                                   placeholder="{{ __('university/paris-4-sorbonne.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/paris-4-sorbonne.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/paris-4-sorbonne.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/paris-4-sorbonne.subject_error') }}"
                                                   placeholder="{{ __('university/paris-4-sorbonne.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/paris-4-sorbonne.message_error') }}"
                                                  placeholder="{{ __('university/paris-4-sorbonne.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/paris-4-sorbonne.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/paris-4-sorbonne"
              },
              "headline": "{{ __('university/paris-4-sorbonne.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Paris4/surbon_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/paris-4-sorbonne.schema_author') }}",
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
  "datePublished": "2023-11-23",
  "dateModified": "2024-01-18"
}
        @endverbatim
    </script>
@endpush
