<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Ecorik - Hotel & Resort HTML Template">
    <meta name="description" content="Ecorik - Hotel & Resort HTML Template">
    <meta name="author" content="Barat Hadian">

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

    <script src="https://www.amcharts.com/lib/3/ammap.js?3.17.0"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/franceLow.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

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
<div class="eorik-nav-style eorik-nav-style-four fixed-top">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="../assets/img/mobile-manu-logo.png" alt="Logo">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <!--                        TODO logo-->
                        <img src="../assets/img/home-five/logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link dropdown-toggle active">
                                    خانه
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
                            <a class="sidebar-button" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="/">
                            <img src="../assets/img/home-one/logo.jpg" alt="Logo">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">درباره ما</h3>
                        <p>در استراس‌گروپ، ما فقط مشاور نیستیم؛ ما هم‌راه شما در سفر هیجان‌انگیز به سمت زندگی بهتر در
                            فرانسه
                            هستیم. تیم ما از کارشناسان ماهر، خدمات گسترده‌ای از مشاوره تحصیلی تا ویزای تحصیلی، اقامت
                            موقت و دائم،
                            حتی خرید ملک در فرانسه را ارائه می‌دهند. وکلا ما با تخصص در ایران و فرانسه، آماده هدایت
                            حقوقی
                            شما هستند.</p>
                        <p>به ما اعتماد کنید تا رویاهای تحصیل، زندگی و سرمایه‌گذاری خود در فرانسه را به واقعیت تبدیل
                            کنیم.
                            با
                            بیش از دهه‌ها تجربه، استراس‌گروپ همراه شما در داستان موفقیتتان است.</p>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">پیوندهای اضافی</h3>
                        <ul>
                            <li>
                                <a href="/blog">
                                    اخبار
                                </a>
                            </li>
                            <li>
                                <a href="/universities">
                                    معرفی دانشگاه های فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/cities">
                                    معرفی شهر های محبوب فرانسه
                                </a>
                            </li>
                            <li>
                                <a href="/house">
                                    خرید ملک در فرانسه
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">تماس با ما</h3>
                        <ul class="contact-info">
                            {{--                            <li>--}}
                            {{--                                <i class="bx bx-location-plus"></i>--}}
                            {{--                                آدرس--}}
                            {{--                                <span> ایران ، استان تهران ، میدان آزادی ، خیابان 9 شرقی </span>--}}
                            {{--                            </li>--}}
                            <li>
                                <i class="bx bx-envelope"></i>
                                ایمیل
                                <span><a href="mailto:emami@strasgroup.com">emami@strasgroup.com</a></span>
                            </li>
                            <li>
                                <i class='bx bxl-whatsapp'></i>
                                تلفن-واتساپ (فرانسه)
                                <span><a href="tel:+33768688326">۰۰۳۳۷۶۸۶۸۸۳۲۶</a></span>
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

@yield('content')

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
                        <input type="email" class="input-tracking" placeholder="آدرس ایمیل" name="EMAIL" required
                               autocomplete="off">

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
                        <a href="/">
                            <img src="../assets/img/home-one/footer-logo.png" alt="تصویر">
                        </a>
                        <p>ما در خدمت شما هستیم تا بهترین مشاوره‌ها را در مسیر مهاجرت به فرانسه ارائه دهیم.</p>
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
                                    درباره استراس گروپ
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
                                <a href="tel:+33768688326">
                                    0033-768-68-83-26
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
        <img src="../assets/img/shape/white-shape-bottom.png" alt="تصویر">
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
<!-- End Go Top Area -->


<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/meanmenu.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/meanmenu.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/nice-select.min.js"></script>

<script src="../assets/js/magnific-popup.min.js"></script>

<script src="../assets/js/jquery.mixitup.min.js"></script>

<script src="../assets/js/appear.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>

<script src="../assets/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/js/ofi.min.js"></script>

<script src="../assets/js/jarallax.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/ajaxchimp.min.js"></script>

<script src="../assets/js/custom.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/nice-select.min.js"></script>

<script src="../assets/js/magnific-popup.min.js"></script>

<script src="../assets/js/jquery.mixitup.min.js"></script>

<script src="../assets/js/appear.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>

<script src="../assets/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/js/ofi.min.js"></script>

<script src="../assets/js/jarallax.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/ajaxchimp.min.js"></script>

<script src="../assets/js/custom.js"></script>
</body>
</html>
