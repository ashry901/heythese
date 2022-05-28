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

</head>

<body>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<!-- Navigation -->

<nav class="navbar navbar-dark navbar-sticky fixed-top navbar-expand-lg py-2">
    <div class="container">

        <a class="navbar-brand" href="#">
            <i class="icon icon-layers"></i>
            <strong>Reveal</strong>
        </a>

        <div class="d-flex d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="furnitureNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon icon-menu"></span>
            </button>
        </div>

        <!-- Navbar collapse -->

        <div class="navbar-collapse collapse navbar-collapse-sidebar" id="mainNavbar">

            <!-- Mobile search -->

            <div class="d-block d-lg-none">
                <div class="p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <i class="icon icon-layers"></i>
                            <strong>Reveal</strong>
                        </div>
                        <button class="btn p-0" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon icon-cross font-size-lg"></span>
                        </button>
                    </div>
                </div>
                <div class="bg-light">
                    <div class="form-group form-group-icon">
                        <input type="text" class="form-control form-control-simple" placeholder="Search site">
                        <button class="btn btn-clean"><i class="icon icon-magnifier"></i></button>
                    </div>
                </div>
            </div>

            <!-- Links -->

            <ul class="navbar-nav ml-auto align-items-lg-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('main') }}">
                        Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown px-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-shop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rooms
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-shop">
                        <a class="dropdown-item" href="#">Shop</a>
                        <a class="dropdown-item" href="#">Product</a>
                        <a class="dropdown-item" href="#">Checkout</a>
                    </div>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Booking</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- Carousel -->
<section class="bg-black pt-0">
    <div class="owl-carousel owl-large owl-nav-clean" data-nav="true"
         data-size="fullscreen">
        <div class="slide d-flex align-items-end pb-4">
            <div class="cover cover-overlay cover-gradient-vertical py-5"
                 style="background-image:url(../assets/images/templates/hotel/bg-1.jpg)">

            </div>

            <div class="w-100 text-white text-center">
                <div class="container">
                    <h2 class="display-3 font-weight-bold animated mb-3"
                        data-start="fadeInDown">Hotel Template</h2>
                    <div class="lead">
                        <div class="animated" data-start="fadeInUp">
                            A slideshow component for cycling through elements.
                        </div>
                        <div class="animated" data-start="fadeInUp">
                            New paragraph line as text placeholder.
                        </div>
                        <div class="animated pt-5" data-start="fadeInUp">
                            <a href="#" class="btn btn-rounded btn-outline-light px-4">
                                Button example
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking -->
<section class="bg-black text-white">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-4 col-sm-3">
                <figure class="wow fadeInUp p-0" data-wow-delay=".4s">
                    <label for="dateArrival" class="pre-label">Arrival</label>
                    <figcaption>
                            <span class="date" id="dateArrival">
                                <input class="date-picker" readonly="readonly" id="dateArrival">
                                <div class="date-value">
                                    <span class="day font-weight-bold display-4">24</span>
                                    <span class="month">Dec</span>
                                    <span class="year">2020</span>
                                    <i class="icon icon-arrow-right"></i>
                                </div>
                            </span>
                    </figcaption>
                </figure>
            </div>

            <div class="col-4 col-sm-3">
                <figure class="wow fadeInUp p-0" data-wow-delay=".5s">
                    <label for="dateDeparture" class="pre-label">Departure</label>
                    <figcaption>
                            <span class="date" id="dateDeparture">
                                <input class="date-picker" readonly="readonly" id="dateDeparture">
                                <div class="date-value">
                                    <span class="day font-weight-bold display-4">28</span>
                                    <span class="month">Dec</span>
                                    <span class="year">2020</span>
                                    <i class="icon icon-arrow-right"></i>
                                </div>
                            </span>
                    </figcaption>
                </figure>
            </div>

            <div class="col-4 col-sm-3">
                <figure class="wow fadeInUp p-0" data-wow-delay=".6s">
                    <label for="dateGuest" class="pre-label">Guest</label>
                    <figcaption>
                            <span class="date" id="dateGuest">
                                <input class="date-picker" readonly="readonly" id="dateGuest">
                                <div class="date-value">
                                    <span class="name font-weight-bold display-4">2</span>
                                    <i class="icon icon-arrow-right"></i>
                                </div>
                            </span>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <div class="wow fadeInUp p-0" data-wow-delay=".7s">
                    <button class="btn btn-outline-light btn-rounded btn-block py-3">Book now</button>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Rooms -->
