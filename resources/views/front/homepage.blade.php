@extends('layouts.master')

@section('title', __('homepage.title'))

@section('content')
<div class="flat-slider container-fuild">
    <div class="row">
        <div class="widget-social-header">
            <div class="container-fluid">
                <ul class="widget-social-footer-item text-center">
                    <li><a href="https://www.linkedin.com/in/fabien-munoz-a7aa77112/" target="_blank">Lk.</a></li>
                    <li><a href="https://www.instagram.com/fabien1337/" target="_blank">In.</a></li>
                    <li><a href="https://www.facebook.com/fabien.munoz.50" target="_blank">Fb.</a></li>
                    <li><a href="https://twitter.com/FabienMunoz2" target="_blank">Tw.</a></li>
                </ul>
            </div>
        </div>
        <div class="mark-slide">
            <img src="{{ asset('images/mark-page/mark-icon-slide.png') }}" alt="images">
        </div>
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <h3 class="sub-title-slider section-24px-montserrat">{{ __('homepage.my_name', ['name' => 'Fabien MUNOZ']) }},</h3>
                        <h2 class="title-slider section-65px-montserrat">{{ __('homepage.dev_web') }}<br>Full Stack<br>PHP Laravel</h2>
                        <p class="desc-slider">{{ __('homepage.description') }}</p>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/image2.jpg') }}" alt="images">
                    </div>
                </div>
                {{-- <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <h3 class="sub-title-slider section-24px-montserrat">I’m Olux Raymond,</h3>
                        <h2 class="title-slider section-65px-montserrat">A freelance 2<br>
                            Interaction & Visual<br>
                            Product Designer</h2>
                        <p class="desc-slider">Fusce tempor magna mi, non egestas velit ultricies nec.
                            Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis,
                            ut venenatis purus ex eu mi. Quisque imperdiet
                            lacinia urna, a placerat sapien pretium eu.</p>
                        <div class="button-slider">
                            <a href="contact.html" class="button-footer arrow-btn btn-st style-2">Hire Me
                                Now</a><a href="#"
                                class="button-footer clound-down btn-st border-white">Download CV</a>
                        </div>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/image-slider/img-slider.jpg') }}" alt="images">
                    </div>
                </div>
                <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <h3 class="sub-title-slider section-24px-montserrat">I’m Olux Raymond,</h3>
                        <h2 class="title-slider section-65px-montserrat">A freelance 3<br>
                            Interaction & Visual<br>
                            Product Designer</h2>
                        <p class="desc-slider">Fusce tempor magna mi, non egestas velit ultricies nec.
                            Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis,
                            ut venenatis purus ex eu mi. Quisque imperdiet
                            lacinia urna, a placerat sapien pretium eu.</p>
                        <div class="button-slider">
                            <a href="contact.html" class="button-footer arrow-btn btn-st style-2">Hire Me
                                Now</a><a href="#"
                                class="button-footer clound-down btn-st border-white">Download CV</a>
                        </div>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/image-slider/img-slider.jpg') }}" alt="images">
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <div class="main-slide-button">
            <button class="clone-main-btn-prev"></button>
            <button class="clone-main-btn-next"></button>
        </div> --}}
    </div>
</div>

