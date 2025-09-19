@extends('layout')
@section('title',$blog->blog_title)
@section("keywords",$blog->title)
@section("description",$blog->blog_slug)
@section('content')

    <div class="page-title-area" >
        <div class="container">
            <div class="page-title-content">
                <h2>
                {{$blog->blog_title}}
                </h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="/blog">
                        راهنمای جامع مهاجرت به فرانسه</a></li>

                    <li> {{$blog->blog_title}}</li>
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
                            <h4 class="service-details-title">ارتباط با ما</h4>
                            <ul>
                                <li>
                                    <a href="/consult">
                                        درخواست مشاوره مهاجرت به فرانسه
                                        <i class='bx bx-time'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@applyvipconseil.com">
                                        info@applyvipconseil.com
                                        <i class='bx bx-envelope'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/apply_vip_conseil/">
                                        اینستاگرام ما
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                    {!! $blog->blog_body !!}
                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    @if ($prevBlog)
                                        <a href="{{ route('blog.show', ['blog' => $prevBlog]) }}" class="previous-blog"><i
                                                class='bx bx-right-arrow-alt'></i> {{ $prevBlog->blog_title }}</a>
                                    @endif
                                </div>

                                <div class="nav-next">
                                    @if ($nextBlog)
                                        <a href="{{ route('blog.show', ['blog' => $nextBlog]) }}" class="next-blog">{{ $nextBlog->blog_title }}<i
                                                class='bx bx-left-arrow-alt'></i> </a>
                                    @endif
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
@push("json")
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://applyvipconseil.com/universities/lyon-2"
  },
  "headline": "دانشگاه ژان مولن لیون 2: دانشگاهی پیشرو در فرانسه",
  "image": "https://applyvipconseil.com/assets/img/universities/Lyon2/lyon_2_logo.webp",  
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
  "dateModified": "2024-01-11"
}
</script>
@endpush