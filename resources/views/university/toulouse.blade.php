@extends('layout')
@section('title',"
معرفی دانشگاه تولوز
")
@section('content')

    <div class="page-title-area bg-toulouse">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی
                    دانشگاه تولوز
                </h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/universities">
                            دانشگاه ها</a></li>
                    <li>
                        دانشگاه تولوز
                    </li>
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
                        <h2>دانشگاه تولوز</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/toulouse_university.jpg")}}" alt="تصویر دانشگاه تولوز">
                        </div>
                        <h3>تاریخچه تأسیس</h3>
                        <p>
                            در سال ۱۹۶۹، دانشگاه تولوز از دانشگاه قدیمی تولوز به سه دانشگاه مجزا و چندین مؤسسه تخصصی
                            آموزش عالی جدا شد.
                            اما در تاریخ ۲۷ مارس ۲۰۰۷، دانشگاه تولوز به شکلی دوباره تأسیس شد. این دانشگاه اکنون بیش از
                            یک دانشگاه واحد
                            نیست؛ بلکه مجموعه‌ای از دانشگاه‌ها و مؤسسات تخصصی آموزش عالی را به صورت فدرالی اداره می‌کند.
                        </p>
                        <h3 class="mt-20">موقعیت جغرافیایی</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d184924.66022423725!2d1.4668153!3d43.5972167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb61a0b5834d%3A0xedaa16152a9f760b!2sUniversit%C3%A9%20de%20Toulouse!5e0!3m2!1sfr!2sfr!4v1691012269184!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>
                            دانشگاه تولوز در منطقه جنوب غربی فرانسه قرار دارد و مزیت‌های منحصربه‌فردی در موقعیت
                            جغرافیایی دارد. این منطقه
                            دارای آب و هوای بی‌نظیری در تابستان و زمستان است. دانشجویان می‌توانند با استفاده از حمل‌ونقل
                            عمومی کارآمد،
                            در کمتر از یک ساعت به سواحل دریای مدیترانه دسترسی داشته باشند. با بیش از ۱۰۰۰۰۰ دانشجو،
                            دانشگاه تولوز پنجمین
                            منطقه دانشگاهی بزرگ در فرانسه محسوب می‌شود.
                        </p>
                        <h3>نوع دانشگاه</h3>
                        <p>
                            دانشگاه تولوز یک دانشگاه دولتی از برترین دانشگاه‌های تولوز، فرانسه است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/toulouse_university_1.jpg")}}" alt="تصویر دانشگاه تولوز">
                        </div>
                        <h3>رتبه‌بندی جهانی</h3>
                        <p>
                            در رتبه‌بندی دانشگاه‌های جهانی QS سال ۲۰۲۳، دانشگاه تولوز در بازه ۱۰۰۱-۱۲۰۰ قرار دارد.
                            همچنین، مؤسسه ملی پلی
                            تکنیک تولوز در رتبه ۸۵۱ در میان بهترین دانشگاه‌های جهانی قرار دارد.
                        </p>
                        <h3>هزینه تحصیل</h3>
                        <p>
                            شهریه دانشگاه تقریباً ۶۰۰ یورو در سال است و تولوز به عنوان یک شهر مقرون به صرفه محسوب
                            می‌شود، به ویژه برای
                            دانشجویان. هزینه اجاره مسکن در بازار خصوصی حدود ۴۵۰ تا ۶۰۰ یورو در ماه متغیر است. همچنین،
                            هزینه حمل‌ونقل برای
                            افراد زیر ۲۶ سال نسبتاً پایین است.
                        </p>
                        <h3>فرصت‌های مالی</h3>
                        <p>
                            دانشجویان می‌توانند با دریافت بورسیه‌های تحصیلی کامل در دانشگاه تولوز تحصیل کنند. این
                            بورسیه‌ها برای دوره‌های
                            کارشناسی ارشد و کارشناسی نیز ارائه می‌شوند.
                        </p>
                        <h3>مقاطع تحصیلی و رشته‌ها</h3>
                        <p>
                            دانشگاه تولوز دوره‌های تحصیلی متنوعی را در مقاطع مختلف ارائه می‌دهد. تمرکز دانشگاه بر روی
                            دوره‌های دکترا
                            است، که با ۱۵ دانشکده دکترا توسط "L’École des Docteurs" اداره می‌شود. این دانشگاه دارای بیش
                            از ۹۱۰۰ پرسنل
                            پژوهشی است، که شامل ۵۱۰۰ کارمند دانشگاهی و ۴۳۰۰ دانشجوی دکترا هستند. همچنین، ۴۰٪ از
                            دانشجویان دکترا دانشجویان
                            بین‌المللی هستند و در سال، حدود ۹۰۰ دانشجوی دکترا در حوزه‌های مختلف علمی تحصیل می‌کنند.
                        </p>
                        <p>
                            <b>در حوزه علوم تجربی و علوم و فنون، رشته‌های اصلی به شرح زیر هستند:</b>
                        <ul style="list-style: inside">
                            <li>زیست‌شناسی، سلامت و بیوتکنولوژی؛</li>
                            <li>علوم اکولوژی، دامپزشکی، زراعت و مهندسی زیستی؛</li>
                            <li>علوم زمین، اخترفیزیک و علوم فضایی؛</li>
                            <li>ریاضیات، انفورماتیک و مخابرات؛</li>
                            <li>مهندسی برق، الکترونیک و مخابرات؛</li>
                            <li>سیستم‌ها؛</li>
                            <li>فیزیک، شیمی و علوم مواد؛</li>
                            <li>مکانیک، انرژی، مهندسی عمران و فرآیند؛</li>
                            <li>هوانوردی و فضانوردی.</li>
                        </ul>
                        <b>در حوزه علوم انسانی و اجتماعی:</b>
                        <ul style="list-style: inside">
                            <li>روان‌شناسی، زبان، آموزش، جامعه‌پذیری، شناخت‌فلسفی؛</li>
                            <li>هنر، ادبیات، زبان، فلسفه، اطلاعات و ارتباطات؛</li>
                            <li>تاریخ، جغرافی، مردم‌شناسی؛</li>
                            <li>حقوق و علوم سیاسی؛</li>
                            <li>مدیریت؛</li>
                            <li>اقتصاد.</li>
                        </ul>
                        </p>
                        <h3>افتخارات و برتری‌ها</h3>
                        <p>
                            دانشکده اقتصاد تولوز به طور مداوم در رده‌بندی بر اساس نشریات با کیفیت در اروپا در میان
                            بهترین‌ها قرار دارد.
                            وب‌سایت Econphd در رشته اقتصاد اطلاعات تولوز را در میان بهترین‌ها در اروپا و در مدیریت صنعتی
                            تولوز را در سراسر
                            جهان دارای رتبه دوم می‌داند.
                        </p>
                        <h3>زبان تدریس</h3>
                        <p>
                            زبان رسمی آکادمیک در دانشگاه تولوز فرانسوی است. اگرچه برخی از دوره‌ها، به ویژه در رشته‌های
                            اقتصاد و هوانوردی،
                            به انگلیسی تدریس می‌شوند. زبان‌های دیگری که در این دانشگاه تدریس می‌شوند عبارتند از:
                        <ul style="list-style: inside">
                            <li>انگلیسی؛</li>
                            <li>پرتغالی؛</li>
                            <li>اسپانیایی؛</li>
                            <li>چینی؛</li>
                            <li>ایتالیایی؛</li>
                            <li>آلمانی.</li>
                        </ul>
                        </p>
                        <h3>مدارک مورد نیاز برای پذیرش</h3>
                        <p>
                            برای ثبت‌نام در دانشگاه تولوز، مدارک زیر را نیاز دارید:
                        <ul style="list-style: inside">
                            <li>فرم درخواست آنلاین؛</li>
                            <li>انگیزه‌نامه (SOP)؛</li>
                            <li>توصیه‌نامه (LOR)؛</li>
                            <li>رزومه (CV)؛</li>
                            <li>مدرک زبان فرانسوی؛</li>
                            <li>مقالات منتشر شده (اگر دارید).</li>
                        </ul>
                        </p>
                        <h3>فارغ‌التحصیلان معروف</h3>
                        <p>
                            دانشگاه تولوز تاریخی از فارغ‌التحصیلان برجسته دارد که عبارتند از:
                        <ul style="list-style: inside">
                            <li>مصطفی کامل پاشا (۱۸۷۴–۱۹۰۸)، وکیل، روزنامه‌نگار، و رهبر ملی‌گرای مصری؛</li>
                            <li>فرانسوا هوسنوت (۱۹۱۲-۱۹۵۱)، که در سال ۱۹۳۵ از دانشکده مهندسی هوانوردی ISAE فارغ‌التحصیل
                                شد و به
                                دلیل اختراع یکی از اشکال اولیه دستگاه ضبط داده‌های پروازی شناخته می‌شود؛
                            </li>
                            <li>توماس پسکت (متولد ۱۹۷۸)، که در سال ۲۰۰۱ از دانشگاه ISAE فارغ‌التحصیل شد و به عنوان یک
                                فضانورد در
                                آژانس فضایی اروپا مشغول به فعالیت است؛
                            </li>
                            <li>آرماند پراویل (۱۸۷۵–۱۹۴۴)، نویسنده و روزنامه‌نگار فرانسوی؛</li>
                            <li>هنری دو پویالون (۱۸۴۱–۱۹۰۵)، پژوهشگر در حوزه زیست‌شناسی و بوم‌شناسی؛</li>
                            <li>سلمان رضا، زبان‌شناس و سیاست‌مدار.</li>
                        </ul>
                        </p>
                        <h3>نکات پایانی</h3>
                        <p>
                            اگر شما به دنبال مهاجرت تحصیلی و اقامت در فرانسه هستید و به مشاوره و خدمات حمایتی در این
                            کشور زیبا نیاز دارید،
                            با ما تماس بگیرید. ما تمرکز خود را بر راهنمایی هموطنانی که قصد سفر به فرانسه را دارند،
                            داریم. شما می‌توانید
                            با تماس با کارشناسان ما اطلاعات بیشتری در مورد پکیج‌های مهاجرتی ما دریافت کنید.
                        </p>
                        <div class="car-service-list-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-list-img">
                                        <img src="{{asset("assets/img/toulouse.png")}}" alt="دانشگاه تولوز">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="car-service-list">
                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۱. تاریخچه با ارزش
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۲. تنوع تخصص‌ها
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۳. محیط آموزشی جهانی
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۴. امکانات و تجهیزات پیشرفته
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                ۵. پژوهش‌های برجسته
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
