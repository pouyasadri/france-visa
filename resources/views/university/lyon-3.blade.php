@extends('layout')
@section('title',"معرفی دانشگاه لیون ۳")
@section('content')

    <div class="page-title-area bg-lyon-3">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه لیون ۳</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه لیون ۳</li>
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
                        <h2>دانشگاه لیون ۳</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/lyon_3_university.jpg")}}" alt="دانشگاه لیون ۳">
                        </div>
                        <h3>تاسیس</h3>
                        <p>
                            دانشگاه لیون ۳ در اوایل دهه ۱۹۷۰ (۲۶ ژوئیه ۱۹۷۳) تأسیس شد. اساتید این دانشگاه انقلاب علمی را
                            پس از حوادث مه ۶۸
                            که جهان آکادمیک را تکان داد، آغاز کردند. دانشکده‌های گوناگونی نظیر جغرافیا، مهندسی روستایی،
                            تاریخ و یک دانشکده
                            فلسفه با بیش از ۹۰ دانشجوی دکترا در این دانشگاه وجود دارد. لیون ۳ از دانشگاه لیون قدیمی‌تر
                            است که در سال ۱۸۹۶
                            تأسیس شده بود.
                        </p>
                        <h3 class="mt-20">لوکیشن دانشگاه لیون ۳</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11136.680745538117!2d4.8530438!3d45.747734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4f7816ca8d%3A0x508d760befcb222d!2sUniversit%C3%A9%20Jean%20Moulin%20Lyon%203!5e0!3m2!1sfr!2sfr!4v1690998325482!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            دانشگاه لیون ۳ دارای سه پردیس مجزا است: "Les Quais" در کنار رودخانه رون، "Manufacture des
                            Tabacs" در بخش
                            جنوب شرقی لیون و دیگری در Bourg-en-Bresse.
                        </p>
                        <h3>دانشکده‌ها و رشته‌های دانشگاه لیون ۳</h3>
                        <p class="mb-30">
                            دانشگاه لیون ۳ به دانشکده‌ها و رشته‌های متعددی در حوزه‌های مختلف پرداخته است، از جمله:
                        <ul style="list-style: inside">
                            <li>دانشکده حقوق</li>
                            <li>دانشکده فلسفه</li>
                            <li>دانشکده مدیریت بازرگانی (IAE، Institut d’Administration des Entreprises)</li>
                            <li>دانشکده هنر</li>
                            <li>دانشکده زبان</li>
                        </ul>
                        همچنین دانشگاه لیون ۳ با همکاری ۴۰۰ مدیر اجرایی از شرکت‌های خصوصی و خارجی در دانشکده مدیریت
                        (IAE) به آموزش
                        کمک می‌کند.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/lyon_3_university_1.webp")}}" alt="دانشگاه لیون ۳">
                        </div>
                        <h3>مدارک مورد نیاز برای اخذ پذیرش در دانشگاه لیون ۳</h3>
                        <p class="mb-30">
                            برای ثبت نام در دانشگاه لیون ۳، مدارک زیر لازم است:
                        <ul style="list-style: inside">
                            <li>اپلیکیشن درخواست آنلاین</li>
                            <li>انگیزه نامه (SOP)</li>
                            <li>ریز نمرات تحصیلی به همراه ترجمه</li>
                            <li>دانشنامه یا دیپلم دبیرستان به همراه ترجمه</li>
                            <li>توصیه نامه (LOR)</li>
                            <li>رزومه (CV)</li>
                            <li>رفرنس زبان فرانسوی</li>
                            <li>رفرنس زبان انگلیسی</li>
                        </ul>
                        </p>
                        <h3>دانشگاه لیون ۳ دولتی یا خصوصی؟</h3>
                        <p class="mb-30">
                            دانشگاه ژان مولن لیون ۳ یک دانشگاه دولتی است و در حوزه‌هایی نظیر حقوق، سیاست، فلسفه، مدیریت
                            و زبان تخصص دارد.
                        </p>
                        <h3>رتبه جهانی و کشوری دانشگاه لیون ۳</h3>
                        <p class="mb-30">
                            دانشگاه لیون ۳ در رتبه‌بندی جهانی توسط Times Higher Education رتبه ۱۲۰۱ را کسب کرده است و از
                            نظر بررسی
                            دانشجویان در Studyportals، امتیاز کلی ۴٫۰ ستاره دارد. در رتبه‌بندی کشوری نیز در میان
                            دانشگاه‌های فرانسه رتبه
                            ۱۲ را از آن خود کرده است.
                        </p>
                        <h3>زبان در دانشگاه لیون ۳</h3>
                        <p class="mb-30">
                            دانشگاه لیون ۳ در برخی رشته‌ها آموزش‌هایی به زبان انگلیسی ارائه می‌دهد، اما داشتن زبان
                            فرانسوی نیز به دانشجویان
                            کمک می‌کند.
                        </p>
                        <h3>کلام آخر</h3>
                        <p class="mb-30">
                            اگر در زمینه مهاجرت تحصیلی و اقامت در فرانسه نیاز به مشاوره دارید، با ما تماس بگیرید تا
                            اطلاعات دقیق‌تری
                            دریافت کنید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/lyon_3.png")}}" alt="دانشگاه لیون ۳">
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
                        <div class="ask-question">
                            <h3>سوال بپرس</h3>
                            <form id="contactForm">
                                <!-- Form fields go here -->
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
