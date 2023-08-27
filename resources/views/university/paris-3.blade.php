@extends('layout')
@section('title',"معرفی دانشگاه پاریس ۳")
@section('content')

    <div class="page-title-area bg-paris-3">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پاریس ۳</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پاریس ۳</li>
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
                        <h2>دانشگاه پاریس ۳ سوربن جدید: مرکزی برای آموزش و تحصیل</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/paris_3_university.jpg")}}"
                                 alt="تصویر دانشگاه پاریس ۳ سوربن جدید">
                        </div>
                        <h3>تأسیس و تاریخچه</h3>
                        <p>
                            دانشگاه سوربن نوول، شناخته شده به عنوان دانشگاه سوربن نوول یا دانشگاه پاریس 3، محل ارائه
                            آموزش‌های
                            برجسته در زمینه‌های زبان، ادبیات، هنر، علوم انسانی و علوم اجتماعی در قلب پاریس است. با تأسیس
                            در سال 1971،
                            این مؤسسه جزو سیزده دانشگاه نوپا محسوب می‌شود که به جای دانشگاه پاریس قدیمی، پس از واقعه‌های
                            سال 1968،
                            تأسیس شد.
                        </p>
                        <h3 class="mt-20">مکان و محیط</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.965529168461!2d2.351692!3d48.8397962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6739464bab6b1%3A0xf88b91f36aab3e5!2sUniversit%C3%A9%20Sorbonne%20Nouvelle!5e0!3m2!1sfr!2sfr!4v1690996762229!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            دانشگاه سوربن نوول در منطقه ۱۲ پاریس، در پردیس Nation واقع شده است. این دانشگاه با تخصص‌های
                            متنوع در زمینه‌های مختلف
                            هنری و انسانی، در محیطی تاریخی قرار دارد. مقر دانشگاه در محوطه تاریخی سوربن واقع شده که به
                            اشتراک با دو دانشگاه دیگر
                            قرار دارد.
                            در سال ۲۰۲۲، دو محل اصلی دانشگاه (سوربن ۱۲ و نیشن) جایگزین سایت قدیمی سنسیر شدند. جزئیات
                            بیشتر در متن آمده است.
                        </p>
                        <h3>نوع مؤسسه</h3>
                        <p class="mb-30">
                            دانشگاه سوربن نوول یک دانشگاه دولتی است که با تمرکز بر کیفیت آموزش‌ها و پژوهش‌ها به جامعه
                            خدمت می‌کند.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_3_university_1.jpg")}}"
                                 alt="تصویر دانشگاه پاریس ۴ - سوربن">
                        </div>
                        <h3>تنوع فرهنگی و بین‌المللی</h3>
                        <p class="mb-30">
                            از آنجا که دانشگاه پاریس ۳ برخوردار از تأثیر بین‌المللی است، سیاست‌هایی را برای پذیرش و
                            یکپارچه‌سازی دانشجویان
                            بین‌المللی اجرا می‌کند. حدود ۳۰ درصد از دانشجویان این دانشگاه از جوامع جهان مختلف به دانشگاه
                            می‌پیوندند.
                        </p>
                        <h3>رتبه‌بندی جهانی و ملی</h3>
                        <p class="mb-30">
                            در سال 2021، دانشگاه سوربن نوول به عنوان یکی از ۵۰ دانشگاه برتر جهان در زمینه زبان‌ها توسط
                            رده‌بندی معتبر QS
                            شناخته شد. این دانشگاه همچنین یکی از برترین مؤسسات آموزشی کشور در بسیاری از حوزه‌ها محسوب
                            می‌شود. در سال
                            2022، در رده‌بندی جهانی QS، دانشگاه سوربن نوول به جایگاه ۳۰ جهانی دست یافته است. همچنین، این
                            دانشگاه در زمینه‌های
                            مختلف نیز رتبه‌بندی شده است:
                        </p>
                        <ul style="list-style: inside">
                            <li>
                                زبان‌های مدرن: رتبه ۳۲ جهان (نخستین در فرانسه)
                            </li>
                            <li>
                                هنرها: رتبه ۷۱ جهان (سومین در فرانسه)
                            </li>
                            <li>
                                علوم انسانی: رتبه ۱۰۱-۱۵۰ جهان (نخستین در فرانسه)
                            </li>
                            <li>
                                زبان‌های کهن: رتبه ۵۱-۱۰۰ جهان (دومین در فرانسه)
                            </li>
                            <li>
                                ارتباطات و رسانه: رتبه ۱۰۱-۱۵۰ جهان (نخستین در فرانسه)
                            </li>
                            <li>
                                جامعه‌شناسی: رتبه ۱۵۱-۲۰۰ جهان (پنجمین در فرانسه)
                            </li>
                            <li>
                                تاریخ: رتبه ۱۵۱-۲۰۰ جهان (پنجمین در فرانسه)
                            </li>
                        </ul>
                        <h3>هزینه تحصیل در دانشگاه پاریس ۳ سوربن</h3>
                        <p class="mb-30">
                            در دانشگاه‌های دولتی فرانسه، از جمله دانشگاه پاریس ۳ سوربن جدید، شهریه‌های مناسبی اخذ
                            می‌شود. دولت عمده هزینه‌های
                            آموزشی را برای دانشگاه‌های دولتی پرداخت می‌کند، بنابراین تفاوتی ندارد که آیا دانشجوی خارجی
                            هستید یا تابعیت
                            فرانسه دارید. اگرچه هزینه واقعی تحصیل شبیه به سایر مناطق جهان است و حدود ۱۰۰۰۰ یورو در سال
                            است، اما دولت به
                            شدت در کمک به دانشجویان تمرکز دارد.
                        </p>
                        <h3>زبان تدریس</h3>
                        <p class="mb-30">
                            برای دوره‌های تحصیلات تکمیلی در حوزه‌های مختلف هنری و انسانی، دانشکده هنر، زبان، ادبیات،
                            علوم انسانی و علوم
                            اجتماعی، چارچوب مشترک اروپایی برای زبان‌ها را اعمال می‌کند. به طور کلی، مهارت زبان فرانسه به
                            سطح B2 یا به‌بالا
                            مورد نیاز است. در برخی از رشته‌های لیسانس، دانشجویان بین‌المللی ممکن است با سطح B1 نیز قبول
                            شوند.
                        </p>
                        <h3>مهلت ثبت نام</h3>
                        <p>
                            در کل، در فرانسه، بهتر است تا قبل از پایان اکتبر، مدارک خود را برای دانشگاه ارسال کنید.
                            تاریخ اعلام نتایج معمولاً
                            در ماه آوریل اعلام می‌شود و در نزدیکی آن تاریخ، اطلاعات خود را از طریق ایمیل دریافت خواهید
                            کرد. تصمیم نهایی
                            درباره پذیرش دانشجویان خارجی توسط دانشگاه میزبان اتخاذ می‌شود.
                        </p>
                        <p>
                            همچنین، دانشجویان برای اخذ تاییدیه نهایی دپارتمان‌های مورد نظر باید الزامات آکادمیک آنها را
                            پایبندی کنند. عموماً
                            میانگین نمرات ۶۰٪ یا بالاتر قبل از ورود به دانشگاه مورد نیاز است، اما این شرایط ممکن است در
                            رشته‌ها متفاوت باشد.
                            در صورت عدم اطمینان از شرایط تحصیلی، مشاوره با یک مربی تحصیلی در خارج از کشور توصیه می‌شود.
                        </p>
                        <h3>پایان‌نامه</h3>
                        <p class="mb-30">
                            اگر در زمینه مهاجرت تحصیلی و اقامت در فرانسه به مشاوره و خدمات اجتماعی در این کشور نیاز
                            دارید، با ما تماس بگیرید.
                            تیم متخصص ما آماده پاسخگویی و ارائه راهنمایی به هموطنانی است که قصد تحصیل در فرانسه دارند.
                            برای کسب اطلاعات
                            بیشتر، با یک تماس به ما بپیوندید و از بسته‌های مهاجرتی و خدمات ما آگاه شوید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/paris_3.jpg")}}"
                                             alt="تصویر دانشگاه پاریس ۳ سوربن جدید">
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
                                                ۴. امکانات و تجهیزات مدرن
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۵. پژوهش‌های برتر
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
