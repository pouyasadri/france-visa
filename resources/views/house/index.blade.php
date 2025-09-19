@extends('layout')
@section('title',"خرید خانه در فرانسه: خرید ملک رویایی خود")
@section("keywords","خرید خانه در فرانسه,املاک و مستغلات در فرانسه,سرمایه گذاری در فرانسه,زندگی در فرانسه,اقامت فرانسه,بازار املاک فرانسه,خرید ملک در اروپا,خرید ملک در خارج")
@section("description","پیچیدگی های خرید خانه در فرانسه را کشف کنید و درهای مالکیت ملک رویایی خود را در این کشور زیبای اروپایی باز کنید. این راهنمای جامع شما را در هر مرحله از فرآیند، از درک مزایای سرمایه گذاری در املاک و مستغلات فرانسه تا پیمایش مراحل قانونی و اداری، راهنمایی می کند.")
@section('content')
    <style>
        ::selection {
            color: #fff;
            background: #17a2b8;
        }

        .wrapper {
            width: 400px;
            background: #fff;
            border-radius: 10px;
            padding: 20px 25px 40px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        }

        .price-input {
            width: 100%;
            display: flex;
            margin: 30px 0 35px;
        }

        .price-input .field {
            display: flex;
            width: 100%;
            height: 45px;
            align-items: center;
        }

        .field input {
            width: 100%;
            height: 100%;
            outline: none;
            font-size: 19px;
            margin-left: 12px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #999;
            -moz-appearance: textfield;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .price-input .separator {
            width: 130px;
            display: flex;
            font-size: 19px;
            align-items: center;
            justify-content: center;
        }

        .slider {
            height: 5px;
            position: relative;
            background: #ddd;
            border-radius: 5px;
        }

        .slider .progress {
            height: 100%;
            left: 0;
            right: 0;
            position: absolute;
            border-radius: 5px;
            background: #0a53be;
        }

        .range-input {
            position: relative;
        }

        .range-input input {
            position: absolute;
            width: 100%;
            height: 5px;
            top: -5px;
            background: none;
            pointer-events: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            height: 17px;
            width: 17px;
            border-radius: 50%;
            background: #0a58ca;
            pointer-events: auto;
            -webkit-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }

        input[type="range"]::-moz-range-thumb {
            height: 17px;
            width: 17px;
            border: none;
            border-radius: 50%;
            background: #0a58ca;
            pointer-events: auto;
            -moz-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }

        .range-input {
            margin-bottom: 2rem;
        }

        .form-check {
            font-size: 16px;
            padding: 5px;
        }
    </style>
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
                        <div class="row" id="houses">
                            @forelse($houses as $house)
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-news">
                                        <div class="news-img">

                                            <a href="{{ route('house.show', ['house' => $house]) }}">
                                                <img src="{{asset("/storage/images/houses/".$house->house_main_image)}}"
                                                     alt="{{$house->house_name}}خرید ملک در فرانسه | " style="width:26rem;height:20rem; object-fit: cover;">
                                            </a>
                                            <div class="dates">
                                                <span>{{$house->house_status}}</span>
                                            </div>
                                        </div>
                                        <div class="news-content-wrap">
                                            <ul>
                                                <li>
                                                    {{$house->house_price}} €
                                                </li>
                                            </ul>
                                            <a href="{{ route('house.show', ['house' => $house]) }}">
                                                <h3>{{$house->house_name}}</h3>
                                            </a>
                                            <p><strong>{{$house->house_square}} متر مربع | {{$house->house_room_count}}
                                                    خوابه
                                                </strong>
                                            </p>
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
                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">جستجو</h3>
                            <div class="wrapper">
                                <p>قیمت</p>
                                <div class="price-input">
                                    <div class="field">
                                        <span>کمترین</span>
                                        <input type="number" class="input-min" value="0">
                                        <span>€</span>
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <span>بیشترین</span>
                                        
                                        <input type="number" class="input-max" value="{{$maxPrice}}">
                                     
                                        <span>€</span>
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="{{$maxPrice}}"
                                           value="0"
                                           step="100">
                                    <input type="range" class="range-max" min="0" max="{{$maxPrice}}"
                                           value="{{$maxPrice}}"
                                           step="100">
                                </div>
                                <hr>
                                <p>تعداد اتاق ها</p>

                                @for ($i = 1; $i <= $maxRoomCount; $i++)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $i }}"
                                               id="roomCountCheck{{ $i }}" name="room_count[]">
                                        <label class="form-check-label" for="roomCountCheck{{ $i }}">
                                            {{ $i }} اتاق
                                        </label>
                                    </div>
                                @endfor
                                <hr>
                                <p>تعداد پارکینگ</p>
                                @for ($i = 0; $i <= $maxGarageCount; $i++)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $i }}"
                                               id="garageCountCheck{{ $i }}" name="garage_count[]">
                                        <label class="form-check-label" for="garageCountCheck{{ $i }}">
                                            {{ $i }} پارکینگ
                                        </label>
                                    </div>
                                @endfor
                                <hr>
                                <p>منطقه</p>
                                @foreach($regions as $region)
                                    <div class="form-check">
                                        <input class="form-check-input region" type="checkbox" value="{{ $region }}"
                                               id="{{$region}}" name="{{$region}}">
                                        <label class="form-check-label" for="{{$region}}">
                                            {{$region}}
                                        </label>
                                    </div>
                                @endforeach
                                <hr>
                                <a class="default-btn">
                                    جستجو در املاک
                                    <i class="flaticon-left-arrow"></i>
                                </a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <script>
        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = (parseInt(priceInput[1].value) - parseInt(priceInput[0].value)) / 100;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.right = (minPrice / rangeInput[0].max) * 100 + "%"; // Changed from left to right
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.left = 100 - (maxPrice / rangeInput[1].max) * 100 + "%"; // Changed from right to left
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.right = (minVal / rangeInput[0].max) * 100 + "%"; // Changed from left to right
                    range.style.left = 100 - (maxVal / rangeInput[1].max) * 100 + "%"; // Changed from right to left
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $('.default-btn').click(function (e) {
                e.preventDefault();

                let minPrice = $('.input-min').val();
                let maxPrice = $('.input-max').val();
                let roomCount = getCheckedValues('input[name="room_count[]"]:checked');
                let garageCount = getCheckedValues('input[name="garage_count[]"]:checked');
                let regions = getCheckedValues('.region:checked');

                console.log(roomCount, garageCount, regions);

                $.ajax({
                    url: '/houses/filter',
                    type: 'GET',
                    data: {
                        min_price: minPrice,
                        max_price: maxPrice,
                        room_count: roomCount.length > 0 ? roomCount : null,
                        garage_count: garageCount.length > 0 ? garageCount : null,
                        regions: regions.length > 0 ? regions : null
                    },
                    success: handleAjaxSuccess,
                    error: handleAjaxError
                });
            });
        });

        function getCheckedValues(selector) {
            let values = [];
            $(selector).each(function () {
                let val = $(this).val();
                if (values.indexOf(val) === -1) {
                    values.push(val);
                }
            });
            return values;
        }

        function handleAjaxSuccess(response) {
            $('#houses').empty();
            if (response.length === 0) {
                $('#houses').append(`
            <div class="alert alert-danger" role="alert">
                هیچ ملک پیدا نشد!
            </div>
        `);
            } else {
                $.each(response, function (index, house) {
                    let houseElement = `
                <div class="col-lg-6 col-md-6">
                                    <div class="single-news">
                                        <div class="news-img">

                                            <a href="/house/${house.id}">
                                                <img src="/storage/images/houses/${house.house_main_image}"
                                     alt="${house.house_name}| خرید ملک در فرانسه ">
                            </a>
                                            <div class="dates">
                                <span>${house.house_status}</span>
                            </div>
                                        </div>
                                        <div class="news-content-wrap">
                                            <ul>
                                                <li>
                                                    ${house.house_price} €
                                                </li>
                                            </ul>
                                           <a href="/house/${house.id}">
                                                <h3>${house.house_name}</h3>
                                            </a>
                                            <p><strong>${house.house_square} متر مربع | ${house.house_room_count}
                                                    خوابه
                                                </strong>
                                            </p>
                                            <a class="read-more" href="/house/${house.id}">
                                                ادامه
                                                <i class="flaticon-left-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            `;
                    $('#houses').append(houseElement);
                });
            }
        }

        function handleAjaxError(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    </script>
    <!-- End News Area -->
@endsection
@push("json")
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://applyvipconseil.com/house"
  },
  "headline": "خرید خانه در فرانسه: خرید ملک رویایی خود",
  "image": "https://applyvipconseil.com/assets/img/France/france1.webp",  
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
  "datePublished": "2023-11-05",
  "dateModified": "2024-02-13"
}
</script>
@endpush

