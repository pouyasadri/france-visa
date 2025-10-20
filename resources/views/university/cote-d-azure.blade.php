@extends('layout')
@section('title', __('university/cote-d-azure.title'))
@section('keywords', __('university/cote-d-azure.keywords'))
@section('description', __('university/cote-d-azure.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area bg-nice">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/cote-d-azure.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/cote-d-azure.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/cote-d-azure.breadcrumb_universities') }}</a></li>
                    <li>{{ __('university/cote-d-azure.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/cote-d-azure.table_of_contents') }}</h4>
                            <ol id="board"></ol>
                        </div>

                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/cote-d-azure.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/cote-d-azure.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/cote-d-azure.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://univ-cotedazur.fr/" target="_blank">
                                        {{ __('university/cote-d-azure.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/nice" target="_blank">
                                        {{ __('university/cote-d-azure.nice_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">

                        <h2>{{ __('university/cote-d-azure.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Nice/nice_university.webp")}}"
                                 alt="{{ __('university/cote-d-azure.title') }}">
                        </div>
                        <h3>{{ __('university/cote-d-azure.history_title') }}</h3>
                        <p>
                            {{ __('university/cote-d-azure.history_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.history_paragraph_2') }}
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92283.61537243958!2d7.1946494!3d43.7133965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd01552258547%3A0xf160114745d1e06!2sUniversit%C3%A9%20Nice%20Sophia%20Antipolis!5e0!3m2!1sfr!2sfr!4v1691003788688!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>{{ __('university/cote-d-azure.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/cote-d-azure.ranking_paragraph') }}</p>

                        <h3>{{ __('university/cote-d-azure.facilities_title') }}</h3>
                        <p>
                            {{ __('university/cote-d-azure.facilities_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.facilities_paragraph_2') }}
                        </p>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Nice/nice_university_1.webp")}}"
                                 alt="{{ __('university/cote-d-azure.title') }}">
                        </div>
                        <!-- ... ویژگی‌ها، مزایا و اطلاعات بیشتر درباره دانشگاه نیس ... -->
                        <h3>{{ __('university/cote-d-azure.departments_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.departments_paragraph') }}
                        </p>
                        <h3>{{ __('university/cote-d-azure.iranian_students_title') }}</h3>
                        <p>
                            {{ __('university/cote-d-azure.iranian_students_paragraph_1') }}
                        </p>
                        <p class="mb-30">{{ __('university/cote-d-azure.iranian_students_paragraph_2') }}</p>

                        <h3>{{ __('university/cote-d-azure.teaching_languages_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.teaching_languages_paragraph') }}
                        </p>
                        <h3>
                            {{ __('university/cote-d-azure.career_opportunities_title') }}
                        </h3>
                        <p>
                            {{ __('university/cote-d-azure.career_opportunities_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.career_opportunities_paragraph_2') }}
                        </p>
                        <h3>{{ __('university/cote-d-azure.multicultural_environment_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/cote-d-azure.multicultural_environment_paragraph') }}
                        </p>
                        <h3>{{ __('university/cote-d-azure.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/cote-d-azure.conclusion_paragraph') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Nice/nice_logo.webp")}}"
                                             alt="{{ __('university/cote-d-azure.title') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/cote-d-azure.prestigious_history') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/cote-d-azure.diverse_specializations') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/cote-d-azure.international_environment') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/cote-d-azure.modern_facilities') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/cote-d-azure.cutting_edge_research') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ask-question">
                            <h3>{{ __('university/cote-d-azure.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/cote-d-azure.name_error') }}"
                                                   placeholder="{{ __('university/cote-d-azure.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/cote-d-azure.email_error') }}"
                                                   placeholder="{{ __('university/cote-d-azure.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/cote-d-azure.phone_error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('university/cote-d-azure.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/cote-d-azure.subject_error') }}"
                                                   placeholder="{{ __('university/cote-d-azure.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/cote-d-azure.message_error') }}"
                                                  placeholder="{{ __('university/cote-d-azure.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/cote-d-azure.send_message') }}
													<i class="{{ $arrowClass }}"></i>
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
                "@id": "https://applyvipconseil.com/universities/cote-d-azure"
              },
              "headline": "دانشگاه Cote d'Azur: قله علم و فرهنگ در ساحل مدیترانه",
              "image": "https://applyvipconseil.com/assets/img/universities/Nice/nice_logo.webp",
              "author": {
                "@type": "Organization",
                "name": "تحصیل، زندگی، سرمایه گذاری: رویاهای شما در فرانسه با A.V.C",
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
              "datePublished": "2023-11-10",
              "dateModified": "2024-01-12"
            }
        @endverbatim
    </script>
@endpush
