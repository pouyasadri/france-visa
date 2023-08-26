@extends('layout')
@section('title',"
دانشگاه نیس
")
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
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-sidebar-area">
                        <div class="service-list service-card">
                            <h3 class="service-details-title">محتویات مقاله</h3>
                            <ol id="board"></ol>
                        </div>

                        <div class="service-list service-card">
                            <h3 class="service-details-title">اطلاعات مشتری</h3>
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
                            <h3 class="service-details-title">دانلود بروشورها</h3>
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
                    <div class="service-details-wrap" id="mydiv">


                        <h2>دانشگاه نیس</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="../assets/img/nice_university.jpg" alt="دانشگاه نیس">
                        </div>
                        <h3>تاسیس</h3>
                        <p class="mb-30">Université de Nice دانشگاه نیس در سال 1639 تأسیس شد که به طور سنتی شامل دانشکده
                            حقوق و دانشکده پزشکی است. امروز این دانشگاه به نام دانشگاه آزور هم شناخته می‌شود. در سال
                            2019، جایگزین دانشگاه نیس، صاحب موسسه سوفیا آنتی‌پولیس و انجمن (ComUE) شد که در سال 2013
                            ایجاد شده بودند.
                        </p>
                        <h3 class="mt-20">لوکیشن دانشگاه دانشگاه نیس</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92283.61537243958!2d7.1946494!3d43.7133965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd01552258547%3A0xf160114745d1e06!2sUniversit%C3%A9%20Nice%20Sophia%20Antipolis!5e0!3m2!1sfr!2sfr!4v1691003788688!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-30">


                            دانشگاه کوت دازور (به فرانسوی: Université Côte d’Azur) یک دانشگاه تحقیقاتی آموزش عالی است که
                            در نیس مناطق مجاور کرانه دریای آزور واقع شده است.

                            پردیس‌های دانشگاهی آن در چندین شهر بخش Alpes-Maritimes (نیس، کن، گراس، منتون) و همچنین پارک
                            فناوری سوفیا آنتی‌پولیس واقع شده‌اند. اینجا بخشی از منطقه آکادمیک Provence-Alpes-Côte d’Azur
                            است که شامل آکادمی های Aix-Marseille و Nice هم می‌شود.

                        </p>
                        <h3>دانشگاه نیس دولتی یا خصوصی؟</h3>
                        <p class="mb-30">L’Université de Niceیکی از برترین دانشگاههای دولتی در نیس فرانسه است.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="../assets/img/nice_university_1.jpg" alt="دانشگاه نیس">
                        </div>
                        <h3>
                            جمعیت دانشجویان
                        </h3>
                        <p class="mb-30">امروزه، دانشگاه نیس یک دانشگاه چند رشته ای مدرن با حدود 28000 دانشجو و 3500
                            پرسنل (هیئت علمی، پژوهشگران و کارکنان)، عضو دانشگاه کوت دازور است. در گزارشی که اخیرا منتشر
                            شده این ارقام و اعداد به نحو دیگری آمده است. نزدیک به 30000 دانشجو در آموزش دوره کارشناسی تا
                            دکتری حضوری هرروزه در شهر دارند که 20 درصد آنها دانشجویان خارجی هستند که در هشت دانشگاه و
                            دانشکده تحقیقاتی (EUR) مشغول فعالیتند.
                        </p>
                        <h3>هزینه تحصیل در شهر و دانشگاه نیس</h3>
                        <p class="mb-30">شهریه دانشگاه برای تمام افراد یکی برآورد می‌شود و در حدود سالی ۶۱۰ یورو برآورد
                            می‌شود. از طرفی، نیس جایی است که می‌توانید ارزان‌تر از شهرهایی مثل مارسی و حتی تولوز زندگی
                            کنید، چون مقرون‌به‌صرفه است، به ویژه برای دانشجویان که فاند تحصیلی دارند. اجاره مسکن در
                            بازار ملک حدود ۴۰۰ یورو بسته به محل زندگی شما در نیس است. با این وجود، پول بلیط حمل و نقل
                            عمومی برای افراد زیر ۲۶ سال خیلی ارزان است.
                        </p>

                        <h3>
                            فاند و کمک‌هزینه تحصیلی در دانشگاه نیس
                        </h3>
                        <p class="mb-30">شما می‌توانید با فاند در دانشگاه نیس تحصیل کنید. بورسیه‌های دانشگاه نیس برای
                            دوره‌های کارشناسی ارشد و کارشناسی ارائه می‌شوند، اما بیشترین میزان در مقطع دکتری اعطا
                            می‌شود.
                        </p>
                        <h3>
                            رشته‌ها
                        </h3>
                        <p class="mb-30">
                            <b>رشته‌های دانشگاه نیس در دپارتمان‌های زیر دسته‌بندی شده‌اند:</b>
                        <ul style="list-style: inside">
                            <li>حقوق، علوم سیاسی، اقتصادی و مدیریت؛</li>
                            <li>توسعه روابط بین‌الملل، مدیریت صلح؛</li>
                            <li>مردم‌شناسی؛</li>
                            <li>ادبیات، هنر و علوم اجتماعی؛</li>
                            <li>داروسازی؛</li>
                            <li>فناوری اطلاعات؛</li>
                            <li>تربیت بدنی.</li>
                        </ul>
                        یکی از مسائل مهم برای دانشگاه نیس هوش مصنوعی است. 3IA Côte d’Azur: مؤسسه هوش مصنوعی یکی از 4
                        مؤسسه هوش مصنوعی در فرانسه است که از یک سو بر کاربردهای سلامت و زیست شناسی دیجیتال و از سوی دیگر
                        بر مناطق هوشمند از جمله وسایل نقلیه مستقل و متصل تمرکز دارد.
                        </p>
                        <h3>
                            ددلاین یا آخرین مهلت اخذ پذیرش به همراه مدارک مورد نیاز </h3>
                        <p class="mb-30">
                            برای ثبت نام در دانشگاه نیس شما به مدارک زیر نیاز دارید:
                        <ul style="list-style: inside">
                            <li>باستان شناسی: بیست و پنجم جهان (اول در فرانسه)</li>
                            <li>فلسفه: بیست و هفتمین جهان (دومین در فرانسه)</li>
                            <li>تاریخچه: سی و سومین جهان (اول در فرانسه)</li>
                            <li>جغرافیا: سی و پنجمین جهان (اول در فرانسه)</li>
                            <li>زبان های مدرن: شصت و هفتمین جهان (سومین در فرانسه)</li>
                            <li>هنر و طراحی: ۱۰۱-۱۵۰ جهان (چهارمین در فرانسه)</li>
                            <li>معماری و محیط ساخت: ۱۵۱-۲۰۰ جهان (اول در فرانسه)</li>
                            <li>مطالعات توسعه: ۳۷ جهان (اولین در فرانسه)</li>
                            <li>سیاست و مطالعات بین المللی: ۵۱-۱۰۰ جهان (دومین در فرانسه)</li>
                            <li>انسان شناسی: ۵۱-۱۰۰ جهان (اول در فرانسه)</li>
                            <li>سیاست و اداره اجتماعی: ۱۰۱-۱۲۰ جهان (دومین در فرانسه)</li>
                            <li>حسابداری و امور مالی: ۱۰۱-۱۵۰ جهان (پنجم در فرانسه)</li>
                            <li>مطالعات کسب و کار و مدیریت: ۱۰۱-۱۵۰ جهان (هفتم در فرانسه)</li>
                        </ul>
                        </p>
                        <h3>
                            آخرین مهلت ثبت نام
                        </h3>
                        <p class="mb-30">
                            به طور کلی، در کشور فرانسه شما باید دست کم تا پیش از اتمام اکتبر مدارک خود را برای دانشگاه
                            ارسال کرده باشید. زمان و تاریخ اعلام نتایج هم در آپریل همه ساله از پیش اعلام می‌شود ولی
                            حدودا همین حوالی ایمیل دانشگاه را دریافت خواهید کرد.
                        </p>
                        <h3>
                            مدارک مورد نیاز برای اخذ پذیرش
                        </h3>
                        <p class="mb-30">
                            <b>برای ثبت نام در دانشگاه لیون ۱ شما به مدارک زیر نیاز دارید:</b>
                        <ul style="list-style: inside">
                            <li>
                                اپلیکیشن درخواست آنلاین
                            </li>
                            <li>
                                انگیزه نامه (SOP)
                            </li>
                            <li>
                                ریز نمرات تحصیلی به همراه ترجمه
                            </li>
                            <li>
                                دانشنامه یا دیپلم دبیرستان به همراه ترجمه
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
                                رفرنس زبان انگلیسی
                            </li>
                            <li>
                                جستار آکادمیک
                            </li>
                        </ul>
                        اگر از ایران اقدام می‌کنید معمولا تا دسامبر برای کارشناسی و تا اوایل ژانویه برای مستر برای اخذ
                        پذیرش زمان دارید.
                        </p>
                        <h3>
                            زبان تدریس در دانشگاه نیس
                        </h3>
                        <p class="mb-30">


                            علاوه‌بر فرانسوی، همچنین در دانشگاه آزور، مدرک کارشناسی‌ارشد را به زبان انگلیسی به ویژه به
                            دانشجویان خارجی ارائه می‌شود. با این حال، برخی از کارشناسی‌ارشدها ممکن است تا حدی به زبان
                            فرانسوی هم برگزار شوند. یعنی ترکیبی باشند. بنابراین توصیه می شود بسته به رشته کارشناسی ارشد
                            انتخاب شده از UCA اطلاعات بیشتری را در دپارتمان مورد نظر جستجو کنید.

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
                                        <img src="../assets/img/nice.png" alt="دانشگاه نیس">
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
    <script>
        const divElement = document.getElementById('mydiv');

        // Select all the h3 elements inside the div
        const h3Elements = divElement.querySelectorAll('h3');

        const olElement = document.getElementById("board")
        // Loop through each h3 element and save its innerHTML to the array
        h3Elements.forEach((h3) => {
            // Create a new <li> element
            const listItem = document.createElement('li');
            listItem.style
            // Create a new <a> element
            const link = document.createElement('a');
            link.textContent = h3.innerHTML;

            // Add a click event to the <a> tag
            link.addEventListener('click', () => {
                // Calculate the offsetTop position of the h3 element
                const offsetTop = h3.offsetTop - 100;

                // Scroll to the corresponding h3 tag when the link is clicked
                window.scrollTo({top: offsetTop, behavior: 'smooth'});
            });
            listItem.classList.add('list-item-pointer');
            listItem.classList.add('mb-20');
            // Append the <a> tag to the <li> tag
            listItem.appendChild(link);

            // Append the <li> tag to the <ol> tag
            olElement.appendChild(listItem);
        });

    </script>

@endsection
