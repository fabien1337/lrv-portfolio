@extends('layouts.master')

@section('title', __('master.contact_me'))

@section('content')
<!-- title page -->
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">{{ __('master.contact') }}</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('front.homepage') }}">{{ __('master.home') }}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">{{ __('master.contact') }}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-content-left">
                    <div class="section-title">
                        <h4 class="section-subtitle">{{ __('master.contact_me') }}</h4>
                        <h2 class="section-30px-montserrat margin-top-15 margin-bottom-20">{!! __('contact.header') !!}</h2>
                    </div>
                    <div class="about-post">
                        <img src="{{ asset('images/image6.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-content-right">
                    <h3 class="section-20px-montserrat font-weight-500">{{ __('contact.header2') }}</h3>
                    
                    <div class="form-contact">
                        <form method="post" id="contactform" class="comment-form" action="{{ route('front.contact.post') }}" accept-charset="utf-8" novalidate="novalidate">
                            @csrf
                            <div class="text-wrap clearfix">
                                <fieldset class="name-wrap">
                                    <input type="text" id="name" class="tb-my-input @error('name') mb-2 @enderror" name="name" tabindex="1" placeholder="{{ __('contact.name') }}*" value="{{ old('name') }}" size="32" aria-required="true" required>
                                    @error('name')<div class="text-danger font-size-16" style="margin-bottom: 28px">{{ $message }}</span>@enderror
                                </fieldset>
                                <fieldset class="email-wrap">
                                    <input type="email" id="email" class="tb-my-input @error('email') mb-2 @enderror" name="email" tabindex="2" placeholder="{{ __('contact.email') }}*" value="{{ old('email') }}" size="32" aria-required="true" required>
                                    @error('email')<div class="text-danger font-size-16" style="margin-bottom: 28px">{{ $message }}</span>@enderror
                                </fieldset>
                                <fieldset class="subject-wrap">
                                    <input type="text" id="subject" class="tb-my-input @error('subject') mb-2 @enderror" name="subject" placeholder="{{ __('contact.subject') }}*" value="{{ old('subject') }}" aria-required="true" required>
                                    @error('subject')<div class="text-danger font-size-16" style="margin-bottom: 28px">{{ $message }}</span>@enderror
                                </fieldset>
                            </div>
                            <fieldset class="message-wrap margin-bottom-10">
                                <textarea @error('message') class="mb-2" @enderror id="comment-message" name="message" rows="10" tabindex="4" placeholder="{{ __('contact.message') }}" aria-required="true">{{ old('message') }}</textarea>
                                @error('message')<div class="text-danger font-size-16" style="margin-bottom: 28px">{{ $message }}</span>@enderror
                            </fieldset>
                            <button type="submit" role="button" class="arrow-btn btn-st style-5">{{ __('contact.submit') }}</button>

                            @if (session('message'))
                                <div class="text-success font-size-16 mt-5">{{ session('message') }}</div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('javascript')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/jquery-validate.js') }}"></script>
<script src="{{ asset('js/shortcodes.js') }}"></script>
<script src="{{ asset('js/jquery-validate.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection