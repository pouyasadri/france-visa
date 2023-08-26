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
                            <h4 class="service-details-title">اطلاعات مشتری</h4>
                            <ul>
                                <li>
                                    <a href="tel:021-12345678">
                                        021-12345678
                                        <i class='bx bx-phone-call bx-rotate-270'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hello@ecorik.com">
                                        hello@ecorik.com
                                        <i class='bx bx-envelope'></i>
                                    </a>
                                </li>
                                <li>
                                    ایران ، استان تهران ، میدان آزادی
                                    <i class='bx bx-location-plus'></i>
                                </li>
                                <li>
                                    9:00 عصر – 8:00 صبح
                                    <i class='bx bx-time'></i>
                                </li>
                            </ul>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">دانلود بروشورها</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        دانلود فایل (1)
                                        <i class='bx bxs-cloud-download'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        دانلود فایل (2)
                                        <i class='bx bxs-cloud-download'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        دانلود فایل (3)
                                        <i class='bx bxs-cloud-download'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        دانلود فایل (4)
                                        <i class='bx bxs-cloud-download'></i>
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
                            <img src="{{asset("../assets/img/paris_sud_university.jpg")}}" alt="دانشگاه پاریس سود">
                        </div>

                        <h3>تاسیس</h3>
                        <p>دانشگاه پاریس SUD یا پاریس-XINote 1 یک دانشگاه فرانسوی بود که در 1 ژانویه 1971 ایجاد شد. در 1
                            ژانویه 2020 با دانشگاه پاریس-ساکلی ادغام شد. 2419 معلم-پژوهشگر و محقق در 78 آزمایشگاه
                            تحقیقاتی دانشگاه پاریس-سود که حالا متعلق به ساکلی است، کار می‌کنند.</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10532.85897962028!2d2.1478373!3d48.7013763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67fdbd65f8b35%3A0x99bf9ed96d86b4c0!2sUniversit%C3%A9%20Paris-Saclay!5e0!3m2!1sfr!2sfr!4v1690985486852!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>لوکیشن دانشگاه پاریس سود SUD</h3>
                        <p class="mb-30">دانشگاه در شهرداری های زیر پردیس فعال داشت: Antony، Bures-sur-Yvette، Cachan،
                            Châtenay-Malabry، Fontenay-aux-Roses، Gif-sur-Yvette، Le Kremlin-Bicêtre، Orsay، Le
                            Plessis-Robinson، Sceaux. این بخشی از گروه موسسات آموزش عالی پاریس-ساکلی بود که در 1 ژانویه
                            2020 به نفع دانشگاه پاریس-ساکلی منحل شد. 47 درصد از 567,331 متر مربع مساحت سطح ساخته شده
                            (SHON) دانشگاه به تحقیق اختصاص دارد.</p>
                        <h3>دانشگاه پاریس SUD دولتی یا خصوصی؟</h3>
                        <p class="mb-30">
                            دانشگاه پاریس سود یک دانشگاه دولتی بود که در سال ۲۰۲۰ با دانشگاه پاریس-ساکلی ادغام شد که آن
                            نیز یک موسسه آموزش عالی دولتی است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_sud_university_1.png")}}" alt="دانشگاه پاریس سود">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            دانشگاه پاریس سود پذیرای نزدیک به ۱۰۰۰۰ دانش آموز بود که این مقدار امروز به جمعیت ساکلی
                            اضافه شده است. آمار می‌گوید ۳۱۴۰۰ دانشجو در این دانشگاه ثبت نام کرده اند که شامل بیش از ۵۰۰۰
                            دانشجو با ملیت خارجی در دانشگاه پاریس-سود می‌شود.
                        </p>
                        <h3>کلام آخر</h3>
                        <p class="mb-30">
                            اگر در زمینه مهاجرت تحصیلی و اقامت در فرانسه به مشاوره و خدمات اجتماعی حمایتی در این کشور
                            زیبا نیاز داشتید، حتما با ما تماس بگیرید، با تمرکز بر هموطنانی است که قصد سفر به فرانسه را
                            دارند. همین حالا یک تماس کوتاه با کارشناسان ما داشته باشید تا از چند و چونِ پکیج‌های مهاجرتی
                            ما با خبر شوید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/paris_sud.png")}}" alt="دانشگاه پاریس سود">
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
