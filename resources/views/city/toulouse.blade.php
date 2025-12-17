@extends('layout')
@section('title', __('city/toulouse.title'))
@section('keywords', __('city/toulouse.keywords'))
@section('description', __('city/toulouse.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
    @endphp

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('city/toulouse.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('city/toulouse.breadcrumb_home') }}
                        </a>
                    </li>
                    <li><a href="{{url(app()->getLocale().'/cities')}}">
                            {{ __('city/toulouse.breadcrumb_cities') }}
                        </a></li>
                    <li>{{ __('city/toulouse.breadcrumb_toulouse') }}</li>
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
                            <h4 class="service-details-title">{{ __('city/toulouse.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('city/toulouse.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale().'/consult')}}">
                                        {{ __('city/toulouse.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('city/toulouse.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://en.wikipedia.org/wiki/Toulouse" target="_blank">
                                        {{ __('city/toulouse.toulouse_wikipedia') }}
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">

                        <h2>{{ __('city/toulouse.intro_heading') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/cities/Toulouse/toulouse1.webp")}}"
                                 alt="{{ __('city/toulouse.breadcrumb_toulouse') }}">
                        </div>
                        <p class="mb-30">
                            {{ __('city/toulouse.intro_paragraph') }}
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d184889.5585011091!2d1.4451994!3d43.6086372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb6fec7552ff%3A0x406f69c2f411030!2sToulouse!5e0!3m2!1sfr!2sfr!4v1691147641647!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h3 class="mt-20">
                            {{ __('city/toulouse.language_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.language_paragraph') }}
                        </p>
                        <h3>{{ __('city/toulouse.climate_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.climate_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.study_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.study_paragraph') }}
                        </p>

                        <h3 class="mt-20">{{ __('city/toulouse.universities_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.universities_paragraph') }}
                        <ol>
                            <li>{{ __('city/toulouse.university_1') }}</li>
                            <li>{{ __('city/toulouse.university_2') }}</li>
                        </ol>
                        {{ __('city/toulouse.student_life') }}
                        <h4 class="mt-20">{{ __('city/toulouse.programs_heading') }}</h4>
                        <ul style="list-style: inside">
                            <li>{{ __('city/toulouse.program_1') }}</li>
                            <li>{{ __('city/toulouse.program_2') }}</li>
                            <li>{{ __('city/toulouse.program_3') }}</li>
                            <li>{{ __('city/toulouse.program_4') }}</li>
                            <li>{{ __('city/toulouse.program_5') }}</li>
                            <li>{{ __('city/toulouse.program_6') }}</li>
                            <li>{{ __('city/toulouse.program_7') }}</li>
                            <li>{{ __('city/toulouse.program_8') }}</li>
                            <li>{{ __('city/toulouse.program_9') }}</li>
                        </ul>
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Toulouse/toulouse2.webp")}}"
                                 alt="{{ __('city/toulouse.breadcrumb_toulouse') }}">
                        </div>

                        <h3>{{ __('city/toulouse.living_costs_heading') }}</h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.living_costs_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.housing_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.housing_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.daily_life_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.daily_life_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.transportation_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.transportation_paragraph') }}
                        </p>

                        <h3 class="mt-20">
                            {{ __('city/toulouse.tourism_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.tourism_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.jewelry_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.jewelry_paragraph') }}
                        <ul style="list-style: inside">
                            <li>{{ __('city/toulouse.jewelry_1') }}</li>
                            <li>{{ __('city/toulouse.jewelry_2') }}</li>
                            <li>{{ __('city/toulouse.jewelry_3') }}</li>
                        </ul>
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/cities/Toulouse/toulouse.webp")}}" alt="{{ __('city/toulouse.breadcrumb_toulouse') }}">
                        </div>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.economy_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.economy_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.jobs_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.jobs_paragraph') }}
                        </p>
                        <h3 class="mt-20">
                            {{ __('city/toulouse.conclusion_heading') }}
                        </h3>
                        <p class="mb-30">
                            {{ __('city/toulouse.conclusion_paragraph') }}
                        </p>
                        <div class="ask-question">
                            <h3>{{ __('city/toulouse.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('city/toulouse.form_error_name') }}"
                                                   placeholder="{{ __('city/toulouse.form_name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('city/toulouse.form_error_email') }}"
                                                   placeholder="{{ __('city/toulouse.form_email') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('city/toulouse.form_error_phone') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('city/toulouse.form_phone') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('city/toulouse.form_error_subject') }}"
                                                   placeholder="{{ __('city/toulouse.form_subject') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('city/toulouse.form_error_message') }}"
                                                  placeholder="{{ __('city/toulouse.form_message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('city/toulouse.form_send') }}
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
                "@id": "https://applyvipconseil.com/{{ app()->getLocale() }}/cities/toulouse"
              },
              "headline": "{{ __('city/toulouse.intro_heading') }}",
              "image": "https://applyvipconseil.com/assets/img/cities/Toulouse/toulouse.webp",
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

