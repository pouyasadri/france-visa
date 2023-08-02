@extends('layout')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>تماس با ما 2</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>تماس</li>
                    <li>تماس با ما 2</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>تماس با ما</span>
                <h2>برای هر سوالی پیام ارسال کنید</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-wrap contact-pages">
                        <div class="contact-form contact-form-mb">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="لطفا نام خود را وارد کنید" placeholder="نام شما">
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
                                                   placeholder="تلفن">
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
                                            <textarea name="message" class="form-control textarea-hight" id="message"
                                                      cols="30" rows="4" required data-error="پیام خود را بنویسید"
                                                      placeholder="پیام شما"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            ارسال پیام
                                            <i class="flaticon-left-arrow"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-envelope"></i>
                                <h3>ایمیل ما:</h3>
                                <a href="mailto:hello@ecorik.com">hello@ecorik.com</a>
                                <a href="mailto:info@ecorik.com">info@ecorik.com</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-phone-call"></i>
                                <h3>تماس بگیرید:</h3>
                                <a href="tel:021-12345678">تلفن. 021-12345678</a>
                                <a href="tel:021-12345678">تلفن. 021-12345678</a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="single-contact-info">
                                <i class="bx bx-location-plus"></i>
                                <h3>موقعیت</h3>
                                <a href="#"> ایران ، استان تهران ، میدان آزادی ، خیابان 9 شرقی</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area  -->
    <div class="map-area pb-100">
        <div class="container">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="400" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Map Area -->
@endsection