<section class="flat-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-title-box">
                    <h4 class="subtitle-about">{{ __('homepage.anyway') }}</h4>
                    <h2 class="section-45px-montserrat">{{ __('homepage.question') }}</h2>
                </div>
                <div class="group-post-about wow fadeInLeft">
                    <div class="post-big">
                        <img src="{{ asset('images/image1.jpg') }}" alt="images">
                    </div>
                    <div class="post-sm-2">
                        <img src="{{ asset('images/image-box/elipse.png') }}" alt="images">
                    </div>
                    <div class="about-years">
                        <span>{{ $yearsExperiences }}</span>
                        <div class="content section-20px-montserrat">{!! __('homepage.years_xp') !!}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-right wow fadeInUp">
                    <h3 class="section-22px-montserrat font-weight-600 line-height-35 margin-bottom-10">{!! __('homepage.aswer') !!}</h3>
                    <p class="section-17px-regular margin-bottom-30">{{ __('homepage.details') }}</p>
                    <p class="section-17px-regular">{{ __('homepage.details2') }} </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-skill wow fadeInDown mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="skill-box-1">
                    <h2 class="section-30px-montserrat margin-bottom-20">{{ __('homepage.skills') }}</h2>
                    <p class="section-17px-regular margin-bottom-30">{{ __('homepage.skills_details') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="skill-box-2">
                    <span class="icon-monitor1 font-size-icon"></span>
                    <h3 class="section-20px-montserrat margin-top-13 margin-bottom-35">{{ __('homepage.back_part') }}</h3>
                    <x-progress-bar label="PHP" value="95" />
                    <x-progress-bar label="Laravel" value="90" />
                    <x-progress-bar label="{{ __('homepage.db') }} (MySQL & Firebase)" value="80" />
                    <x-progress-bar label="CMS & e-commerce" value="50" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="skill-box-3">
                    <span class="icon-paint-palette1 font-size-icon"></span>
                    <h3 class="section-20px-montserrat margin-top-13 margin-bottom-35">{{ __('homepage.front_part') }}</h3>
                    <x-progress-bar label="HTML / CSS" value="90" />
                    <x-progress-bar label="Javascript" value="85" />
                    <x-progress-bar label="Jquery & Ajax" value="70" />
                    <x-progress-bar label="VueJS" value="50" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{ __('homepage.what_i_do') }}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{ __('homepage.services_solutions') }}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60" style="height:60px"></div>
            </div>

            <x-service-box :is-active="true" icon="icon-web-programming1" :title="__('homepage.service1')" :description="__('homepage.service1_text')" />
            <x-service-box icon="icon-webpage1" :title="__('homepage.service2')" :description="__('homepage.service2_text')" />
            <x-service-box icon="icon-development1" :title="__('homepage.service3')" :description="__('homepage.service3_text')" />
        </div>
    </div>
</section>

{{-- <section class="flat-latest">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">Latest News</h4>
                    <h2 class="section-main-title section-45px-montserrat">Latest Blog Posts</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="latest-post">
                        <img src="{{ asset('images/image-box/latest-image-box-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                    </div>
                    <div class="latest-content">
                        <div class="latest-info link-style-6 margin-bottom-10">
                            <span><a href="blog.html"
                                    class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                    href="blog.html"
                                    class="date-post section-14px-regular font-weight-500">June 13,
                                    2021</a></span>
                        </div>
                        <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                class="section-20px-montserrat">Lights winged seasons fish abundantly.</a>
                        </div>
                        <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="latest-post">
                        <img src="{{ asset('images/image-box/latest-image-box-2.jpg') }}" class="grow-up-hover"
                            alt="images">
                    </div>
                    <div class="latest-content">
                        <div class="latest-info link-style-6 margin-bottom-10">
                            <span><a href="blog.html"
                                    class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                    href="blog.html"
                                    class="date-post section-14px-regular font-weight-500">June 13,
                                    2021</a></span>
                        </div>
                        <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                class="section-20px-montserrat">Winged moved stars, fruit creature seed
                                night.</a></div>
                        <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="latest-post">
                        <img src="{{ asset('images/image-box/latest-image-box-3.jpg') }}" class="grow-up-hover"
                            alt="images">
                    </div>
                    <div class="latest-content">
                        <div class="latest-info link-style-6 margin-bottom-10">
                            <span><a href="blog.html"
                                    class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                    href="blog.html"
                                    class="date-post section-14px-regular font-weight-500">June 13,
                                    2021</a></span>
                        </div>
                        <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                class="section-20px-montserrat">Given void great you’re good appear also
                                fifth.</a></div>
                        <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection

@section('javascript')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/countto.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/shortcodes.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection

@section('stylesheet')
<style>
.swiper-container .title-slider, .swiper-container .sub-title-slider, .swiper-container .desc-slider { opacity: 1; }
.swiper-container .sub-title-slider { margin-top: 100px }
.content-slider-left { padding-top: 50px; padding-bottom: 50px; }
.swiper-container .title-slider, .swiper-container .sub-title-slider, .swiper-container .desc-slider { transform: none }
@media screen and (min-width: 753px) {
    .flat-about-skill .skill-box-1, .flat-about-skill .skill-box-2, .flat-about-skill .skill-box-3 { height: 500px; }
}
@media screen and (max-width: 753px) {
    .swiper-container .sub-title-slider { margin-top: 30px }
    .flat-about-skill .skill-box-1 { padding: 128px 25px 0 38px; }
}
</style>
@endsection