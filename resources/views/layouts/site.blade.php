<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="Extended Bootstrap 4 Template">
    <meta name="author" content="Goran Hrustic">
    <link rel="icon" href="{{asset('ashry/front/assets/svg/favicon.ico')}}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Vendor stylesheets -->
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/animate.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/font-awesome.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/linear-icons.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/owl.carousel.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/jquery.lavalamp.css')}}" />


    <!-- Template stylesheets -->
    @yield('style')
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/style.css')}}" />

    <!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}


</head>

<body>

    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Main navigation -->
    @include('front.includes.header')

    <!-- Hero -->
    {{--    @yield('slider') --}}
    <!-- Intro -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white">
        @include('front.includes.footer')
    </footer>

    <!-- Vendor Scripts -->
    <script src="{{asset('ashry/front/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/in-view.min.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/jquery.lavalamp.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/owl.carousel.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/rellax.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/wow.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/tabzy.js')}}"></script>
    <script src="{{asset('ashry/front/js/vendor/isotope.pkgd.js')}}"></script>

    <!-- Template Scripts -->
    <script src="{{asset('ashry/front/js/main.js')}}"></script>
    <script src="{{asset('ashry/front/js/custom.js')}}"></script>
    @yield('script')
</body>

</html>

