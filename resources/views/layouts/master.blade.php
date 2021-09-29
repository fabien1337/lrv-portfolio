<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Fabien MUNOZ - @yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- icomoon font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('icon/Favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/cookieconsent.min.css') }}" />

    @yield('stylesheet')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YT1W8GB8R3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-YT1W8GB8R3');
    </script>

</head>

<body class="header-fixed preloading">

    <div id="preload" class="preload-container">
        <div class="preload-logo"></div>
    </div>

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <div id="top-bar">
                    <div id="top-bar-inner">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <div class="inner text-white link-style-2">
                                    <span class="phone content section-16px-regular"><a href="tel:+33603590509">06 03 59 05 09</a></span>
                                    <span class="mail content section-16px-regular"><a href="mailto:fabien.munoz1337@gmail.com">fabien.munoz1337@gmail.com</a></span>
                                </div>
                            </div>
                            <!-- /.top-bar-content -->
                        </div>
                    </div>
                </div>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="{{ route('front.homepage') }}" rel="home" class="main-logo">
                                        <img src="{{ asset('images/logo/logo7.png') }}" alt="images">
                                    </a>
                                </div>
                            </div>
                            <!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div>
                            <!-- /.mobile-button -->
                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item {{ (request()->route()->action)['as'] === 'front.homepage' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('front.homepage') }}">{{ __('master.home') }}</a>
                                    </li>
                                    <li class="menu-item {{ (request()->route()->action)['as'] === 'front.about' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('front.about') }}">{{ __('about.title') }}</a>
                                    </li>
                                    <li class="menu-item {{ (request()->route()->action)['as'] === 'front.contact' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('front.contact') }}">{{ __('master.contact') }}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#"><img src="https://www.countryflags.io/{{ app()->getLocale() === 'en' ? 'gb' : app()->getLocale() }}/flat/24.png"></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('front.locale', ['locale' => 'fr']) }}"><img src="https://www.countryflags.io/fr/flat/16.png"> {{ __('master.lang.fr') }}</a></li>
                                            <li class="menu-item"><a href="{{ route('front.locale', ['locale' => 'en']) }}"><img src="https://www.countryflags.io/gb/flat/16.png"> {{ __('master.lang.gb') }}</a></li>
                                            <li class="menu-item"><a href="{{ route('front.locale', ['locale' => 'pt']) }}"><img src="https://www.countryflags.io/pt/flat/16.png"> {{ __('master.lang.pt') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.wrap-inner -->
                    </div>
                    <!-- /#site-header-inner -->
                </header>
                <!-- /#site-header -->
            </div>
            <!-- #site-header-wrap -->

            <!-- Swiper -->
            @yield('content')

            <!-- Footer -->
            <footer id="footer" class="clearfix">
                <div id="footer-top" class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <span class="section-title-page text-white font-weight-500">{{ __('master.footer1') }}<br>{{ __('master.footer2') }}</span>
                            <span class="link-style-3 text-under section-title-page font-weight-500 margin-left-10"><a href="{{ route('front.contact') }}">{{ __('master.conversation') }}</a></span>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('front.contact') }}" class="button-footer arrow-btn btn-st">{{ __('master.lets_go') }}</a>
                        </div>
                    </div>
                </div>
                <div id="footer-widgets" class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="logo-footer margin-bottom-20">
                                <a href="{{ route('front.homepage') }}" rel="home" class="main-logo">
                                    <img src="{{ asset('images/logo/logo8.png') }}" alt="images">
                                </a>
                            </div>
                            <p class="text-white line-height-32 margin-bottom-20">{{ __('homepage.description') }}</p>
                        </div>
                        <div class="col-md-7">
                            <div class="footer-widgets-nav-menu text-white">
                                <div class="menu-2">
                                    <h3 class="widget-title-link-wrap">Sitemap</h3>
                                    <ul class="link-wrap">
                                        <li><a href="{{ route('front.homepage') }}">{{ __('master.home') }}</a></li>
                                        <li><a href="{{ route('front.about') }}">{{ __('master.about') }}</a></li>
                                        <li><a href="{{ route('front.contact') }}">{{ __('master.contact') }}</a></li>
                                    </ul>
                                </div>
                                <div class="menu-3">
                                    <h3 class="widget-title-link-wrap">{{ __('master.contact') }}</h3>
                                    <ul class="widget-list-contact text-white link-style-2">
                                        <li><a href="tel:+33603590509" class="meta-phone section-16px-regular-montserrat">06 03 59 05 09</a></li>
                                        <li><a href="mailto:fabien.munoz1337@gmail.com" class="meta-mail section-16px-regular-montserrat">fabien.munoz1337@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-social-footer">
                    <div class="container-fluid">
                        <ul class="widget-social-footer-item text-center link-style-2">
                            <li><a href="https://www.linkedin.com/in/fabien-munoz-a7aa77112/" target="_blank">Lk.</a></li>
                            <li><a href="https://www.instagram.com/fabien1337/" target="_blank">In.</a></li>
                            <li><a href="https://www.facebook.com/fabien.munoz.50" target="_blank">Fb.</a></li>
                            <li><a href="https://twitter.com/FabienMunoz2" target="_blank">Tw.</a></li>
                            <li>
                                <h3>{{ __('master.follow_me') }}:</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer><!-- /#footer -->
            {{-- <!-- Bottom -->
            <div id="bottom" class="clearfix has-spacer">
                <div id="bottom-bar-inner" class="container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="bottom-bar-content">
                            <div id="copyright">© 2021 <span class="text"> ThemesFlat, All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /#bottom --> --}}

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    @yield('javascript')
    <script src="{{ asset('js/cookieconsent.min.js') }}" data-cfasync="false"></script>
    <script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#aa0000",
                "text": "#ffdddd"
            },
            "button": {
                "background": "#ff0000"
            }
        },
        "theme": "classic",
        "showLink": false,
        "type": "opt-out",
        "content": {
            "message": "{{ __('master.cookieconsent_msg') }}",
            "allow": "{{ __('master.cookieconsent_allow') }}",
            "deny": "{{ __('master.cookieconsent_deny') }}"
        }
    });
    </script>

</body>

</html>