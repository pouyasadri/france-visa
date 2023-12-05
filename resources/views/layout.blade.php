<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--    <meta name="keywords"--}}
    {{--          content="آژانس مهاجرت و مسافرت ایران به فرانسه, مهاجرت به فرانسه, ویزای فرانسه, سفر به فرانسه, ایرانیان در فرانسه, زندگی در فرانسه, مهاجرت تحصیلی به فرانسه, خرید خانه در فرانسه, سرمایه گذاری در املاک فرانسه">--}}
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    {{--    <meta name="description"--}}
    {{--          content="آژانس مهاجرت و مسافرت A.V.C، همراه شما در سفر هیجان‌انگیز به سمت زندگی بهتر در فرانسه. خدمات ما شامل مشاوره تحصیلی، ویزای تحصیلی، اقامت موقت و دائم، خرید ملک در فرانسه و خدمات حقوقی است. با بیش از دهه‌ها تجربه، A.V.C همراه شما در داستان موفقیتتان است.">--}}

    <meta name="author" content="Apply Vip Conseil| AVC">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}"/>

    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.rtl.min.css")}}">

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

    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/rtl.css")}}">
    @stack('styles')
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" alt="Favicon">

</head>
<body>
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
                <a href="/" class="logo">
                    <img style="width: 5rem;padding-bottom: 0.5rem" src="{{asset("../assets/img/logo/logo-mobile.webp")}}"
                         alt="A.V.C: تحصیل، زندگی، سرمایه گذاری در فرانسه">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img style="width: 10rem" src="{{asset("../assets/img/logo/logo.webp")}}"
                                 alt="A.V.C: تحصیل، زندگی، سرمایه گذاری در فرانسه">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('index')}}" class="nav-link dropdown-toggle active">
                                        خانه
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services" class="nav-link dropdown-toggle">خدمات
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/blog" class="nav-link dropdown-toggle">
                                        اخبار
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/universities" class="nav-link dropdown-toggle">
                                        معرفی دانشگاه ها
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cities" class="nav-link dropdown-toggle">
                                        معرفی شهر ها
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/house" class="nav-link dropdown-toggle">
                                        املاک
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contactUs" class="nav-link dropdown-toggle">
                                        تماس با ما
                                        <i class='bx bx-chevron-up'></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Start Other Option -->
                            <div class="others-option">
                                <a class="sidebar-button" href="#" data-bs-toggle="modal"
                                   data-bs-target="#staticBackdrop">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="sidebar-modal">
        <div class="modal right fade" id="staticBackdrop">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        <h2 class="modal-title" id="myModalLabel2"
                            style="display: flex; justify-content: center; align-items: center;">
                            <a href="/">
                                <img style="width: 15rem;margin-top: 2rem"
                                     src="{{asset("../assets/img/logo/logo.webp")}}"
                                     alt="A.V.: دروازه شما به سوی زندگی بهتر در فرانسه">
                            </a>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">درباره ما</h3>
                            <p class="intro">
                                <strong>A.V.C: همراه شما در سفر هیجان‌انگیز زندگی بهتر در فرانسه</strong>
                            </p>
                            <p>
                                A.V.C یک شرکت مشاوره مهاجرتی است که خدمات گسترده‌ای از مشاوره تحصیلی تا ویزای تحصیلی،
                                اقامت
                                موقت و دائم، حتی خرید ملک در فرانسه را ارائه می‌دهد.
                            </p>
                            <p>
                                تیم ما از کارشناسان ماهر در زمینه‌های مختلف مهاجرت تشکیل شده است. ما با سابقه‌ای درخشان
                                در
                                زمینه مهاجرت به فرانسه، آماده‌ایم تا به شما در رسیدن به اهدافتان کمک کنیم.
                            </p>
                            <p>
                                شما می‌توانید روی تجربه و دانش ما حساب کنید تا رویاهای تحصیل، زندگی و سرمایه‌گذاری خود
                                در
                                فرانسه را به واقعیت تبدیل کنید.
                            </p>
                            <a class="default-btn" href="/consult">
                                درخواست مشاوره در مهاجرت به فرانسه
                                <i class="flaticon-left-arrow"></i>
                            </a>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">پیوندهای اضافی</h3>
                            <ul>
                                <li>
                                    <a href="/blog" class="link">
                                        آخرین اخبار فرانسه
                                    </a>
                                </li>
                                <li>
                                    <a href="/universities" class="link">
                                        بهترین دانشگاه های فرانسه
                                    </a>
                                </li>
                                <li>
                                    <a href="/cities" class="link">
                                        محبوب ترین شهرهای فرانسه
                                    </a>
                                </li>
                                <li>
                                    <a href="/house" class="link">
                                        راهنمای خرید ملک در فرانسه
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">تماس با ما</h3>
                            <ul class="contact-info">
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    ایمیل
                                    <span><a href="mailto:emami@strasgroup.com">emami@strasgroup.com</a></span>
                                </li>
                                <li>
                                    <i class='bx bxl-whatsapp'></i>
                                    تلفن-واتساپ (فرانسه)
                                    <span><a href="tel:+33780953333">۰۰۳۳۷۸۰۹۵۳۳۳۳</a></span>
                                </li>
                                <li>
                                    <i class="bx bxs-phone-call"></i>
                                    تلفن (ایران)
                                    <span><a href="tel:+989120087194">۰۹۱۲۰۰۸۷۱۹۴</a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">شبکه اجتماعی</h3>
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
                                    <a href="#">
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
        <div class="section-title">
            <h2>عضویت در خبرنامه</h2>
            <p>با عضویت در خبرنامه، از آخرین اخبار و اطلاعیه‌ها باخبر شوید.</p>
        </div>
        <div class="footer-tops-area pb-60">
            <div class="row">
                <!-- Start Subscribe Area -->
                <div class="subscribe-wrap">
                    <form class="newsletter-form" data-toggle="validator">
                        <label>
                            <input type="email" class="input-tracking" placeholder="آدرس ایمیل" name="EMAIL" required
                                   autocomplete="off">
                        </label>

                        <button class="default-btn active" type="submit">
                            عضویت
                            <i class="flaticon-left-arrow"></i>
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <!-- End Subscribe Area -->
            </div>
        </div>
        <div class="footer-middle-area pt-60">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <a href="">
                            <img src="{{asset("../assets/img/logo.png")}}"
                                 alt="A.V.C : مهاجرت به فرانسه، ویزای فرانسه، سفر به فرانسه">
                        </a>
                        <p>ما با بهترین مشاوران مهاجرتی فرانسه، همراه شما در مسیر مهاجرت به این کشور هستیم.</p>
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
                                <a href="#">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>لینک های سریع</h3>
                        <ul>
                            <li>
                                <a href="/">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    صفحه اصلی
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    خدمات
                                </a>
                            </li>
                            <li>
                                <a href="/universities">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    معرفی دانشگاه های برتر فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/cities">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    معرفی شهر های محبوب فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    درباره A.V.C
                                </a>
                            </li>
                            <li>
                                <a href="/contactUs">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    تماس با ما
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>خدمات استراس گروپ</h3>
                        <ul>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    اقامت کشور فرانسه </a>
                            </li>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    مشاوره تحصیلی کشور فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    رزو محل اسکان در فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    ترجمه مدارک
                                </a>
                            </li>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    پشتیبانی اداری در فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/consult">
                                    <i class="right-icon bx bx-chevrons-left"></i>
                                    انجام امور اداری در بدو ورود به فرانسه
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>تماس با ما</h3>
                        <ul class="information">
                            {{--                            <li class="address">--}}
                            {{--                                <i class="flaticon-maps-and-flags"></i>--}}
                            {{--                                <span>آدرس</span>--}}
                            {{--                                ایران ، استان تهران ، میدان آزادی ، خیابان 9 شرقی--}}
                            {{--                            </li>--}}
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>تلفن-واتساپ (فرانسه)</span>
                                <a href="tel:+33780953333">
                                    0033-780-95-33-33
                                </a>
                            </li>
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>تلفن (ایران)</span>
                                <a href="tel:+989120087194">
                                    0098-912-008-7194
                                </a>
                            </li>
                            <li class="address">
                                <i class="flaticon-envelope"></i>
                                <span>ایمیل</span>
                                <a href="mailto:Emami@strasgroup.com">
                                    Emami@strasgroup.com
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
                        <p>طراحی و توسعه توسط <a
                                href="https://www.pouyasadri.com" target="_blank">PouyaSadri</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{asset("../assets/img/shape/white-shape-bottom.png")}}" alt="تصویر">
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

<script src="{{asset("../assets/js/custom.js")}}"></script>
@stack('scripts')
</body>
</html>
