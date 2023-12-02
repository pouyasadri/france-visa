@extends('layout')
@section('title',"
معرفی دانشگاه پاریس سود
")
@section('content')
    <div class="page-title-area bg-paris-sud">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پاریس سود</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پاریس سود</li>
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
                            <h4 class="service-details-title">محتویات مقاله</h4>
                            <ol id="board"></ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">ارتباط با ما</h4>
                            <ul>
                                <li>
                                    <a href="/consult">
                                        درخواست مشاوره مهاجرت تحصیلی به فرانسه
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
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <h2>دانشگاه پاریس سود SUD</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("../assets/img/universities/Paris_Sud/paris_sud_university.webp")}}"
                                 alt="برترین دانشگاه های پاریس | پاریس سود">
                        </div>

                        <h3>تاریخچه و تاسیس</h3>
                        <p>دانشگاه پاریس SUD یا پاریس-XI یک مؤسسه آموزش عالی فرانسوی است که در تاریخ 1 ژانویه 1971 تأسیس
                            شد. در تاریخ
                            1 ژانویه 2020 با دانشگاه پاریس-ساکلی ادغام گردید. این ادغام به سبب ایجاد امکانات و فرصت‌های
                            بهتر برای دانشجویان و پژوهشگران در محیط آموزشی ارتقا و توسعه داده شد. اکنون تعداد 2419
                            معلم-پژوهشگر و محقق در 78 آزمایشگاه تحقیقاتی دانشگاه پاریس-سود، که هم‌اکنون جزئی از دانشگاه
                            پاریس-ساکلی است، به ارتقا و ارائه دانش برتر مشغول به کار هستند.</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10532.85897962028!2d2.1478373!3d48.7013763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67fdbd65f8b35%3A0x99bf9ed96d86b4c0!2sUniversit%C3%A9%20Paris-Saclay!5e0!3m2!1sfr!2sfr!4v1690985486852!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>موقعیت جغرافیایی دانشگاه پاریس سود SUD</h3>
                        <p class="mb-30">این مؤسسه آموزش عالی در مناطق متنوعی از شهر پاریس و حومه‌های آن فعالیت می‌کند؛
                            شهرهایی چون
                            Antony، Bures-sur-Yvette، Cachan، Châtenay-Malabry، Fontenay-aux-Roses، Gif-sur-Yvette، Le
                            Kremlin-Bicêtre، Orsay، Le Plessis-Robinson و Sceaux. این مناطق، هم‌اکنون جزء از محیط‌های
                            آموزشی پیشرفته دانشگاه پاریس-ساکلی محسوب می‌شوند. در ادغامی که در 1 ژانویه 2020 رخ داد، به
                            منظور توسعه و بهبود فرآیند آموزش و تحقیقات، بخشی از 567,331 متر مربع مساحت ساخته شده (SHON)
                            دانشگاه به زیرساخت‌های تحقیقاتی اختصاص یافته است.</p>
                        <h3>وضعیت حقوقی دانشگاه پاریس SUD</h3>
                        <p class="mb-30">
                            دانشگاه پاریس سود به‌عنوان یک مؤسسه آموزش عالی دولتی، همچنان با افتخار و با همت‌های نخبه
                            دانشجویان و پژوهشگران خود فعالیت می‌کند. در سال 2020، این دانشگاه با دانشگاه پاریس-ساکلی
                            به‌عنوان یک موسسه آموزش عالی دولتی به ادغام رفته و تلاش دارند تا با ادغام این دو نهاد، منابع
                            و امکانات بهبود یافته را به دست دانشجویان و پژوهشگران خود برسانند.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/universities/Paris_Sud/paris_sud_university_1.webp")}}"
                                 alt="برترین دانشگاه های پاریس | پاریس سود">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            دانشگاه پاریس سود به عنوان یکی از مراکز آموزش عالی با جذب نزدیک به ۱۰۰۰۰ دانشجوی داخلی و
                            خارجی به پرورش و ارتقاء دانش و تخصص می‌پردازد. تعداد ۳۱۴۰۰ دانشجوی این دانشگاه در دسته‌های
                            مختلف در حال تحصیل هستند و از این تعداد، بیش از ۵۰۰۰ نفر دانشجو با ملیت خارجی به دوره‌های
                            مختلف در دانشگاه پاریس-سود مشغولند.
                        </p>
                        <h3>پایان‌نامه</h3>
                        <p class="mb-30">
                            اگر قصد دارید در زمینه مهاجرت تحصیلی و اقامت در فرانسه اقدام کنید، با اطمینان می‌توانید با
                            تیم ما در تماس باشید. ما با رویکردی دوستانه و حرفه‌ای، با اطلاعاتی کامل و کارشناسانی مجرب در
                            این زمینه، به شما در مراحل مختلف این پروسه یاری خواهیم کرد. همین حالا با ما تماس بگیرید تا
                            به شما در انتخاب پیشرفته‌ترین گزینه‌های مهاجرتی کمک کنیم.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/universities/Paris_Sud/paris_sud_logo.webp")}}"
                                             alt="برترین دانشگاه های پاریس | پاریس سود">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۱. تاریخچه معتبر
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۲. تخصص‌های متنوع
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۳. محیط آموزشی بین‌المللی
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۴. پژوهش‌های برتر
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۵. امکانات و تجهیزات مدرن
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ask-question">
                            <h3>سوال بپرس</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="نام خود را وارد کنید" placeholder="نام شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="ایمیل خود را وارد کنید" placeholder="ایمیل شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="تلفن خود را وارد کنید" class="form-control"
                                                   placeholder="تلفن شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="موضوع خود را وارد کنید" placeholder="موضوع">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="پیام خود را وارد کنید"
                                                  placeholder="پیام شما"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													ارسال پیام
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
