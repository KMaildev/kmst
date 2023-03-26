<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KAUNG MYAT SAN THU CO.,LTD(KMST CO.,LTD) @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><a href="#"><i class="fas fa-play"></i></a></div>

    @include('layouts.menu')

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main class="fix">
                @if (URL::current() == route('home') || URL::current() == route('welcome'))
                    @include('layouts.slider')
                @endif
                @yield('content')
            </main>

            @include('layouts.footer')

        </div>
    </div>

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/split-text.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
