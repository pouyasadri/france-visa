@extends('layout')
@section('title',$house->house_name)
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

                            <h3>{{$house->house_name}}</h3>

                            {!! $house->house_house_description !!}
                        </div>

                        <div class="article-footer">
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
                                <div class="nav-previous">
                                    <a href="{{ route('house.show', ['house' => $prevHouse]) }}"><i
                                                class='bx bx-right-arrow-alt'></i> ملک قبلی</a>
                                </div>

                                <div class="nav-next">
                                    <a href="{{ route('house.show', ['house' => $nextHouse]) }}">ملک بعدی <i class='bx bx-left-arrow-alt'></i></a>
                                </div>
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

            </div>
        </div>
    </section>
    <!-- End News Details Area -->
@endsection
