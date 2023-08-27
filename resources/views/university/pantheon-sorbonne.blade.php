@extends('layout')
@section('title',"معرفی دانشگاه پانتئون سوربن پاریس")
@section('content')

    <div class="page-title-area bg-pantheon">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پانتئون سوربن پاریس</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پانتئون سوربن پاریس</li>
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
                        <h2>دانشگاه پانتئون سوربن پاریس</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/pantheon_university.jpg")}}"
                                 alt="دانشگاه پانتئون سوربن پاریس">
                        </div>
                        <h3>تاسیس</h3>
                        <p>
                            دانشگاه پانتئون سوربن تاریخ جالبی دارد. در سال ۱۹۷۱ پس از اعتراضات ماه مه ۱۹۶۸، از دو
                            دانشکده دانشگاه تاریخی پاریس که به طور عامیانه به آن سوربن گفته می‌شود، ایجاد شد. این مرکز
                            آموزش عالی تاریخی را داراست.
                        </p>
                        <h3 class="mt-20">لوکیشن دانشگاه سوربن پاریس</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21003.212951968875!2d2.3073685!3d48.8505515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671dd98fffb41%3A0xfecd14d84c0a92b5!2sCampus%20des%20Cordeliers%20-%20Sorbonne%20Universit%C3%A9!5e0!3m2!1sfr!2sfr!4v1691002038922!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>
                            دفتر مرکزی پانتئون سوربن در میدان دو پانتئون در محله لاتین، پاریس قرار دارد. این دانشگاه جزء
                            محوطه تاریخی سوربن قرار می‌گیرد و بیش از ۲۵ ساختمان در سراسر پاریس شامل مرکز پیر مندس فرانسه
                            و Maison des Sciences Économiques را در بر می‌گیرد.
                        </p>
                        <h3>دانشگاه سوربن پاریس دولتی یا خصوصی؟</h3>
                        <p>
                            دانشگاه پانتئون سوربن یک دانشگاه دولتی است و تمامی مزایای این وضعیت را داراست.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/pantheon_university_1.jpg")}}"
                                 alt="دانشگاه پانتئون سوربن پاریس">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p>
                            دانشگاه پانتئون سوربن بیش از ۴۵۰۰۰ دانشجو دارد و حدود ۲۰٪ از آن‌ها دانشجویان بین‌المللی
                            هستند.
                        </p>
                        <h3>رتبه جهانی و کشوری دانشگاه پانتئون سوربن پاریس</h3>
                        <p>
                            در رتبه‌بندی جهانی دانشگاه QS در سال ۲۰۲۱، دانشگاه Panthéon-Sorbonne در جایگاه ۲۸۷ قرار
                            گرفته است. امتیاز کلی ۴٫۰ ستاره از دانشجویان برای این دانشگاه در بررسی‌های Studyportals
                            دریافت کرده است. در رتبه‌بندی کشوری نیز این دانشگاه رتبه ۹ را کسب کرده است.
                        </p>
                        <h3>هزینه تحصیل در دانشگاه سوربن پاریس</h3>
                        <p>
                            در دانشگاه‌های دولتی فرانسه شهریه معمولاً وجود ندارد، اما هزینه‌های ثبت نام ممکن است وجود
                            داشته باشد. دولت بسیاری از هزینه‌های آموزشی را پوشش می‌دهد و به طور معمول هزینه واقعی تحصیل
                            به تقریباً ۱۰۰۰۰ یورو در سال می‌رسد که بخش قابل توجهی از آن را دولت تامین می‌کند.
                        </p>
                        <h3>زبان تدریس در دانشگاه سوربن پاریس</h3>
                        <p>
                            دانشگاه پانتئون سوربن پاریس در دوره‌های کارشناسی بیشتراً از زبان فرانسه استفاده می‌کند. اما
                            در برخی دوره‌های مقطع فوق‌لیسانس که به طور کامل به انگلیسی برگزار می‌شوند، کیفیت بالایی
                            دارد.
                        </p>
                        <h3>افتخارات دانشگاه سوربن پاریس</h3>
                        <p>
                            در سال ۲۰۲۱، دانشگاه سوربن پاریس در رشته‌های مختلف به رتبه‌های برتر دست یافته است. به عنوان
                            مثال:
                        <ul>
                            <li>باستان‌شناسی: بیست و پنجم جهان (اول در فرانسه)</li>
                            <li>فلسفه: بیست و هفتمین جهان (دومین در فرانسه)</li>
                            <li>تاریخچه: سی و سومین جهان (اول در فرانسه)</li>
                            <li>جغرافیا: سی و پنجمین جهان (اول در فرانسه)</li>
                            <li>زبان‌های مدرن: شصت و هفتمین جهان (سومین در فرانسه)</li>
                            <li>هنر و طراحی: ۱۰۱-۱۵۰ جهان (چهارمین در فرانسه)</li>
                            <li>معماری و محیط‌سازی: ۱۵۱-۲۰۰ جهان (اول در فرانسه)</li>
                            <li>مطالعات توسعه: ۳۷ جهان (اولین در فرانسه)</li>
                            <li>سیاست و مطالعات بین‌المللی: ۵۱-۱۰۰ جهان (دومین در فرانسه)</li>
                            <li>انسان‌شناسی: ۵۱-۱۰۰ جهان (اول در فرانسه)</li>
                            <li>سیاست و اداره اجتماعی: ۱۰۱-۱۲۰ جهان (دومین در فرانسه)</li>
                            <li>حسابداری و امور مالی: ۱۰۱-۱۵۰ جهان (پنجمین در فرانسه)</li>
                            <li>مطالعات کسب و کار و مدیریت: ۱۰۱-۱۵۰ جهان (هفتمین در فرانسه)</li>
                        </ul>
                        </p>
                        <h3>آخرین مهلت ثبت نام</h3>
                        <p>
                            در کشور فرانسه، معمولاً باید تا پایان اکتبر مدارک خود را برای ثبت نام ارسال کنید. تاریخ
                            اعلام نتایج نیز در ماه آوریل اعلام می‌شود و به طور معمول اطلاع‌رسانی توسط دانشگاه در همین
                            زمان انجام می‌شود.
                        </p>
                        <h3>مدارک مورد نیاز برای اخذ پذیرش</h3>
                        <p>
                            برای ثبت نام در دانشگاه پانتئون سوربن، به مدارک زیر نیاز دارید:
                        <ul>
                            <li>اپلیکیشن درخواست آنلاین</li>
                            <li>انگیزه‌نامه (SOP)</li>
                            <li>ریز نمرات تحصیلی به همراه ترجمه</li>
                            <li>دانشنامه یا دیپلم دبیرستان به همراه ترجمه</li>
                            <li>توصیه‌نامه (LOR)</li>
                            <li>رزومه (CV)</li>
                            <li>رفرنس زبان فرانسوی</li>
                            <li>رفرنس زبان انگلیسی</li>
                        </ul>
                        </p>
                        <h3>کلام آخر</h3>
                        <p>
                            اگر در زمینه مهاجرت تحصیلی و اقامت در فرانسه نیاز به مشاوره دارید، با ما تماس بگیرید. ما به
                            خدمت هموطنانی که قصد سفر به فرانسه دارند، می‌پردازیم و اطلاعات دقیق‌تری را به اشتراک خواهیم
                            گذاشت.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/pantheon.png")}}"
                                             alt="دانشگاه پانتئون سوربن پاریس">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li><i class='bx bx-check'></i> تاریخچه معتبر</li>
                                            <li><i class='bx bx-check'></i> تخصص‌های متنوع</li>
                                            <li><i class='bx bx-check'></i> محیط آموزشی بین‌المللی</li>
                                            <li><i class='bx bx-check'></i> امکانات و تجهیزات مدرن</li>
                                            <li><i class='bx bx-check'></i> پژوهش‌های برتر</li>
                                        </ul>
                                    </div>
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
