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

<nav class="navbar navbar-sticky fixed-top navbar-expand-lg navbar-dark py-2">
    <div class="container">
        <a class="navbar-brand mr-5" href="#">Furniture</a>

        <div class="d-flex d-lg-none">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link toggle-show" data-show="loginComponent">
                        <div class="px-2 py-1">Login</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link toggle-show" data-show="cartComponent">
                        <div class="px-2 py-1">Cart <sup>3</sup></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link toggle-show" data-show="searchComponent">
                        <div class="px-2 py-1"><span class="icon icon-magnifier"></span></div>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#furnitureNavbar" aria-controls="furnitureNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon icon-menu"></span>
            </button>
        </div>

        <!-- Navbar collapse -->

        <div class="navbar-collapse collapse navbar-collapse-sidebar" id="furnitureNavbar">

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
                        Furniture
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-shop">
                        <a class="dropdown-item" href="#">Shop</a>
                        <a class="dropdown-item" href="#">Product</a>
                        <a class="dropdown-item" href="#">Checkout</a>
                    </div>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Housewares</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Garden</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item d-none d-lg-inline ml-lg-5">
                    <a href="#" class="nav-link toggle-show" data-show="loginComponent">
                        Login
                    </a>
                </li>
                <li class="nav-item d-none d-lg-inline">
                    <a href="#" class="nav-link toggle-show d-flex" data-show="cartComponent">
                        <div class="px-2 py-1">Cart <sup>3</sup></div>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-inline">
                    <a href="#" class="nav-link toggle-show" data-show="searchComponent">
                        <span class="icon icon-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- Sidebar login -->

<nav id="loginComponent" class="sidebar bg-white border-right">
    <div class="sidebar-content sidebar-content-warning">

        <!-- Sidebar header -->

        <div class="sidebar-header p-3">
            <button type="button" class="toggle-show close" data-show="loginComponent">
                <span class="icon icon-cross"></span>
            </button>
        </div>

        <!-- Sidebar content -->

        <div class="d-flex w-100 align-items-center">
            <div class="w-100">
                <div class="p-4 p-lg-5">
                    <div class="mb-5 text-center">
                        <img src="../assets/svg/reveal-symbol.svg" alt="" width="80" />
                    </div>
                    <form>
                        <div class="form-group">
                            <label class="label" for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="label" for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="custom-control custom-control-sm custom-checkbox custom-checkbox-primary">
                                <input type="checkbox" class="custom-control-input" id="customExampleCheck">
                                <label class="custom-control-label" for="customExampleCheck">Remember me</label>
                            </div>
                            <small>
                                <a href="#" class="text-muted">Forgot password?</a>
                            </small>
                        </div>
                    </form>
                    <div class="row justify-content-center pt-3">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-sm btn-block btn-warning px-5">Login</button>

                            <div class="divider-separator">
                                <span>Or</span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-block btn-google px-3">Login with Google</button>
                                <button type="submit" class="btn btn-sm btn-block btn-facebook px-3">Login with Facebook</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <small>
                            <a href="#" class="text-muted">Don't have an account?</a> <br />
                            <a href="#" class="text-muted">Create an account</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar cart -->

<nav id="cartComponent" class="sidebar sidebar-right bg-white border-left">
    <div class="sidebar-content">

        <!-- Sidebar header -->

        <div class="sidebar-header px-3 pt-3">
            <button type="button" class="toggle-show close" data-show="cartComponent">
                <span class="icon icon-cross"></span>
            </button>
            <div>Shopping cart</div>
        </div>

        <hr />

        <!-- Sidebar items -->

        <div>
            <ul class="list-group list-group-flush mb-3">

                <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/furniture/p1.png" alt="" class="img-fluid br-sm" />
                        </div>
                        <div class="col-md-6 pl-md-2 mb-2 mb-lg-0">
                            <p class="my-0">First product</p>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <div class="col-6 col-md-2">
                            <input type="number" value="2" class="form-control form-control-sm" />
                        </div>
                        <div class="col-6 col-md-2 text-right text-muted">
                            <div>$1200</div>
                            <small><del>$1499</del></small>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/furniture/p1.png" alt="" class="img-fluid br-sm" />
                        </div>
                        <div class="col-md-6 pl-md-2 mb-2 mb-lg-0">
                            <p class="my-0">Second product</p>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <div class="col-6 col-md-2">
                            <input type="number" value="2" class="form-control form-control-sm" />
                        </div>
                        <div class="col-6 col-md-2 text-right text-muted">
                            <div>$1200</div>
                            <small><del>$1499</del></small>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/furniture/p1.png" alt="" class="img-fluid br-sm" />
                        </div>
                        <div class="col-md-6 pl-md-2 mb-2 mb-lg-0">
                            <p class="my-0">Third product</p>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <div class="col-6 col-md-2">
                            <input type="number" value="2" class="form-control form-control-sm" />
                        </div>
                        <div class="col-6 col-md-2 text-right text-muted">
                            <div>$1200</div>
                            <small><del>$1499</del></small>
                        </div>
                    </div>
                </li>

                <li class="list-group-item bg-light text-muted">
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Promocode: EXAMPLECODE</small>
                        </div>
                        <span>-$500</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Discount 15%</small>
                        </div>
                        <span>-$15</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Shipping</small>
                        </div>
                        <span>$0</span>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total (USD)</strong>
                    <strong>$ 1290,00</strong>
                </li>

            </ul>

            <!-- Sidebar Buttons -->

            <div class="row justify-content-center pt-3">
                <div class="col-8">
                    <button type="submit" class="btn btn-sm btn-block btn-warning px-5">Go to checkout</button>

                    <div class="divider-separator">
                        <span>Or</span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-block px-3">Continue shopping</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</nav>

<!-- Sidebar search -->

<nav id="searchComponent" class="sidebar sidebar-right bg-white border-left">
    <div class="sidebar-content">
        <div class="sidebar-header px-3 pt-3">
            <button type="button" class="toggle-show close" data-show="searchComponent">
                <span class="icon icon-cross"></span>
            </button>
            <div>Search content</div>
        </div>
        <hr />
        <div class="p-4">
            <div class="form-group">
                <label class="label" for="searchContent">Enter keyword</label>
                <input type="email" class="form-control form-control-simple" id="searchContent" placeholder="Search key words like furniture, sofa...">
            </div>
            <div class="row justify-content-center pt-3">
                <div class="col-md-10">
                    <button type="submit" class="btn btn-sm btn-block btn-warning px-5">Search the site</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Carousel -->

