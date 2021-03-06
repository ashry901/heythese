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

<nav class="navbar navbar-sticky fixed-top navbar-expand-lg py-2">
    <div class="container">

        <a class="navbar-brand text-dark" href="#">
            <i class="icon icon-layers"></i>
            <strong>Reveal</strong>
        </a>

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

            <ul class="navbar-nav ml-auto align-items-lg-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('main') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown px-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-shop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-shop">
                        <a class="dropdown-item" href="#">Shop</a>
                        <a class="dropdown-item" href="#">Product</a>
                        <a class="dropdown-item" href="#">Checkout</a>
                    </div>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Man's</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Woman's</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="#">Kid's</a>
                </li>
                <li class="nav-item d-none d-lg-inline ml-lg-5">
                    <a href="#" class="nav-link toggle-show" data-show="loginComponent">
                        <span class="icon icon-user"></span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-inline">
                    <a href="#" class="nav-link toggle-show d-flex" data-show="cartComponent">
                        <div class="px-2 py-1">
                            <span class="icon icon-cart"></span>
                            <sup>3</sup>
                        </div>
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
                            <button type="submit" class="btn btn-sm btn-block btn-dark btn-rounded px-5">Login</button>

                            <div class="divider-separator">
                                <span>Or</span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-block btn-rounded btn-google px-3">Login with Google</button>
                                <button type="submit" class="btn btn-sm btn-block btn-rounded btn-facebook px-3">Login with Facebook</button>
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

                <li class="list-group-item p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/clothing/shoe-1.jpg" alt="" class="img-fluid br-sm" />
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

                <li class="list-group-item p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/clothing/shoe-1.jpg" alt="" class="img-fluid br-sm" />
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

                <li class="list-group-item p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-2 mb-2 mb-lg-0">
                            <img src="../assets/images/templates/clothing/shoe-1.jpg" alt="" class="img-fluid br-sm" />
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

                <li class="list-group-item p-4 bg-light text-muted">
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

                <li class="list-group-item p-4 d-flex justify-content-between">
                    <strong>Total (USD)</strong>
                    <strong>$ 1290,00</strong>
                </li>

            </ul>

            <!-- Sidebar Buttons -->

            <div class="row justify-content-center pt-3 m-0">
                <div class="col-8">
                    <button type="submit" class="btn btn-rounded btn-sm btn-block btn-dark px-5">Go to checkout</button>

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
                    <button type="submit" class="btn btn-sm btn-block btn-dark btn-rounded px-5">Search the site</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Header -->

<section class="section bg-white">
    <div class="container">
        <header class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center pt-5">
                <div class="col-lg-8">
                    <label class="pre-label mb-0">Shop now</label>
                    <h2 class="display-2">
                        <strong>New collection is here!</strong> Get your 40% discount
                    </h2>
                </div>
            </div>
        </header>
    </div>
</section>

<!-- Top columns -->

<section class="bg-white p-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="box box-image box-hover-fall br-sm"
                         style="background-image:url(../assets/images/templates//clothing/shop-1.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>Woman's</strong>
                            </h2>
                            <p><span><a href="#" class="text-muted">New arrivals</a></span></p>
                            <p><span><a href="#" class="text-muted">Discount sales</a></span></p>
                            <p><span><a href="#" class="text-muted">More</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <div class="box box-image box-hover-fall br-sm" style="background-image:url(../assets/images/templates//clothing/shop-2.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>Man's</strong>
                            </h2>
                            <p><span><a href="#" class="text-muted">New arrivals</a></span></p>
                            <p><span><a href="#" class="text-muted">Discount sales</a></span></p>
                            <p><span><a href="#" class="text-muted">More</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <div class="box box-image box-hover-fall br-sm" style="background-image:url(../assets/images/templates//clothing/shop-3.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>Kid's</strong>
                            </h2>
                            <p><span><a href="#" class="text-muted">New arrivals</a></span></p>
                            <p><span><a href="#" class="text-muted">Discount sales</a></span></p>
                            <p><span><a href="#" class="text-muted">More</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sport collections -->

