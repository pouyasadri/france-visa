@extends('layout')
@section("title","پنل مدیریت وبلاگ")
@section("content")

    <!-- Start Log In Area -->
    <section class="user-area-all-style log-in-area cart-area ptb-100" style="background: whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-form-action">
                        <div class="form-heading text-center">
                            <h3 class="form-title">پنل مدیریت وبلاگ</h3>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">

                                        <label for="blog_title">عنوان وبلاگ:</label>
                                        <input class="form-control" id="blog_title" type="text" name="blog_title"
                                               placeholder="عنوان وبلاگ">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_category">موضوع وبلاگ:</label>
                                        <input class="form-control" id="blog_category" type="text" name="blog_category"
                                               placeholder="موضوع وبلاگ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_main_image">تصویر اصلی وبلاگ:</label>
                                        <input class="form-control" id="blog_main_image" type="file"
                                               name="blog_main_image"
                                               placeholder="تصویر اصلی وبلاگ:">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_slug">توضیحات مختصر وبلاگ:</label>
                                        <textarea class="form-control" name="blog_slug" id="blog_slug" cols="30"
                                                  rows="10" placeholder="توضیحات مختصر وبلاگ:"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_body">توضیحات وبلاگ:</label>
                                        <textarea class="form-control" name="blog_body" id="blog_body" cols="30"
                                                  rows="10" placeholder="توضیحات وبلاگ:"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn btn-two" type="submit">
                                        ثبت
                                        <i class="flaticon-left-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cart-wraps">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">وبلاگ</th>
                                    <th scope="col">عنوان وبلاگ</th>
                                    <th scope="col">دسته بندی</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($blogs as $blog)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="/blog/{{$blog->id}}">
                                                <img src="{{asset("storage/images/blogs/".$blog->blog_main_image)}}"
                                                     alt="{{$blog->blog_main_image}}">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="/blog/{{$blog->id}}">{{$blog->blog_title}}</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">{{$blog->blog_category}}</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <a href="/blog/{{$blog->id}}/delete" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>
                                            <div class="alert alert-danger" role="alert">
                                                هیچ پست پیدا نشد!
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Log In Area -->

@endsection
