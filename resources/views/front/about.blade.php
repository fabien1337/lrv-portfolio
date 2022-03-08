@extends('layouts.master')

@section('title', __('about.title'))

@section('content')
<!-- title page -->
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">{{ __('about.title') }}</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('front.homepage') }}">{{ __('master.home') }}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">{{ __('about.title') }}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/image5.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-subtitle">{{ __('about.know_more') }}</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{ __('about.my_interests') }}</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! __('about.interest1') !!}</p>
                    <p class="section-17px-regular">{!! __('about.interest2') !!}</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <a href="{{ route('front.contact') }}" class="button-footer arrow-btn btn-st btn-style-1">{{ __('master.contact_me') }}</a>
                        {{-- <a href="services.html" class="button-footer arrow-btn btn-st style-3">View All Projects</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-work parallax parallax-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{ __('about.work_experience') }}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{ __('about.my_experience') }}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="48" data-mobile="30" data-smobile="30"></div>
                <div class="swiper-container sliver-experiences">
                    <div class="swiper-wrapper">

                        <x-experience-box
                            :year="__('date.month.oct').' 2021 - '.__('date.month.feb').' 2022'"
                            company="Ilion Technologies"
                            city="La Ciotat"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp7')"
                            />

                        <x-experience-box
                            :year="__('date.month.sep').' 2020 - '.__('date.month.may').' 2021'"
                            company="Make it Créative"
                            city="Aubagne"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp6')"
                            />

                        <x-experience-box
                            :year="__('date.month.sep').' 2018 - '.__('date.month.sep').' 2020'"
                            company="SEA TPI"
                            city="La Ciotat"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp5')"
                            />

                        <x-experience-box
                            :year="__('date.month.jul').' 2016 - '.__('date.month.sep').' 2018'"
                            company="Win-Win"
                            city="Marseille"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp4')"
                            />

                        <x-experience-box
                            :year="__('date.month.mar').' 2016'"
                            company="1égal2"
                            city="Marseille"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp3')"
                            />

                        <x-experience-box
                            :year="__('date.month.jun').' 2015 - '.__('date.month.aug').' 2015'"
                            company="PrestaModule"
                            city="Marseille"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp2')"
                            />

                        <x-experience-box
                            year="2014"
                            company="A1 ABC Informatique"
                            city="Saint-Cyr-sur-Mer"
                            :job="__('homepage.dev_web')"
                            :description="__('about.xp1')"
                            />

                    </div>
                </div>
                <div class="swiper-pagination bullet-slider-about"></div>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-education">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{ __('about.my_schooling') }}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{ __('about.my_education') }}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="button-carousel">
                    <button class="clone-btn-prev btn-style-2"></button>
                    <button class="clone-btn-next btn-style-2"></button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container carousel-style-2 wow fadeInUp">
                    <div class="swiper-wrapper">
                        <x-school-box year="2014 - 2015" title="Faculté des Sciences" description="Licence Pro. Systèmes Informatiques et Logiciels à Marseille" />
                        <x-school-box year="2012 - 2014" title="Faculté des Sciences" description="Licence Générale en Mathématique et Informatique à Marseille" />
                        <x-school-box year="2010 - 2012" title="Lycée Victor Hugo" description="BTS IG<br>Informatique de Gestion à Marseille" />
                        <x-school-box year="2009 - 2010" title="Lycée Lumière" description="Obtention du Bac S<br>A La Ciotat" />
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{ __('about.personal_experience') }}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{ __('about.my_projects') }}</h2>
                    <p class="mt-5 mb-5">{{ __('homepage.details2') }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <x-personalxp-box
                delay="0.1s" year="2020" title="Dans Ses Pas"
                :description="__('about.perso3')"
                url="http://danssespas.com/" />
            
            <x-personalxp-box
                delay="0.4s" year="2019" title="Numisma"
                :description="__('about.perso2')"
                url="https://numisma-acfba.firebaseapp.com/" />        
        </div>
        <div class="row mt-5">
            <x-personalxp-box delay="0.8s" year="2018" title="Esicm Appic"  
                :description="__('about.perso4')"
                url="https://play.google.com/store/apps/details?id=com.appic&hl=ln&gl=US" />
            
            <x-personalxp-box delay="1.2s" year="2016" title="PharmApp"
                :description="__('about.perso1')"
                url="https://github.com/fabien1337/pharmapp" />
        </div>
    </div>
</section>

{{-- <section class="flat-latest style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="section-subtitle margin-bottom-15">Latest News</h4>
                    <h2 class="section-45px-montserrat ">Latest Blog Posts</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="latest-post">
                        <img src="assets/images/image-box/latest-image-box-1.jpg" class="grow-up-hover"
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
                        <img src="assets/images/image-box/latest-image-box-2.jpg" class="grow-up-hover"
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
                        <img src="assets/images/image-box/latest-image-box-3.jpg" class="grow-up-hover"
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
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/shortcodes.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection

@section('stylesheet')
<style>
.client::before { padding-right: 16px; }
.flat-counter { background: #fff5f5; }
</style>
@endsection