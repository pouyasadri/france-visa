<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ 'fa' === app()->getLocale() ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--    <meta name="keywords"
    {{--          content="آژانس مهاجرت و مسافرت ایران به فرانسه, مهاجرت به فرانسه, ویزای فرانسه, سفر به فرانسه, ایرانیان در فرانسه, زندگی در فرانسه, مهاجرت تحصیلی به فرانسه, خرید خانه در فرانسه, سرمایه گذاری در املاک فرانسه">--}}
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    {{--    <meta name="description"
    {{--          content="آژانس مهاجرت و مسافرت A.V.C، همراه شما در سفر هیجان‌انگیز به سمت زندگی بهتر در فرانسه. خدمات ما شامل مشاوره تحصیلی، ویزای تحصیلی، اقامت موقت و دائم، خرید ملک در فرانسه و خدمات حقوقی است. با بیش از دهه‌ها تجربه، A.V.C همراه شما در داستان موفقیتتان است.">--}}

    <meta name="author" content="Apply Vip Conseil| AVC">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}"/>

    @php
        // Locales that should use RTL layout
        $rtlLocales = ['fa'];
        $isRtl = in_array(app()->getLocale(), $rtlLocales, true);

        $arrowIcon = $isRtl ? 'bx bx-left-arrow-alt' : 'bx bx-right-arrow-alt';
        $chevronsDir = $isRtl ? 'bx-chevrons-left' : 'bx-chevrons-right';
    @endphp

    {{-- Conditionally load RTL or LTR Bootstrap --}}
    @if($isRtl)
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @endif

    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/boxicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/meanmenu.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/animate.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/nice-select.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/odometer.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/date-picker.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/beautiful-fonts.css")}}">
    @if($isRtl)
        <link rel="stylesheet" href="{{asset("assets/css/style-rtl.css")}}">
    @else
        <link rel="stylesheet" href="{{asset("assets/css/style-ltr.css")}}">
    @endif
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">

    {{-- Load rtl.css only for RTL locales (contains overrides for RTL layout) --}}
    @if($isRtl)
        <link rel="stylesheet" href="{{asset("assets/css/rtl.css")}}">
    @endif

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Slick Slider theme CSS (optional) -->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    @stack('styles')
    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @stack('json')

    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kxqm47bwto");
    </script>
</head>
<body class="{{ $isRtl ? 'rtl' : 'ltr' }}">
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- End Preloader Area -->
<!-- Start Ecorik Navbar Area -->
<header>
    <div class="eorik-nav-style eorik-nav-style-four fixed-top">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('index') }}" class="logo">
                    <img style="width: 5rem;padding-bottom: 0.5rem"
                         src="{{asset("../assets/img/logo/logo-mobile.webp")}}"
                         alt="{{ __('layout.logo_alt') }}">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img style="width: 10rem" src="{{asset("../assets/img/logo/logo.webp")}}"
                                 alt="{{ __('layout.logo_alt') }}">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link dropdown-toggle active">
                                        {{ __('layout.nav.home') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'#services') }}"
                                       class="nav-link dropdown-toggle">{{ __('layout.nav.services') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'/blog') }}" class="nav-link dropdown-toggle">
                                        {{ __('layout.nav.blogs') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'/universities') }}"
                                       class="nav-link dropdown-toggle">
                                        {{ __('layout.nav.universities') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'/cities') }}" class="nav-link dropdown-toggle">
                                        {{ __('layout.nav.cities') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'/house') }}" class="nav-link dropdown-toggle">
                                        {{ __('layout.nav.houses') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url(app()->getLocale().'/contactUs') }}"
                                       class="nav-link dropdown-toggle">
                                        {{ __('layout.nav.contact') }}
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="sidebar-modal">
        <div class="modal {{ $isRtl ? 'right' : 'left' }} fade" id="staticBackdrop">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        <h2 class="modal-title" id="myModalLabel2"
                            style="display: flex; justify-content: center; align-items: center;">
                            <a href="{{ route('index') }}">
                                <img style="width: 15rem;margin-top: 2rem"
                                     src="{{asset("../assets/img/logo/logo.webp")}}"
                                     alt="{{ __('layout.logo_alt') }}">
                            </a>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">{{ __('layout.sidebar.about_title') }}</h3>
                            <p class="intro">
                                <strong>{{ __('layout.sidebar.intro_strong') }}</strong>
                            </p>
                            <p>
                                {{ __('layout.sidebar.p1') }}
                            </p>
                            <p>
                                {{ __('layout.sidebar.p2') }}
                            </p>
                            <p>
                                {{ __('layout.sidebar.p3') }}
                            </p>
                            <a class="default-btn" href="{{ url(app()->getLocale().'/consult') }}">
                                {{ __('layout.sidebar.consult_button') }}
                                <i class="{{ $arrowIcon }}"></i>
                            </a>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">{{ __('layout.sidebar.additional_links_title') }}</h3>
                            <ul>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/blog') }}" class="link">
                                        {{ __('layout.sidebar.link.blogs') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/universities') }}" class="link">
                                        {{ __('layout.sidebar.link.universities') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/cities') }}" class="link">
                                        {{ __('layout.sidebar.link.cities') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/house') }}" class="link">
                                        {{ __('layout.sidebar.link.houses') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">{{ __('layout.sidebar.contact_title') }}</h3>
                            <ul class="contact-info">
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    {{ __('layout.contact.email_label') }}
                                    <span><a href="mailto:emami@strasgroup.com">emami@strasgroup.com</a></span>
                                </li>
                                <li>
                                    <i class='bx bxl-whatsapp'></i>
                                    {{ __('layout.contact.whatsapp_label') }}
                                    <span><a href="tel:+33780953333">۰۰۳۳۷۸۰۹۵۳۳۳</a></span>
                                </li>
                                <li>
                                    <i class="bx bxs-phone-call"></i>
                                    {{ __('layout.contact.iran_phone_label') }}
                                    <span><a href="tel:+989120087194">۰۹۱۲۰۰۸۷۱۹۴</a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">{{ __('layout.sidebar.social_title') }}</h3>
                            <ul class="social-list">
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/apply_vip_conseil/">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
<!-- Start Footer Area -->
<footer class="footer-top-area pt-140 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="footer-middle-area pt-60">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <a href="{{ route('index') }}">
                            <img src="{{asset("../assets/img/logo/logo.webp")}}"
                                 alt="{{ __('layout.logo_alt') }}">
                        </a>
                        <p>{{ __('layout.footer.about_short') }}</p>
                        <ul class="social-icon">
                            <li>
                                <a href="#">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/apply_vip_conseil/">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>{{ __('layout.footer.quick_links_title') }}</h3>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.home') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'#services') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.services') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/universities') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.universities') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/cities') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.cities') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.about') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/contactUs') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.contact') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://applyvipconseil.com/sitemap.xml">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.links.sitemap') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>{{ __('layout.footer.services_title') }}</h3>
                        <ul>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.residence') }} </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.education') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.accommodation') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.translation') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.admin_support') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url(app()->getLocale().'/consult') }}">
                                    <i class="right-icon bx {{ $chevronsDir }}"></i>
                                    {{ __('layout.footer.services.arrival_support') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>{{ __('layout.footer.contact_title') }}</h3>
                        <ul class="information">
                            {{--                            <li class="address">--}}
                            {{--                                <i class="flaticon-maps-and-flags"></i>--}}
                            {{--                                <span>آدرس</span>--}}
                            {{--                                ایران ، استان تهران ، میدان آزادی ، خیابان 9 شرقی--}}
                            {{--                            </li>--}}
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>{{ __('layout.contact.whatsapp_label') }}</span>
                                <a href="tel:+33780953333">
                                    0033-780-95-33-33
                                </a>
                            </li>
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>{{ __('layout.contact.iran_phone_label') }}</span>
                                <a href="tel:+989120087194">
                                    0098-912-008-7194
                                </a>
                            </li>
                            <li class="address">
                                <i class="flaticon-envelope"></i>
                                <span>{{ __('layout.contact.email_label') }}</span>
                                <a href="mailto:info@applyvipcoseil.com">
                                    info@applyvipconseil.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="designed">
                        <p>{{ __('layout.footer.designed_by') }} <a
                                href="https://www.pouyasadri.com" target="_blank">PouyaSadri</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{asset("../assets/img/shape/white-shape-bottom.png")}}" alt="{{ __('layout.footer.shape_alt') }}">
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
<!-- End Go Top Area -->


<script src="{{asset("../assets/js/jquery.min.js")}}"></script>

<script src="{{asset("../assets/js/bootstrap.bundle.min.js")}}"></script>

<script src="{{asset("../assets/js/meanmenu.min.js")}}"></script>

<script src="{{asset("../assets/js/owl.carousel.min.js")}}"></script>

<script src="{{asset("../assets/js/wow.min.js")}}"></script>

<script src="{{asset("../assets/js/nice-select.min.js")}}"></script>

<script src="{{asset("../assets/js/magnific-popup.min.js")}}"></script>

<script src="{{asset("../assets/js/jquery.mixitup.min.js")}}"></script>

<script src="{{asset("../assets/js/appear.min.js")}}"></script>

<script src="{{asset("../assets/js/odometer.min.js")}}"></script>

<script src="{{asset("../assets/js/bootstrap-datepicker.min.js")}}"></script>

<script src="{{asset("../assets/js/ofi.min.js")}}"></script>

<script src="{{asset("../assets/js/jarallax.min.js")}}"></script>

<script src="{{asset("../assets/js/form-validator.min.js")}}"></script>

<script src="{{asset("../assets/js/contact-form-script.js")}}"></script>

<script src="{{asset("../assets/js/ajaxchimp.min.js")}}"></script>

@if($isRtl)
    <script src="{{asset("../assets/js/custom-rtl.js")}}"></script>
@else
    <script src="{{asset("../assets/js/custom-ltr.js")}}"></script>
@endif
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@stack('scripts')
</body>
</html>
