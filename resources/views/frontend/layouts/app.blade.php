<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    @vite(['resources/css/app-frontend.css'])--}}
{{--    @vite(['resources/js/app-frontend.js'])--}}
    <script src="{{ asset('assets/javascript/jquery/jquery.2.1.1.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <script src="{{ asset('assets/javascript/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/javascript/eptheme/product-slider-zoom/jquery.elevatezoom.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/javascript/jquery/swiper/js/owl.carousel.min.js') }}" type="text/javascript"></script>


    <link href="{{ asset('assets/javascript/jquery/swiper/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/javascript/jquery/swiper/css/owl.theme.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <script src="{{ asset('assets/javascript/jquery/swiper/js/slick.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/jquery/swiper/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/javascript/jquery/swiper/css/slick-theme.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/theme/birthblessing3/stylesheet/stylesheet.css') }}" rel="stylesheet">



    <script src="{{ asset('assets/javascript/eptheme/animate.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/eptheme/animate.css') }}" rel="stylesheet" type="text/css" />

    <!-- blog image zoom -->
    <script src="{{ asset('assets/javascript/eptheme/blog/lightbox-2.6.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/eptheme/blog/lightbox.css') }}" rel="stylesheet" type="text/css" />
    <!-- blog image zoom -->
    <!--right to left (RTL)-->
    <!--over RTL-->
    <script src="{{ asset('assets/javascript/eptheme/countdown/jquery.plugin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/eptheme/countdown/jquery.countdown.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/javascript/eptheme/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/eptheme/option.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/jquery/swiper/css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/javascript/jquery/swiper/css/owl.theme.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/javascript/jquery/swiper/css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/javascript/jquery/swiper/css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/javascript/jquery/magnific/magnific-popup.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('assets/javascript/jquery/swiper/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/jquery/swiper/js/swiper.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/jquery/magnific/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/jquery/webiquickview.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/jquery/webinewsletter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/wbcommon.js') }}" type="text/javascript"></script>
    <link href="{{ asset('favicon.ico') }}" rel="icon" />


    @livewireStyles

    @stack('after-styles')

    <x-google-analytics />
</head>

<body>
    @include('frontend.includes.icon')
    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

    <!-- Scripts -->
    @livewireScripts
    @stack('after-scripts')
</body>

</html>