<section class="p-0">
    <div class="owl-carousel owl-fullscreen owl-nav-clean" data-nav="true" data-size="fullscreen">
        <div class="slide d-flex align-items-center" style="background-image:url(../assets/images/templates/furniture/gallery-1.jpg)">
            <div class="w-100 text-white text-center">
                <div class="container">
                    <h2 class="display-3 font-weight-bold animated mb-3" data-start="fadeInDown">Furniture Template</h2>
                    <div class="lead">
                        <div class="animated" data-start="fadeInUp">A slideshow component for cycling through elements.</div>
                        <div class="animated d-none d-lg-block" data-start="fadeInUp">New paragraph line as text placeholder.</div>
                        <div class="animated pt-5" data-start="fadeInUp"><a href="#" class="btn btn-rounded btn-secondary px-4">Button example</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products -->

<section>

    <!-- Products header -->

    <div class="container mb-5">
        <div class="row align-items-end justify-content-between">
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2>Popular products</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="col-md-4 text-md-right mt-3">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="#" class="btn btn-rounded btn-secondary">Explore now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products content -->

    <div class="container pb-4">
        <div class="row gutters-mobile pb-4">

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-1.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-2.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".5s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-3.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-4.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".9s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-5.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay="1.2s">
                    <div class="card card-fill border-0 mb-2 mb-lg-4">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                <a href="#" class="text-dark">Product title</a>
                            </h4>
                            <div class="pre-label text-muted">$ 2290,00 <s>$ 3990,00</s></div>
                        </div>
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/product-6.png" class="card-img-top" alt="...">
                            <div class="card-footer card-footer-bottom text-right">
                                <a href="#" class="btn btn-icon btn-circle btn-warning btn-lg">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Products footer -->

    <div class="container pt-lg-2 text-white d-none">

        <div class="row">
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="10 0 100 100" fill="white">
                            <path d="M429.4,363.394l-.022-1.987c0-.447.2-.6.514-.6a4.013,4.013,0,0,1,1.585.424l15.206,6.5a1.644,1.644,0,0,1,.692.759,1.62,1.62,0,0,1,.179.849,12.4,12.4,0,0,0-.2,2.612L429.4,363.394ZM465.46,339.77l-39.41.648.357,30.947,8.262-.469,11.968,5.85.447,7.748,1.608.022.357-7.681,44.612-3.885.893,6.23h1.407l.045-10.606-48.341,4.175-.156-.022-18.778-8.887h0l-.022-2.411a1.08,1.08,0,0,1,1.139-1.25,4.724,4.724,0,0,1,1.853.469l14.96,6.386a1.369,1.369,0,0,1,.268.112l.112.045a4.128,4.128,0,0,0,1.25.268,3.441,3.441,0,0,0,.692,0c.022,0,.045-.022.067-.022h0a3.958,3.958,0,0,1,1.139-.223l42.357-2.9-25.767-10.226-.022-.022a9.956,9.956,0,0,0,2.322,4.622A54.157,54.157,0,0,0,449,360.647c.067-.2.156-.424.2-.625a88.4,88.4,0,0,0-18.041.156,15.431,15.431,0,0,0-.849-8.909,90.65,90.65,0,0,0,21.034-.357,14.016,14.016,0,0,0-.6,1.317l14.67-.424V339.77Zm29.474,28.424-.022-2.255a1.02,1.02,0,0,0-.737-.982l-.268-.112-43.675,2.992a1.947,1.947,0,0,0-1.92,1.116,2.365,2.365,0,0,0-.134.424,3.462,3.462,0,0,1-.089.469,15.784,15.784,0,0,0-.112,2.21l46.957-3.863Zm-46.957.067c-.022-.022-.022-.045-.045-.067l-.067-.134a.916.916,0,0,0,.246.022c-.045.067-.089.112-.134.179Zm2.1-13.821a10.533,10.533,0,0,0-.246,3.238,15.709,15.709,0,0,0,.246-3.238Z" transform="translate(-411.05 -311.77)" fill-rule="evenodd"></path>
                        </svg>
                    </figure>
                    <h4>Interior furniture</h4>
                    <p>As a home furnishing store, we do this by producing furniture that is well-designed, functional and affordable</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="20 0 100 100" fill="white">
                            <path d="M231.072,421.419a1.638,1.638,0,0,0,.17-.606c0-.3-.4-.3-.4-.3a.992.992,0,0,1-.057-.3.616.616,0,0,1,.057-.246,4.58,4.58,0,0,1,2.31-2.385,4.672,4.672,0,0,1,2.707.189,1.712,1.712,0,0,1,.719.4,23.161,23.161,0,0,0,1.458-4.543,14.791,14.791,0,0,0,.133-3.748,4.073,4.073,0,0,1-.057-2.082,1.889,1.889,0,0,1,1.42-.909l7.5,1.212a.942.942,0,0,1,.549.53,3.031,3.031,0,0,1,.114,1.117,40.576,40.576,0,0,1-.189,5.679,27.929,27.929,0,0,1-1.06,4.846,4.349,4.349,0,0,1,.833.719c-2.631.151-6.247.322-8.708.379-2.5.057-5.017.076-7.5.057Zm-21.335-.644-13.327,7.97v2.026c1.571.738,5.6,1.022,7.5,1.23v15.485c-1.1,1.76.151,3.029,2.026,3.029,1.893,0,3.2-1.193,2.139-3.029L208.2,432.4h.757c12.172,1.079,18.363,1.628,24.572,1.609,6.209,0,12.57-.473,24.969-1.609h.757v15.144c-.53,0-1.609,2.707,2.082,2.707,1.647,0,3.881-1,2.234-2.859V432.02a40.564,40.564,0,0,0,7.8-1.458v-1.8l-8.519-5.509-.246,1.685c.568.114,1.685.379,1.685,1.117,0,.435-.435.776-1.117.984a9.16,9.16,0,0,1-4.3,0c-.682-.208-1.117-.549-1.117-.984s.435-.776,1.117-.984a7.5,7.5,0,0,1,2.253-.265l.341-2.442L258.9,420.7c-8.651.8-16.167,1.249-23.455,1.325-1.306.019-2.612.019-3.919.019-7.08-.095-14.065-.492-21.789-1.268Zm-.776,12.381-.095,14.406c2.556.189,14.16,1.022,25.8,1,10.715-.019,21.259-.89,23.815-1.117V433.175c-12.381,1.136-18.722,1.59-24.969,1.609-6.247-.019-12.418-.568-24.553-1.628Zm53.214-7.932,1.571-10.677a1.459,1.459,0,0,0-.019-.568.516.516,0,0,0-.284-.284l-9.257-2.4c-.379-.114-3.124-.682-3.218-.8a1.991,1.991,0,0,0-.8-.341c-1.117-.076-1.874,1.212-2.272,2.082,1.079,1.117,2.953.833,4.316.454,0,0-.17-.852.189-.984a4.289,4.289,0,0,1,1.95.189l8.632,2.461-1.514,10.79c-.133,0-.284-.019-.435-.019-1.59,0-2.9.4-2.9.871s1.287.871,2.9.871,2.9-.4,2.9-.871c-.038-.341-.757-.644-1.761-.776Z" transform="translate(-183.41 -378.88)" fill-rule="evenodd"></path>
                        </svg>
                    </figure>
                    <h4>Build your office</h4>
                    <p>As a home furnishing store, we do this by producing furniture that is well-designed, functional and affordable</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="20 0 100 100" fill="white">
                            <path d="M45.55,409.11H58.336V432.6H45.55V409.11ZM59,422.995H75.2c0-1.275-3.589-2.314-4.863-2.314H63.651c-1.294,0-4.648,1.039-4.648,2.314ZM63.69,409.11h6.687v10.354H63.69V409.11Zm11.923,0H89.831v16.2H75.613v-16.2Zm23.494,14.845v-3.863h.608v3.863Zm2.687,0v-3.863h.608v3.863ZM90.439,409.11h10.3v16.2h-10.3v-16.2Zm10.9,0h9.962v16.2h-9.962v-16.2Zm2.216,1.275h6.687v13.453h-6.687V410.385Zm-12,0h6.687v13.453H91.557V410.385ZM79.81,422.818H85.6v.608H79.81v-.608ZM45.55,434.192H58.434v15.159H45.55V434.192Zm52.341,11.08h5.785v.608H97.891v-.608Zm0-7.609h5.785v.608H97.891v-.608Zm-16.552,9.08h3.1v.608h-3.1v-.608Zm0-5.177h3.1v.608h-3.1v-.608Zm0-5.177h3.1V437h-3.1v-.608Zm-19.474-.353H72.633v.8H61.866v-.8Zm-2.844-1.843h16.14v15.159H59.023V434.192Zm16.748,0H89.831v4.746H75.77v-4.746Zm14.061,5.354v4.569H75.77v-4.569Zm0,5.177v4.628H75.77v-4.628Zm.608-10.531h20.846v7.315H90.439v-7.315Zm20.846,7.923v7.236H90.439v-7.236Zm-49.831-3.471H73.28v8.962H61.141v-8.962Zm11.2.608h-10.9v7.727h10.9v-7.727Zm-10.355.294h9.825v7.119H62.3v-7.119Zm-5.609.176v-3.863H57.3v3.863Zm0-8.766v-3.863H57.3v3.863Z" transform="translate(-28.55 -379.11)" fill-rule="evenodd"></path>
                        </svg>
                    </figure>
                    <h4>Kitchen design</h4>
                    <p>As a home furnishing store, we do this by producing furniture that is well-designed, functional and affordable</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Categories -->

