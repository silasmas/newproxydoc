
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/logo1.png') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font/flaticon.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    @yield('autreStyle')

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- Nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slider/css/nivo-slider.css') }}" />
    <!-- Elements CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/elements.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/monstyle.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('assets/js/modernizr-3.5.0.min.js') }}"></script>
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/home/app.css') }}">

    @livewireStyles()
</head>
<body>
    <!-- Preloader Start Here -->
    <div id="preloaderddd"></div>
    <!-- Preloader End Here -->
    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->
    <div id="wrapper" class="wrapper">
