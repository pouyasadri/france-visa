@extends('layout')
@section('title',"زیباترین و پربازدیدترین شهرهای فرانسه")
@section("keywords","شهرهای فرانسه,شهرهای محبوب فرانسه,پاریس,لیون,نیس,تولوز,استراسبورگ,مهاجرت به فرانسه,مناسب ترین شهر های فرانسه برای زندگی,مهاجرت به اروپا,مهاجرت تحصیلی,اقامت فرانسه,زندگی دانشجویی در اروپا")
@section("description","در این صفحه به معرفی زیباترین و پربازدیدترین شهرهای فرانسه می پردازیم. این شهرها جاذبه های گردشگری فراوانی دارند و سالانه میلیون ها گردشگر از سراسر جهان از آنها بازدید می کنند.")
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>معرفی زیباترین و پربازدیدترین شهرهای فرانسه</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>زیباترین و پربازدیدترین شهرهای فرانسه</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Our Rooms Area -->
    <section class="our-rooms-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>کشور فرانسه مهد فرهنگ و هنر</span>
                <h2>معرفی شهرهای محبوب فرانسه</h2>
            </div>
            <div style="padding-bottom: 1rem">
                <p>شهرهای فرانسه به خاطر شخصیت و فرهنگی منحصر به فردشان شناخته می‌شوند. پاریس به عنوان پایتخت فرانسه، با
                    برج
                    ایفل و قصر ورسای، یکی از جاذبه‌های برتر جهان است. شهرهای دیگر نیز مانند نیس، لیون، استراسبورگ، تولوز
                    و
                    بوردو
                    با آثار باستانی، خیابان‌های فراتر از حد تخیل، موزه‌های هنری و معماری، فروشگاه‌های لوکس، رستوران‌های
                    با
                    نام و نشان و چشم‌اندازهای طبیعی زیبا به عنوان مقاصد گردشگری محبوب شناخته می‌شوند. علاوه بر این،
                    شهرهای
                    فرانسه با محیطی امن و دوستانه، امکانات حمل و نقل عمومی خوب و پارک‌های عمومی زیبا، به عنوان محل زندگی
                    مطلوب برای ساکنان و بازدیدکنندگان نیز شناخته می‌شوند.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Paris/paris-slider.webp")}}" style="height: 350px"
                                 alt="زیباترین و پربازدیدترین شهرهای فرانسه |معرفی شهر پاریس">
                            <div class="single-rooms-three-content">
                                <h3>معرفی شهر پاریس</h3>
                                <span class="price">شرایط و هزینه های زندگی در شهر پاریس </span>
                                <a href="/cities/paris" class="default-btn">
                                    ادامه مطلب
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Lyon/lyon.webp")}}" style="height: 350px"
                                 alt="زیباترین و پربازدیدترین شهرهای فرانسه |معرفی شهر لیون">
                            <div class="single-rooms-three-content">
                                <h3>معرفی شهر لیون</h3>
                                <span class="price"> شرایط و هزینه های زندگی در شهر لیون</span>
                                <a href="/cities/lyon" class="default-btn">
                                    ادامه مطلب
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Strasbourg/strasbourg.webp")}}" style="height: 350px"
                                 alt=" زیباترین و پربازدیدترین شهرهای فرانسه | معرفی شهر استراسبورگ">
                            <div class="single-rooms-three-content">
                                <h3>معرفی شهر استراسبورگ</h3>
                                <span class="price"> شرایط و هزینه های زندگی در شهر استراسبورگ</span>
                                <a href="/cities/strasbourg" class="default-btn">
                                    ادامه مطلب
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Nice/nice1.webp")}}" style="height: 350px"
                                 alt="زیباترین و پربازدیدترین شهرهای فرانسه | معرفی شهر نیس">
                            <div class="single-rooms-three-content">
                                <h3>معرفی شهر نیس</h3>
                                <span class="price"> شرایط و هزینه های زندگی در شهر نیس</span>
                                <a href="/cities/nice" class="default-btn">
                                    ادامه مطلب
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-rooms-three-wrap">
                        <div class="single-rooms-three">
                            <img src="{{asset("assets/img/cities/Toulouse/toulouse.webp")}}" style="height: 350px"
                                 alt="زیباترین و پربازدیدترین شهرهای فرانسه | معرفی شهر تولوز">
                            <div class="single-rooms-three-content">
                                <h3>معرفی شهر تولوز</h3>
                                <span class="price"> شرایط و هزینه های زندگی در شهر تولوز</span>
                                <a href="/cities/toulouse" class="default-btn">
                                    ادامه مطلب
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Our Rooms Area -->
@endsection
