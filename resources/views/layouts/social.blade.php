<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('ashry/front/img/logo/logompns3-removebg.png')}}">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('ashry/social/vendor/slick/slick.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/social/vendor/slick/slick-theme.min.css')}}" />

    <link href="{{asset('ashry/social/vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('ashry/social/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    @yield('style')
    <link href="{{asset('ashry/social/css/style.css')}}" rel="stylesheet">
</head>
<body>

@include('front.includes.header-social')

{{--    @yield('slider') --}}

@yield('content')

{{--
@include('front.includes.footer')
--}}

<script src="{{asset('ashry/social/vendor/jquery/jquery.min.js')}}" ></script>
<script src="{{asset('ashry/social/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>

<script  src="{{asset('ashry/social/vendor/slick/slick.min.js')}}"></script>

<script src="{{asset('ashry/social/js/osahan.js')}}" ></script>
{{--<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="540855f9d21d2ffd49a0a7d8-|49" defer=""></script>--}}
{{--<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"--}}
{{--        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="--}}
{{--        data-cf-beacon='{"rayId":"7103675d9dd7404f","version":"2021.12.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}'--}}
{{--        crossorigin="anonymous"></script>--}}

@yield('script')
</body>

</html>