<section class="position-relative pt-0">
    <div class="bg-layer bg-layer-horizontal bg-layer-horizontal-top bg-black h-25"></div>

    <div class="container position-relative">

        <header class="mb-3 mb-lg-5 text-white">
            <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                <h2 class="h1">Rooms accomodation</h2>
                <p>Designed as a privileged almost private place where you'll feel right at home</p>
            </div>
        </header>

        <div class="row">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp p-0" data-wow-delay="0.0s">

                    <div class="card card-fill border-0 br-sm shadow-sm">

                        <img src="../assets/images/templates/hotel/room-1.jpg" class="card-img-top" alt="...">

                        <div class="card-body">

                            <small class="pre-label">Presidential Suite</small>
                            <h4 class="card-title">Family apartment</h4>

                            <div class="d-flex align-items-center">

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                        <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                    </svg>
                                    <small>Wifi</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                    <small>2 Pers</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                        <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                    </svg>
                                    <small>TV</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                        <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                        <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                    </svg>
                                    <small>Room service</small>
                                </div>

                            </div>
                        </div>

                        <a href="#" class="card-footer d-block pb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <small>From <b>$ 299,00</b> day</small>
                                <button class="btn btn-outline-dark btn-rounded">Book now</button>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp p-0" data-wow-delay="0.1s">

                    <div class="card card-fill border-0 br-sm shadow-sm">

                        <img src="../assets/images/templates/hotel/room-2.jpg" class="card-img-top" alt="...">

                        <div class="card-body">

                            <small class="pre-label">Luxury apartment</small>
                            <h4 class="card-title">Business lounge</h4>

                            <div class="d-flex align-items-center">

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                        <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                    </svg>
                                    <small>Wifi</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                    <small>2 Pers</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                        <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                    </svg>
                                    <small>TV</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                        <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                        <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                    </svg>
                                    <small>Room service</small>
                                </div>

                            </div>
                        </div>

                        <a href="#" class="card-footer d-block pb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <small>From <b>$ 199,00</b> day</small>
                                <button class="btn btn-outline-dark btn-rounded">Book now</button>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp p-0" data-wow-delay="0.2s">

                    <div class="card card-fill border-0 br-sm shadow-sm">

                        <img src="../assets/images/templates/hotel/room-3.jpg" class="card-img-top" alt="...">

                        <div class="card-body">

                            <small class="pre-label">Classic Room</small>
                            <h4 class="card-title">Double room</h4>

                            <div class="d-flex align-items-center">

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                        <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                    </svg>
                                    <small>Wifi</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                    <small>2 Pers</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                        <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                    </svg>
                                    <small>TV</small>
                                </div>

                                <div class="px-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                        <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                        <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                    </svg>
                                    <small>Room service</small>
                                </div>

                            </div>
                        </div>

                        <a href="#" class="card-footer d-block pb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <small>From <b>$ 99,00</b> day</small>
                                <button class="btn btn-outline-dark btn-rounded">Book now</button>
                            </div>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">

        <header class="mb-3 mb-lg-5">
            <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                <h2 class="h1">Resort facilities</h2>
                <p>With the best luxury spa, salon and fitness experiences</p>
            </div>
        </header>

        <div class="row gutters-mobile istp-wrap">
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-1.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Spa</strong> center
                            </h4>
                            <p>Unparalleled devotion to luxury</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick brick-next">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-2.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Gym</strong> center
                            </h4>
                            <p>Care about results</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-3.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Fitness</strong> center
                            </h4>
                            <p>Your daily activities</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick brick-next">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-4.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Beauty</strong> salon
                            </h4>
                            <p>Hair salons and spas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-5.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Resturant</strong>
                            </h4>
                            <p>We love different cultures</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="istp col-6 col-lg-4 mb-2 mb-lg-4">
                <div class="brick brick-next">
                    <div class="brick-content box box-image box-hover-drop br-sm" style="background-image:url(../assets/images/templates/hotel/services-6.jpg)">
                        <div class="box-spacer-lg"></div>
                        <div class="box-content text-white">
                            <h4 class="mb-1">
                                <strong class="text-uppercase">Wedding</strong> hall
                            </h4>
                            <p>Important unmemorable events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="divider bg-light">
    <svg class="svg svg-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,73.808,1920,0V101H0Z" />
    </svg>
</div>

<!-- Intro rooms -->
<section class="bg-dark text-white">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 ml-n6">
                <div class="rellax rellax-move text-left" data-rellax-speed="-0.5">
                    <img src="../assets/images/templates/hotel/bg-1.jpg" alt="" class="img-fluid br-sm w-75" />
                </div>
                <div class="rellax rellax-move text-right" data-rellax-speed="0.2">
                    <img src="../assets/images/templates/hotel/gal-6.jpg" alt="" class="img-fluid br-sm w-75 mt-n8" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-3 p-lg-5">
                    <div class="wow fadeInUp" data-wow-delay=".4s">
                        <h2 class="h1">A best place to enjoy.</h2>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus cupiditate iste unde, officiis ratione amet impedit magni! Quasi fugiat, quidem quas tempora cumque a minima qui vitae error ab iusto.</p>
                        <div class="pt-3"><a href="#" class="btn btn-secondary btn-rounded">Get your gift card!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider bg-dark">
    <svg class="svg svg-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,73.808,1920,0V101H0Z" />
    </svg>