<section class="bg-white">

    <!-- Categories header -->

    <div class="container mb-5">
        <div class="row align-items-end justify-content-between">
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2>Categories</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="col-md-4 text-md-right mt-3">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-rounded px-3" id="exampleSearch" placeholder="Search categories">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-dark btn-rounded btn-block">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories content -->

    <div class="container-fluid wow fadeIn" data-wow-delay=".5s">
        <div class="row row-stretcher">

            <div class="col mb-2 mb-lg-0">
                <div class="box box-image box-hover-slide br-sm" style="background-image:url(../assets/images/templates/furniture/image-1.jpg)">
                    <div class="box-spacer-xl"></div>
                    <div class="box-content p-3">
                        <h5 class="mb-1">
                            <strong class="text-uppercase">Living room</strong>
                        </h5>
                        <a href="#" class="link link-right link-light">View more</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2 mb-lg-0">
                <div class="box box-image box-hover-slide br-sm" style="background-image:url(../assets/images/templates/furniture/image-2.jpg)">
                    <div class="box-spacer-xl"></div>
                    <div class="box-content p-3">
                        <h5 class="mb-1">
                            <strong class="text-uppercase">Kitchens</strong>
                        </h5>
                        <a href="#" class="link link-right link-light">View more</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2 mb-lg-0">
                <div class="box box-image box-hover-slide br-sm" style="background-image:url(../assets/images/templates/furniture/image-3.jpg)">
                    <div class="box-spacer-xl"></div>
                    <div class="box-content p-3">
                        <h5 class="mb-1">
                            <strong class="text-uppercase">Bathrooms</strong>
                        </h5>
                        <a href="#" class="link link-right link-light">View more</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2 mb-lg-0">
                <div class="box box-image box-hover-slide br-sm" style="background-image:url(../assets/images/templates/furniture/image-4.jpg)">
                    <div class="box-spacer-xl"></div>
                    <div class="box-content p-3">
                        <h5 class="mb-1">
                            <strong class="text-uppercase">Bedrooms</strong>
                        </h5>
                        <a href="#" class="link link-right link-light">View more</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Inspiration -->

