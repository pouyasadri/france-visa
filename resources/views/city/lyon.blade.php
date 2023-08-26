@extends('layout')
@section('title',"
شهر لیون
")
@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی
                    شهر لیون
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/cities">
                            شهر های فرانسه</a></li>
                    <li>
                        شهر لیون
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


                        <h2>شهر لیون</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="{{asset("assets/img/lyon1.jpg")}}" alt="شهر لیون">
                        </div>
                        <p class="mb-30">

                            شهر لیون (Lyon) از زیباترین شهرهای فرانسه می‌باشد. شهری پر از تاریخ و فرهنگ که به زیبایی با
                            تکنولوژی ترکیب شده است. با توجه به جوایزی که شهر لیون به عنوان مقصد گردشگری دریافت کرده است
                            و همچنین مناظر زیبایی که دارد، آن را به عنوان پایتخت گردشگری فرانسه می‌شناسند. اگر قصد سفر
                            به لیون یا مهاجرت به فرانسه را دارید؛ در این مطلب با ما همراه باشید.
                        </p>
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d178167.27644170693!2d4.8262037!3d45.7538785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1691146753003!5m2!1sfr!2sfr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>
                            تاریخچه شهر لیون
                        </h3>
                        <p class="mb-30">


                            لیون شهری در جنوب فرانسه، در یک مکان تپه‌ای در محل تلاقی رودخانه‌های Saône و Rhône قرار دارد
                            و روی شبه جزیره‌ای باریک بین این دو رودخانه و در سواحل مقابل آنها گسترده شده است؛ کارخانه‌ها
                            و مناطق مسکونی، شهر لیون را احاطه کرده‌اند؛ در ساحل سمت راست Saône، Vieux Lyon (لیون قدیم)
                            به عنوان یکی از بهترین مجموعه‌های معماری بازمانده از دوران رنسانس است. این شبه جزیره اکنون
                            قلب منطقه تجاری است. لیون بعد از پاریس ومارسی سومین شهر بزرگ فرانسه می‌باشد. این شهر از
                            دوران ماقبل تاریخ منطقه‌ای مسکونی بوده است و در قرن دوم پس از میلاد به اوج توسعه کلاسیک خود
                            رسید و در این زمان مسیحیت معرفی شد.

                        </p>
                        <h3>وضعیت آب و هوا در شهر لیون</h3>
                        <p class="mb-30">در طول سال، دما معمولاً از ۳۳ درجه فارنهایت تا ۸۲ درجه فارنهایت متغیر است و به
                            ندرت کمتر از ۲۴ درجه فارنهایت یا بالاتر از ۹۳ درجه فارنهایت است. تابستان‌ها هوا گرم و
                            زمستان‌ها بسیار سرد است؛ در طول سال هوایی نیمه ابری دارد. فصل گرم به مدت ۳ ماه، از ۹ ژوئن تا
                            ۹ سپتامبر، با میانگین دمای روزانه بالای ۷۵ درجه فارنهایت ادامه دارد. گرم‌ترین ماه سال در
                            لیون، ژوئیه است که میانگین دمای آن ۸۱ درجه فارنهایت و کمینه آن ۶۱ درجه فارنهایت است و فصل
                            خنک به مدت ۶ ماه، از ۱۶ نوامبر تا ۳ مارس، با میانگین دمای روزانه زیر ۵۱ درجه فارنهایت ادامه
                            دارد. سردترین ماه سال در لیون ژانویه است که میانگین دمای آن ۳۳ درجه فارنهایت و حداکثر ۴۴
                            درجه فارنهایت است.
                        </p>
                        <h3>گردشگری در شهر لیون</h3>
                        <p class="mb-30">
                            لیون با تاریخی که به دوران روم باستان باز می گردد، جایگاهی را در فهرست میراث جهانی یونسکو به
                            دست آورده است. این شهر دارای قدیمی‌ترین ویرانه‌های باستانی فرانسه، محله‌های قرون وسطایی و
                            خانه‌های زیبای رنسانس است. محله‌های تاریخی جذاب، بهترین مکان‌ها برای بازدید در لیون و چشیدن
                            طعم جذاب دنیای قدیم هستند. خوشحال‌تر از همه گردشگران، کسانی هستند که برای امتحان غذاهای
                            معروف به اینجا سفر می‌کنند.

                            Auberge du Pont de Collonges ستاره‌دار میشلین، در 10 کیلومتری شهر لیون، برای دهه‌ها توسط
                            سرآشپز افسانه‌ای فرانسوی پل بوکوز هدایت می‌شد و هنوز هم یکی از بهترین مقصدها برای
                            خوش‌خوراک‌ها است. غذای اصیل لیون را می‌توان در سرتاسر لیون در بوچون‌ها، رستوران‌های کوچک دنج
                            که غذاهای محلی سنتی سرو می‌کنند، لذت برد. برخی از جاذبه‌های گردشگری این شهر عبارتند از:
                        <ul style="list-style: inside">
                            <li>موزه‌ی des Beaux Arts</li>
                            <li>Quartier Saint-Jean و Quartier Saint-Georges (شهر قدیمی)</li>
                            <li>موزه‌ی de la Civilisation Gallo-Romaine</li>
                            <li>رستوران های لذیذ، بوتیک های آشپزی، و کلاس های آشپزی</li>
                            <li>de la Croix-Rousseتپه</li>
                            <li>منطقه Presqu’île</li>
                            <li>موزه‌ی des Tissus et des Arts Décoratifs</li>
                            <li>مرکز d’Histoire de la Résistance et de la Déportation</li>
                            <li>کلیسای Notre-Dame de Fourvière</li>
                        </ul>
                        شهرت این شهر به عنوان یکی از بهترین مکان‌های فرهنگی و خوراک شناسی در جهان منجر به افزایش مداوم
                        تعداد گردشگرانی شده است که از این شهر بازدید می‌کنند و این بخش را تقویت کرده است. حدود ۶۰ درصد
                        از بازدیدکنندگان لیون در حال حاضر برای تجارت به این شهر سفر می‌کنند.

                        اگر می‌خواهید سوغاتی تهیه کنید، به منطقه Presqu’île و میدان‌های زیبای آن بروید، جایی که
                        بوتیک‌های لوکس، مغازه‌های مد روز و کارگاه‌هایی را خواهید دید که توسط طراحان مستقل اداره می‌شوند.
                        اگر به دنبال خرید خوراکی هستید، بازار سرپوشیده مواد غذایی Les Halles de Lyon-Paul Bocuse مکان
                        مناسبی برای شماست. در اینجا غذاهای محلی مانند تارت‌های پرالین، کوئنل‌ها (کوفته‌ها)، لیون
                        ساوسیسون و شکلات‌های معروف به Coussins de Lyon را خواهید یافت.

                        </p>
                        <div class="rooms-details mb-30">
                            <img src="{{asset("assets/img/lyon.jpg")}}" alt="شهر لیون">
                        </div>
                        <h3>اقتصاد شهر لیون</h3>
                        <p class="mb-30">
                            شهر لیون بعد از پاریس، دومین شهر ثروتمند فرانسه است، با بیش از ۱۴۰۴۰۰ شرکت تاسیس شده و ایجاد
                            بیش از ۱۶۰۰۰ شغل در سال، لیون دومین نیروگاه اقتصادی بزرگ در فرانسه است. پس از پاریس، لیون
                            اولین شهر انتخابی در فرانسه برای کسب و کار است و طبق نظر ۶۰ درصد از تصمیم گیرندگانی که به
                            عنوان بخشی از نظرسنجی ارنست و یانگ در سال ۲۰۱۳ مصاحبه کردند، جایگزین آینده برای پایتخت
                            فرانسه در نظر گرفته می‌شود. این شهر اکنون محل استقرار شرکت‌های مشهور بین‌المللی و مراکز
                            تصمیم گیری بزرگ است، از جمله:

                        <ul style="list-style: inside">
                            <li>Sanofi</li>
                            <li>Mérial</li>
                            <li>Lafarge</li>
                            <li>GL Events</li>
                            <li>بانک چین</li>
                        </ul>
                        Solvay Rhodiaلیون شهری است که در آن به روی جهان باز است و سرمایه گذاری خارجی قابل توجهی دریافت
                        می‌کند. 66 درصد از مشاغلی که در سال 2012 در شهر لیون راه‌اندازی شدند، خارجی بودند. این منطقه
                        میزبان ¼ تجارت خارجی فرانسه است و در حال حاضر 1800 شرکت خارجی در منطقه وجود دارد که در مجموع
                        92000 نفر را استخدام می‌کند.
                        </p>
                        <h3>
                            ویزا برای فرانسه
                        </h3>
                        <p class="mb-30">

                            به عنوان یک قاعده کلی برای مهاجرت به لیون ویزا لازم است. مدارک قانونی باید در مرز ارائه شود.
                            اتباع کشورهای اتحادیه اروپا و منطقه اقتصادی اروپا به دلیل معاهده شنگن نیازی به ویزا برای
                            فرانسه ندارند. متقاضیان اقامت در لیون باید از سفارت یا کنسولگری فرانسه در کشور خود درخواست
                            دهند. برای اقامت بیش از ۹۰ روز، ویزای طولانی مدت مورد نیاز است.

                        </p>
                        <h3>
                            زندگی در لیون فرانسه
                        </h3>
                        <p class="mb-30">به عنوان یک قاعده کلی برای مهاجرت به لیون ویزا لازم است. مدارک قانونی باید در
                            مرز ارائه شود. اتباع کشورهای اتحادیه اروپا و منطقه اقتصادی اروپا به دلیل معاهده شنگن نیازی
                            به ویزا برای فرانسه ندارند. متقاضیان اقامت در لیون باید از سفارت یا کنسولگری فرانسه در کشور
                            خود درخواست دهند. برای اقامت بیش از ۹۰ روز، ویزای طولانی مدت مورد نیاز است.
                        </p>
                        <h3>
                            کار در شهر لیون
                        </h3>
                        <p class="mb-30">با چنین اقتصاد محلی پر رونقی، فرصت‌های متفاوت و هیجان‌انگیزی برای مهاجرانی که
                            به دنبال شغل در شهر لیون هستند، وجود دارد. آژانس‌های کاریابی مانند Reed مکان‌های خوبی برای
                            جستجوی موقعیت‌های شغلی در شهر لیون هستند، در حالی که وب‌سایت‌هایی از جمله GoAbroad.com و
                            TheLocal.fr نیز مشاغلی را در این منطقه دارند. موقعیت‌های شغلی ممکن است در نشریاتی مانند 20
                            Minutes تبلیغ شوند.</p>
                        <h3>
                            کلام آخر
                        </h3>
                        <p class="mb-30">لیون شهری زیبا با فرهنگی غنی و اقتصادی فعال در فرانسه است. اگر به دنبال زندگی
                            در شهری هستید که هم امکانات کلان شهرها را در اختیار داشته باشید و هم آرامش شهرهای کوچک را
                            داشته باشید، این شهر گزینه‌ی خوبی می‌باشد. برای اطلاعات بیشتر در مورد زندگی در شهر لیون،
                            لطفاً با مشاورین ما تماس بگیرید.
                        </p>
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
    <script src="{{asset("assets/js/createScrollLinks.js")}}"></script>
    <!-- End Service Details Area -->
@endsection
