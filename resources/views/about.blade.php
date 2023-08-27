@extends('layout')
@section("title","درباره ما")
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>درباره ما</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>درباره ما</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Explore Area -->
    <section class="explore-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>کاوش کنید</span>
                <h2>ما خوشحالیم که شما را خوشحال کنیم</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="explore-img">
                        <img src="../assets/img/paris4.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="explore-content ml-30">
                        <h2>به همان راحتی که می خواهیم همه چیز را از ما بگیرند</h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                            بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به
                            مدت 40 سال استاندارد صنعت بوده است.</p>

                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                            بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        <a href="about.html" class="default-btn">
                            کشف بیشتر
                            <i class="flaticon-left-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Explore Area -->

    <section class="bokking-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>خدمات تیم ما</span>
                <h2>خدمات تیم ما</h2>
            </div>
            <div class="row">
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-1" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>اقامت کشور فرانسه</h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">بدون هزینه رزرو</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-2" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd"
                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>نگارش رزومه و انگیزه‌نامه</h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ضمانت بهترین نرخ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-3" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     style="margin: 0 auto" class="book-icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                انجام امور اداری در بدو ورود
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-3" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">رزرواسیون 24/7</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-4" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                ترجمه مدارک
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-4" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">وای فای پرسرعت</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-5" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                مشاوره تحصیلی
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-5" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">صبحانه رایگان</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-6" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                رزرو محل اسکان
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-6" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">صبحانه رایگان</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-7" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                اخذ پذیرش تحصیلی
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-7" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">صبحانه رایگان</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#exampleModalCenter-8" data-toggle="modal">
                            <div style="padding-bottom: 1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="book-icon" style="margin: 0 auto" viewBox="0 0 16 16">
                                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                </svg>
                            </div>
                            <span class="booking-title">هزینه رایگان</span>
                            <h3>
                                پشتیبانی اداری در فرانسه
                            </h3>
                        </a>
                        <div class="modal fade" id="exampleModalCenter-8" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">صبحانه رایگان</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                            استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                            لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
                                            رزرو کن
                                            <i class="flaticon-left-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Start City View Area -->
    <section class="city-view-area ptb-100">
        <div class="container">
            <div class="city-wrap">
                <div class="single-city-item owl-carousel owl-theme">
                    <div class="city-view-single-item">
                        <div class="city-content">
                            <span>نمای شهر</span>
                            <h3>منظره ای جذاب از شهر</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم
                                ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="city-view-single-item">
                        <div class="city-content">
                            <span>نمای شهر</span>
                            <h3>منظره ای جذاب از شهر</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم
                                ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End City View Area -->

    <!-- Start Counter Area -->
    <section class="counter-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <p>سواحل</p>
                        <h2>
                            <span style="direction: ltr;" class="odometer" data-count="50">00</span> <span
                                class="target">+</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <p>آبگرم</p>
                        <h2>
                            <span style="direction: ltr;" class="odometer" data-count="95">00</span> <span
                                class="target">+</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <p>اتاق ها</p>
                        <h2>
                            <span style="direction: ltr;" class="odometer" data-count="45">00</span> <span
                                class="target">+</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <p>مشتریان راضی</p>
                        <h2>
                            <span style="direction: ltr;" class="odometer" data-count="20">00</span> <span
                                class="target">K</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- start Testimonials Area -->
    <section class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>مشتریان ما</span>
                <h2>آنچه مشتریان می گویند</h2>
            </div>
            <div class="testimonials-wrap owl-carousel owl-theme">
                <div class="single-testimonials">
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <h3>خدمات عالی</h3>
                    <p>“لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                        بوده است.”</p>
                    <div class="testimonials-content">
                        <img src="../assets/img/testimonials/2.jpg" alt="Image">
                        <h4>آیمان جنیس</h4>
                        <span>CEO@Leasuely</span>
                    </div>
                </div>
                <div class="single-testimonials">
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <h3>خدمات عالی</h3>
                    <p>“لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                        بوده است.”</p>
                    <div class="testimonials-content">
                        <img src="../assets/img/testimonials/3.jpg" alt="Image">
                        <h4>آیمان جنیس</h4>
                        <span>CEO@Leasuely</span>
                    </div>
                </div>
                <div class="single-testimonials">
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <h3>خدمات عالی</h3>
                    <p>“لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                        بوده است.”</p>
                    <div class="testimonials-content">
                        <img src="../assets/img/testimonials/1.jpg" alt="Image">
                        <h4>آیمان جنیس</h4>
                        <span>CEO@Leasuely</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

@endsection
