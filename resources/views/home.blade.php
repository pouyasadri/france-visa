@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('داشبورد') }}</div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                        <section class="user-area-all-style log-in-area cart-area ptb-100" style="background: whitesmoke">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="contact-form-action">
                                            <div class="form-heading text-center">
                                                <h3 class="form-title">پنل مدیریت املاک</h3>
                                            </div>
                                            <form method="post" action="/house/admin" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">

                                                            <label for="house_name">نام ملک:</label>
                                                            <input class="form-control" id="blog_title" type="text" name="house_name"
                                                                   placeholder="نام ملک">

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="house_price">قیمیت ملک</label>
                                                            <input class="form-control" id="house_price" type="text" name="house_price"
                                                                   placeholder="قیمیت ملک">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="house_main_image">تصویر اصلی ملک:</label>
                                                            <input class="form-control" id="house_main_image" type="file"
                                                                   name="house_main_image"
                                                                   placeholder="تصویر اصلی ملک:">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="house_images">تصاویر ملک</label>
                                                            <input multiple class="form-control" id="house_images" type="file"
                                                                   name="house_images[]"
                                                                   placeholder="تصاویر ملک">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="house_description">توضیحات ملک:</label>
                                                            <textarea class="form-control" name="house_description" id="house_description"
                                                                      cols="30"
                                                                      rows="10" placeholder="توضیحات ملک:"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="select-box">
                                                            <select name="house_room_count" class="form-control">
                                                                <option value="0">تعداد اتاق ها</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="select-box">
                                                            <select name="house_garage_count" class="form-control">
                                                                <option value="0">تعداد گاراژ ها</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="house_region">منطقه ملک</label>
                                                            <input class="form-control" id="house_region" type="text" name="house_region"
                                                                   placeholder="منطقه ملک">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="house_postal_code">کدپستی</label>
                                                            <input class="form-control" id="house_postal_code" type="text"
                                                                   name="house_postal_code"
                                                                   placeholder="کدپستی">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="house_exact_location">ادرس ملک</label>
                                                            <input class="form-control" id="house_exact_location" type="text"
                                                                   name="house_exact_location"
                                                                   placeholder="ادرس ملک">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="select-box">
                                                            <select name="house_type" class="form-control">
                                                                <option value="0">نوع ملک</option>
                                                                <option value="apartment">آپارتمان</option>
                                                                <option value="villa">ویلا</option>
                                                            </select>
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
                                                        <th scope="col">ملک</th>
                                                        <th scope="col">نام ملک</th>
                                                        <th scope="col">قیمت</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @forelse($houses as $house)
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <a href="/house/{{$house->id}}">
                                                                    <img src="{{asset("storage/images/houses/".$house->house_main_image)}}"
                                                                         alt="{{$house->house_name}}">
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                <a href="/house/{{$house}}">{{$house->house_name}}</a>
                                                            </td>

                                                            <td class="product-price">
                                                                <span class="unit-amount">{{$house->house_price}}</span>
                                                            </td>
                                                            <td class="product-subtotal">
                                                                <a href="{{ route('house.delete', ['house' => $house]) }}"
                                                                   onclick="return confirm('Are you sure you want to delete this blog?')">
                                                                    <i class='bx bx-trash'></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td>
                                                                <div class="alert alert-danger" role="alert">
                                                                    هیچ ملک پیدا نشد!
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
                        <section class="user-area-all-style log-in-area cart-area ptb-100" style="background: whitesmoke">


                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="contact-form-action">
                                            <div class="form-heading text-center">
                                                <h3 class="form-title">پنل مدیریت وبلاگ</h3>
                                            </div>
                                            <form method="post" action="/blog/admin" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <!-- Blog Title -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="blog_title">عنوان وبلاگ:</label>
                                                            <input class="form-control" id="blog_title" type="text" name="blog_title"
                                                                   placeholder="عنوان وبلاگ" required>
                                                        </div>
                                                    </div>
                                                    <!-- Blog Category -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="blog_category">موضوع وبلاگ:</label>
                                                            <input class="form-control" id="blog_category" type="text" name="blog_category"
                                                                   placeholder="موضوع وبلاگ" required>
                                                        </div>
                                                    </div>
                                                    <!-- Blog Main Image -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="blog_main_image">تصویر اصلی وبلاگ:</label>
                                                            <input class="form-control" id="blog_main_image" type="file"
                                                                   name="blog_main_image" accept="image/*" required>
                                                        </div>
                                                    </div>
                                                    <!-- Blog Short and Full Descriptions -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="blog_slug">توضیحات مختصر وبلاگ:</label>
                                                            <textarea class="form-control" name="blog_slug" id="blog_slug" cols="30"
                                                                      rows="5" placeholder="توضیحات مختصر وبلاگ:" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="blog_body">توضیحات وبلاگ:</label>
                                                            <textarea class="form-control" name="blog_body" id="blog_body" cols="30"
                                                                      rows="10" placeholder="توضیحات وبلاگ:" required></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- Submit Button -->
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
                                                        <th scope="col">عملیات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($blogs as $blog)
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <a href="/blog/{{$blog->id}}">
                                                                    <img src="{{asset("storage/images/blogs/$blog->blog_main_image")}}"
                                                                         alt="{{$blog->blog_title}}">
                                                                </a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="/blog/{{$blog->id}}">{{$blog->blog_title}}</a>
                                                            </td>
                                                            <td class="product-price">
                                                                <span class="unit-amount">{{$blog->blog_category}}</span>
                                                            </td>
                                                            <td class="product-subtotal">
                                                                <a href="{{ route('blog.delete', ['blog' => $blog]) }}"
                                                                   onclick="return confirm('Are you sure you want to delete this blog?')">
                                                                    <i class='bx bx-trash'></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4">
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
