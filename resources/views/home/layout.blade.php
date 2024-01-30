<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="SMA Nusantara Mandiri">
    <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="BCW">

    <title>SMP PUTRA PERINTIS</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="assets/vendors1/bootstrap/bootstrap.css">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="assets/vendors1/awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/vendors1/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/fonts/gilroy/font-gilroy.css">
    <link rel="stylesheet" href="assets/vendors1/magnific-popup/magnific-popup.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/vendors1/animate-css/animate.css">
    <link rel="stylesheet" href="assets/vendors1/animated-headline/animated-headline.css">
    <link rel="stylesheet" href="assets/vendors1/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors1/owl/assets/owl.theme.default.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/woocomerce.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body id="top-header">



    <header class="header-style-1">
        <div class="header-navbar navbar-sticky">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/wk.png') }}" alt="" class="img-fluid" width="125px" />
                        </a>
                    </div>

                    <div class="offcanvas-icon d-block d-lg-none">
                        <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                    </div>
                    <nav class="site-navbar ms-auto">

                        <ul class="primary-menu">
                            <li>
                                <a href="#blog">Blog</a>

                            </li>
                            <li>
                                <a href="/login">Login / Register</a>
                            </li>
                        </ul>

                        <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Site footer -->
    <section class="footer footer-3 pt-250">
        <div class="footer-btm">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-sm-12 col-lg-6">
                        <p class="mb-0 copyright text-sm-center text-lg-start">© 2024 SMP PUTRA PERINTIS All rights reserved by BCW</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-btm-top">
            <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
        </div>

    </section>
    <!-- Footer section End -->





    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{asset('assets/vendors1/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 5:0 -->
    <script src="{{asset('assets/vendors1/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors1/bootstrap/bootstrap.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assets/vendors1/counterup/waypoint.js')}}"></script>
    <script src="{{asset('assets/vendors1/counterup/jquery.counterup.min.js')}}"></script>
    <!--  Owl Carousel -->
    <script src="{{asset('assets/vendors1/owl/owl.carousel.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/vendors1/isotope/jquery.isotope.js')}}"></script>
    <script src="{{asset('assets/vendors1/isotope/imagelaoded.min.js')}}"></script>
    <!-- Animated Headline -->
    <script src="{{asset('assets/vendors1/animated-headline/animated-headline.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/vendors1/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>


</body>

</html>