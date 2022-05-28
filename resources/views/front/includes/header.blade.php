<nav class="navbar navbar-expand-lg navbar-sticky navbar-dark">
    <div class="container">

        <!-- Logo -->

        <a class="navbar-brand mr-1" href="{{ route('main') }}">
            <img src="{{asset('ashry/front/assets/images/logo/logompns3-removebg.png')}}"
                 alt="..." width="70">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-sidebar" id="mainNavbar">

            <!-- Mobile search -->
            <div class="d-block d-lg-none">
                <div class="p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        {{--<img src="{{asset('ashry/front/assets/svg/reveal-symbol.svg')}}" alt="...">--}}
                        <img src="{{asset('ashry/front/assets/images/logo/logompns3-removebg.png')}}"
                             alt="..." width="100">
                        <button class="btn p-0" type="button" data-toggle="collapse"
                                data-target="#mainNavbar"
                                aria-controls="mainNavbar" aria-expanded="false"
                                aria-label="Toggle navigation">
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

            <!-- Navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main') }}">Home</a>
                </li>


                <!-- Mega dropdown -->
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle"
                       href="#" id="ecommerce"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Products</a>

                    <div class="dropdown-menu w-100 bg-white border-top"
                         aria-labelledby="ecommerce">
                        <div class="py-3 px-lg-4 py-lg-5">
                            <div class="container d-block p-0">
                                <div class="row">

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Login & register</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment</p>
                                            <span class="label">Payment options</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Receipt</p>
                                            <span class="label">Receipt &amp; email confirmation</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum is
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Simple preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Flat preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Account
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Profile page</p>
                                            <span class="label">User profile</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment options</p>
                                            <span class="label">Set default payemnt</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Edit alerts</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Saved products</span>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Single dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="support"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Support
                    </a>
                    <div class="dropdown-menu" aria-labelledby="support">
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="px-1 text-primary">
                                        <i class="icon icon-book"></i>
                                    </span>
                                </div>
                                <div>
                                    <div class="px-2">
                                        <p>Lorem Ipsum</p>
                                        <span class="label">Lorem Ipsum</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#" >
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="px-1 text-danger">
                                        <i class="icon icon-heart-pulse"></i>
                                    </span>
                                </div>
                                <div>
                                    <div class="px-2">
                                        <p>Lorem Ipsum</p>
                                        <span class="label">Lorem Ipsum</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item"
                           href="#" >
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="px-1 text-dark">
                                        <i class="icon icon-cart"></i>
                                    </span>
                                </div>
                                <div>
                                    <div class="px-2">
                                        <p>Lorem Ipsum</p>
                                        <span class="label">Lorem Ipsum</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <!-- Mega dropdown -->
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle"
                       href="#" id="ecommerce"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Use cases
                    </a>

                    <div class="dropdown-menu w-100 bg-white border-top"
                         aria-labelledby="ecommerce">
                        <div class="py-3 px-lg-4 py-lg-5">
                            <div class="container d-block p-0">
                                <div class="row">

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Login & register</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment</p>
                                            <span class="label">Payment options</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Receipt</p>
                                            <span class="label">Receipt &amp; email confirmation</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum is
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Simple preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Flat preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Account
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Profile page</p>
                                            <span class="label">User profile</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment options</p>
                                            <span class="label">Set default payemnt</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Edit alerts</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Saved products</span>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pricing') }}">
                        Pricing
                    </a>
                </li>

                <!-- Mega dropdown -->
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle"
                       href="#" id="ecommerce"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Resources
                    </a>

                    <div class="dropdown-menu w-100 bg-white border-top"
                         aria-labelledby="ecommerce">
                        <div class="py-3 px-lg-4 py-lg-5">
                            <div class="container d-block p-0">
                                <div class="row">

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Features
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Login & register</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment</p>
                                            <span class="label">Payment options</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Receipt</p>
                                            <span class="label">Receipt &amp; email confirmation</span>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Lorem Ipsum is
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Simple preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is <span class='badge badge-danger'>New</span></p>
                                            <span class="label">Flat preview</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                        </a>

                                    </div>

                                    <div class="col-lg-3">

                                        <div class="pre-label p-2">
                                            Account
                                        </div>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Profile page</p>
                                            <span class="label">User profile</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Payment options</p>
                                            <span class="label">Set default payemnt</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Edit alerts</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Lorem Ipsum is</span>
                                        </a>

                                        <a class="dropdown-item rounded-sm"
                                           href="#">
                                            <p>Lorem Ipsum is</p>
                                            <span class="label">Saved products</span>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Links mobile -->
                {{--
                <li class="nav-item d-block d-lg-none">
                    <hr>
                    <a href="#" class="nav-link"><small>Documentation</small></a>
                    <a href="#" class="nav-link"><small>Helpdesk</small></a>
                    <a href="#" class="nav-link"><small>About us</small></a>
                    <hr>
                    <div class="row row-sm">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-sm btn-outline-secondary">
                                <i class="icon icon-map"></i>
                                <span>Find store</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-sm btn-outline-secondary">
                                <i class="icon icon-phone-handset"></i>
                                <span>Call us</span>
                            </a>
                        </div>
                    </div>

                </li>
                --}}

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="pages"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="pages">

                            <a class="dropdown-item"
                               href="{{ route('profile.profile-register') }}">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="px-1">
                                            <i class="icon icon-user"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="px-2">
                                            <p>Profile</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="px-1">
                                            <i class="icon icon-exit"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="px-2">
                                            <p>{{ __('Logout') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}"
                                  method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>

        <!-- Navbar toggler -->
        <div class="d-flex align-items-center">
            <a class="btn btn-sm btn-primary btn-rounded ml-lg-4 px-3"
               href="#">
                Get Started
            </a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="icon icon-menu"></span>
            </button>
        </div>

    </div>
</nav>

