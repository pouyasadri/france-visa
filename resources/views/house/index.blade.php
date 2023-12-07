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
    <section class="news-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="news-details-desc">
                        <div class="row">
                            @forelse($houses as $house)
                                <div class="col-lg-12 col-md-6">
                                    <div class="single-news">
                                        <div class="news-img">
                                            <a href="{{ route('house.show', ['house' => $house]) }}">
                                                <img src="{{asset("/storage/images/houses/".$house->house_main_image)}}"
                                                     alt="{{$house->house_name}}خرید ملک در فرانسه | ">
                                            </a>
                                            <div class="dates">
                                                <span>{{$house->house_price}}</span>
                                            </div>
                                        </div>
                                        <div class="news-content-wrap">
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
                            <div class="col-lg-12">
                                <div class="page-navigation-area">
                                    <nav aria-label="Page navigation example text-center">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link page-links" href="#">
                                                    <i class='bx bx-chevrons-right'></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <i class='bx bx-chevrons-left'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <div class="widget widget_search">
                            <h3 class="widget-title">جستجوی سایت</h3>
                            <div class="post-wrap">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">جستجو:</span>
                                        <input type="search" class="search-field" placeholder="جستجو ...">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>

                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">پست های محبوب</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">05 دی 1398</time>
                                        <h4 class="title usmall">
                                            <a href="news-details.html">
                                                جشن دهه های هتل در سال 1399 را ببینید
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">05 دی 1398</time>
                                        <h4 class="title usmall">
                                            <a href="news-details.html">
                                                جشن دهه های هتل در سال 1399 را ببینید
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">05 دی 1398</time>
                                        <h4 class="title usmall">
                                            <a href="news-details.html">
                                                جشن دهه های هتل در سال 1399 را ببینید
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="news-details.html" class="thumb">
                                        <span class="fullimage cover bg4" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">05 دی 1398</time>
                                        <h4 class="title usmall">
                                            <a href="news-details.html">
                                                جشن دهه های هتل در سال 1399 را ببینید
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">بایگانی ها</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">مهر <span>1399</span></a>
                                    </li>
                                    <li>
                                        <a href="#">آبان <span>1399</span></a>
                                    </li>
                                    <li>
                                        <a href="#">آذر <span>1399</span></a>
                                    </li>
                                    <li>
                                        <a href="#">دی <span>1399</span></a>
                                    </li>
                                    <li>
                                        <a href="#">بهمن <span>1399</span></a>
                                    </li>
                                    <li>
                                        <a href="#">اسفند <span>1399</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">دسته بندی ها</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">هتل <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">رزرواسیون <span>(20)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">گارانتی <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">مدها <span>(12)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">ویزیت <span>(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">وای فای <span>(17)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">برچسب ها</h3>
                            <div class="post-wrap">
                                <div class="tagcloud">
                                    <a href="#">هتل (3)</a>
                                    <a href="#">رزرواسیون (3)</a>
                                    <a href="#">گارانتی (2)</a>
                                    <a href="#">دسته بندی نشده (2)</a>
                                    <a href="#">مدها (1)</a>
                                    <a href="#">حریم خصوصی (1)</a>
                                    <a href="#">ویزیت (1)</a>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Area -->
@endsection
