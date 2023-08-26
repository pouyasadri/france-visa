@extends('layout')
@section('title',"معرفی دانشگاه پاریس شمال")
@section('content')

    <div class="page-title-area bg-paris-nord">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پاریس شمال</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پاریس شمال</li>
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


                        <h2>دانشگاه پاریس شمال</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/paris_nord_university.jpg")}}" alt="دانشگاه پاریس شمال">
                        </div>
                        <h3>تاسیس</h3>
                        <p>

                            دانشگاه پاریس شمال یا Université Sorbonne Paris Nord، که سابقاً Université de Paris XIII
                            نامیده می‌شد، یکی از 13 دانشگاه خودمختار سوربن پاریس است که پس از تقسیم این دانشگاه تأسیس
                            شد.
                        </p>

                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d41918.64710230801!2d2.3334787!3d48.9550959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66922af4c2e23%3A0xfe3113a781a13fca!2sUniversit%C3%A9%20Sorbonne%20Paris%20Nord!5e0!3m2!1sfr!2sfr!4v1690991649424!5m2!1sfr!2sfr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">لوکیشن دانشگاه پاریس شمال</h3>
                        <p class="mb-30">این دانشگاه از 5 پردیس (Villetaneuse، Bobigny، Saint-Denis، la Plaine
                            Saint-Denis و Argenteuil) تشکیل شده است. درواقع، این یک دانشگاه چند رشته‌ای در شمال پاریس،
                            در شهرداری های Villetaneuse، Saint-Denis، La Plaine Saint-Denis، Bobigny و Argenteuil واقع
                            شده است.</p>
                        <p><b>محوطه دانشگاه در پنج پردیس سازماندهی شده است:</b>
                        <ol>
                            <li>
                                پردیس Villetaneuse
                            </li>
                            <li>
                                در سنت دنیس، مؤسسه دانشگاه فناوری پاریس سیزدهم (Institut universitaire dechnologie de
                                Paris XIII یا IUT به فرانسوی)
                            </li>
                            <li>
                                پردیس La Plaine Saint-Denis
                            </li>
                            <li>
                                پردیس Bobigny— دارای یک موسسه فناوری و پزشکی است
                            </li>
                        </ol>
                        </p>
                        <h3>دانشگاه پاریس ۷ دولتی یا خصوصی؟</h3>
                        <p class="mb-30">
                            دانشگاه پاریس نورد یک مرکز آموزش عالی دولتی در کشور فرانسه است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_nord_university_1.jpg")}}" alt="دانشگاه پاریس شمال">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            این دانشگاه دارای بیش از ۲۵۰۰۰ دانشجو در دوره‌های آموزشی اولیه یا مداوم، در بسیاری از زمینه
                            ها از جمله بهداشت و پیراپزشکی است.
                        </p>
                        <h3>رشته‌های دانشگاه پاریس شمال</h3>
                        <p class="mb-30">
                            <b>رشته‌های زیر معتبرترین رشته‌های دانشگاهی در این دانشگاه هستند:</b>
                        <ul style="list-style: inside">
                            <li>
                                بهداشت
                            </li>
                            <li>
                                زشکی و زیست شناسی انسانی
                            </li>
                            <li>
                                ادبیات، زبان، علوم انسانی و جوامع
                            </li>
                            <li>
                                حقوق، علوم سیاسی و اجتماعی
                            </li>
                            <li>
                                علوم ارتباطات – اقتصاد و مدیریت
                            </li>
                        </ul>
                        </p>
                        <h3>
                            زبان تدریس در دانشگاه پاریس شمال
                        </h3>
                        <p class="mb-30">
                            اکثر دوره‌های دانشگاه پاریس شمال به زبان فرانسوی است؛ گاهی برخی دوره‌ها در مقاطع ارشد و
                            دکتری به شکل التقاطی برگزار می‌شود و دانشجو باید هردو زبان انگلیسی و فرانسه را مسلط باشد.
                        </p>
                        <h3>
                            هزینه تحصیل در دانشگاه پاریس شمال
                        </h3>
                        <p class="mb-30">
                            در رابطه با بحث هزینه تحصیل در این دانشگاه، باید گفت همانطور که یکی از فاکتورهای مهم در نظر
                            گرفتن مدرک کارشناسی ارشد هزینه تحصیل است، خوشبختانه، گزینه‌های زیادی برای کمک به دانشجویان
                            برای تأمین بودجه برنامه کارشناسی ارشد خود وجود دارد. به سایت این دانشگاه بروید و اطلاعات را
                            از طریق راهنمای بورسیه دریافت کنید تا بدانید کدام بورس تحصیلی از این دانشگاه می‌تواند در
                            دسترس شما باشد و چگونه باید برای آنها درخواست دهید.
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
                                        <img src="{{asset("assets/img/paris_nord.png")}}" alt="دانشگاه پاریس شمال">
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