<section class="bg-light">
    <div class="container">
        <div class="">

            <!-- Inspiration header -->

            <div class="container mb-5">
                <div class="row align-items-end justify-content-between">
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay=".1s">
                            <h2>Home inspiration</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <p class="lead mb-0">See our products in real homes!</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-right mt-3">
                        <div class="wow fadeIn" data-wow-delay=".2s">
                            <a href="#" class="btn btn-outline-dark btn-rounded">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inspiration content -->

            <div class="container pb-4">
                <div class="row">

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="../assets/images/templates/furniture/project-1.jpg" class="card-img-top" alt="">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">20.01.2020</div>
                                        <h4 class="card-title mb-3"><span class="text-white">Quick brown fox</span></h4>
                                        <div class="card-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".3s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="../assets/images/templates/furniture/project-2.jpg" class="card-img-top" alt="">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">20.01.2020</div>
                                        <h4 class="card-title mb-3"><span class="text-white">Quick brown fox</span></h4>
                                        <div class="card-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="../assets/images/templates/furniture/project-3.jpg" class="card-img-top" alt="">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">20.01.2020</div>
                                        <h4 class="card-title mb-3"><span class="text-white">Quick brown fox</span></h4>
                                        <div class="card-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Banner -->

<section class="cover" style="background-image:url(../assets/images/templates/furniture/gallery-2.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 mb-4 mb-lg-0 text-white">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2>Shopping at our store</h2>
                    <p>If you’re placing an order online, we offer the following delivery methods. ome save you money, some save you time, others save you fuss. Take a peek below!</p>
                    <div class="pt-3"><a href="#" class="btn btn-rounded btn-outline-light">Read more</a></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay=".3s">
                            <div class="box box-image box-hover br-sm bg-dark mb-2 mb-lg-4">
                                <div class="box-content text-white">
                                    <i class="icon icon-cart display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Discounts</h4>
                                        <p>For online order</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay=".5s">
                            <div class="box box-image box-hover br-sm bg-white mb-2 mb-lg-4">
                                <div class="box-content">
                                    <i class="icon icon-car display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Get your item</h4>
                                        <p>Directly on address</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-lg-4">
                        <div class="wow fadeInUp" data-wow-delay=".7s">
                            <div class="box box-image box-hover br-sm bg-white mb-2 mb-lg-4">
                                <div class="box-content">
                                    <i class="icon icon-clock display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Fast shipping</h4>
                                        <p>24/365 Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay=".9s">
                            <div class="box box-image box-hover br-sm bg-white mb-2 mb-lg-4">
                                <div class="box-content">
                                    <i class="icon icon-star-half display-4"></i>
                                    <div class="pt-4">
                                        <h4 class="mb-0">Benefits</h4>
                                        <p>Free assurance</p>
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

<!-- Blog -->

<section class="section">

    <!-- Blog header -->

    <div class="container mb-5">
        <div class="row align-items-end justify-content-between">
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2>Blog</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <p class="lead mb-0">Latest news & articles!</p>
                </div>
            </div>
            <div class="col-md-4 text-md-right mt-3">
                <div class="wow fadeIn" data-wow-delay=".2s">
                    <a href="#" class="btn btn-secondary btn-rounded">View all</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog content -->

    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="card card-hover-rise br-sm">
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/blog-1.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-date bg-warning">
                                <span>22</span>
                                <span>05</span>
                                <span>2020</span>
                            </div>
                            <h5 class="card-title mt-2"><a href="#" class="text-dark">Everything you need to know about templates</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card card-hover-rise br-sm">
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/blog-2.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-date bg-warning">
                                <span>22</span>
                                <span>05</span>
                                <span>2020</span>
                            </div>
                            <h5 class="card-title mt-2"><a href="#" class="text-dark">Everything you need to know about templates</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <div class="card card-hover-rise br-sm">
                        <div class="card-image">
                            <img src="../assets/images/templates/furniture/blog-3.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-date bg-warning">
                                <span>22</span>
                                <span>05</span>
                                <span>2020</span>
                            </div>
                            <h5 class="card-title mt-2"><a href="#" class="text-dark">Everything you need to know about templates</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Intro -->

<section class="bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="rellax rellax-move text-left" data-rellax-speed="0.2">
                    <img src="../assets/images/templates/furniture/p1.png" alt="" class="img-fluid w-50" />
                </div>
                <div class="rellax rellax-move text-right" data-rellax-speed="-0.2">
                    <img src="../assets/images/templates/furniture/p2.png" alt="" class="img-fluid w-75 mt-n5" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-3 p-lg-5">
                    <div class="wow fadeInUp" data-wow-delay=".4s">
                        <h2 class="h1">A good place for<br>a good furniture.</h2>
                        <p class="lead">No matter what you're celebrating the Furniture Gift Account allows you total freedom and flexibility to choose whatever you like from the our range!</p>
                        <div class="pt-3"><a href="#" class="btn btn-secondary btn-rounded">Get your gift card!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gift section -->

