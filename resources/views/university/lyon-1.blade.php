@extends('layout')
@section('title',"معرفی دانشگاه لیون ۱")
@section('content')

    <div class="page-title-area bg-lyon-1">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه لیون ۱</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه لیون ۱</li>
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
                            <ol id="board">

                            </ol>
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

                        <h2>دانشگاه لیون ۱</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/lyon_1_university.webp")}}" alt="دانشگاه لیون ۱">
                        </div>
                        <h3>تاریخچه تأسیس</h3>
                        <p>دانشگاه لیون ۱ که پیشتر دانشکده پزشکی لیون بود، در تاریخ ۸ نوامبر ۱۸۷۴ تأسیس شد. این دانشگاه
                            در سال ۱۹۷۱
                            با ادغام دانشکده علوم لیون و دانشکده پزشکی به دانشگاه کلود برنارد لیون ۱ تغییر نام داد.
                        </p>
                        <p class="mb-30">
                            دانشگاه لیون ۱ نام خود را از نام فیزیولوژیست فرانسوی برجسته، کلود برنارد، که در زمینه‌های
                            علمی و فناوری،
                            پزشکی و علوم ورزشی تخصص داشت، گرفته است. از سال ۲۰۰۹، این دانشگاه به صورت مستقل عمل می‌کند و
                            در سال ۲۰۲۰
                            بودجه سالانه بیش از ۴۲۰ میلیون یورو را مدیریت کرد و بیش از ۲۸۵۷ هیئت علمی را در بر گرفته
                            است.
                        </p>
                        <h3 class="mt-20">مکان‌یابی دانشگاه</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11130.215642098558!2d4.864358!3d45.7801296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea143dd86f25%3A0x7bfebbdcecc615b7!2sUniversit%C3%A9%20Claude%20Bernard%20Lyon%201!5e0!3m2!1sfr!2sfr!4v1691001138308!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            دانشگاه لیون ۱ در منطقه‌های مختلف لیون پراکنده شده است. اصلی‌ترین ساختمان‌های اداری، آموزشی
                            و تحقیقاتی در
                            ویلوربان و مناطق گرلند، راکفلر و لنک قرار دارند. همچنین، پردیس LyonTech-la Doua و
                            دانشکده‌های علم و
                            فناوری و علوم ورزشی در شمال Villeurbanne و پردیس سلامت لیون شرق نیز جزو مکان‌های مهم دانشگاه
                            هستند.
                        </p>
                        <h3>نوع دانشگاه</h3>
                        <p class="mb-30">
                            دانشگاه کلود برنارد لیون ۱ یک دانشگاه دولتی در شهر لیون فرانسه است.
                        </p>
                        <!-- ... اطلاعات و ویژگی‌های بیشتر درباره دانشگاه لیون ۱ ... -->
                        <h3>رتبه‌بندی جهانی و ملی</h3>
                        <p class="mb-30">
                            دانشگاه لیون ۱ در رتبه‌بندی جهانی به عنوان یکی از بهترین دانشگاه‌های جهان در جایگاه ۳۲۰ قرار
                            دارد و همچنین
                            در رتبه‌بندی داخلی فرانسه در جایگاه ۱۳ قرار دارد. همچنین در زمینه تحقیقات و پژوهش نیز در
                            جایگاه ۱۶۲
                            جهانی قرار دارد.
                        </p>
                        <h3>هزینه تحصیل و شهریه</h3>
                        <p class="mb-30">
                            شهریه دانشگاه برای دانشجویان خارجی در دانشگاه لیون ۱ به تساوی شهروندان فرانسوی است. کل هزینه
                            تحصیل (هزینه‌های
                            مستقیم و غیرمستقیم) برای دوره‌های چهارساله در سال تحصیلی جدید در حدود ۴۵،۱۴۴ دلار تعیین شده
                            است.
                        </p>
                        <h3>جمعیت دانشجویی</h3>
                        <p class="mb-30">
                            دانشگاه لیون ۱ با حدود ۴۰۰۰۰ دانشجو از جمله تعداد زیادی دانشجوی خارجی (۱۰.۵٪ از کل
                            دانشجویان) به مطالعه و
                            تحقیق پرداخته و به عنوان یک محیط گرم و پویا در زمینه آموزش و تحقیقات معتبر شناخته می‌شود.
                        </p>
                        <!-- ... اطلاعات بیشتر در مورد رشته‌ها، زبان‌های تدریس و دیگر جزئیات ... -->
                        <p class="mb-30">
                            در صورت تمایل به مهاجرت تحصیلی و اقامت در فرانسه، با ما تماس بگیرید تا اطلاعات و راهنمایی
                            لازم را از
                            مشاوران ما دریافت کنید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/lyon_1.png")}}" alt="دانشگاه لیون ۱">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                تاریخچه معتبر
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
                                                پژوهش‌های برتر
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
