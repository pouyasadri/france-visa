@extends('layout')
@section('title',"معرفی دانشگاه پاریس 2 Pantheon Assas")
@section('content')

    <div class="page-title-area bg-paris-2">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه پاریس 2 Pantheon Assas</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه پاریس ۲</li>
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


                        <h2>دانشگاه پاریس 2 Pantheon Assas</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/paris_2_university.jpg")}}"
                                 alt="دانشگاه پاریس 2 Pantheon Assas">
                        </div>
                        <h3>تاسیس</h3>
                        <p>


                            دانشگاه پانتئون سوربن تاریخ جالبی دارد. این مرکز آموزش عالی در سال ۱۹۷۱ پس از اعتراضات ماه
                            مه ۱۹۶۸، که منجر به تقسیم یکی از قدیمی‌ترین دانشگاه‌های جهان شد، از دو دانشکده دانشگاه
                            تاریخی پاریس که به طور عامیانه به آن سوربن گفته می‌شود، ایجاد شد.

                        </p>

                        <h3 class="mt-20">لوکیشن دانشگاه پاریس ۲</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d84014.38810690024!2d2.2731241!3d48.8496359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c57f3afe85%3A0x835685727d0a10a6!2sUniversit%C3%A9%20Paris%20Panth%C3%A9on-Assas!5e0!3m2!1sfr!2sfr!4v1690997716460!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">


                            اکثر 19 پردیس Panthéon-Assas در محله لاتین پاریس واقع شده‌اند و پردیس‌های اصلی در Place du
                            Panthéon و Rue d’Assas قرار دارند، از این رو نام کنونی آن گرفته شده است. این دانشگاه همچنین
                            یک پردیس بسیار پرطرفدار در شهر دوبی کشور امارات دارد.


                        </p>
                        <h3>دانشگاه Panthéon-Assas دولتی یا خصوصی؟</h3>
                        <p class="mb-30">
                            دانشگاه پاریس ۲ پانتئون اَسَس یک دانشگاه دولتی است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/paris_2_university_1.jpg")}}"
                                 alt="دانشگاه پاریس 2 Pantheon Assas">
                        </div>
                        <h3>جمعیت دانشجویان</h3>
                        <p class="mb-30">
                            هر ساله، این دانشگاه تقریباً ۱۸۰۰۰ دانشجو از جمله بیش از ۳۰۰۰ دانشجوی بین المللی را ثبت نام
                            می‌کند.
                        </p>
                        <h3>
                            رتبه جهانی و کشوری دانشگاه پانتئون سوربن پاریس
                        </h3>
                        <p class="mb-30">
                            Universite Paris-Pantheon-Assas یکی از برترین دانشگاه های دولتی پاریس، فرانسه است. در رتبه
                            بندی دانشگاه های جهانی QS در سال 2023 در رتبه 601-650 قرار دارد.
                        </p>
                        <h3>
                            هزینه تحصیل در دانشگاه Panthéon-Assas
                        </h3>
                        <p class="mb-30">
                            در دانشگاه‌های دولتی فرانسه شهریه‌ای وجود ندارد، اما فی الزامی ثبت نام را باید پرداخت کنید.
                            دراصل، دولت اکثر هزینه‌های برنامه‌های آموزشی دانشگاه‌های دولتی را پوشش می‌دهد و فرقی نمی‌کند
                            که شما دانشجوی خارجی باشید و ملیت فرانسوی نداشته باشید. هرچند در حقیقت، هزینه واقعی تحصیل
                            مانند سایر نقاط جهان است، تقریباً ۱۰۰۰۰ یورو در سال که همانطور که گفته شد بخش زیادی از آن را
                            دولت تقبل می‌کند.
                        </p>
                        <h3>
                            زبان تدریس در دانشگاه Panthéon-Assas
                        </h3>
                        <p class="mb-30">دانشگاه پاریس ۲ یا آساس بیشتر برای دوره‌های لیسانس در رشته‌های حقوق و
                            گرایش‌هایی مثل قانون جزا و مانند این در فرانسه شهرت دارد به همین دلیل زبان‌ فرانسوی، و
                            به‌خصوص
                            زبان حقوقی فرانسویان در این دانشگاه از اهمیت ویژه‌ای برخوردار است. هرچند در دوره‌های
                            کارشناسی ارشد، برخی از دوره‌های به صورت ترکیبی به زبان انگلیسی و فرانسه برگزار می‌شود. پردیس
                            دوبی این دانشگاه اما بیشتر به زبان انگلیسی دوره‌هایش را طراحی و برگزار می‌کند.
                        </p>
                        <h3>
                            افتخارات دانشگاه Panthéon-Assas
                        </h3>
                        <p class="mb-30">
                            دانشگاه Panthéon-Assas اغلب به عنوان “برترین دانشکده حقوق در فرانسه” توصیف می‌شود. درواقع،
                            اکثر دانشجویان پذیرفته شده در مدرسه ملی فرانسه برای قوه قضاییه از پانتئون-آساس هستند. برنامه
                            کارشناسی اقتصاد این دانشگاه در سال 2020 رتبه پنجم را در دنیا کسب کرد.
                        </p>
                        <h3>آخرین مهلت ثبت نام در دانشگاه پاریس ۲</h3>
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
                                        <img src="{{asset("../assets/img/paris_2.png")}}"
                                             alt="دانشگاه پاریس 2 Pantheon Assas">
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