<section class="bg-white">
    <div class="container">

        <header class="wow fadeInUp" data-wow-delay=".2s">
            <h2 class="display-4">Explore <strong>sport</strong> collections</h2>
        </header>

        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="row">
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-outline-dark">Outdoor</a>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-outline-dark">Training</a>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-outline-dark">Running</a>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-outline-dark">Fintess</a>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-outline-dark">Wintersport</a>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <a href="#" class="btn btn-rounded btn-block btn-dark text-nowrap">All categories</a>
                </div>
            </div>
        </div>

    </div>
</section>

<hr class="m-0">

<!-- Popular categories -->

<section class="bg-white">
    <div class="container">

        <header class="wow fadeInUp" data-wow-delay=".2s">
            <h2 class="display-4">Popular <strong>categories</strong></h2>
        </header>

        <div class="row">

            <div class="col-md-6 mb-4">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="box box-image box-hover-pull br-sm"
                       style="background-image:url(../assets/images/templates//clothing/collection-1.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <div class="display-3"><strong>Jackets</strong> </div>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit soluta fugit earum optio</small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="#" class="box box-image box-hover-pull br-sm"
                       style="background-image:url(../assets/images/templates//clothing/collection-2.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-3"><strong>Bags</strong></span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit soluta fugit earum optio</small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="#" class="box box-image box-hover-pull br-sm"
                       style="background-image:url(../assets/images/templates//clothing/ladie-1.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4"><strong>Outdoor</strong></span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit</small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="wow fadeInUp" data-wow-delay=".9s">
                    <a href="#" class="box box-image box-hover-pull br-sm" style="background-image:url(../assets/images/templates//clothing/ladie-2.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4"><strong>Winterski</strong></span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit</small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="wow fadeInUp" data-wow-delay=".9s">
                    <a href="#" class="box box-image box-hover-pull br-sm" style="background-image:url(../assets/images/templates//clothing/ladie-3.jpg)">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4"><strong>Sport</strong></span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit</small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<hr class="m-0">

<!-- Sale black friday -->

<section class="bg-white">
    <div class="container">

        <header class="wow fadeInUp" data-wow-delay=".2s">
            <h2 class="display-4">Sale <strong>black friday</strong> 70% off</h2>
        </header>

        <div class="row mx-n1">
            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".0s">
                    <div class="card card-fill">
                        <div class="card-image">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/shoe-1.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/shoe-1.jpg" data-img-hover="../assets/images/templates//clothing/shoe-1a.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Coretta
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$490</span>
                                        <s>$875</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <div class="card card-fill">
                        <div class="card-image">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/shoe-2.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/shoe-2.jpg" data-img-hover="../assets/images/templates//clothing/shoe-2a.jpg" alt="...">
                            </a>
                            <small class="card-badge badge badge-danger text-uppercase mr-2">50%</small>
                        </div>
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Tonya
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$419</span>
                                        <s>$957</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="card card-fill">
                        <div class="card-image">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/shoe-3.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/shoe-3.jpg" data-img-hover="../assets/images/templates//clothing/shoe-3a.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Raven
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$502</span>
                                        <s>$851</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card card-fill">
                        <div class="card-image">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/shoe-4.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/shoe-4.jpg" data-img-hover="../assets/images/templates//clothing/shoe-4a.jpg" alt="...">
                            </a>
                            <small class="card-badge badge badge-warning text-uppercase mr-2">Last one</small>
                        </div>
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Mufi
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$584</span>
                                        <s>$838</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-right pt-4">
            <a href="#" class="link link-main link-dark">View collection</a>
        </div>

    </div>

</section>

<!-- Banner winter is beautiful -->

<section class="bg-dark cover" style="background-image: url(../assets/images/templates//clothing/gallery-5.jpg);">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <h2 class="display-4">Winter is <strong>beautiful</strong></h2>
                <p>Jackets, shoes and accessories for all weathers.</p>
                <a href="#" class="btn btn-rounded btn-outline-dark">View collection</a>
            </div>
        </div>
    </div>
</section>

<!-- Popular woman&#x27;s products -->

