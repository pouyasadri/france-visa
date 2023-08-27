@extends('layout')
@section('title',"معرفی دانشگاه نیس")
@section('content')

    <div class="page-title-area bg-nice">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه نیس</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه نیس</li>
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
                        <h2>دانشگاه نیس: فرصت‌های یادگیری در دانشگاه Cote d'Azur</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/nice_university.jpg")}}" alt="دانشگاه نیس">
                        </div>
                        <h3>تاریخچه و تأسیس</h3>
                        <p class="mb-30">دانشگاه نیس، به عنوان Université de Nice در سال 1639 تأسیس شد. این دانشگاه سنتی
                            شامل دانشکده حقوق و دانشکده پزشکی است و به نام دانشگاه آزور نیز شناخته می‌شود. در سال 2019،
                            دانشگاه نیس جایگزین شده و مالکیت آن به موسسه سوفیا آنتی‌پولیس و انجمن ComUE منتقل شده است،
                            که از سال 2013 فعالیت داشته‌اند.
                        </p>
                        <h3 class="mt-20">موقعیت جغرافیایی دانشگاه</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92283.61537243958!2d7.1946494!3d43.7133965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd01552258547%3A0xf160114745d1e06!2sUniversit%C3%A9%20Nice%20Sophia%20Antipolis!5e0!3m2!1sfr!2sfr!4v1691003788688!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            دانشگاه کوت دازور یک مؤسسه تحقیقاتی آموزشی است که در منطقه نیس و سواحل دریای آزور واقع شده
                            است. پردیس‌های دانشگاهی در مناطق مختلف شهر و بخش‌هایی از Alpes-Maritimes از جمله نیس، کن،
                            گراس و منتون و همچنین پارک فناوری سوفیا آنتی‌پولیس قرار دارند. دانشگاه کوت دازور عضوی از
                            منطقه آکادمیک Provence-Alpes-Côte d’Azur می‌باشد که شامل آکادمی های Aix-Marseille و Nice نیز
                            می‌شود.
                        </p>
                        <h3>وضعیت دانشگاه نیس</h3>
                        <p class="mb-30">دانشگاه نیس به عنوان یک دانشگاه دولتی معتبر در نیس، فرانسه شناخته می‌شود.
                        </p>
                        <!-- ... ویژگی‌ها، مزایا و اطلاعات بیشتر درباره دانشگاه نیس ... -->
                        <h3>رشته‌ها و دپارتمان‌ها</h3>
                        <p class="mb-30">
                            دانشگاه نیس با تنوع رشته‌ها در دپارتمان‌های مختلف شما را در پیشرفت تحصیلی یاری می‌رساند. از
                            حقوق و علوم سیاسی گرفته تا فناوری اطلاعات و تربیت بدنی، رشته‌های متعددی در این دانشگاه در
                            دسترس شماست. همچنین، دانشگاه در زمینه هوش مصنوعی با مؤسسه 3IA Côte d’Azur نیز متمایز است که
                            در حوزه هوش مصنوعی و کاربردهای آن فعالیت می‌کند.
                        </p>
                        <h3>مهلت‌ها و اطلاعات ثبت نام</h3>
                        <p class="mb-30">
                            برای ثبت نام در دانشگاه نیس در کشور فرانسه، مهلت‌ها و اطلاعات مرتبط با ثبت نام و ارسال مدارک
                            خود را از منابع رسمی دانشگاه دریافت نمایید. همچنین، تاریخ‌های اعلام نتایج و اطلاعات مرتبط با
                            آن نیز از منابع دانشگاه در دسترس خواهد بود.
                        </p>
                        <h3>زبان‌های تدریس</h3>
                        <p class="mb-30">
                            در دانشگاه نیس، علاوه بر زبان فرانسوی، دوره‌هایی به زبان انگلیسی نیز ارائه می‌شود. همچنین،
                            تعدادی از دوره‌ها به ترکیب زبان‌های مختلف نیز تدریس می‌شوند. برای اطلاعات دقیق‌تر، به
                            دپارتمان‌های مختلف دانشگاه مراجعه نمایید.
                        </p>
                        <h3>نکات پایانی</h3>
                        <p class="mb-30">
                            در صورت تمایل به مهاجرت تحصیلی و اقامت در فرانسه، از خدمات مشاوره ما بهره‌برداری کنید. تیم
                            متخصص ما آماده ارائه اطلاعات و راهنمایی در مورد مهاجرت تحصیلی به کشور زیبای فرانسه است. از
                            مشاوران ما سؤال بپرسید و برنامه‌های مهاجرتی ما را بررسی کنید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/nice.png")}}" alt="دانشگاه نیس">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                تاریخچه معتبر و قدیمی
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                تخصص‌های متنوع و مدرن
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
                                                پژوهش‌های برتر و نوآوری
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