<section class="bg-light">

    <h2 class="d-none">Categories</h2>

    <div class="mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="wow fadeIn" data-wow-delay=".2s">
                        <div class="mb-4">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="10 0 100 100">
                                    <path id="Path_5" data-name="Path 5" d="M429.4,363.394l-.022-1.987c0-.447.2-.6.514-.6a4.013,4.013,0,0,1,1.585.424l15.206,6.5a1.644,1.644,0,0,1,.692.759,1.62,1.62,0,0,1,.179.849,12.4,12.4,0,0,0-.2,2.612L429.4,363.394ZM465.46,339.77l-39.41.648.357,30.947,8.262-.469,11.968,5.85.447,7.748,1.608.022.357-7.681,44.612-3.885.893,6.23h1.407l.045-10.606-48.341,4.175-.156-.022-18.778-8.887h0l-.022-2.411a1.08,1.08,0,0,1,1.139-1.25,4.724,4.724,0,0,1,1.853.469l14.96,6.386a1.369,1.369,0,0,1,.268.112l.112.045a4.128,4.128,0,0,0,1.25.268,3.441,3.441,0,0,0,.692,0c.022,0,.045-.022.067-.022h0a3.958,3.958,0,0,1,1.139-.223l42.357-2.9-25.767-10.226-.022-.022a9.956,9.956,0,0,0,2.322,4.622A54.157,54.157,0,0,0,449,360.647c.067-.2.156-.424.2-.625a88.4,88.4,0,0,0-18.041.156,15.431,15.431,0,0,0-.849-8.909,90.65,90.65,0,0,0,21.034-.357,14.016,14.016,0,0,0-.6,1.317l14.67-.424V339.77Zm29.474,28.424-.022-2.255a1.02,1.02,0,0,0-.737-.982l-.268-.112-43.675,2.992a1.947,1.947,0,0,0-1.92,1.116,2.365,2.365,0,0,0-.134.424,3.462,3.462,0,0,1-.089.469,15.784,15.784,0,0,0-.112,2.21l46.957-3.863Zm-46.957.067c-.022-.022-.022-.045-.045-.067l-.067-.134a.916.916,0,0,0,.246.022c-.045.067-.089.112-.134.179Zm2.1-13.821a10.533,10.533,0,0,0-.246,3.238,15.709,15.709,0,0,0,.246-3.238Z" transform="translate(-411.05 -311.77)" fill-rule="evenodd"></path>
                                </svg>

                                <figcaption><strong>Bedroom</strong></figcaption>
                            </figure>
                            <ul class="list-group list-group-clean">
                                <li class="list-group-item"><a href="#">Beds</a></li>
                                <li class="list-group-item"><a href="#">Mattresses</a></li>
                                <li class="list-group-item"><a href="#">Wardrobes</a></li>
                                <li class="list-group-item"><a href="#">Headboards</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="wow fadeIn" data-wow-delay=".4s">
                        <div class="mb-4">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="15 0 100 100">
                                    <path id="Path_6" data-name="Path 6" d="M45.55,409.11H58.336V432.6H45.55V409.11ZM59,422.995H75.2c0-1.275-3.589-2.314-4.863-2.314H63.651c-1.294,0-4.648,1.039-4.648,2.314ZM63.69,409.11h6.687v10.354H63.69V409.11Zm11.923,0H89.831v16.2H75.613v-16.2Zm23.494,14.845v-3.863h.608v3.863Zm2.687,0v-3.863h.608v3.863ZM90.439,409.11h10.3v16.2h-10.3v-16.2Zm10.9,0h9.962v16.2h-9.962v-16.2Zm2.216,1.275h6.687v13.453h-6.687V410.385Zm-12,0h6.687v13.453H91.557V410.385ZM79.81,422.818H85.6v.608H79.81v-.608ZM45.55,434.192H58.434v15.159H45.55V434.192Zm52.341,11.08h5.785v.608H97.891v-.608Zm0-7.609h5.785v.608H97.891v-.608Zm-16.552,9.08h3.1v.608h-3.1v-.608Zm0-5.177h3.1v.608h-3.1v-.608Zm0-5.177h3.1V437h-3.1v-.608Zm-19.474-.353H72.633v.8H61.866v-.8Zm-2.844-1.843h16.14v15.159H59.023V434.192Zm16.748,0H89.831v4.746H75.77v-4.746Zm14.061,5.354v4.569H75.77v-4.569Zm0,5.177v4.628H75.77v-4.628Zm.608-10.531h20.846v7.315H90.439v-7.315Zm20.846,7.923v7.236H90.439v-7.236Zm-49.831-3.471H73.28v8.962H61.141v-8.962Zm11.2.608h-10.9v7.727h10.9v-7.727Zm-10.355.294h9.825v7.119H62.3v-7.119Zm-5.609.176v-3.863H57.3v3.863Zm0-8.766v-3.863H57.3v3.863Z" transform="translate(-28.55 -379.11)" fill-rule="evenodd"></path>
                                </svg>

                                <figcaption><strong>Kitchen & dining </strong></figcaption>
                            </figure>
                            <ul class="list-group list-group-clean">
                                <li class="list-group-item"><a href="#">Dining Tables</a></li>
                                <li class="list-group-item"><a href="#">Dining Chairs</a></li>
                                <li class="list-group-item"><a href="#">Sideborads</a></li>
                                <li class="list-group-item"><a href="#">Bar stools</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="wow fadeIn" data-wow-delay=".6s">
                        <div class="mb-4">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="10 0 100 100">
                                    <g id="icon-sofa" clip-path="url(#clip-icon-sofa)">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-721.341 237.246)">
                                            <path id="Path_2" data-name="Path 2" d="M80.466,355.425a3.516,3.516,0,0,1,.276.387,2.278,2.278,0,0,1,.313,1.178c0,.589,0,1.234-.037,1.841-.018.626-.055,1.234-.092,1.731-.018.313-.166.5.055.81a.7.7,0,0,0,.368.258c2.025,0,4,.018,5.892.018,5.947.018,10.919.037,13.221.037a9.449,9.449,0,0,0,2.872-.681,6.188,6.188,0,0,0,2.431-1.694c.092-.129.258-.331.405-.534a1.413,1.413,0,0,0,.221-.46c0-.018-.037,0-.074-.018h0a1.012,1.012,0,0,1-.166-.129h0a.385.385,0,0,1-.074-.11l-.368-.681a4.27,4.27,0,0,0-.644-.9,2.889,2.889,0,0,0-.755-.589,13.775,13.775,0,0,0-1.786-.773,6.511,6.511,0,0,0-1.86-.35c-3.02-.129-6.279-.129-9.538-.055s-6.518.2-9.556.313a2.049,2.049,0,0,0-1.013.368c-.037,0-.055.018-.092.037ZM48.317,368.3v-.313l-3.738.092v.2a2.222,2.222,0,0,0,.387.516,1.5,1.5,0,0,0,.534.35l.11.018h1.473a1.489,1.489,0,0,0,.755-.331,1.511,1.511,0,0,0,.479-.534Zm0-.5h0l62.329.074v.037l3.738.018v-.037h.718c.534,0,.994-.331,1.4-1.05a10.29,10.29,0,0,0,.976-3.406,12.693,12.693,0,0,0-.018-3.646,14.031,14.031,0,0,0-.865-3.167l-.018-.055h-.221a11.6,11.6,0,0,0-5.008.884,28.173,28.173,0,0,0-6.132,3.683l-.092.055a4.767,4.767,0,0,1-3.406,1.05h-1.234a2.383,2.383,0,0,1-.516,0c-2.486,0-7.181-.018-12.724-.037-8.765-.037-19.628-.074-27.1-.055a8.16,8.16,0,0,1-2.228-.331,11.428,11.428,0,0,1-2.78-1.289c-.35-.221-.387-.239-.479-.295a23.4,23.4,0,0,0-3.609-2.007,23.9,23.9,0,0,0-2.486-.847c-.957-.276-2.025-.534-3.149-.773a6.878,6.878,0,0,0-.792-.074,5.149,5.149,0,0,1-1.676-.276c-.092.239-.221.534-.35.829h0a11.421,11.421,0,0,0-.5,1.215,13.65,13.65,0,0,0-.387,3.9,10.67,10.67,0,0,0,.718,3.517,6.432,6.432,0,0,0,.847,1.639,1.629,1.629,0,0,0,1.289.552h0l3.756-.111Zm62.329.295v.2h0a2.378,2.378,0,0,0,.5.608,1.39,1.39,0,0,0,.737.295h1.473l.11-.018a1.789,1.789,0,0,0,.534-.35,2.221,2.221,0,0,0,.387-.516h0v-.2l-3.738-.018Zm5.874-12.079a1.028,1.028,0,0,0-.147-.092c-.626-.387-1.252-.81-1.86-1.252-.552-.387-1.1-.81-1.639-1.234-.055.055-.092.11-.147.166a7.761,7.761,0,0,1-2.136,1.86c-.663.424-1.123.7-1.547.957a19.614,19.614,0,0,0-2.265,1.528.466.466,0,0,1,.166.368h0a1.616,1.616,0,0,1-.313.755,6.324,6.324,0,0,1-.442.571,1.827,1.827,0,0,1-.184.2,25.9,25.9,0,0,1,5.119-2.928,12.14,12.14,0,0,1,5.248-.921h.055a.2.2,0,0,0,.092.018Zm-3.885-3.13a6.513,6.513,0,0,0,.681-1.086,15.735,15.735,0,0,0,.663-1.528l-.037.018-.055.018a4.951,4.951,0,0,1-1.565.221,3.486,3.486,0,0,1-.737-.147,2.561,2.561,0,0,1-.663-.276.866.866,0,0,0-.35-.055,1.385,1.385,0,0,1-.479-.092,2.364,2.364,0,0,1-.276-.184,1.026,1.026,0,0,0-.35-.166.273.273,0,0,0-.129-.018.474.474,0,0,1-.424-.184,3.259,3.259,0,0,0-.792-.718,2.077,2.077,0,0,0-.847-.35c-.313-.055-.331-.129-.35-.331,0-.037-.018-.129-.387-.46-.129-.11-.276-.239-.405-.368s-.258-.239-.368-.368c-.037-.037-.055.092-.221.2h0l-.074.055a.971.971,0,0,1-.405.147.69.69,0,0,1-.2.018c-.055.35-.166.755-.276,1.215a16.026,16.026,0,0,0-.424,2.081,14.985,14.985,0,0,0,.018,2.744c.018.295.037.571.055.865a2.035,2.035,0,0,1-.037.681,1.539,1.539,0,0,1-.147.368,4.857,4.857,0,0,1,.534.276,2.983,2.983,0,0,1,.9.7,5.455,5.455,0,0,1,.737,1.013l.221.424a20.549,20.549,0,0,1,2.338-1.565c.424-.239.884-.534,1.528-.939a7.045,7.045,0,0,0,2.007-1.749,1.123,1.123,0,0,1,.313-.46Zm-8.341-5.671.055-.35a4.32,4.32,0,0,1,.276-.865c.11-.239.239-.46.368-.681a2.569,2.569,0,0,0-.81.037c-.129.018-.239.037-.35.055a5.016,5.016,0,0,1-1.252.11h0l-.331-.018h0c-.516-.018-1.013-.018-1.528-.037-.792-.018-1.584-.018-2.431-.074a7.963,7.963,0,0,1-2.154-.5,11.275,11.275,0,0,0-1.123-.331h0l-.147-.037c-.589-.147-.957-.221-1.031.018a4.166,4.166,0,0,0-.018,2.025,7.536,7.536,0,0,1,.092,1.694,20.062,20.062,0,0,1-.387,2.1,11.015,11.015,0,0,1-.7,1.989,7.316,7.316,0,0,1-.368.644,5.861,5.861,0,0,0-.442.81.671.671,0,0,0-.037.276v.037c2.983-.055,5.966-.037,8.728.074a7.316,7.316,0,0,1,2.007.387c.276.092.552.2.829.313a.626.626,0,0,0,.129-.276,1.643,1.643,0,0,0,.018-.534c0-.239-.037-.534-.055-.829a16.2,16.2,0,0,1-.018-2.854,16.54,16.54,0,0,1,.442-2.154c.092-.368.166-.737.239-1.031Zm-1.915-2.265a1.05,1.05,0,0,0,.018-.239,6.974,6.974,0,0,1,.092-.718,5.917,5.917,0,0,1,.276-.81h0a4.468,4.468,0,0,0,.184-.516c.037-.147.055-.295.092-.442a11.546,11.546,0,0,1,.387-1.676c-.055.018-.11.037-.184.055-.35.092-.46.129-.589.166-.829.221-1.639.442-2.523.608-.442.074-.921.2-1.418.313-.424.11-.865.221-1.344.313a20.377,20.377,0,0,1-2.044.313c-.571.055-1.142.074-1.657.074-.018.055-.037.129-.055.2a5.121,5.121,0,0,0-.221,1.178,2.748,2.748,0,0,0,.037.387c.295-.424.792-.313,1.565-.129l.147.037h0c.387.092.773.221,1.16.331a7.2,7.2,0,0,0,2.007.46c.865.037,1.639.055,2.412.074.571-.018,1.123,0,1.657.018Zm-9.17-2.909c0-.11.018-.239.018-.35a2.983,2.983,0,0,1,.018-.405c0-.129,0-.221-.037-.239h0c-.037-.018-.147,0-.331.074a10.1,10.1,0,0,1-2.725.516l-.387.037a6.691,6.691,0,0,0-1.252.276,7.214,7.214,0,0,1-2.523.35.236.236,0,0,1-.129-.018,12.048,12.048,0,0,0-2.8.2c-.516.055-1.013.11-1.528.129-.405.018-.81.037-1.234.037-.018.516-.037,1.1-.074,1.694a30.28,30.28,0,0,0-.055,3.793,11.054,11.054,0,0,1-.092,3.443,10.983,10.983,0,0,0-.166,2.062,2.06,2.06,0,0,0,.166.718,2.886,2.886,0,0,1,.147.571h0a2.454,2.454,0,0,1,1.271-.442c3.02-.129,6.3-.258,9.575-.313h.295v-.037a1.373,1.373,0,0,1,.074-.479,5.534,5.534,0,0,1,.5-.921c.129-.2.239-.387.35-.589a9.829,9.829,0,0,0,.663-1.878,15.887,15.887,0,0,0,.368-2.044,6.4,6.4,0,0,0-.092-1.547,10.146,10.146,0,0,1-.11-1.05c-.037-.313-.092-.571-.147-.829a4.974,4.974,0,0,1-.147-1.05,5.124,5.124,0,0,1,.239-1.326.922.922,0,0,0,.147-.387Zm-13.423.313a.785.785,0,0,0-.092-.442c-.055-.074-.166-.092-.331-.092-.773.018-1.455-.037-2.118-.074a15.659,15.659,0,0,0-2.633-.018.361.361,0,0,0-.184.055c-.239.092-.442.166-1.455-.2a1.443,1.443,0,0,0-.626-.037,5.381,5.381,0,0,1-.608.037,3.778,3.778,0,0,1-.81-.11,3.532,3.532,0,0,0-.552-.11c-.2-.018-.387-.037-.571-.055a21.11,21.11,0,0,1-4.29-.755.913.913,0,0,0-.313-.037.347.347,0,0,0-.147.037h-.018v.018h0a9.272,9.272,0,0,0,.147,1.123c.11.534.46.939.424,1.271a3,3,0,0,1-.2.773,2.666,2.666,0,0,1,.11.35,10.251,10.251,0,0,1,.055,1.418,16.647,16.647,0,0,0,.074,1.915c.074.516.147,1.068.239,1.6.037.239.074.479.129.81h0l.2,1.1c.147.755.276,1.51.424,2.283a1.926,1.926,0,0,1,.018.792c1.123.018,2.228.018,3.3.037,3.13.018,6,.037,8.8.331a1.78,1.78,0,0,1,.884.313.341.341,0,0,1-.037-.129,2.42,2.42,0,0,1-.184-.884,11.774,11.774,0,0,1,.166-2.154,10.818,10.818,0,0,0,.074-3.3,31.431,31.431,0,0,1,.055-3.867c.037-.755.055-1.436.074-2.007Zm-14.731.589a6.649,6.649,0,0,1-1.326-.221c-.147-.037-.313-.074-.534-.129a4.042,4.042,0,0,0-.552-.074c-.184-.018-.387-.018-.534-.018a9.565,9.565,0,0,1-1.749-.276c-.2-.037-.387-.074-.5-.092a31.305,31.305,0,0,1-4.161-1.1l-1.6-.5a.166.166,0,0,0-.092-.018c.037.147.074.387.147.681.074.313.166.7.295,1.123.055.184.092.313.129.424a10.3,10.3,0,0,1,.276,1.031,4.317,4.317,0,0,1,.865.331,4.533,4.533,0,0,0,1.86.534l1.178-.074a8.216,8.216,0,0,1,1.068.055,7.709,7.709,0,0,0,1.215.055,3.885,3.885,0,0,0,.939-.221,3.043,3.043,0,0,0,.847-.424,4.409,4.409,0,0,1,.829-.424,4.906,4.906,0,0,1,.9-.184h0a2.232,2.232,0,0,1,.331-.018,1.273,1.273,0,0,0,.166-.46Zm-10.348,1.326a5.431,5.431,0,0,1,.589,1.142,12.606,12.606,0,0,1,.921,3.572c.037.424.074.81.129,1.2a19.082,19.082,0,0,1,.166,3.554,2.755,2.755,0,0,0,0,.681.437.437,0,0,0,.166.276.517.517,0,0,0,.35.129,1.2,1.2,0,0,0,.479-.11,6.472,6.472,0,0,1,1.952-.552,15.785,15.785,0,0,1,2.688-.166c.442.018.921.018,1.4.018.81,0,1.62,0,2.265.055.147.018.239-.037.258-.129a1.5,1.5,0,0,0,0-.644c-.147-.755-.276-1.51-.423-2.283l-.2-1.1h0c-.037-.221-.092-.516-.129-.81-.092-.534-.184-1.068-.239-1.62-.074-.626-.074-1.344-.092-1.97a8.859,8.859,0,0,0-.055-1.326c-.037-.221-.147-.2-.331-.2h0a3.391,3.391,0,0,0-.773.147,2.49,2.49,0,0,0-.7.35,3.536,3.536,0,0,1-.994.479,6.454,6.454,0,0,1-1.031.239,9.224,9.224,0,0,1-1.344-.055,7.115,7.115,0,0,0-.976-.055l-1.178.074a4.79,4.79,0,0,1-2.118-.571,3.758,3.758,0,0,0-.773-.313Zm.773,3.554a3.983,3.983,0,0,0-.46.074c-.018,0-.055.018-.074.018l.442.331c.074.055.147.129.221.184a2.367,2.367,0,0,0-.074-.35c-.018-.092-.037-.184-.055-.258Zm-1.307.239a5.951,5.951,0,0,0-1.142-.387,7.807,7.807,0,0,0-1.418-.184.387.387,0,0,1-.368-.2c-.055.037-.11.092-.2.166a3.437,3.437,0,0,0-.5.681,1.206,1.206,0,0,1-.46.405,2.21,2.21,0,0,0-.313.2.56.56,0,0,0-.147.147,2.737,2.737,0,0,1-.516.424,9.237,9.237,0,0,1-1.473.7,10.118,10.118,0,0,1-1.657.5,1.052,1.052,0,0,0-.276.11h.018c.018,0,.037.018.055.018a.524.524,0,0,1,.368.239.991.991,0,0,1,.147.405,2.923,2.923,0,0,0,.129.368,3.9,3.9,0,0,0,.755,1.013,12.008,12.008,0,0,0,1.768,1.491,27.158,27.158,0,0,0,2.5,1.491,21.222,21.222,0,0,1,2.854,1.749,5.246,5.246,0,0,1,1.031-1.455,4.666,4.666,0,0,1,1.031-.792c-.018,0-.018-.018-.037-.018a.9.9,0,0,1-.35-.608,3.915,3.915,0,0,1,0-.81,19.913,19.913,0,0,0-.166-3.462c-.037-.313-.074-.644-.092-.939a4.437,4.437,0,0,0-.681-.626,9.384,9.384,0,0,0-.865-.626Zm-8.175,4c-.276.276-.608.608-.957.976-.442.479-.921,1.031-1.4,1.6h0c-.092.11-.166.2-.258.295h0c-.092.092-.166.184-.276.295a.406.406,0,0,0-.11.368h0c.018.258.9.313,1.639.368a5.2,5.2,0,0,1,.865.092c1.142.239,2.228.5,3.185.773a25.514,25.514,0,0,1,2.559.865,25.307,25.307,0,0,1,3.7,2.044l.387.239c-.35-.276-.7-.571-1.031-.884a.739.739,0,0,1-.184-.865c.037-.11.055-.221-.037-.295a22.584,22.584,0,0,0-2.928-1.823,26.292,26.292,0,0,1-2.541-1.51,12.3,12.3,0,0,1-1.86-1.565,5.2,5.2,0,0,1-.755-.976Zm68.074-1.841Zm-59.364,7.6a.943.943,0,0,1-.018.552.309.309,0,0,0,.037.331,12.736,12.736,0,0,0,2.173,1.676,11.946,11.946,0,0,0,2.412,1.16,6.764,6.764,0,0,0,.847.055c5.285-.018,12.282,0,19.021.037a1.561,1.561,0,0,0,.865-.387,1.051,1.051,0,0,0,.368-.7c.037-.516.055-1.123.092-1.731.018-.626.037-1.252.037-1.823a1.862,1.862,0,0,0-.239-.9,3.378,3.378,0,0,0-.5-.608c-.055-.037-.11-.092-.166-.129a1.491,1.491,0,0,0-.921-.442c-2.762-.295-5.634-.313-8.746-.331-1.178,0-2.394-.018-3.664-.037a.84.84,0,0,1-.5.074c-.626-.055-1.418-.055-2.228-.055-.479,0-.976,0-1.418-.018a14.666,14.666,0,0,0-2.6.166,6.324,6.324,0,0,0-1.786.5,1.585,1.585,0,0,1-.552.166,3.848,3.848,0,0,0-1.473.957,4.248,4.248,0,0,0-1.05,1.491Zm25.778,3.738-.055.055h.092c-.018-.018-.037-.037-.037-.055Z" transform="translate(691.307 -542.31)" fill-rule="evenodd"></path>
                                        </g>
                                    </g>
                                </svg>

                                <figcaption><strong>Living room</strong></figcaption>
                            </figure>
                            <ul class="list-group list-group-clean">
                                <li class="list-group-item"><a href="#">Coffe tables</a></li>
                                <li class="list-group-item"><a href="#">TV Stands</a></li>
                                <li class="list-group-item"><a href="#">Media storage</a></li>
                                <li class="list-group-item"><a href="#">Sofas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="wow fadeIn" data-wow-delay=".8s">
                        <div class="mb-4">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="0 0 100 100">
                                    <g id="icon-bathroom" clip-path="url(#clip-icon-bathroom)">
                                        <g id="Group_3" data-name="Group 3" transform="translate(-15.026 -2.622)">
                                            <path id="Path_22" data-name="Path 22" d="M15.026-4.378,25,0V57l-9.974,4.034Z" transform="translate(28 23)"></path>
                                            <path id="Path_23" data-name="Path 23" d="M0,0,32.59-3.712V64.1L0,57Z" transform="translate(54 23)"></path>
                                            <circle id="Ellipse_1" data-name="Ellipse 1" cx="5" cy="5" r="5" transform="translate(65 32)" fill="#fff"></circle>
                                        </g>
                                    </g>
                                </svg>
                                <figcaption><strong>Bathroom</strong></figcaption>
                            </figure>
                            <ul class="list-group list-group-clean">
                                <li class="list-group-item"><a href="#">Cabinets</a></li>
                                <li class="list-group-item"><a href="#">Vanity units</a></li>
                                <li class="list-group-item"><a href="#">Mirrors</a></li>
                                <li class="list-group-item"><a href="#">Chairs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 pt-5">
                    <div class="wow fadeIn text-center" data-wow-delay=".8s">
                        <a href="#" class="btn btn-rounded btn-warning transform-bottom-50">Explore all categories</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Gallery -->