</div>

<!-- Carousel -->
<section class="overflow-hidden bg-white">
    <div class="container">

        <header class="mb-3 mb-lg-5 text-center">
            <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                <h2 class="h1">Hotel gallery</h2>
                <p>Explore our view and hotel concept</p>
            </div>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel owl-primary owl-visible owl-center owl-dark" data-items="2" data-nav="true" data-margin="15" data-dots="false" data-autoplay="true">
                    <div class="wow fadeInUp p-0" data-wow-delay=".9s">
                        <img src="../assets/images/templates/hotel/gal-1.jpg" alt="" class="br-sm" />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1s">
                        <img src="../assets/images/templates/hotel/gal-2.jpg" alt="" class="br-sm" />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1.2s">
                        <img src="../assets/images/templates/hotel/gal-3.jpg" alt="" class="br-sm" />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1.3s">
                        <img src="../assets/images/templates/hotel/gal-4.jpg" alt="" class="br-sm" />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1.5s">
                        <img src="../assets/images/templates/hotel/gal-5.jpg" alt="" class="br-sm" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="px bg-white">
    <div class="container">

        <header class="mb-3 mb-lg-5 text-center">
            <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                <h2 class="h1">Hotel services</h2>
                <p>Experience & aminities</p>
            </div>
        </header>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="row">

                    <div class="col-md-6">

                        <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                            <div class="box box-hover br-sm bg-light mb-4">
                                <div class="box-content">
                                    <i class="icon icon-car display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Free parking</h4>
                                        <p>orem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                            <div class="box box-hover br-sm bg-light mb-4">
                                <div class="box-content">
                                    <i class="icon icon-heart-pulse display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">24/7 availability</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 pt-lg-6">

                        <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                            <div class="box box-hover br-sm bg-light mb-4">
                                <div class="box-content">
                                    <i class="icon icon-earth display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Highspeed internet</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wow fadeInUp p-0" data-wow-delay=".3s">
                            <div class="box box-hover br-sm bg-light mb-4">
                                <div class="box-content">
                                    <i class="icon icon-dinner display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Resturant</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Rooms -->
<section class="overflow-hidden position-relative">
    <div class="bg-layer bg-layer-horizontal bg-layer-horizontal-bottom bg-white"></div>

    <div class="container">

        <header class="mb-3 mb-lg-5">
            <h2 class="h1">Check all rooms</h2>
            <p>Designed as a privileged almost private place where you'll feel right at home</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="owl-carousel owl-primary owl-visible owl-center" data-items="2" data-nav="true" data-margin="30" data-dots="false" data-autoplay="false">
                    <div class="wow fadeInUp p-0" data-wow-delay="0.0s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-1.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Presidential Suite</h4>
                                <label class="pre-label text-white">Family apartment</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 299,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="0.1s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-2.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Luxury apartment</h4>
                                <label class="pre-label text-white">Business lounge</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 199,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="0.2s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-3.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Classic Room</h4>
                                <label class="pre-label text-white">Double room</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 99,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="0.3s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-4.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Superior Room</h4>
                                <label class="pre-label text-white">Queen size bed</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 149,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="0.4s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-5.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Double room</h4>
                                <label class="pre-label text-white">Family apartment</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 129,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="0.5s">
                        <div class="text-white box box-image box-hover-drop shadow-sm" style="background-image:url(../assets/images//templates/hotel/room-3.jpg)">
                            <div class="box-spacer-xl"></div>
                            <div class="box-content">
                                <h4 class="mb-0">Single Room</h4>
                                <label class="pre-label text-white">Club room</label>
                                <p>
                                    <small class="text-uppercase">From <b>$ 69,00</b> day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="bg-black" data-theme="dark">
    <div class="container">
        <div class="text-center">
            <div class="wow fadeInUp" data-wow-delay=".6s">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2>Subscribe to newsletter</h2>
                        <form class="form form-cta mt-3">
                            <div class="form-group">
                                <div class="row gutter-1">
                                    <div class="col-md-8 mb-2 mb-lg-0">
                                        <input type="email" class="form-control form-control-rounded px-3" id="exampleInputEmail1" placeholder="Insert your email">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-white btn-rounded btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div data-theme="dark">
    <hr class="m-0">
</div>

<!-- Footer -->
<footer class="bg-black text-white">

    <!-- Footer links -->
    <div class="py-5">
        <div class="wow fadeInUp" data-wow-delay=".8s">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 text-center text-lg-left order-2 order-lg-1">
                        <p class="text-muted">All rights reserved 2020 © Reveal</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-right order-1 order-lg-2">
                        <div class="py-3 py-lg-0">
                            <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
