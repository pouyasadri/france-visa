@extends('layout')
@section('title',"معرفی دانشگاه لیون ۲")
@section('content')

    <div class="page-title-area bg-lyon-2">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی دانشگاه لیون ۲</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>دانشگاه لیون ۲</li>
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


                        <h2>دانشگاه لیون ۲</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/lyon_2_university.jpg")}}" alt="دانشگاه لیون ۲">
                        </div>
                        <h3>تاسیس</h3>
                        <p>در سال ۱۹۸۷ دانشگاه لیون ۲ به دانشگاه لومیر لیون ۲ تغییر نام داد. این نام و نشان به ابتکار
                            دانشکده هنر و طراحی لیون ایجاد شد که منعکس کننده جاه طلبی‌های جدید دانشگاه است.
                        </p>

                        <h3 class="mt-20">لوکیشن دانشگاه لیون ۲</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.017794861273!2d4.837165099999999!3d45.75078919999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4f3ec3e0c3%3A0xea72eb29eb3af1f6!2sUniversit%C3%A9%20Lumi%C3%A8re%20Lyon%202%20-%20Campus%20Berges%20du%20Rh%C3%B4ne!5e0!3m2!1sfr!2sfr!4v1691000454062!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">دانشگاه لومیر لیون 2 (به فرانسوی: Université Lumière Lyon 2) یکی از سه دانشگاهی
                            است که دانشگاه فعلی لیون را تشکیل می‌دهد که از دانشگاه قدیمی‌تری به همین نام جدا شده است و
                            اساساً شامل در دو پردیس در خود لیون است:
                        <ul style="list-style: inside">
                            <li>
                                پردیس Berges du Rhône’ – یک مکان تاریخی در مرکز لیون در ساحل چپ رود رون، که همچنین دفتر
                                مرکزی دانشگاه است.
                            </li>
                            <li>
                                Porte des Alpes، در حومه جنوب شرقی لیون، در Bron and Saint-Priest که محل آموزش و تحقیقات
                                و ساختمان‌های مؤسسه پلی‌تکنیک (IUT Lumière) و همچنین فعالیت‌های فرهنگی و ورزشی است.
                            </li>
                        </ul>
                        </p>
                        <h3>دانشگاه لیون ۲ دولتی یا خصوصی؟</h3>
                        <p class="mb-30">دانشگاه لیون ۲ یک سازمان دولتی است که بخشی از وظیفه سنگین آکادمیک در حوزه علوم
                            اجتماعی و علوم کامپیوتر را در فرانسه در بخش تحقیق و توسعه به دوش دارد.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/lyon_2_university_1.webp")}}" alt="دانشگاه لیون ۲">
                        </div>
                        <h3>رتبه جهانی دانشگاه لیون ۲</h3>
                        <p class="mb-30">این دانشگاه بر اساس رتبه بندی دانشگاه‌های جهانی QS در سال 2023 در باند
                            1001-1200 دانشگاه های جهان قرار گرفت. همچنین در زمینه هنر و علوم انسانی رتبه 231 جهان را کسب
                            نمود.
                        </p>
                        <h3>
                            رتبه کشوری دانشگاه لیون ۲
                        </h3>
                        <p class="mb-30">به تازگی دانشگاه لیون ۲ رتبه ۲۶ را در بین دانشگاه‌های فرانسه اخذ کرده است.
                        </p>
                        <h3>
                            جمعیت دانشجویان
                        </h3>
                        <p class="mb-30">


                            در مجموع ۲۷۵۰۰ دانشجو دارد که رشته های هنر، علوم انسانی و علوم اجتماعی تحصیل می کنند.

                            حدود ۱۸ درصد از دانش‌جویان در لیون ۲ اینترنشنال هستند. لیون ۲ به صورت جداگانه در مراسمی
                            هرساله از این بچه‌ها استقبال می‌کند که نشانه‌ی اهمیت این قشر برای این دانشگاه است.

                        </p>
                        <h3>
                            هزینه تحصیل در دانشگاه لیون ۲
                        </h3>
                        <p class="mb-30">هزینه تحصیل در قیاس با دانشگاه‌های اروپایی همتراز، بسیار مقرون‌به‌صرفه بوده و
                            با هزینه کمتر از ۱۰۰۰ دلار در سال برای برنامه های کارشناسی می‌توانید لیسانس بگیرید. یک سال
                            تحصیل در مقطع کارشناسی ارشد کمتر از ۱۰۰۰ دلار برای شما در لیون ۲ هزینه دارد.
                        </p>
                        <h3>
                            زبان تدریس
                        </h3>
                        <p class="mb-30">
                            زبان رسمی دانشگاه کان لیون ۲ فرانسوی است اما برخی دوره‌های انگلیسی هم برگزار می‌شوند. از
                            طرفی در برخی مقاطع زبان تدریس به صورت دوزبانه است و هم فرانسه و هم انگلیسی ضروری دانشجو
                            خصوصا در مقطع ارشد خواهد بود.
                        </p>
                        <h3>
                            آخرین مهلت ثبت نام
                        </h3>
                        <p class="mb-30">
                            به طور کلی در فرانسه شما باید تا پیش از اتمام اکتبر مدارک خود را برای دانشگاه ارسال کرده
                            باشید. آخرین تاریخ اعلام نتایج هم در آپریل همه ساله از پیش اعلام می‌شود.
                        </p>
                        <h3>
                            مقاطع تحصیلی در دانشگاه لیون ۲
                        </h3>
                        <p class="mb-30">


                            دانشجویان در دانشگاه لیون ۲ برای دوره های سه تا هشت ساله پذیرش می‌شوند. در دانشگاه لیون ۲
                            هر سه مقطع تحصیلی وجود دارد با اینحال دوره های کارشناسی و کارشناسی ارشد به عنوان بخشی از
                            برنامه نوسازی آموزشی در حال تغییر و تحول هستند. بنابراین استراتژی در آغاز سال تحصیلی ۲۰۲۲
                            آن‌ها به شیوه‌آی نو برگزار می‌شوند تا راه را برای انتخاب رشته‌ی اصلی و فرعی به مدت یک ترم
                            باز کنند. پس از آن دانشجو انتخاب می کند که در رشته خود بماند یا در رشته اصلی خود جهت گیری
                            کند. برخی از دپارتمان‌‌ها نیز مجوز ادامه در دو رشته با یک مجوز دوگانه را مجاز می‌دانند.

                        </p>
                        <h3>
                            رشته ها در دانشگاه لیون ۲
                        </h3>
                        <p class="mb-30">
                        <ul style="list-style: inside">
                            <li>علوم انسانی و اجتماعی</li>
                            <li>ادبیات کلاسیک؛</li>
                            <li>زبان‌های مدرن کاربردی؛</li>
                            <li>هنرهای نمایشی؛</li>
                            <li>اطلاعات و ارتباطات؛</li>
                            <li>ادبیات مدرن؛</li>
                            <li>موسیقی؛</li>
                            <li>روانشناسی؛</li>
                            <li>علوم شناختی؛</li>
                            <li>زبانشناسی؛</li>
                            <li>جامعه و محیط زیست؛</li>
                            <li>مدیریت دولتی؛</li>
                            <li>برنامه ریزی؛</li>
                            <li>مردم شناسی؛</li>
                            <li>جغرافیا؛</li>
                            <li>تاریخ؛</li>
                            <li>تاریخ هنر و باستان شناسی؛</li>
                            <li>علوم تربیتی؛</li>
                            <li>علوم سیاسی؛</li>
                            <li>جامعه شناسی؛</li>
                            <li>اقتصاد و مدیریت؛</li>
                            <li>مدیریت اقتصادی و اجتماعی؛</li>
                            <li>اقتصاد سنجی؛</li>
                            <li>اقتصاد و مدیریت؛</li>
                            <li>قانون.</li>
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
                                        <img src="{{asset("assets/img/lyon_2.png")}}" alt="دانشگاه لیون ۲">
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