<section class="bg-white">
    <div class="container">

        <header class="wow fadeInUp" data-wow-delay=".2s">
            <h2 class="display-4">Popular <strong>woman's</strong> products</h2>
        </header>

        <div class="row mx-n1">
            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".0s">
                    <div class="card card-fill">
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Coretta
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$490</span>
                                        <s>$875</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-image pb-4">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/cloth-1.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/cloth-1.jpg" data-img-hover="../assets/images/templates//clothing/cloth-1a.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <div class="card card-fill">
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Tonya
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$419</span>
                                        <s>$957</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-image pb-4">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/cloth-2.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/cloth-2.jpg" data-img-hover="../assets/images/templates//clothing/cloth-2a.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="card card-fill">
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Raven
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$502</span>
                                        <s>$851</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-image pb-4">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/cloth-3.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/cloth-3.jpg" data-img-hover="../assets/images/templates//clothing/cloth-3a.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3 p-1">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card card-fill">
                        <div class="card-body p-3 p-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="card-title mb-1 h5">
                                        <a href="product.html" class="text-dark">
                                            Mufi
                                        </a>
                                    </h2>
                                    <small class="pre-label text-muted">
                                        <span>$584</span>
                                        <s>$838</s>
                                    </small>
                                </div>
                                <div>
                                    <a href="product.html" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-image pb-4">
                            <a href="#">
                                <img src="../assets/images/templates//clothing/cloth-4.jpg" class="card-img-top img-hover" data-img="../assets/images/templates//clothing/cloth-4.jpg" data-img-hover="../assets/images/templates//clothing/cloth-4a.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-right pt-4">
            <a href="#" class="link link-main link-dark">View collection</a>
        </div>
    </div>

</section>

<!-- Footer banner -->

<section class="p-0">
    <div class="position-relative">
        <div class="cover cover-overlay" style="background-image: url(../assets/images/templates//clothing/gallery-1.jpg);"></div>
        <div class="py-8 text-white">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <h2 class="display-4">Challenge the <strong>darkness</strong></h2>
                        <p>Lace up your shoes and go out on the trail. Hiking shoes offer a great balance between weight, water protection, blister prevention, comfort, durability, and traction for those who need stable and protective trail footwear</p>
                        <a href="#" class="btn btn-rounded btn-outline-light">View collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clothing categories -->

<section class="bg-light">
    <div class="container">

        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="row py-4">
                <div class="col-lg-3 mb-4 mb-lg">
                    <h2 class="mb-0">Clothing</h2>
                    <p><a href="#" class="link link-main link-dark">Explore all categories</a></p>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Jackets</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Coats</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">West</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Pullover</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Sweatshirts</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Hoodies</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Wheelchairs</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-sm btn-outline-dark text-nowrap">Long sleeve shirts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wow fadeInUp" data-wow-delay=".6s">
            <hr>
            <div class="row py-4">
                <div class="col-lg-3 mb-4 mb-lg">
                    <h2 class="mb-0">Shoes</h2>
                    <p><a href="#" class="link link-main link-dark">Explore all categories</a></p>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Running shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Sneaker</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Outdoor shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Soccer shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Indoor shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Bathing shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">tennis shoes</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Cycling shoes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wow fadeInUp" data-wow-delay=".8s">
            <hr>
            <div class="row py-4">
                <div class="col-lg-3 mb-4 mb-lg">
                    <h2 class="mb-0">Equipment</h2>
                    <p><a href="#" class="link link-main link-dark">Explore all categories</a></p>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Hiking</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Fitness</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Camping gear</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Running gear</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Soccer</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Cycling</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Water sports</a>
                        </div>
                        <div class="col col-lg-3 mb-3">
                            <a href="#" class="btn btn-rounded btn-block btn-outline-dark text-nowrap">Tennis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Newsletter -->

<section class="bg-white">
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
                                        <button type="submit" class="btn btn-outline-dark btn-rounded btn-block">Subscribe</button>
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

<hr class="m-0">

<!-- Footer -->

<footer class="bg-white">
    <div class="container text-center">
        <div class="wow fadeIn" data-wow-delay=".4s">
            <p><i class="icon icon-layer display-4"></i></p>
            <ul class="list-group list-group-horizontal list-group-clean justify-content-center">
                <li class="list-group-item pr-3"><a href="#">Our store</a></li>
                <li class="list-group-item pr-3"><a href="#">Shop</a></li>
                <li class="list-group-item pr-3"><a href="#">Categories</a></li>
                <li class="list-group-item pr-3"><a href="#">Info</a></li>
                <li class="list-group-item pr-3"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="wow fadeIn" data-wow-delay=".8s">
            <p class="text-muted">
                <small>All rights reserved 2020 ?? Reveal</small>
            </p>
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
