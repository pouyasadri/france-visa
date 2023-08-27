@extends('layout')
@section('title',"معرفی دانشگاه پاریس ۷")
@section('content')

    <div class="page-title-area bg-paris-7">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پاریس ۷</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پاریس ۷</li>
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
                        <h2>دانشگاه پاریس 7: مرکز آموزشی برجسته</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/paris_7_university.jpg")}}" alt="دانشگاه پاریس 7">
                        </div>
                        <h3>تأسیس و تاریخچه</h3>
                        <p>
                            دانشگاه پاریس 7، با نام رسمی دانشگاه پاریس-دیدرو، به عنوان یک مرکز آموزشی چند رشته‌ای در قلب
                            شهر پاریس شناخته می‌شود. این دانشگاه از هفت دانشگاه معتبر آکادمی پاریس است و در سال 1971 پس
                            از تقسیم دانشگاه پاریس شکل گرفت. این انشعاب به عنوان یکی از اعضای بنیاد PRES Sorbonne Paris
                            Cité تشکیل شده بود.
                        </p>
                        <p>
                            در سال 2019، دانشگاه پاریس 7 با دانشگاه پاریس-دکارت و انستیتو فیزیک دو جهانی پاریس ادغام شد
                            و دانشگاه پاریس Cité را تشکیل داد. سپس، در ژانویه 2020، حقوق خود را به‌طور کامل به دسته‌ی
                            دانشگاهی Cité واگذار کرد.
                        </p>

                        <h3 class="mt-20">مکان دانشگاه پاریس 7</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42005.045959652336!2d2.3013979!3d48.8521963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc5ddba625d%3A0xe458ef3406693a9a!2sUniversit%C3%A9%20Paris%20Diderot%20Paris%207!5e0!3m2!1sfr!2sfr!4v1690993265823!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            مکان دانشگاه پاریس 7 در خیابان 12 rue de l’École de Médecine (منطقه 6 پاریس) واقع شده است.
                            این موقعیت در نزدیکی ساحل رودخانهٔ سن قرار گرفته و فاصله کمی از شهر دیجون دارد. دسترسی به
                            دانشگاه با استفاده از خطوط قطار RER B و متروی شماره‌های ۷ و ۱۴ بسیار راحت است. این دانشگاه
                            به عنوان یکی از برترین مراکز آموزش عالی و تحقیقاتی در زمینه‌های مختلف از جمله علوم، ریاضیات،
                            فیزیک، علوم زیستی، علوم اقتصادی و انسانی به شمار می‌آید.
                        </p>
                        <h3>نوع دانشگاه پاریس 7</h3>
                        <p class="mb-30">
                            دانشگاه پاریس 7 از دانشگاه‌های دولتی است که در حوزه‌های علوم، پزشکی، علوم انسانی و اجتماعی،
                            هنر و زبان تخصص دارد. این دانشگاه پس از ادغام با دانشگاه پاریس Cité تغییر نام داده است.
                            دانشگاه پاریس Cité به عنوان یکی از برترین دانشگاه‌های دولتی پاریس و فرانسه شناخته می‌شود و
                            در رتبه‌بندی QS برای سال 2023، در جایگاه 248 قرار دارد.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_7_university.jpg")}}" alt="دانشگاه پاریس 7">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            به‌عنوان یکی از بزرگترین دانشگاه‌های جهان و فرانسه، دانشگاه پاریس 7 همواره دانشجویانی از
                            سرتاسر جهان را به خود جذب کرده است. بر اساس آمار اخیر دانشگاه (2021)، تعداد کل دانشجویان در
                            این دانشگاه حدود ۶۴۱۰۰ نفر بوده است. این تعداد شامل دانشجویان کارشناسی، کارشناسی ارشد و
                            دکترا در رشته‌های مختلف از جمله علوم، ریاضیات، فیزیک، علوم زیستی، علوم اقتصادی، علوم انسانی
                            و مهندسی می‌شود. به همین دلیل، دانشگاه پاریس 7 به عنوان یکی از مقاصد محبوب برای تحصیل در
                            دانشگاه‌های جهان شناخته می‌شود.
                        </p>
                        <h3>الزامات پذیرش</h3>
                        <p class="mb-30">
                            <b>برای اقدام به ثبت نام در این دانشگاه، مدارک زیر لازم است:</b>
                        </p>
                        <ul style="list-style: inside">
                            <li>
                                فرم درخواست آنلاین
                            </li>
                            <li>
                                انگیزه‌نامه (SOP)
                            </li>
                            <li>
                                ریز نمرات تحصیلی همراه با ترجمه
                            </li>
                            <li>
                                دانشنامه یا دیپلم دبیرستان به همراه ترجمه
                            </li>
                            <li>
                                توصیه‌نامه (LOR)
                            </li>
                            <li>
                                رزومه (CV)
                            </li>
                            <li>
                                مدرک زبان فرانسوی
                            </li>
                            <li>
                                مدرک زبان انگلیسی (بسته به رشته و مقطع)
                            </li>
                        </ul>
                        <h3>
                            آخرین مهلت ثبت نام
                        </h3>
                        <p class="mb-30">
                            در کلیه رشته‌ها و مقاطع تحصیلی در فرانسه، بهتر است مدارک خود را حداقل تا اوایل اکتبر ارسال
                            نمایید. تاریخ اعلام نتایج معمولاً در ماه آوریل اعلام می‌شود و در همان تاریخ، شما به‌طور
                            معمول اطلاعیه دریافت خواهید کرد. از این رو، توصیه می‌شود که از اوایل سال متقاضیان به تأمین
                            مدارک و ثبت نام اقدام نمایند.
                        </p>
                        <h3>
                            رتبه‌بندی جهانی و ملی
                        </h3>
                        <p class="mb-30">
                            در سال 2012، دانشگاه پاریس 7 در محدوده‌ی رتبه‌های 101 تا 150 (در رشته ریاضیات در مقام 45)
                            قرار داشته و در رتبه‌بندی شانگهای، میانگین 4 تا 7 را در فرانسه احتلال کرده است. همچنین در
                            رتبه‌بندی جهانی QS برای سال 2012، رتبه 234 را کسب کرده و در رتبه‌بندی آموزش عالی تایمز، در
                            رتبه‌ی 166 قرار داشته است. همچنین، در رتبه‌بندی وبومتریکس جهانی، دانشگاه پاریس 7 در رتبه 786
                            قرار دارد.
                        </p>
                        <h3>
                            زبان تدریس در دانشگاه پاریس 7
                        </h3>
                        <p class="mb-30">
                            اکثر دوره‌ها و دروس دانشگاه پاریس 7 به زبان فرانسوی تدریس می‌شوند. با این حال، برخی از
                            دوره‌های مقاطع ارشد و دکتری به‌طور انتخابی به زبان انگلیسی برگزار می‌شوند. در نتیجه،
                            دانشجویان متقاضی باید برای پذیرش در این دوره‌ها، آشنایی خوبی با هر دو زبان داشته باشند.
                        </p>
                        <h3>پایان‌نامه</h3>
                        <p class="mb-30">
                            در صورتی که به خدمات مشاوره در زمینه مهاجرت تحصیلی و اقامت در فرانسه نیاز دارید، با اطمینان
                            با ما تماس بگیرید. ما با تمرکز بر کمک به هموطنانی که قصد تحصیل در فرانسه دارند، آماده‌ایم.
                            از اطلاعات ماجراجویی شما در فرانسه بهره‌مند شوید. برای اطلاعات بیشتر، با ما تماس بگیرید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/paris_7.png")}}" alt="دانشگاه پاریس 7">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                تاریخچه‌ای با اعتبار
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                تخصص‌های متنوع
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                محیط آموزشی بین‌المللی
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                امکانات و تجهیزات مدرن
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                پژوهش‌های برجسته
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
