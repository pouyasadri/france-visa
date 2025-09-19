@extends('layout')
@section('title',$house->house_name)
@section("keywords","خرید خانه در فرانسه، املاک و مستغلات در فرانسه، سرمایه گذاری در فرانسه، زندگی در فرانسه، اقامت فرانسه، بازار املاک فرانسه، خرید ملک در اروپا، خرید ملک در خارج")
@section("description","پیچیدگی های خرید خانه در فرانسه را کشف کنید و درهای مالکیت ملک رویایی خود را در این کشور زیبای اروپایی باز کنید. این راهنمای جامع شما را در هر مرحله از فرآیند، از درک مزایای سرمایه گذاری در املاک و مستغلات فرانسه تا پیمایش مراحل قانونی و اداری، راهنمایی می کند.")
@push("json")
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{url()->current()}}"
  },
  "headline": "{{$house->house_name}}",
  "image": "{{asset("/storage/images/houses/".$house->house_main_image)}}",  
  "author": {
    "@type": "Organization",
    "name": "تحصیل، زندگی، سرمایه گذاری: رویاهای شما در فرانسه با A.V.C",
    "url": "https://applyvipconseil.com/"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "",
    "logo": {
      "@type": "ImageObject",
      "url": ""
    }
  },
  "datePublished": "2023-11-07",
  "dateModified": "2024-02-09"
}
</script>
@endpush
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$house->house_name}}</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/house">

                            املاک
                        </a>
                    </li>


                    <li>{{$house->house_name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start News Details Area -->
    <section class="news-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="news-details-desc">

                        <div class="article-image">
                            <img src="{{asset("/storage/images/houses/".$house->house_main_image)}}"
                                 alt="{{$house->house_name}}">
                        </div>
                        <div class="article-content">
                            {!! $house->house_description !!}
                            <div class="slider mt-30">
                                @foreach(json_decode($house->house_images) as $image)
                                    <div class="article-image">
                                        <img src="{{asset("/storage/images/houses/".$image)}}"
                                             alt="{{$house->house_name}}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider-btn mt-30">
                                <h4 class="mtb-30">برای کسب اطلاعات بیشتر و بازدید از آپارتمان، با ما تماس بگیرید.</h4>
                                <a class="default-btn" href="/consult">
                                    درخواست مشاوره خرید ملک در فرانسه
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </div>

                        <div class="article-footer mt-30">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>

                                <a href="#">اشتراک گذاری</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                @isset($prevHouse)
                                    <div class="nav-previous">
                                        <a href="{{ route('house.show', ['house' => $prevHouse]) }}"><i
                                                class='bx bx-right-arrow-alt'></i> ملک قبلی</a>
                                    </div>
                                @endisset
                                @isset($nextHouse)
                                    <div class="nav-next">
                                        <a href="{{ route('house.show', ['house' => $nextHouse]) }}">ملک بعدی <i
                                                class='bx bx-left-arrow-alt'></i></a>
                                    </div>
                                @endisset
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3 class="comments-title">0 نظر:</h3>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">نظر دهید</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">آدرس ایمیل شما منتشر نخواهد شد.</span>
                                        قسمت های مورد نیاز علامت گذاری شده اند
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>نام <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>ایمیل <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>وبسایت </label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>نظر </label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                                  required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="ارسال نظر">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_categories">
                            <h3 class="widget-title">اطلاعات ملک</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        نوع ملک: @if($house->house_type == "apartment") آپارتمان@endif @if($house->house_type == "villa") ویلایی@endif
                                    </li>
                                    <li>
                                        متراژ: {{$house->house_square}} متر مربع
                                    </li>
                                    <li>
                                        تعداد اتاق: {{$house->house_room_count}} خوابه
                                    </li>
                                    <li>
                                        تعداد پارکینگ: {{$house->house_garage_count}}
                                    </li>
                                    <li>
                                        {{$house->house_region}} - {{$house->house_city}}
                                    </li>
                                    <li>
                                        قیمت: {{$house->house_price}} یورو
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">املاک مشابه</h3>
                            <div class="post-wrap">
                                @foreach($similar_houses as $house)
                                    <article class="item">
                                        <a href="{{ route('house.show', ['house' => $house]) }}" class="thumb">
                                            <span class="fullimage cover"
                                                  style="background-image: url('{{asset("/storage/images/houses/".$house->house_main_image)}}')"
                                                  role="img"></span>
                                        </a>
                                        <div class="info">
                                            <span>{{$house->house_region}}</span>
                                            <h4 class="title usmall">
                                                <a href="{{ route('house.show', ['house' => $house]) }}">
                                                    {{$house->house_name}}
                                                </a>
                                            </h4>
                                            <span> {{$house->house_square}} متر مربع | {{$house->house_room_count}}
                                                    خوابه

                                            </span>
                                        </div>

                                        <div class="clear"></div>
                                    </article>
                                @endforeach
                            </div>
                        </section>
                        <section class="widget widget_tag_cloud">
								<h3 class="widget-title">برچسب ها</h3>
								<div class="post-wrap">
									<div class="tagcloud">
										<a href="#">خرید آپارتمان در فرانسه</a>
										<a href="#">املاک و مستغلات در فرانسه</a>
										<a href="#">سرمایه گذاری در فرانسه</a>
										<a href="#">زندگی در فرانسه</a>
										<a href="#">اقامت فرانسه</a>
										<a href="#">بازار املاک فرانسه</a>
										<a href="#">خرید ملک در اروپا</a>
										<a href="#">خرید ملک در خارج</a>
										<a href="#">{{$house->house_region}}</a>
										<a href="#">{{$house->house_exact_location}}</a>
									</div>
								</div>
							</section>

                        <div class="slider-btn mt-30">
                            <a class="default-btn" href="/consult">
                                درخواست مشاوره خرید ملک در فرانسه
                                <i class="flaticon-left-arrow"></i>
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                rtl: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]

            });

        });
    </script>
@endpush


