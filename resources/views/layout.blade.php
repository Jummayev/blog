<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yashil energetika</title>
    <meta name="description" content="Author: Yashil energetika">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("log.svg") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/fonts/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick/slick-theme.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <meta name="google-site-verification" content="BEx8fjvxH7L1oR7UeHEFPe1vuspU8KkP0QKErIs0vMs" />
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">

</head>

<body class="mobilemenu-active">
<!--[if lte IE 9]>
<![endif]-->
<div id="preloader" class="preloader">
    <div class="loader-wrap">
        <div class="single-box">
            <div class="circle-holder"></div>
            <div class="shadow-holder"></div>
        </div>
        <div class="single-box">
            <div class="circle-holder"></div>
            <div class="shadow-holder"></div>
        </div>
        <div class="single-box">
            <div class="circle-holder"></div>
            <div class="shadow-holder"></div>
        </div>
        <div class="single-box">
            <div class="circle-holder"></div>
            <div class="shadow-holder"></div>
        </div>
    </div>
</div>

<a href="#main-wrapper" id="backto-top" class="back-to-top" aria-label="Back To Top">
    <i class="regular-direction-up"></i>
</a>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->

    <header class="header header2 sticky-on">
        <div id="sticky-placeholder"></div>
        <div id="navbar-wrap" style="background: #11111E" class="navbar-wrap">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo-holder">
                        <div class="d-md-block d-none">
                            <a href="/" class="link-wrap desktop-logo img-height-100" aria-label="Site Logo">
                                <img width="100" src="{{ asset("log.svg") }}" alt="logo"></a>
                        </div>
                        <div class="d-md-none d-block">
                            <a href="/" class="link-wrap mobile-logo img-height-100" aria-label="Site Logo">
                                <img width="86" height="31" src="{{ asset("log.svg") }}" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Start Mainmenu Nav -->
                    <div id="mobilemenu-popup" class="offcanvas mobile-menu-wrap">
                        <div class="mobile-logo-wrap d-lg-none d-block">
                            <div class="logo-holder">
                                <a href="/" class="link-wrap single-logo light-mode img-height-100" aria-label="Site Logo"><img width="131" height="47" src="{{ asset("log.svg") }}" alt="logo"></a>
                                <a href="/" class="link-wrap single-logo dark-mode img-height-100" aria-label="Site Logo"><img width="131" height="47" src="{{ asset("log.svg") }}" alt="logo" aria-label="Site Logo"></a>
                            </div>
                            <button aria-label="Offcanvas" type="button" class="mobile-close" data-bs-dismiss="offcanvas"><i class="regular-multiply-circle"></i></button>
                        </div>
                        <nav id="dropdown" class="template-main-menu">
                            <ul class="menu">
                                <li class="menu-item">
                                    <a class="hovert" id="active" href="/">Asosiy</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 1]) }}">AES</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 2]) }}">GES</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 3]) }}">Shamol ES</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 4]) }}">Quyosh ES</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 5]) }}">Qiziqarli</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("blog.type", ["type"=> 6]) }}">Mening Bloglarim</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Mainmanu Nav -->
                    <div class="d-flex align-items-center gap-3">

                        <div class="mobile-menu-btn d-lg-none d-block">
                            <button aria-label="Offcanvas" class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                <span style="background: white"></span>
                                <span style="background: white"></span>
                                <span style="background: white"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')

    <!--=====================================-->
    <!--=         Footer Area Start         =-->
    <!--=====================================-->
    <footer class="footer footer2">
        <div class="footer-top bg-color-light-1 space-top-50 space-bottom-60">
        </div>
        <div class="footer-main">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-4 col-12">
                        <div class="footer-widget">
                            <div class="footer-about">
                                <div class="logo-holder">
                                    <a href="/" class="link-wrap img-height-100" aria-label="Site Logo">
                                        <img width="131" height="47" src="{{ asset("log.svg") }}" alt="logo"></a>
                                </div>
                                <p class="description">
                                    Yashil taraqqiyot. Barqaror kelajak sari.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title h3-small text-center">Bo'limlar</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route("blog.type", ["type"=> 1]) }}">AES</a></li>
                                    <li><a href="{{ route("blog.type", ["type"=> 2]) }}">GES</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route("blog.type", ["type"=> 3]) }}">Shamol ES</a></li>
                                    <li><a href="{{ route("blog.type", ["type"=> 4]) }}">Quyosh ES</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route("blog.type", ["type"=> 5]) }}">Qiziqarli</a></li>
                                    <li><a href="{{ route("blog.type", ["type"=> 6]) }}">Mening Bloglarim</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright">
{{--                <span class="copyright-text">© 2024. All rights reserved by <a href="https://yashilenergetika.uz/" target="_blank">Yashilenergetika</a>.</span>--}}
            </div>
        </div>
    </footer>

</div>
<!-- Search Start -->
<div id="search-trigger" class="search-input-wrap">
    <div class="container">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" value="" placeholder="Qidiruv.." />
            <button type="submit" class="search-btn">
                <i class="regular-search-02"></i>
            </button>
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Jquery Js -->
<script src="{{ asset("assets/js/vendor/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/imagesloaded.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/slick.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/js.cookie.js") }}"></script>
<script src="{{ asset("assets/js/vendor/jquery.style.switcher.js") }}"></script>
<script src="{{ asset("assets/js/vendor/jquery.mb.YTPlayer.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/theia-sticky-sidebar.min.js") }}"></script>
<script src="{{ asset("assets/js/vendor/resize-sensor.min.js") }}"></script>


<!-- Site Scripts -->
<script src="{{ asset("assets/js/app.js") }}"></script>
<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>

</body>

</html>
