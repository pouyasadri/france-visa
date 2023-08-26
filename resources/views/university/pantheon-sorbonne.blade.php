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
                        <p class="mb-30">دانشگاه پانتئون سوربن تاریخ جالبی دارد. این مرکز آموزش عالی در سال ۱۹۷۱ پس از
                            اعتراضات ماه مه ۱۹۶۸، که منجر به تقسیم یکی از قدیمی‌ترین دانشگاه‌های جهان شد، از دو دانشکده
                            دانشگاه تاریخی پاریس که به طور عامیانه به آن سوربن گفته می‌شود، ایجاد شد.
                        </p>
                        <h3 class="mt-20">لوکیشن دانشگاه سوربن پاریس</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21003.212951968875!2d2.3073685!3d48.8505515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671dd98fffb41%3A0xfecd14d84c0a92b5!2sCampus%20des%20Cordeliers%20-%20Sorbonne%20Universit%C3%A9!5e0!3m2!1sfr!2sfr!4v1691002038922!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">

                            دفتر مرکزی پانتئون سوربن در میدان دو پانتئون در محله لاتین، جایی بین منطقه 5 و 6 پاریس قرار
                            گرفته است. این دانشگاه همچنین بخشی از محوطه تاریخی سوربن را دربرمی‌گیرد. درواقع، نام فعلی
                            دانشگاه به این دو ساختمان نمادین اشاره دارد: سوربن و پانتئون (بخش سنت ژاک). به طور کلی،
                            پردیس دانشگاه شامل بیش از 25 ساختمان در سراسر پاریس است، مانند مرکز پیر مندس فرانسه
                            (“Tolbiac”)، Maison des Sciences Économiques، در میان سایر نواحی که در آن ساختمان‌هایی را به
                            تملک درآورده است.
                        </p>
                        <h3>دانشگاه سوربن پاریس دولتی یا خصوصی؟</h3>
                        <p class="mb-30">دانشگاه پانتئون سوربن یک دانشگاه دولتی است تمامی مزایای این خصیصه را در اختیار
                            دارد.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/pantheon_university_1.jpg")}}"
                                 alt="دانشگاه پانتئون سوربن پاریس">
                        </div>
                        <h3>
                            جمعیت دانشجویان
                        </h3>
                        <p class="mb-30">دانشگاه پانتئون سوربن دارای ۴۵۰۰۰ دانشجو دارد و دانشجویان بین المللی ۲۰ درصد از
                            جمعیت آن را تشکیل می دهند.
                        </p>
                        <h3>رتبه جهانی و کشوری دانشگاه پانتئون سوربن پاریس</h3>
                        <p class="mb-30">Panthéon-Sorbonne در رتبه بندی جهانی دانشگاه QS در سال 2021 در رتبه 287 قرار
                            گرفت. بر اساس بررسی‌های دانشجویان در Studyportals، دارای امتیاز کلی 4.0 ستاره است. در همین
                            سال رتبه کشوری این دانشگاه 9 بود.

                            حال آنکه در 2020 The Times Higher Education در رتبه 601-800 قرار داشت و رتبه کشوری‌اش 32
                            بود؛ همچنین؛ عنوان رتبه اول در داخل فرانسه در رشته باستان شناسی انتخاب شد، همچنین در تاریخ،
                            حقوق و اقتصاد به عنوان برترین رتبه بندی شد.

                            در رتبه بندی Eduniversal فرانسه، رتبه دوم کشور در اقتصاد و رتبه دوم در حقوق را به خود اختصاص
                            داده است
                        </p>

                        <h3>
                            هزینه تحصیل در دانشگاه سوربن پاریس
                        </h3>
                        <p class="mb-30">
                            در دانشگاه‌های دولتی فرانسه شهریه‌ای وجود ندارد، اما هزینه‌های ثبت نام ناچیزی باید بپردازید.
                            زیرا دولت اکثر هزینه‌های برنامه‌های آموزشی ارائه شده در مؤسسات دولتی را پوشش می‌دهد. هزینه
                            واقعی تحصیل مانند سایر نقاط جهان است، تقریباً ۱۰۰۰۰ یورو در سال که همانطور که گفته شد بخش
                            زیادی از آن را دولت تقبل می‌کند.

                        </p>
                        <h3>
                            زبان تدریس در دانشگاه سوربن پاریس
                        </h3>
                        <p class="mb-30">
                            دانشگاه پانتئون سوربن پاریس طبیعتا در دوره‌های کارشناسی بیشتر به زبان فرانسه دوره برگزار
                            می‌کند اما به خاطر دوره‌هایی که در مقطع فوق‌لیسانس کاملا به انگلیسی برگزار می‌شوند و دارای
                            کیفیت بالایی هستند نیز شهرت دارد.
                        </p>
                        <h3>
                            افتخارات دانشگاه سوربن پاریس
                        </h3>
                        <p class="mb-30">
                            دانشگاه سوربن پاریس ۱ در سال ۲۰۲۱ موفق به اخذ رتبه‌های زیر در رشته‌های برتر و محبوبی شد که
                            در پایین به تفکیک آمده است:
                        <ul style="list-style: inside">
                            <li>باستان شناسی: بیست و پنجم جهان (اول در فرانسه)</li>
                            <li>فلسفه: بیست و هفتمین جهان (دومین در فرانسه)</li>
                            <li>تاریخچه: سی و سومین جهان (اول در فرانسه)</li>
                            <li>جغرافیا: سی و پنجمین جهان (اول در فرانسه)</li>
                            <li>زبان های مدرن: شصت و هفتمین جهان (سومین در فرانسه)</li>
                            <li>هنر و طراحی: ۱۰۱-۱۵۰ جهان (چهارمین در فرانسه)</li>
                            <li>معماری و محیط ساخت: ۱۵۱-۲۰۰ جهان (اول در فرانسه)</li>
                            <li>مطالعات توسعه: ۳۷ جهان (اولین در فرانسه)</li>
                            <li>سیاست و مطالعات بین المللی: ۵۱-۱۰۰ جهان (دومین در فرانسه)</li>
                            <li>انسان شناسی: ۵۱-۱۰۰ جهان (اول در فرانسه)</li>
                            <li>سیاست و اداره اجتماعی: ۱۰۱-۱۲۰ جهان (دومین در فرانسه)</li>
                            <li>حسابداری و امور مالی: ۱۰۱-۱۵۰ جهان (پنجم در فرانسه)</li>
                            <li>مطالعات کسب و کار و مدیریت: ۱۰۱-۱۵۰ جهان (هفتم در فرانسه)</li>
                        </ul>
                        </p>
                        <h3>
                            آخرین مهلت ثبت نام
                        </h3>
                        <p class="mb-30">
                            به طور کلی، در کشور فرانسه شما باید دست کم تا پیش از اتمام اکتبر مدارک خود را برای دانشگاه
                            ارسال کرده باشید. زمان و تاریخ اعلام نتایج هم در آپریل همه ساله از پیش اعلام می‌شود ولی
                            حدودا همین حوالی ایمیل دانشگاه را دریافت خواهید کرد.
                        </p>
                        <h3>
                            مدارک مورد نیاز برای اخذ پذیرش
                        </h3>
                        <p class="mb-30">
                            <b>برای ثبت نام در دانشگاه لیون ۱ شما به مدارک زیر نیاز دارید:</b>
                        <ul style="list-style: inside">
                            <li>
                                اپلیکیشن درخواست آنلاین
                            </li>
                            <li>
                                انگیزه نامه (SOP)
                            </li>
                            <li>
                                ریز نمرات تحصیلی به همراه ترجمه
                            </li>
                            <li>
                                دانشنامه یا دیپلم دبیرستان به همراه ترجمه
                            </li>
                            <li>
                                توصیه نامه (LOR)
                            </li>
                            <li>
                                رزومه (CV)
                            </li>
                            <li>
                                رفرنس زبان فرانسوی
                            </li>
                            <li>
                                رفرنس زبان انگلیسی
                            </li>
                        </ul>
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
                                        <img src="{{asset("assets/img/pantheon.png")}}"
                                             alt="دانشگاه پانتئون سوربن پاریس">
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
