@extends('layout')
@section('title',"خرید خانه در فرانسه: خرید ملک رویایی خود")
@section("keywords","خرید خانه در فرانسه,املاک و مستغلات در فرانسه,سرمایه گذاری در فرانسه,زندگی در فرانسه,اقامت فرانسه,بازار املاک فرانسه,خرید ملک در اروپا,خرید ملک در خارج")
@section("description","پیچیدگی های خرید خانه در فرانسه را کشف کنید و درهای مالکیت ملک رویایی خود را در این کشور زیبای اروپایی باز کنید. این راهنمای جامع شما را در هر مرحله از فرآیند، از درک مزایای سرمایه گذاری در املاک و مستغلات فرانسه تا پیمایش مراحل قانونی و اداری، راهنمایی می کند.")
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>خرید ملک در فرانسه</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>املاک ما در فرانسه</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- End News Area -->
    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>اخذ اقامت فرانسه از طریق سرمایه گذاری و خرید ملک</span>
                <h2>خرید ملک در فرانسه</h2>
            </div>
            <div class="row">
                @forelse($houses as $house)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-news">
                            <div class="news-img">
                                <a href="{{ route('house.show', ['house' => $house]) }}">
                                    <img src="{{asset("/storage/images/houses/".$house->house_main_image)}}"
                                         alt="{{$house->house_name}}">
                                </a>
                                <div class="dates">
                                    <span>{{$house->house_price}}</span>
                                </div>
                            </div>
                            <div class="news-content-wrap">
                                <ul>
                                    <li>
                                        <i class="flaticon-user"></i>
                                        مدیر
                                    </li>
                                </ul>
                                <a href="{{ route('house.show', ['house' => $house]) }}">
                                    <h3>{{$house->house_name}}</h3>
                                </a>
                                <p>{{$house->house_region}} | {{$house->house_type}}</p>
                                <a class="read-more" href="{{ route('house.show', ['house' => $house]) }}">
                                    ادامه
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                        هیچ ملک پیدا نشد!
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End News Area -->
@endsection
