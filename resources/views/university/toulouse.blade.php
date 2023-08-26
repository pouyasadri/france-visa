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


                        <h2>
                            دانشگاه تولوز
                        </h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/toulouse_university.jpg")}}" alt="دانشگاه تولوز">
                        </div>
                        <h3>تاسیس</h3>
                        <p class="mb-30">در سال ۱۹۶۹، دانشگاه قدیم تولوز به سه دانشگاه مجزا و چندین مؤسسه تخصصی آموزش
                            عالی تقسیم شد. اما دانشگاه امروزی تولوز در ۲۷ مارس ۲۰۰۷ دوباره از نو تأسیس شده است. این
                            دانشگاه حالا دیگر نماینده یک دانشگاه واحد نیست، زیرا در حال حاضر مجموعه‌ای از دانشگاه‌ها و
                            موسسات تخصصی آموزش عالی را فدرالی اداره می‌کند.
                        </p>
                        <h3 class="mt-20">دانشگاه تولوز کجاست؟</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d184924.66022423725!2d1.4668153!3d43.5972167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb61a0b5834d%3A0xedaa16152a9f760b!2sUniversit%C3%A9%20de%20Toulouse!5e0!3m2!1sfr!2sfr!4v1691012269184!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">
                            موقعیت جغرافیایی تولوز در جنوب غربی فرانسه، یک موقعیت سوقول‌جیشی عالی است. چون هم در تابستان
                            و هم در زمستان آب و هوای فوق العاده‌ای دارد. دانشجویان می‌توانند با استفاده از حمل و نقل
                            عمومیِ بسیار کارآمد تنها در کمتر از یک ساعت به سواحل مدیترانه برسند. اینجا با بیش از ۱۰۰۰۰۰
                            دانشجو، پنجمین منطقه دانشگاهی بزرگ در فرانسه است!
                        </p>
                        <h3>دانشگاه تولوز دولتی یا خصوصی؟</h3>
                        <p class="mb-30">Université Toulouse 1 Capitole یکی از برترین دانشگاه های دولتی در تولوز فرانسه
                            است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/toulouse_university_1.jpg")}}" alt="دانشگاه تولوز">
                        </div>
                        <h3>
                            رتبه‌جهانی دانشگاه تولوز
                        </h3>
                        <p class="mb-30">در رتبه‌بندی دانشگاه‌های جهانی QS در سال 2023، دانشگاه تولوز در رتبه 1001-1200
                            قرار گرفته است. همچنین، موسسه ملی پلی تکنیک تولوز در رتبه ۸۵۱ در بهترین دانشگاه های جهانی
                            قرار دارد.
                        </p>
                        <h3>هزینه تحصیل در شهر و دانشگاه تولوز</h3>
                        <p class="mb-30">شهریه دانشگاه برای تمام افراد یکسان است و در حدود سالی ۶۰۰ یورو برآورد می‌شود.
                            از طرفی، تولوز شهری مقرون به صرفه است، به ویژه برای دانشجویان. اجاره مسکن در بازار خصوصی
                            حدود ۴۵۰ تا ۶۰۰ یورو بسته به محل زندگی شما در تولوز است. با این وجود، هزینه حمل و نقل برای
                            افراد زیر ۲۶ سال نسبتاً ارزان است.
                        </p>

                        <h3>
                            فاند و کمک‌هزینه تحصیلی در دانشگاه تولوز
                        </h3>
                        <p class="mb-30">شما می توانید با بورسیه تحصیلی کامل در دانشگاه تولوز تحصیل کنید. بورسیه های
                            دانشگاه تولوز برای دوره های کارشناسی ارشد و کارشناسی هم حتی ارائه می‌شوند.
                        </p>
                        <h3>
                            مقاطع رشته‌های دانشگاه تولوز و وضعیت و جایگاه علمی
                        </h3>
                        <p class="mb-30">
                            اینجا در هر مقطعی دوره‌ای برگزار می‌شود اما تمرکز بر PhD است. دانشگاه تولوز، با 15 دانشکده
                            دکترا توسط “L’École des Docteurs” که دارای، در مجموع، 9100 پرسنل پژوهشی شامل 5100 کارمند
                            دانشگاهی و 4300 دانشجوی دکترا است و از این میان 40٪ دانشجویان بین المللی هستند، با 900 دکترا
                            در سال تمام حوزه های علمی را پوشش می‌دهد.
                            <b>در زمینه علوم تجربی و علوم و فنون رشته‌های ارائه شده در این دانشگاه به شرح زیر است:</b>
                        <ul style="list-style: inside">
                            <li>زیست شناسی، سلامت و بیوتکنولوژی؛</li>
                            <li>علوم اکولوژی، دامپزشکی، زراعت و مهندسی زیستی؛</li>
                            <li>علوم زمین، اخترفیزیک و علوم فضایی؛</li>
                            <li>دانشکده دکتری تولوز ریاضیات، انفورماتیک و مخابرات؛</li>
                            <li>مهندسی برق، الکترونیک و مخابرات؛</li>
                            <li>سیستم ها؛</li>
                            <li>فیزیک، شیمی و علوم مواد؛</li>
                            <li>مکانیک، انرژی، مهندسی عمران و فرآیند؛</li>
                            <li>هوانوردی و فضانوردی.</li>
                        </ul>
                        <b>
                            در حوزه علوم انسانی و علوم اجتماعی و انسانی:
                        </b>
                        <ul style="list-style: inside">
                            <li>روان‌شناسی، زبان، آموزش، جامعه پذیری، شناخت‌فلسفی؛</li>
                            <li>هنر، ادبیات، زبان، فلسفه، اطلاعات و ارتباطات؛</li>
                            <li>تاریخ، جغرافی، مردم‌شناسی؛</li>
                            <li>علوم حقوقی و سیاسی؛</li>
                            <li>مدیریت؛</li>
                            <li>اقتصاد.</li>
                        </ul>
                        </p>
                        <h3>
                            افتخارات و رشته‌های برتر</h3>
                        <p class="mb-30">


                            دانشکده اقتصاد تولوز به طور مداوم در رتبه بندی بر اساس نشریات با کیفیت در بین بهترین ها در
                            اروپا قرار دارد. وب سایت Econphd 1 رتبه اول TSE را در اقتصاد اطلاعات و در مدیریت سازمان‌های
                            صنعتی رتبه دوم را در سرتاسر جهان دارد.

                        </p>
                        <h3>
                            زبان تدریس
                        </h3>
                        <p class="mb-30">
                            زبان رسمی آکادمیک فرانسوی است. اما برخی دوره ها مخصوصا در اقتصاد و هوا‌نوردی به انگلیسی هم
                            تدریس می‌شود. از جمله دیگر زبان‌هایی که در این دانشگاه تدریس می شود:
                        <ul style="list-style: inside">
                            <li>فرانسوی؛</li>
                            <li>انگلیسی؛</li>
                            <li>پرتغالی؛</li>
                            <li>اسپانیایی؛</li>
                            <li>چینی؛</li>
                            <li>ایتالیایی؛</li>
                            <li>آلمانی.</li>
                        </ul>
                        </p>
                        <h3>
                            مدارک مورد نیاز برای اخذ پذیرش
                        </h3>
                        <p class="mb-30">
                            <b>برای ثبت نام در دانشگاه تولوز شما به مدارک زیر نیاز دارید:</b>
                        <ul style="list-style: inside">
                            <li>
                                اپلیکیشن درخواست آنلاین
                            </li>
                            <li>
                                انگیزه نامه (SOP)
                            </li>
                            <li>
                                توصیه نامه (LOR)
                            </li>
                            <li>
                                رزومه (CV)
                            </li>
                            <li>
                                رفرنس زبان فرانسوی
                            </li>
                            <li>
                                مقالات منتشر شده
                            </li>
                        </ul>
                        </p>
                        <h3>
                            دانشجویان معروف
                        </h3>
                        <p class="mb-30">
                        <ul style="list-style: inside">
                            <li>مصطفی کامل پاشا (۱۸۷۴–۱۹۰۸)، وکیل، روزنامه نگار، فعال و رهبر ملی گرایان مصری؛</li>
                            <li>فرانسوا هوسنوت (1912-1951، فارغ التحصیل در سال 1935 از مهندس هوانوردی ISAE که با اختراع
                                یکی از اشکال اولیه ضبط کننده داده‌های پروازی اعتبار دارد؛
                            </li>
                            <li>توماس پسکت (متولد 1978، فارغ التحصیل در سال 2001 از ISAE)، فضانورد آژانس فضایی اروپا؛
                            </li>
                            <li>آرماند پراویل (۱۸۷۵–۱۹۴۴، دکترای حقوق ۱۹۰۱)، نویسنده و روزنامه‌نگار فرانسوی؛</li>
                            <li>هنری دو پویالون (۱۸۴۱–۱۹۰۵)، پیشگام فرانسوی/کانادایی در زیست‌شناسی و بوم‌شناسی؛</li>
                            <li>سلمان رضا، زبان شناس و سیاستمدار.</li>
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
                                        <img src="{{asset("assets/img/toulouse.png")}}" alt="دانشگاه تولوز">
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
