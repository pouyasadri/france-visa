@extends('layout')
@section("title", __('contact.meta.title'))
@section("keywords", __('contact.meta.keywords'))
@section("description", __('contact.meta.description'))
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('contact.page_title') }}</h2>
                <ul>
                    <li>
                        <a href="{{url(app()->getLocale()."/")}}">
                            {{ __('contact.breadcrumb.home') }}
                        </a>
                    </li>
                    <li>{{ __('contact.breadcrumb.contact') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <!-- Contact Us Section -->
    <section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <span>{{ __('contact.section.subtitle') }}</span>
                <h2>{{ __('contact.section.title') }}</h2>
                <p>{{ __('contact.section.description') }}</p>
            </div>
            <!-- Contact Form -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-wrap contact-pages">
                        <div class="contact-form contact-form-mb">
                            <form id="contactForm">
                                <div class="row">
                                    <!-- Name Input -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                   data-error="{{ __('contact.form.name.error') }}"
                                                   placeholder="{{ __('contact.form.name.placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- Email Input -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                   data-error="{{ __('contact.form.email.error') }}"
                                                   placeholder="{{ __('contact.form.email.placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- Phone Input -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                   data-error="{{ __('contact.form.phone.error') }}"
                                                   class="form-control"
                                                   placeholder="{{ __('contact.form.phone.placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- Subject Input -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                   required data-error="{{ __('contact.form.subject.error') }}"
                                                   placeholder="{{ __('contact.form.subject.placeholder') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- Message Textarea -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control textarea-hight" id="message"
                                                  cols="30" rows="4" required
                                                  data-error="{{ __('contact.form.message.error') }}"
                                                  placeholder="{{ __('contact.form.message.placeholder') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            {{ __('contact.form.submit') }}
                                            <i class="{{ $flaticonArrow ?? 'flaticon-right-arrow' }}"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Email Contact Info -->
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-envelope"></i>
                                <h3>{{ __('contact.info.email.title') }}</h3>
                                <a href="mailto:{{ __('contact.info.email.value') }}">{{ __('contact.info.email.value') }}</a>
                            </div>
                        </div>
                        <!-- Phone Contact Info -->
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-phone-call"></i>
                                <h3>{{ __('contact.info.phone.title') }}</h3>
                                <a href="tel:+989120087194">{{ __('contact.info.phone.iran') }}</a>
                                <a href="tel:+33780953333">{{ __('contact.info.phone.france') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Section -->
    <!-- End Contact Area -->
@endsection
