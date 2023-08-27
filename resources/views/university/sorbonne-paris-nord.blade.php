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
                            <img src="{{asset("assets/img/paris_nord_university.jpg")}}" alt="تصویر دانشگاه پاریس شمال">
                        </div>
                        <h3>تاریخچه و تاسیس</h3>
                        <p>
                            دانشگاه پاریس شمال، به عنوان یکی از ۱۳ دانشگاه خودمختار سوربن پاریس، با نام سابق Université
                            de Paris XIII شناخته می‌شد. این دانشگاه به عنوان نتیجه تقسیم دانشگاه مادر تأسیس شد و از آن
                            زمان به عنوان Université Sorbonne Paris Nord شناخته می‌شود.
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d41918.64710230801!2d2.3334787!3d48.9550959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66922af4c2e23%3A0xfe3113a781a13fca!2sUniversit%C3%A9%20Sorbonne%20Paris%20Nord!5e0!3m2!1sfr!2sfr!4v1690991649424!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="mt-20">موقعیت جغرافیایی دانشگاه پاریس شمال</h3>
                        <p class="mb-30">دانشگاه پاریس شمال از 5 پردیس (Villetaneuse، Bobigny، Saint-Denis، la Plaine
                            Saint-Denis و Argenteuil) تشکیل شده است. این دانشگاه به عنوان یک مرکز آموزش چند رشته‌ای در
                            شمال پاریس در مناطق Villetaneuse، Saint-Denis، La Plaine Saint-Denis، Bobigny و Argenteuil
                            واقع شده است.</p>
                        <p><strong>محوطه دانشگاه در پنج پردیس سازماندهی شده است:</strong>
                        <ol>
                            <li>
                                پردیس Villetaneuse
                            </li>
                            <li>
                                پردیس سنت دنیس، مؤسسه دانشگاه فناوری پاریس سیزدهم (Institut universitaire dechnologie de
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
                        <h3>وضعیت حقوقی دانشگاه پاریس شمال</h3>
                        <p class="mb-30">
                            دانشگاه پاریس شمال یا Université Sorbonne Paris Nord یک مؤسسه آموزش عالی دولتی در کشور
                            فرانسه است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_nord_university_1.jpg")}}"
                                 alt="تصویر دانشگاه پاریس شمال">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            این دانشگاه بیش از ۲۵۰۰۰ دانشجو در دوره‌های آموزش اولیه و مداوم، در زمینه‌های متنوع از جمله
                            بهداشت و پیراپزشکی، پذیرایی می‌کند.
                        </p>
                        <h3>رشته‌های دانشگاه پاریس شمال</h3>
                        <p class="mb-30">
                            <strong>معتبرترین رشته‌های دانشگاه پاریس شمال عبارتند از:</strong>
                        <ul style="list-style: inside">
                            <li>
                                بهداشت
                            </li>
                            <li>
                                زیست‌شناسی انسانی و پزشکی
                            </li>
                            <li>
                                علوم انسانی، زبان و ادبیات
                            </li>
                            <li>
                                علوم اجتماعی، حقوق و علوم سیاسی
                            </li>
                            <li>
                                اقتصاد، مدیریت و ارتباطات
                            </li>
                        </ul>
                        </p>
                        <h3>زبان تدریس در دانشگاه پاریس شمال</h3>
                        <p class="mb-30">
                            اکثر دوره‌های دانشگاه پاریس شمال به زبان فرانسوی برگزار می‌شوند. در موارد خاصی دوره‌هایی در
                            مقاطع ارشد و دکتری به صورت تحقیقاتی به زبان‌های انگلیسی و فرانسوی برگزار می‌شوند و داوطلبان
                            باید از تسلط بر هر دو زبان برخوردار باشند.
                        </p>
                        <h3>هزینه تحصیل در دانشگاه پاریس شمال</h3>
                        <p class="mb-30">
                            در مورد هزینه‌های تحصیل در دانشگاه پاریس شمال، باید گفت که هزینه تحصیل یکی از موارد مهم در
                            انتخاب دوره‌های تحصیلی است. اما خوشبختانه، این دانشگاه انواع بورس‌های تحصیلی را برای
                            دانشجویان خود فراهم می‌کند. برای کسب اطلاعات دقیقتر و درخواست بورس‌ها، به سایت رسمی دانشگاه
                            مراجعه فرمایید.
                        </p>
                        <h3>پایان کلام</h3>
                        <p class="mb-30">
                            اگر برای مهاجرت تحصیلی و اقامت در فرانسه به راهنمایی و خدمات مشاوره‌ای نیاز دارید، با ما
                            تماس بگیرید. تیم ما با تخصص و تجربه در زمینه مهاجرت، آماده به ارائه خدمات دقیق و کارآمد به
                            شما هموطنان عزیز هستند. همین حالا با ما تماس بگیرید تا از مشاوره‌های مهاجرتی و خدمات ما
                            بهره‌برداری کنید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/paris_nord.png")}}"
                                             alt="تصویر دانشگاه پاریس شمال">
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
