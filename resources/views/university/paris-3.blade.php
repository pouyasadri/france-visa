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


                        <h2>دانشگاه پاریس ۳ سوربن جدید</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/paris_3_university.jpg")}}" alt="دانشگاه پاریس ۳ سوربن جدید">
                        </div>
                        <h3>تاسیس</h3>
                        <p>
                            دانشگاه سوربن نوول، همچنین به نام دانشگاه سوربن نوول یا دانشگاه پاریس 3 یا قبلا Censier
                            (برگرفته از نام یکی از سایت‌های سابق آن در خیابان Santeuil) یک دانشگاه فرانسوی واقع در
                            کلانشهر پاریس است. این دانشگاه که در سال 1971 تأسیس شد، یکی از سیزده دانشگاه جدید است که
                            جایگزین دانشگاه قدیمی پاریس شد، که پس از حوادث مه 1968 منحل شد.
                        </p>

                        <h3 class="mt-20">لوکیشن دانشگاه پاریس ۳ سوربن جدید</h3>
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.965529168461!2d2.351692!3d48.8397962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6739464bab6b1%3A0xf88b91f36aab3e5!2sUniversit%C3%A9%20Sorbonne%20Nouvelle!5e0!3m2!1sfr!2sfr!4v1690996762229!5m2!1sfr!2sfr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">


                            Sorbonne Nouvelle که در قلب منطقه 12 در پردیس Nation واقع شده است، آموزش های چند رشته ای سطح
                            بالا را در زمینه های زبان، ادبیات، هنر، علوم انسانی و علوم اجتماعی ارائه می دهد. در یک توضیح
                            تکمیلی، مقر دانشگاه سوربن نوول در محوطه تاریخی سوربن، ساختمانی تاریخی که با دو دانشگاه دیگر
                            مشترک است، قرار دارد.

                            گفتنی است، دو مکان اصلی این دانشگاه، امروز سوربن ۱۲ و نیشن (خیابان د پیکوس) هستند که در سال
                            ۲۰۲۲ جایگزین سایت قدیمی سنسیر شدند. که در بالاتر درباره آن توضیح داده شد.

                        </p>
                        <h3>دانشگاه سوربن جدید دولتی یا خصوصی؟</h3>
                        <p class="mb-30">
                            دانشگاه سوربن جدید یک دانشگاه دولتی است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_3_university_1.jpg")}}" alt="دانشگاه پاریس ۴ - سوربن">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            به دلیل قدرت نفوذ بین المللی خود، دانشگاه پارس ۳ سیاستی را برای استقبال و ادغام دانشجویان
                            بین المللی که ۳۰ درصد از جمعیت آن را تشکیل می دهند، اجرا می کند.
                        </p>
                        <h3>
                            رتبه جهانی و کشوری دانشگاه پانتئون سوربن پاریس
                        </h3>
                        <p class="mb-30">
                            این دانشگاه در رتبه بندی دانشگاه های جهانی بسیار معتبر QS در سال 2021 در بین 50 دانشگاه برتر
                            زبان جهان قرار گرفته است. همچنین یکی از بهترین دانشگاه های کشور در بسیاری از زمینه‌ها است.
                            در سال 2022، رتبه بندی دانشگاه های جهانی QS، این دانشگاه را در رده 30 جهان قرار داد. همچنین
                            این دانشگاه را در زمینه های زیر رتبه‌بندی کرد:
                        <ul style="list-style: inside">
                            <li>
                                زبان‌های مدرن: ۳۲ جهان (اولین در فرانسه)
                            </li>
                            <li>
                                هنرها: هفتاد و یکمین جهان (سومین در فرانسه)
                            </li>
                            <li>
                                علوم انسانی: رتبه ۷۱ جهان (سومین در فرانسه)
                            </li>
                            <li>
                                زبان‌های کهن: ۵۱-۱۰۰ جهان (دومین در فرانسه)
                            </li>
                            <li>
                                ارتباطات و رسانه: ۱۰۱- جهان ۱۵۰ (اول در فرانسه)
                            </li>
                            <li>
                                جامعه‌شناسی: ۱۵۱-۲۰۰ (پنجم در فرانسه)
                            </li>
                            <li>
                                تاریخ: ۱۵۱-۲۰۰ جهان (پنجمین در فرانسه)
                            </li>
                        </ul>
                        </p>
                        <h3>
                            هزینه تحصیل در دانشگاه پاریس سوربن ۳
                        </h3>
                        <p class="mb-30">

                            در دانشگاه‌های دولتی فرانسه، از جمله دانشگاه پاریس ۳ سوربن جدید، شهریه‌ای بسیار
                            مقرون‌به‌صرفه دریافت می‌شود. دراصل، دولت اکثر هزینه‌های برنامه‌های آموزشی دانشگاه‌های دولتی
                            را پوشش می‌دهد و فرقی نمی‌کند که شما دانشجوی خارجی باشید و ملیت فرانسوی نداشته باشید. هرچند
                            در حقیقت، هزینه واقعی تحصیل مانند سایر نقاط جهان است، تقریباً ۱۰۰۰۰ یورو در سال که همانطور
                            که گفته شد بخش زیادی از آن را دولت کمک می‌کند.
                        </p>
                        <h3>
                            زبان تدریس در دانشگاه پاریس ۳ سوربن جدید
                        </h3>
                        <p class="mb-30">
                            برای دوره‌های تحصیلات تکمیلی در دانشکده هنر، زبان، ادبیات، علوم انسانی و علوم اجتماعی یا
                            دانشکده علوم و مهندسی، طبق چارچوب مرجع مشترک اروپایی برای زبان‌ها، شرایط لازم برای مهارت
                            زبان فرانسه به طور کلی سطح B2 یا بالاتر است. برای لیسانس در بعضی رشته‌ها دانشجویان
                            بین‌المللی می‌توانند در برخی از دوره‌ها با B1 هم موفق به اخذ پذیرش شوند.
                        </p>
                        <h3>آخرین مهلت ثبت نام</h3>
                        <p>
                            به طور کلی، در کشور فرانسه شما باید دست کم تا پیش از اتمام اکتبر مدارک خود را برای دانشگاه
                            ارسال کرده باشید. زمان و تاریخ اعلام نتایج هم در آپریل همه ساله از پیش اعلام می‌شود ولی
                            حدودا همین حوالی ایمیل دانشگاه را دریافت خواهید کرد. ضمن اینکه تصمیم نهایی در مورد درخواست
                            تحصیل دانشجویان در خارج از کشور برای مؤسسه میزبان کاملاً بر عهده آن مؤسسه میزبان است.
                        </p>
                        <p class="mb-30">
                            دانشجویان همچنین باید الزامات آکادمیک دپارتمان های خود را برای دریافت تاییدیه نهایی دپارتمان
                            برای تحصیل در خارج از کشور برآورده کنند. معمولاً حداقل میانگین ۶۰٪ قبل از عزیمت است، اما این
                            می تواند در بین بخش ها متفاوت باشد. اگر دانش‌آموزان از شرایط تحصیلی خود مطمئن نیستند، باید
                            با معلم خصوصی تحصیل در خارج از کشور مشورت کنند.
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
                                        <img src="{{asset("assets/img/paris_3.jpg")}}" alt="دانشگاه پاریس ۳ سوربن جدید">
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
