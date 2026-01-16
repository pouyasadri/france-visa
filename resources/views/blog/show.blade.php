@extends('layout')
@section('title',$translation->title)
@section("keywords",$translation->title)
@section("description",$translation->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($translation->body), 160, '...'))
@section('content')

    <div class="page-title-area" >
        <div class="container">
            <div class="page-title-content">
                <h2>
                {{$translation->title}}
                </h2>
                <ul>
                    <li>
                        <a href="/">
                            {{ __('blog/show.breadcrumb_home') }}
                        </a>
                    </li>
                    <li>
                        <a href="/blog">
                        {{ __('blog/show.breadcrumb_blogs') }}</a></li>

                    <li>{{$translation->title}}</li>
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
                            <h4 class="service-details-title">{{ __('blog/show.table_of_contents') }}</h4>
                            <ol id="board">

                            </ol>
                        </div>
                        <div class="service-list service-card">
                            <h4 class="service-details-title">{{ __('blog/show.contact_us') }}</h4>
                            <ul>
                                <li>
                                    <a href="/consult">
                                        {{ __('blog/show.consult_button') }}
                                        <i class='bx bx-time'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@applyvipconseil.com">
                                        {{ __('blog/show.email') }}
                                        <i class='bx bx-envelope'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/apply_vip_conseil/">
                                        {{ __('blog/show.instagram') }}
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                    {!! $translation->body !!}
                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    @if ($prevBlog)
                                        <a href="{{ route('blog.show', ['blog' => $prevBlog]) }}" class="previous-blog"><i
                                                class='bx bx-right-arrow-alt'></i> {{ $prevBlog->getTranslation($locale)?->title ?? 'Previous' }}</a>
                                    @endif
                                </div>

                                <div class="nav-next">
                                    @if ($nextBlog)
                                        <a href="{{ route('blog.show', ['blog' => $nextBlog]) }}" class="next-blog">{{ $nextBlog->getTranslation($locale)?->title ?? 'Next' }}<i
                                                class='bx bx-left-arrow-alt'></i> </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="ask-question">
                            <h3>{{ __('blog/show.ask_question_title') }}</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('blog/show.name_error') }}" placeholder="{{ __('blog/show.name_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('blog/show.email_error') }}" placeholder="{{ __('blog/show.email_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('blog/show.phone_error') }}" class="form-control"
                                                   placeholder="{{ __('blog/show.phone_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('blog/show.subject_error') }}" placeholder="{{ __('blog/show.subject_placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                  required data-error="{{ __('blog/show.message_error') }}"
                                                  placeholder="{{ __('blog/show.message_placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
												<span class="label">
													{{ __('blog/show.submit_button') }}
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
    "@id": "{{ url()->current() }}"
  },
  "headline": "{{ $translation->title }}",
  "image": "{{ $blog->main_image ? asset('storage/' . $blog->main_image) : asset('assets/img/default-blog.png') }}",
  "author": {
    "@type": "Person",
    "name": "{{ $blog->author?->name ?? 'Author' }}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "{{ config('app.name') }}",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('assets/img/logo.png') }}"
    }
  },
  "datePublished": "{{ $blog->published_at?->toIso8601String() ?? $blog->created_at->toIso8601String() }}",
  "dateModified": "{{ $blog->updated_at->toIso8601String() }}"
}
</script>
@endpush
