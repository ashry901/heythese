@extends('layouts.site')
@section('title', 'profile-payment')

@section('style')



@stop

@section('content')

<!-- Breadcrumbs -->
<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">

                    <small class="pre-label d-none d-lg-block">Payment Options</small>
                </div>
                <div class="col-lg-4 text-lg-right pt-2 pt-lg-0">
                    <ol class="breadcrumb breadcrumb-light justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- SVG Divider -->
<section class="divider bg-dark">
    <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</section>

<!-- Payment section -->
<section class="pt-0">
    <div class="container">
        <div class="row">

            <!-- Menu sidebar -->
            <div class="col-lg-3">
                <div class="br-sm pr-lg-4 mt-xl-n6">

                    <!-- Profile menu header -->
                    <div class="py-3 py-lg-4">
                        <div class="row align-items-center justify-content-center no-gutters text-lg-center">
                            <div class="col-9 col-lg-12">
                                <div class="d-flex flex-lg-column align-items-center">
                                    <div class="pr-3 pr-lg-0">
                                        <img src="{{asset('ashry/front/assets/images//demo/user-5.jpg')}}"
                                             alt="..."
                                             class="rounded-circle mb-lg-2 img-fluid"
                                             style="width: 50px;">
                                    </div>
                                    <div>
                                        <div class="h5 m-0">John Doe</div>
                                        <div class="text-muted">john.doe@email.com</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-lg-none text-right">
                                <button class="btn btn-icon btn-primary btn-sm toggle-show"
                                        data-show="open-profile-sidebar">
                                    <i class="icon icon-text-align-center"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Profile sidebar -->
                    <div class="sidebar sidebar-mobile" id="open-profile-sidebar">
                        <div class="sidebar-content">

                            <div class="sidebar-header clearfix d-lg-none">
                                <button type="button" class="close toggle-show p-3"
                                        data-show="open-profile-sidebar" aria-label="Close">
                                    <i class="icon icon-cross font-size-lg"></i>
                                </button>
                            </div>

                            <!-- Profile account links -->
                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Account</label>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="{{ route('profile-users') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-user mr-2"></i>
                                                    <span>Profile account</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item  active">
                                        <a href="{{ route('profile.payment') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Paymnet methods</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="{{ route('profile.notifications') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-alarm mr-2"></i>
                                                    <span>Notifications</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                            <!-- Profile dashboard links -->
                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Dashboard</label>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="{{ route('profile.orders') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Chat</span>
                                                </span>
                                                <span class="badge  badge-pill">125</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="{{ route('profile.whishlist') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-heart mr-2"></i>
                                                    <span>Projects</span>
                                                </span>
                                                <span class="badge  badge-pill">9</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Profile reset -->
                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Access</label>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="{{ route('profile.reset-password') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-lock mr-2"></i>
                                                    <span>Reset password</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="{{ route('logout') }}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-enter-down mr-2"></i>
                                                    <span>Sign out</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-10 col-xl-8">

                <h2 class="pre-label font-size-base">Choose payment</h2>

                <!-- Checkout credit card -->

                <div class="accordion br-sm" id="accordionPaymentExample">

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header py-4 p-3 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <div class="custom-control custom-radio d-flex align-items-center">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input form-radio" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio1">
                                            <span class="h5 m-0">Credit cart</span> <br />
                                            <small class="d-none d-lg-inline-block">MasterCard, Maestro, Visa, Visa Electron, JCB and American Express</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 text-right">
                                    <div class="h1 m-0">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse pt-0" aria-labelledby="customRadio1" data-parent="#accordionPaymentExample">
                            <hr class="m-0">
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <div class="form-row mb-1">
                                        <div class="col">
                                            <input type="text" class="form-control form-control-simple" placeholder="Name on card">
                                        </div>
                                    </div>

                                    <div class="form-row mb-1">
                                        <div class="col">
                                            <input type="tel" class="form-control form-control-simple" placeholder="0000-0000-0000-0000" inputmode="numeric" maxlength="19" pattern="[0-9\s]{13,19}">
                                        </div>
                                    </div>

                                    <div class="form-row mb-1">
                                        <div class="col">
                                            <input type="text" class="form-control form-control-simple" placeholder="MM/YY">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-simple" placeholder="CVV">
                                        </div>
                                    </div>

                                    <div class="form-row mt-3">
                                        <div class="col">
                                            <button class="btn btn-rounded btn-primary btn-sm px-3">
                                                Proceed payment
                                            </button>
                                        </div>
                                        <div class="col text-right">
                                            <small>Accepted Cards</small>
                                            <div class="icon-container">
                                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- Checkout Paypal -->

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header py-4 p-3 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <div class="custom-control custom-radio d-flex align-items-center">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio2">
                                            <span class="h5 m-0">PayPal</span><br />
                                            <small class="d-none d-lg-inline-block">Purchase with your fingertips. Look for us the next time you're paying from a mobile app, and checkout faster on thousands of mobile websites.</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 text-right">
                                    <div class="h1 m-0">
                                        <i class="fa fa-paypal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse pt-0" aria-labelledby="customRadio2" data-parent="#accordionPaymentExample">
                            <hr class="m-0">
                            <div class="card-body">
                                <p>Incidunt exercitationem optio quos doloremque neque placeat recusandae obcaecati ab quidem commodi, eaque earum unde?</p>
                                <button class="btn btn-rounded btn-primary btn-sm px-3">
                                    <i class="fa fa-paypal"></i> Got to checkout
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Checkout Banktransfer -->

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header py-4 p-3 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <div class="custom-control custom-radio d-flex align-items-center">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio3">
                                            <span class="h5 m-0">Bank transfer </span><br />
                                            <small class="d-none d-lg-inline-block">
                                                You can make payments directly into our bank account and email the bank wire transfer receipt to us.
                                                We recommend bank wire transfer for payments exceeding $500,00.</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 text-right">
                                    <div class="h1 m-0">
                                        <i class="fa fa-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse pt-0" aria-labelledby="customRadio3" data-parent="#accordionPaymentExample">
                            <hr class="m-0">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, consectetur ullam dicta explicabo sit corrupti incidunt
                                exercitationem optio quos doloremque neque placeat recusandae obcaecati ab quidem commodi, eaque earum unde?
                            </div>
                        </div>
                    </div>
                </div>

                <!--Buttons-->

                <div class="py-3">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6">
                            <a href="checkout-delivery.html" class="btn btn-dark btn-primary btn-rounded px-lg-5">Delivery</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="checkout-receipt.html" class="btn btn-primary btn-rounded px-lg-5">Complete</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



</section>

@stop

@section('script')

@stop
