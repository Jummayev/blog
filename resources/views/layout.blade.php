<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BlogXpress | Blog and News Minimal Responsive HTML Template</title>
    <meta name="description" content="Author: AxilTheme, Template: HTML, Category: Blog, Price: $13.00,
    Length: 23 pages">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("log.svg") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/fonts/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick/slick-theme.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("style.css") }}">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="mobilemenu-active">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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
                            <a href="/" class="link-wrap desktop-logo img-height-100" aria-label="Site Logo"><img width="100" src="{{ asset("log.svg") }}" alt="logo"></a>
                        </div>
                        <div class="d-md-none d-block">
                            <a href="/" class="link-wrap mobile-logo img-height-100" aria-label="Site Logo"><img width="86" height="31" src="{{ asset("log.svg") }}" alt="logo"></a>
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
                                    <a class="hovert" id="active" href="#">Asosiy</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("list") }}">Atom energeya</a>
                                </li>
                                <li class="menu-item">
                                    <a class="hovert" href="{{ route("list") }}">Qayta tiklanuvchi energeya</a>
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
                                    <a href="/" class="link-wrap img-height-100" aria-label="Site Logo"><img width="131" height="47" src="assets/media/logo-light.svg" alt="logo"></a>
                                </div>
                                <p class="description">Expert insights, industry trends, and inspiring stories that help you live and work on your own terms. Expert insights, industry trends.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title h3-small text-center">Categories</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route("list") }}">Technology</a></li>
                                    <li><a href="{{ route("list") }}">Politics</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route("list") }}">Business Leaders</a></li>
                                    <li><a href="{{ route("list") }}">Markets</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route("list") }}">Music News</a></li>
                                    <li><a href="{{ route("list") }}">Style News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright">
                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/" target="_blank">Axilthemes</a>.</span>
            </div>
        </div>
    </footer>

</div>
<!-- Search Start -->
<div id="search-trigger" class="search-input-wrap">
    <div class="container">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" value="" placeholder="Search" />
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
</body>

</html>
