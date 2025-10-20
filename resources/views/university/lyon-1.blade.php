@extends('layout')
@section('title', __('university/lyon-1.title'))
@section('keywords', __('university/lyon-1.keywords'))
@section('description', __('university/lyon-1.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp

    <div class="page-title-area bg-university/lyon-1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('university/lyon-1.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('university/lyon-1.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{url(app()->getLocale()."/universities")}}">
                            {{ __('university/lyon-1.breadcrumb_universities') }}</a></li>
                    <li>{{ __('university/lyon-1.breadcrumb_current') }}</li>
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
                            <h4 class="service-details-title">{{ __('university/lyon-1.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('university/lyon-1.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="{{url(app()->getLocale()."/consult")}}">
                                        {{ __('university/lyon-1.consultation_request') }}
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
                            <h4 class="service-details-title">{{ __('university/lyon-1.useful_links') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.univ-lyon1.fr/" target="_blank">
                                        {{ __('university/lyon-1.official_website') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87_%DA%A9%D9%84%D9%88%D8%AF_%D8%A8%D8%B1%D9%86%D8%A7%D8%B1%D8%AF_%D9%84%DB%8C%D9%88%D9%86_%DB%B1"
                                       target="_blank">
                                        {{ __('university/lyon-1.wikipedia_link') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://applyvipconseil.com/cities/lyon" target="_blank">
                                        {{ __('university/lyon-1.lyon_city_guide') }}
                                        <i class='bx bxl-internet-explorer'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">

                        <h2>{{ __('university/lyon-1.page_title') }}</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Lyon1/lyon_1_university.webp")}}"
                                 alt="{{ __('university/lyon-1.title') }}">
                        </div>
                        <h3>{{ __('university/lyon-1.history_title') }}</h3>
                        <p>
                            {{ __('university/lyon-1.history_paragraph_1') }}
                        </p>
                        <p class="mb-30">
                            {{ __('university/lyon-1.history_paragraph_2') }}
                        </p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11130.215642098558!2d4.864358!3d45.7801296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea143dd86f25%3A0x7bfebbdcecc615b7!2sUniversit%C3%A9%20Claude%20Bernard%20Lyon%201!5e0!3m2!1sfr!2sfr!4v1691001138308!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">{{ __('university/lyon-1.ranking_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-1.ranking_paragraph') }}</p>

                        <h3>{{ __('university/lyon-1.facilities_title') }}</h3>
                        <p>
                            {{ __('university/lyon-1.facilities_paragraph_1') }}
                        </p>
                        <p class="mb-30">{{ __('university/lyon-1.facilities_paragraph_2') }}</p>

                        <!-- ... اطلاعات و ویژگی‌های بیشتر درباره دانشگاه لیون ۱ ... -->
                        <h3>{{ __('university/lyon-1.iranian_students_title') }}</h3>
                        <p>
                            {{ __('university/lyon-1.iranian_students_paragraph_1') }}
                        </p>
                        <p class="mb-30">{{ __('university/lyon-1.iranian_students_paragraph_2') }}</p>

                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/universities/Lyon1/lyon_1_university_1.webp")}}"
                                 alt="{{ __('university/lyon-1.title') }}">
                        </div>
                        <h3>{{ __('university/lyon-1.tuition_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/lyon-1.tuition_paragraph') }}
                        </p>
                        <h3>{{ __('university/lyon-1.career_opportunities_title') }}</h3>
                        <p>
                            {{ __('university/lyon-1.career_opportunities_paragraph_1') }}
                        </p>
                        <p class="mb-30">{{ __('university/lyon-1.career_opportunities_paragraph_2') }}</p>

                        <!-- ... اطلاعات بیشتر در مورد رشته‌ها، زبان‌های تدریس و دیگر جزئیات ... -->
                        <h3>{{ __('university/lyon-1.multicultural_environment_title') }}</h3>
                        <p class="mb-30">
                            {{ __('university/lyon-1.multicultural_environment_paragraph') }}
                        </p>
                        <h3>{{ __('university/lyon-1.conclusion_title') }}</h3>
                        <p class="mb-30">{{ __('university/lyon-1.conclusion_paragraph') }}</p>

                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Lyon1/lyon_1_logo.webp")}}"
                                             alt="{{ __('university/lyon-1.title') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/lyon-1.prestigious_history') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/lyon-1.diverse_specializations') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/lyon-1.international_environment') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/lyon-1.modern_facilities') }}
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                {{ __('university/lyon-1.cutting_edge_research') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ask-question">
                            <h3>{{ __('university/lyon-1.ask_question') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('university/lyon-1.name_error') }}"
                                                   placeholder="{{ __('university/lyon-1.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('university/lyon-1.email_error') }}"
                                                   placeholder="{{ __('university/lyon-1.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('university/lyon-1.phone_error') }}" class="form-control"
                                                   placeholder="{{ __('university/lyon-1.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('university/lyon-1.subject_error') }}"
                                                   placeholder="{{ __('university/lyon-1.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('university/lyon-1.message_error') }}"
                                                  placeholder="{{ __('university/lyon-1.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('university/lyon-1.send_message') }}
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
                "@id": "https://applyvipconseil.com/universities/lyon-1"
              },
              "headline": "دانشگاه لیون 1: مهد نوآوری و آموزش عالی",
              "image": "https://applyvipconseil.com/assets/img/universities/Lyon1/lyon_1_logo.webp",
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
              "datePublished": "2023-11-08",
              "dateModified": "2024-01-12"
            }
        @endverbatim
    </script>
@endpush
