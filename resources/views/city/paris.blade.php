@extends('layout')
@section('title',"
شهر پاریس")
@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی شهر پاریس</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/cities">
                            شهر های فرانسه</a></li>
                    <li>شهر پاریس</li>
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
                            <ol id="board">

                            </ol>
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


                        <h2>شهر پاریس، شهر فرهنگ، مقاومت و تفریح</h2>
                        <div class="single-services-imgs mb-30">
                            <img src="../assets/img/paris2.jpg" alt="شهر پاریس">
                        </div>
                        <h3>پاریس کجاست</h3>
                        <p>شهر پاریس پایتخت و پرجمعیت ترین شهر فرانسه است. واقع در رودخانه سن، در شمال کشور، در مرکز
                            Île-de-France، قرار دارد و همچنین به عنوان منطقه parisienne، یا “منطقه پاریس” شناخته شده
                            است. پاریس در شمال مرکزی فرانسه در کنار رود سن واقع شده است. این شهر در مرکز ایل دو فرانس
                            قرار است.
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d168015.65294043656!2d2.3236891!3d48.8535464!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1691021825212!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>آب و هوای شهر پاریس</h3>
                        <p class="mb-30">پاریس در چهار فصل سال آب و هوای معتدلی را تجربه می‌کند. میانگین حداکثر روزانه
                            از ۶ درجه سانتیگراد در زمستان تا ۲۵ درجه سانتیگراد در اوج تابستان متغیر است. بنابراین، سرما
                            یا گرمای شدید بسیار نادر است، اما باران؟ خیر اینطور نیست. در پاریس، دوش‌های ضربتی باران
                            می‌توانند در طول روز به سرعت بیایند و بروند. پاریس به طور متوسط ​​۱۵ روز برفی در سال را
                            تجربه می‌کند، اما به ندرت بیشتر از یک روز آلودگی هوا را تجربه می‌کند. مردم و گردشگران آفتاب
                            پاریس را بیشتر از لندن می‌بینند و در میان پایتخت‌های اروپایی مرغوب‌ترین هوا را به ساکنانش
                            هدیه می‌کند.
                        </p>
                        <div class="rooms-details mb-30">
                            <img src="../assets/img/paris4.jpg" alt="شهر پاریس">
                        </div>
                        <h3>کمی تاریخ درباره شهر پاریس </h3>
                        <p class="mb-30">

                            تاریخ پاریس تقریباً به 259 سال قبل از میلاد برمی گردد، با پاریسی ها، قبیله ای سلتی که در
                            کرانه های رود سن ساکن بودند. نام پاریس از ساکنان اولیه آن، پاریسی‌ها (به زبان گالی:
                            Parisioi)، یک قبیله گالی از عصر آهن و دوره روم گرفته شده است. پاریس در قرن سوم قبل از میلاد
                            در île de la Cité توسط قبیله‌ای از سلت‌ها تأسیس شد.

                            آنها گروهی از ماهیگیران قبیله ای به نام پاریسی بودند که به دلیل مهاجرت به سواحل رود سن، در
                            آنجا اقامت دائم کردند و از حاصلخیزی و آب و هوای معتدل منطقه بهره بردند. این شهر در قرن چهارم
                            نام خود را به پاریس تغییر داد.

                        </p>
                        <h3>
                            دانشگاه‌های شهر پاریس
                        </h3>
                        <p class="mb-30">مهم‌ترین و معتبرترین دانشگاه‌های فرانسه، به احتمال در پاریس واقع شده‌اند. اگرچه
                            تحصیل در فرانسه در آن زمان کاملاً «رایگان» نیست، اما زمانی که در یک دانشگاه دولتی تحصیل می
                            کنید مبلغ بسیار کمی از شما دریافت می شود. به عبارت دقیق‌تر، در دانشگاه‌های دولتی فرانسه
                            شهریه‌ای وجود ندارد، اما هزینه‌های ثبت نام متوسطی وجود دارد، زیرا دولت اکثر هزینه‌های این
                            برنامه‌های آموزشی ارائه شده در مؤسسات دولتی را پوشش می‌دهد. با این حال، اگر شهروند یک کشور
                            اتحادیه اروپا نیستید، باید هزینه تحصیلی بالاتری در فرانسه بپردازید. فارغ از این، مهم‌ترین
                            دانشگاه‌های پاریس عبارتند از:
                        <ul style="list-style: inside">
                            <li>سوربن؛</li>
                            <li>دانشگاه رنه‌ دکارت؛</li>
                            <li>دانشگاه پیر و ماری کوری؛</li>
                            <li>دانشگاه دنی دیدروو.</li>
                        </ul>
                        مجموعه‌ای از دانشگاه‌ها در پاریس وجود دارند که برنامه‌های آموزشی به انگلیسی را ارائه می‌دهند، چه
                        کورس‌های تحصیلی در خارج از کشور، چه در مقطع کارشناسی یا تحصیلات تکمیلی. برخی موسسات فرانسوی به
                        دنبال تشویق دانشجویان انگلیسی زبان برای مهاجرت تحصیلی به پاریس هستند، در حالی که برخی دیگر پردیس
                        دانشگاه‌های بین المللی مستقر در پاریس هستند، مانند دانشگاه آمریکایی پاریس.
                        </p>
                        <h3>
                            خلق‌وخوی مردم پاریس
                        </h3>
                        <p class="mb-30">


                            از این نظر پاریس متنوع‌ترین شهر اروپا در نظر گرفته می‌شود و تخمین زده می شود که حدود ۲۳ درصد
                            از جمعیت مدتی پس از تولدشان به پاریس مهاجرت کرده‌اند. پس اینجا شهری پذیرا و مهربان منتظر شما
                            است. اما مردم خیلی زود عاشق پاریس می‌شوند؛ یک فرانکوفیل فردی است که عاشق فرانسه، چیزهای
                            فرانسوی و مردم فرانسه است. اگر شروع به پوشیدن کلاه و خوردن باگت کنید، دوستانتان تصور می‌کنند
                            که شما یک فرانکوفیل هستید.

                            جنبه رمانتیک پاریس به لطف معماری و مکان‌های زیبا و منحصربه‌فردش احساسات شما را بیدار می‌کند.
                            کلیسای Sacré Coeur، Arc de Triomphe و غیره گواه معماری تاریخی شگفت انگیز پاریس هستند که
                            پاریس را به رمانتیک‌ترین شهر روی زمین تبدیل می‌کند.

                        </p>
                        <h3>
                            سوغات شهر پاریس
                        </h3>
                        <p class="mb-30">
                            <b>بهترین سوغاتی که می‌توانید برای عزیزانتان سوغات بیاورید:</b>
                        <ul>
                            <li>کیف دستی طراح‌های ‌فرانسوی.</li>
                            <li>یک عطر سفارشی</li>
                            <li>پرتره ای از مونمارتر</li>
                            <li>چای ماریاژ فرس</li>
                            <li>شمع از Maison Souquet</li>
                            <li>کتابی از Les Bouquinistes</li>
                            <li>یک صابون از Buly 1803</li>
                            <li>یک جفت کفش شاتل.</li>
                        </ul>
                        </p>
                        <h3>
                            فرودگاه‌های شهر پاریس
                        </h3>
                        <p class="mb-30">


                            سه فرودگاه در پاریس وجود دارد: شارل دوگل، اورلی و بووه. دو فرودگاه اصلی شارل دوگل و بووه‌ در
                            شمال شرقی و اورلی در جنوب هستند که به خوبی به مرکز شهر به لطف حمل‌ونقل عمومی‌ متصل می‌شوند،
                            در حالی که فرودگاه پاریس بووه بسیار دورتر و در شمال قرار دارد و توسط خطوط هوایی ارزان قیمت
                            استفاده می‌شود و برای سفرهای داخلی کاربرد دارد.

                            در این بین، فرودگاه شارل دوگل (CDG) فرودگاه اصلی پاریس و شلوغ ترین فرودگاه فرانسه با بیش از
                            70 میلیون مسافر در سال است. اگر به دنبال راحتی در مورد گزینه‌های مسیر و کیفیت‌ پروازها
                            هستید، شارل دوگل احتمالا بهترین گزینه برای شماست. اما مانند هرچیز خوب دیگری متأسفانه هزینه
                            دارد. قیمت بلیط برای پروازهای داخل و خارج از پاریس، از مقصد شارل دوگل، بالاتر از اورلی است و
                            هتل‌های آن نیز گران‌تر هستند.

                        </p>
                        <div class="rooms-details mb-30">
                            <img src="../assets/img/paris6.jpg" alt="شهر پاریس">
                        </div>
                        <h3>
                            راه آهن و قطار در شهر پاریس
                        </h3>
                        <p class="mb-30">


                            شلوغ‌ترین ایستگاه راه‌آهن اروپا و مرکز قطارهای ورودی و خروجی شهر پاریس در یورواستار.و
                            Thalys، Gare du Nord به بلژیک، هلند و آلمان نیز خدمات می‌دهد.

                            متروی پاریس سریعترین راه برای رفت و آمد در شهر است. سیستم زیرزمینی 16 خط به هم پیوسته دارد و
                            همچنین به قطار سریع السیر RER متصل است.

                            همچنین، TGV (به فرانسوی: Train à Grande Vitesse، «قطار سریع‌السیر»؛ که سابقا TurboTrain à
                            Grande Vitesse نامیده می‌شد) سرویس راه‌آهن پرسرعت بین شهری فرانسه است که توسط دولت اداره
                            می‌شود.

                        </p>
                        <h3>
                            موقعیت‌های سرمایه‌گذاری در پاریس
                        </h3>
                        <p class="mb-30">


                            صرف نظر از چرخه بازار، املاک و مستغلات پاریس، این شهر همچنان یک آپشن سرمایه‌گذاری سودآور با
                            روند بلندمدت ولی صعودی است. بر اساس مطالعه‌ای که توسط دفاتر اسناد رسمی پاریس و ایل دوفرانس
                            منتشر شده‌است، کسانی که معاملات ملک را انجام می‌دهند، قیمت ملکشان در طی ۳۰ سال بیش از سه
                            برابر شده است.

                            ساده ترین راه برای سرمایه‌گذاری در بازار سهام فرانسه، سرمایه‌گذاری در یک شاخص بازار گسترده
                            است. با استفاده از ETF که پلتفورم این کار است می‌توان ترید را با هزینه کم انجام داد. در
                            بازار سهام فرانسه 2 شاخص پیدا خواهید کرد که توسط ETF ها ردیابی می‌شوند. از طرف دیگر،
                            می‌توانید در شاخص های منطقه یورو سرمایه گذاری کنید.

                        </p>
                        <h3>
                            رفاه مردم پاریس
                        </h3>
                        <p class="mb-30">

                            زندگی در پاریس عاشقانه و هیجان انگیز است، اما گران است. امکانات رفاهی روزانه و مسکن در
                            پرجمعیت‌ترین شهر فرانسه قیمت بالایی دارد. حدود ۲.۲ میلیون نفر در ۲۰ منطقه (منطقه شهرداری) در
                            اینجا زندگی می‌کنند.

                            در فرانسه به طور کلی کارمندان و خانواده‌های آنها به طور کامل واجد شرایط سیستم جامع تامین
                            اجتماعی فرانسه هستند که شامل موارد زیر است
                        <ul style="list-style: inside">
                            <li>بیمه سلامت؛</li>
                            <li>زایمان؛</li>
                            <li>پدر؛</li>
                            <li>مستمری از کارافتادگی و فوت.</li>
                        </ul>
                        سیستم رفاه سالانه حدود ۵۰۰ میلیارد یورو یا بیش از ۳۰ درصد تولید ناخالص داخلی را تشکیل می دهد.
                        منافعی که در ازای حق بیمه‌ دریافت می‌کنید عبارتند از:
                        <ul style="list-style: inside">
                            <li>حق اولاد؛</li>
                            <li>کمک‌هزینه و یارانه‌های مرتبط؛</li>
                            <li>یارانه عائله‌مندی؛</li>
                            <li>کمک‌هزینه درمانی؛</li>
                            <li>هدیه تولد فرزند؛</li>
                            <li>یارانه پایه برای هر فرزند؛</li>
                            <li>مزایای فرزندپروری.</li>
                        </ul>
                        </p>
                        <h3>اشتغال</h3>
                        <p class="mb-30">


                            درست مانند هر شهر بزرگ دیگری، پیدا کردن مشاغل فناوری اطلاعات در پاریس خیلی سخت نیست. از
                            آنجایی که زبان انگلیسی بخش بزرگی از فرهنگ فناوری اطلاعات است، مهاجر بودن، به ویژه فردی با
                            تجربه فناوری اطلاعات و زبان انگلیسی، می تواند یک مزیت بزرگ باشد.

                            در نظر داشته باشید که فرانسه نه تنها به دلیل داشتن اقتصاد قوی بلکه به دلیل کیفیت زندگی،
                            همواره به عنوان یکی از بهترین کشورها برای مهاجران سال به سال رتبه‌بندی می شود. فرصت کار در
                            پاریس یک نقطه عطف شغلی مهم برای بسیاری از متخصصان است.

                            چون حقوق‌ها در پاریس بالا است تا ۲۵٪ بیشتر از بقیه کشور. اگر می‌پرسید زندگی حرفه‌ای‌تان در
                            پاریس چگونه خواهد بود، باید بگوییم که هر هفته کاری ۳۹ ساعت و ۳۰ دقیقه تنظیم شده است و ساعت
                            کاری حدود ساعت ۹:۳۰ صبح شروع می‌شوند و حدود ساعت ۷ بعد از ظهر به پایان می‌رسند.

                        </p>
                        <h3>
                            کلام آخر
                        </h3>
                        <p class="mb-30">
                            شهر پاریس مشهورترین شهر جهان است. نیازی نیست تا با شما درباره لذت سفر به اینجا را پیش بکشیم
                            چون دوست داریم خودتان از نزدیک ببینید. همین حالا با ما تماس بگیرید تا ترتیب همه چیز را برای
                            یک سفر رویایی به پاریس بدهیم.
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
