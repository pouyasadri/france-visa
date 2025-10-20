@extends('layout')
@section('title', __('university/paris-cite.title'))
@section("keywords", __('university/paris-cite.keywords'))
@section("description", __('university/paris-cite.description'))
@section('content')

    <div class="page-title-area bg-paris-7">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/paris-cite.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/paris-cite.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/paris-cite.breadcrumb_universities') }}
                        </a>
                    </li>
                    <li>{{ __('university/paris-cite.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/paris-cite.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/paris-cite.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="/{{url(app()->getLocale()."consult")}}">
                                        {{ __('university/paris-cite.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/paris-cite.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://u-paris.fr/" target="_blank">
                                        {{ __('university/paris-cite.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://applyvipconseil.com/cities/paris" target="_blank">
                                        {{ __('university/paris-cite.paris_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>{{ __('university/paris-cite.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Paris_cite/Paris_cite_university.jpg")}}"
                                 alt="{{ __('university/paris-cite.main_heading') }}">
                        </div>
                        <h3 class="mt-20">{{ __('university/paris-cite.introduction_title') }}</h3>
                        <p class="mb-30">
                        {{ __('university/paris-cite.introduction_content') }}
                        <ul>
                            @foreach(__('university/paris-cite.study_areas') as $area)
                                <li>{{ $area }}</li>
                            @endforeach
                        </ul>

                        </p>
                        <h3 class="mt-20">{{ __('university/paris-cite.global_excellence_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-cite.global_excellence_content') }}</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.140775385137!2d2.3318562!3d48.855525899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6716d7d0fd943%3A0xd9bdd83ca3691659!2sUniversit%C3%A9%20Paris%20Cit%C3%A9!5e0!3m2!1sfr!2sfr!4v1709732228531!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h3 class="mt-20">{{ __('university/paris-cite.facilities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-cite.facilities_content') }}</p>

                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris_cite/Paris_cite_university_1.webp")}}"
                                 alt="{{ __('university/paris-cite.main_heading') }}">
                        </div>

                        <h3 class="mt-20">{{ __('university/paris-cite.iranian_students_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-cite.iranian_students_content') }}</p>

                        <h3 class="mt-20">{{ __('university/paris-cite.career_opportunities_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-cite.career_opportunities_content') }}</p>

                        <h3 class="mt-20">{{ __('university/paris-cite.multicultural_environment_title') }}</h3>
                        <p class="mb-30">
                        {{ __('university/paris-cite.multicultural_environment_content') }}
                        <ul>
                            @foreach(__('university/paris-cite.facilities_list') as $facility)
                                <li>{{ $facility }}</li>
                            @endforeach
                        </ul>
                        </p>

                        <h3 class="mt-20">{{ __('university/paris-cite.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/paris-cite.conclusion_content') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img
                                            src="{{asset("assets/img/universities/Paris_cite/Paris_cite_university_logo.webp")}}"
                                            alt="{{ __('university/paris-cite.main_heading') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            @foreach(__('university/paris-cite.features') as $feature)
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
                            <h3>{{ __('university/paris-cite.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/paris-cite.name_error') }}"
                                                   placeholder="{{ __('university/paris-cite.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/paris-cite.email_error') }}"
                                                   placeholder="{{ __('university/paris-cite.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/paris-cite.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/paris-cite.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/paris-cite.subject_error') }}"
                                                   placeholder="{{ __('university/paris-cite.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/paris-cite.message_error') }}"
                                                  placeholder="{{ __('university/paris-cite.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/paris-cite.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/paris-cite"
              },
              "headline": "{{ __('university/paris-cite.schema_headline') }}",
  "image": "https://applyvipconseil.com/assets/img/universities/Paris_cite/Paris_cite_university_logo.webp",
  "author": {
    "@type": "Organization",
    "name": "{{ __('university/paris-cite.schema_author') }}",
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
  "datePublished": "2023-10-01",
  "dateModified": "2024-01-28"
}
        @endverbatim
    </script>
@endpush