<section class="p-0">
    <div class="wow fadeIn" data-wow-delay=".2s">
        <div class="row no-gutters">
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-1.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-2.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-3.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-4.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-5.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
            <div class="col-6 col-md-2">
                <figure class="figure figure-zoom mb-0 d-block">
                    <div class="figure-img-wrapper mb-0">
                        <img src="../assets/images/templates/furniture/square-6.jpg" class="figure-img img-fluid" alt="" height="300">
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<footer class="bg-dark text-white pt-0">

    <!-- Footer CTA -->

    <div class="bg-warning">
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-between align-items-center text-center text-md-left">
                    <div class="col-md-3">
                        <div class="wow fadeInUp" data-wow-delay=".1s">
                            <h3>FURNITURE</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-lg-right pt-4 pt-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".3s">
                            <a href="#" class="btn btn-rounded btn-outline-light px-5"><i class="icon icon-phone-handset"></i> Call us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer links -->

    <div class="py-5">
        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <div class="h5 mb-4 text-uppercase">Browse by</div>
                        <ul class="list-group list-group-clean">
                            <li class="list-group-item"><a href="#">Products</a></li>
                            <li class="list-group-item"><a href="#">Brand</a></li>
                            <li class="list-group-item"><a href="#">Manufacturer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <div class="h5 mb-4 text-uppercase">Resources</div>
                        <ul class="list-group list-group-clean">
                            <li class="list-group-item"><a href="#">Design</a></li>
                            <li class="list-group-item"><a href="#">Projects</a></li>
                            <li class="list-group-item"><a href="#">Sales</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <div class="h5 mb-4 text-uppercase">Company</div>
                        <ul class="list-group list-group-clean">
                            <li class="list-group-item"><a href="#">About</a></li>
                            <li class="list-group-item"><a href="#">News</a></li>
                            <li class="list-group-item"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-md-right text-center">
                        <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-circle btn-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer copyright -->

    <div class="clearfix text-center">
        <div class="wow fadeInUp" data-wow-delay=".3s">
            <div class="container">
                <p class="text-muted">All rights reserved 2020 © Reveal</p>
            </div>
        </div>
    </div>

</footer>


<!-- Vendor Scripts -->

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
