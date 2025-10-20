@extends('layout')
@section('title', __('university/paris-3.title'))
@section("keywords", __('university/paris-3.keywords'))
@section("description", __('university/paris-3.description'))
@section('content')

    <div class="page-title-area bg-university/paris-3">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/paris-3.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/paris-3.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/paris-3.breadcrumb_universities') }}
                        </a>
                    </li>
                    <li>{{ __('university/paris-3.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/paris-3.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/paris-3.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/paris-3.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/paris-3.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.univ-paris3.fr/" target="_blank">
                                        {{ __('university/paris-3.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%D9%BE%D8%A7%D8%B1%DB%8C%D8%B3_%DB%B3:_%D8%B3%D9%88%D8%B1%D8%A8%D9%86_%D8%AC%D8%AF%DB%8C%D8%AF#:~:text=%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87%20%D9%BE%D8%A7%D8%B1%DB%8C%D8%B3%20%DB%B3%20%DB%8C%D8%A7%20%D8%B3%D9%88%D8%B1%D8%A8%D9%86,%D8%B3%DB%8C%D8%B2%D8%AF%D9%87%E2%80%8Cگ%D8%A7%D9%86%D9%87%20%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87%20%D9%BE%D8%A7%D8%B1%DB%8C%D8%B3%20%D9%85%D8%AD%D8%B3%D9%88%D8%A8%20%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF.&text=%D8%A7%DB%8C%D9%86%20%D9%88%D8%A7%D8%AD%D8%AF%20%D8%AF%D8%B1%20%D8%B3%D8%A7%D9%84%20%DB%B1%DB%B9%DB%B7%DB%B1,%DB%B9%20%D9%85%D8%B1%DA%A9%D8%B2%20%D9%85%D8%AA%D9%81%D8%A7%D9%88%D8%AA%20%D8%AA%D9%82%D8%B3%DB%8C%D9%85%E2%80%8C%D8%A8%D9%86%D8%AF%DB%8C%20%D8%B4%D8%AF%D9%87%E2%80%8C%D8%A7%D8%B3%D8%AA."
                                       target="_blank">
                                        {{ __('university/paris-3.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/paris-3.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/paris-3.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Paris3/paris_3_university.webp")}}"
                                 alt="{{ __('university/paris-3.main_heading') }}">
                        </div>
                        <h3>{{ __('university/paris-3.history_title') }}</h3>
                        <p>{{ __('university/paris-3.history_content') }}</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.965529168461!2d2.351692!3d48.8397962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6739464bab6b1%3A0xf88b91f36aab3e5!2sUniversit%C3%A9%20Sorbonne%20Nouvelle!5e0!3m2!1sfr!2sfr!4v1690996762229!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h3 class="mt-20">{{ __('university/paris-3.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.ranking_content') }}</p>

                        <h3>{{ __('university/paris-3.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.facilities_paragraph_1') }}</p>
                        <p class="mb-30">{{ __('university/paris-3.facilities_paragraph_2') }}</p>

                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris3/paris_3_university_1.webp")}}"
                                 alt="{{ __('university/paris-3.main_heading') }}">
                        </div>

                        <h3>{{ __('university/paris-3.cultural_diversity_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.cultural_diversity_content') }}</p>

                        <h3>{{ __('university/paris-3.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.iranian_students_content') }}</p>

                        <h3>{{ __('university/paris-3.career_opportunities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.career_opportunities_content') }}</p>

                        <h3>{{ __('university/paris-3.multicultural_environment_title') }}</h3>
                        <p>{{ __('university/paris-3.multicultural_environment_content') }}</p>

                        <h3>{{ __('university/paris-3.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-3.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Paris3/paris_3_logo.webp")}}"
                                             alt="{{ __('university/paris-3.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/paris-3.features') as $feature)
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
                            <h3>{{ __('university/paris-3.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/paris-3.name_error') }}"
                                                   placeholder="{{ __('university/paris-3.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/paris-3.email_error') }}"
                                                   placeholder="{{ __('university/paris-3.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/paris-3.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/paris-3.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/paris-3.subject_error') }}"
                                                   placeholder="{{ __('university/paris-3.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/paris-3.message_error') }}"
                                                  placeholder="{{ __('university/paris-3.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/paris-3.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/paris-3"
              },
              "headline": "{{ __('university/paris-3.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Paris3/paris_3_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/paris-3.schema_author') }}",
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
