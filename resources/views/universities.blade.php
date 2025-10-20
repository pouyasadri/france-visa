@extends('layout')
@section('title', __('universities.title'))
@section('keywords', __('universities.keywords'))
@section('description', __('universities.description'))
@section('content')
    @php
        $isRtl = in_array(app()->getLocale(), ['fa'], true);
        $arrowClass = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
    @endphp
        <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('universities.main_heading') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale().'/')}}">
                            {{ __('universities.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>{{ __('universities.breadcrumb_universities') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Exclusive Area -->
    <section class="exclusive-area exclusive-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ __('universities.section_title') }}</span>
                <h2>{{ __('universities.section_heading') }}</h2>
            </div>
            <div>
                <p>
                    {{ __('universities.section_paragraph') }}
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-3"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.paris_saclay_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}
                                            : {{ __('universities.paris_saclay_rank') }}
                                        </li>
                                    </ul>
                                    <p>
                                        {{ __('universities.paris_saclay_description') }}
                                    </p>
                                    <a href="{{url(app()->getLocale()."/universities/paris-saclay-university")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-4"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.sorbonne_paris_nord_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}
                                            : {{ __('universities.sorbonne_paris_nord_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.sorbonne_paris_nord_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/sorbonne-paris-nord")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-5"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.paris_cite_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}
                                            : {{ __('universities.paris_cite_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.paris_cite_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/paris-cite")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-6"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.paris_4_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.paris_4_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.paris_4_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/paris-4-sorbonne")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-7"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.paris_3_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.paris_3_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.paris_3_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/paris-3")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-8"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.paris_2_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.paris_2_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.paris_2_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/paris-2")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-9"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.lyon_3_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.lyon_3_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.lyon_3_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/lyon-3")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-10"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.lyon_2_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.lyon_2_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.lyon_2_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/lyon-2")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-11"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.lyon_1_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.lyon_1_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.lyon_1_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/lyon-1")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-12"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.pantheon_sorbonne_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}
                                            : {{ __('universities.pantheon_sorbonne_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.pantheon_sorbonne_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/pantheon-sorbonne")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-13"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.nice_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.nice_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.nice_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/cote-d-azure")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-14"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.toulouse_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}: {{ __('universities.toulouse_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.toulouse_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/toulouse")}}" class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="exclusive-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pl-0">
                                <div class="exclusive-img bg-15"></div>
                            </div>
                            <div class="col-lg-6 pr-0">
                                <div class="exclusive-content">
                                    <h3>{{ __('universities.strasbourg_name') }}</h3>
                                    <ul class="rating">
                                        <li>
                                            {{ __('universities.world_rank') }}
                                            : {{ __('universities.strasbourg_rank') }}
                                        </li>
                                    </ul>
                                    <p>{{ __('universities.strasbourg_description') }}</p>
                                    <a href="{{url(app()->getLocale()."/universities/strasbourg")}}"
                                       class="default-btn">
                                        {{ __('universities.more_info') }}
                                        <i class="{{ $arrowClass }}"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Exclusive Area -->

    <!-- Start Our Rooms Area -->
    <section class="our-rooms-area-two pb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('universities.benefits_section_title') }}</span>
                <h2>{{ __('universities.benefits_section_heading') }}</h2>
            </div>
            <div class="mb-30">
                <p>{{ __('universities.benefits_section_paragraph') }}</p>
            </div>

            <div class="tab industries-list-tab">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tabs row">
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path
                                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                            <path
                                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.quality_education_system') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path
                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.diverse_academic_fields') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path
                                                d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                            <path
                                                d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.french_language_international_power') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                            <path
                                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                            <path
                                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                            <path
                                                d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.scholarships_financial_aid') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.living_environment_culture') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 single-tab">
                                <div class="single-rooms">
                                    <div style="padding-bottom: 1rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             style="margin: 0 auto" viewBox="0 0 16 16">
                                            <path
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                        </svg>
                                    </div>
                                    <h3>{{ __('universities.international_connections') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="tab_content">
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-1">
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-2">
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-3">
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-4">
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-5">
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="our-rooms-single-img room-bg-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Rooms Area -->

    <section id="services" class="bokking-area pt-70 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ __('universities.services_section_title') }}</span>
                <h2>{{ __('universities.services_section_heading') }}</h2>
            </div>
            <div class="row">
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.residence_consultation') }}</h3>
                            <p>{{ __('universities.residence_consultation_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd"
                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.resume_motivation_writing') }}</h3>
                            <p>{{ __('universities.resume_motivation_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     style="margin: 0 auto" class="book-icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.administrative_ease') }}</h3>
                            <p>{{ __('universities.administrative_ease_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                    <path
                                        d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.document_translation') }}</h3>
                            <p>{{ __('universities.document_translation_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.educational_consultation') }}</h3>
                            <p>{{ __('universities.educational_consultation_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.accommodation_booking') }}</h3>
                            <p>{{ __('universities.accommodation_booking_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path
                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.admission_acceptance') }}</h3>
                            <p>{{ __('universities.admission_acceptance_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.administrative_support_france') }}</h3>
                            <p>{{ __('universities.administrative_support_description') }}</p>
                        </a>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="{{url(app()->getLocale()."/consult")}}">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <h3>{{ __('universities.legal_services') }}</h3>
                            <p>{{ __('universities.legal_services_description') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push("json")
    <script type="application/ld+json">
    @verbatim
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://applyvipconseil.com/universities"
              },
              "headline": "معرفی برترین دانشگاه های فرانسه",
              "image": "https://applyvipconseil.com/assets/img/France/france1.webp",
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
              "datePublished": "2023-10-01",
              "dateModified": "2024-01-28"
            }
        @endverbatim
    </script>
@endpush
