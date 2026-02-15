@extends('layout')

@section('title', __('properties.coming_soon.title'))
@section('description', __('properties.coming_soon.description'))

@section('content')
    <!-- Page Title -->
    <div class="page-title-area" style="background-image: url('{{ asset('assets/img/education.webp') }}');">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2>{{ __('properties.coming_soon.heading') }}</h2>
                        <ul>
                            <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                            <li><i class="{{ $chevronsDir }}"></i></li>
                            <li>{{ __('Properties') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Coming Soon Area -->
    <section class="coming-soon-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="coming-soon-content text-center">
                        <!-- Icon -->
                        <div class="coming-soon-icon mb-4">
                            <i class="flaticon-building" style="font-size: 120px; color: #ff8a00;"></i>
                        </div>

                        <!-- Main Message -->
                        <h2 class="mb-4">{{ __('properties.coming_soon.heading') }}</h2>
                        <p class="mb-3" style="font-size: 18px; color: #666;">
                            {{ __('properties.coming_soon.message') }}
                        </p>
                        <p class="mb-5" style="font-size: 16px; color: #888;">
                            {{ __('properties.coming_soon.description') }}
                        </p>

                        <!-- Divider -->
                        <div class="coming-soon-divider mb-5">
                            <span style="display: inline-block; width: 100px; height: 3px; background: #ff8a00;"></span>
                        </div>

                        <!-- Contact Information -->
                        <div class="coming-soon-contact mb-5">
                            <h4 class="mb-3">{{ __('properties.coming_soon.contact_heading') }}</h4>
                            <p class="mb-3">{{ __('properties.coming_soon.contact_message') }}</p>
                            
                            <div class="email-box" style="background: #f8f9fa; padding: 20px; border-radius: 10px; display: inline-block; min-width: 300px;">
                                <p class="mb-2" style="font-size: 14px; color: #666;">
                                    {{ __('properties.coming_soon.email_label') }}
                                </p>
                                <a href="mailto:info@applyvipconseil.com" 
                                   style="font-size: 20px; font-weight: bold; color: #ff8a00; text-decoration: none;">
                                    <i class="bx bx-envelope"></i> info@applyvipconseil.com
                                </a>
                            </div>
                        </div>

                        <!-- Call to Action Buttons -->
                        <div class="coming-soon-actions mt-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                    <a href="{{ route('blog', ['locale' => app()->getLocale()]) }}" 
                                       class="btn btn-primary btn-block" 
                                       style="padding: 15px 25px; font-size: 16px;">
                                        <i class="bx bx-book-reader"></i> {{ __('properties.coming_soon.explore_blog') }}
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                    <a href="{{ route('consult', ['locale' => app()->getLocale()]) }}" 
                                       class="btn btn-primary btn-block" 
                                       style="padding: 15px 25px; font-size: 16px;">
                                        <i class="bx bx-calendar"></i> {{ __('properties.coming_soon.book_consultation') }}
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                    <a href="{{ route('contactUs', ['locale' => app()->getLocale()]) }}" 
                                       class="btn btn-primary btn-block" 
                                       style="padding: 15px 25px; font-size: 16px;">
                                        <i class="bx bx-envelope"></i> {{ __('properties.coming_soon.contact_us') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Stay Tuned Message -->
                        <div class="coming-soon-footer mt-5">
                            <p style="font-size: 16px; color: #999; font-style: italic;">
                                <i class="bx bx-bell"></i> {{ __('properties.coming_soon.stay_tuned') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon Area -->

    <!-- Additional Features Preview (Optional) -->
    <section class="features-preview-area pb-100" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{ __('What We Offer') }}</h2>
                <p>{{ __('Explore our other services while we prepare the property listings') }}</p>
            </div>

            <div class="row">
                <!-- Immigration Services -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-feature-card text-center" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div class="feature-icon mb-3">
                            <i class="flaticon-passport" style="font-size: 60px; color: #ff8a00;"></i>
                        </div>
                        <h4 class="mb-3">{{ __('Immigration Services') }}</h4>
                        <p>{{ __('Expert guidance for residence permits and immigration to France') }}</p>
                        <a href="{{ route('consult', ['locale' => app()->getLocale()]) }}" class="btn btn-outline-primary mt-3">
                            {{ __('Learn More') }}
                        </a>
                    </div>
                </div>

                <!-- Education Consulting -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-feature-card text-center" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div class="feature-icon mb-3">
                            <i class="flaticon-graduation" style="font-size: 60px; color: #ff8a00;"></i>
                        </div>
                        <h4 class="mb-3">{{ __('Education Consulting') }}</h4>
                        <p>{{ __('Study in France with our comprehensive student visa assistance') }}</p>
                        <a href="{{ route('universities', ['locale' => app()->getLocale()]) }}" class="btn btn-outline-primary mt-3">
                            {{ __('Learn More') }}
                        </a>
                    </div>
                </div>

                <!-- Relocation Support -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-feature-card text-center" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div class="feature-icon mb-3">
                            <i class="flaticon-france" style="font-size: 60px; color: #ff8a00;"></i>
                        </div>
                        <h4 class="mb-3">{{ __('Relocation Support') }}</h4>
                        <p>{{ __('Complete support for relocating to France and settling in') }}</p>
                        <a href="{{ route('cities', ['locale' => app()->getLocale()]) }}" class="btn btn-outline-primary mt-3">
                            {{ __('Learn More') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Preview -->
@endsection

@push('styles')
<style>
    .coming-soon-area {
        min-height: 60vh;
    }
    
    .coming-soon-content {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .coming-soon-icon i {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.8;
            transform: scale(1.05);
        }
    }
    
    .email-box:hover {
        box-shadow: 0 4px 15px rgba(255, 138, 0, 0.2);
        transition: all 0.3s ease;
    }
    
    .btn-primary {
        background-color: #ff8a00;
        border-color: #ff8a00;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #e67a00;
        border-color: #e67a00;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(255, 138, 0, 0.3);
    }
    
    .btn-outline-primary {
        color: #ff8a00;
        border-color: #ff8a00;
        transition: all 0.3s ease;
    }
    
    .btn-outline-primary:hover {
        background-color: #ff8a00;
        border-color: #ff8a00;
        color: white;
        transform: translateY(-2px);
    }
    
    .single-feature-card {
        height: 100%;
        transition: all 0.3s ease;
    }
    
    .single-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15) !important;
    }
    
    /* RTL Support for Farsi */
    [dir="rtl"] .coming-soon-content {
        text-align: center;
    }
    
    [dir="rtl"] .email-box {
        direction: ltr;
        text-align: center;
    }
</style>
@endpush
