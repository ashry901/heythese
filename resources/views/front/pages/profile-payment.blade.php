@extends('layouts.site')
@section('title', 'profile-payment')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Payment options</h2>
                    <small class="pre-label d-none d-lg-block">Set default payment</small>
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

<section class="divider bg-dark">
    <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</section>

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
                                        <img src="assets/images//demo/user-5.jpg" alt="" class="rounded-circle mb-lg-2 img-fluid" style="width: 50px;">
                                    </div>
                                    <div>
                                        <div class="h5 m-0">John Doe</div>
                                        <div class="text-muted">john.doe@email.com</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-lg-none text-right">
                                <button class="btn btn-icon btn-primary btn-sm toggle-show" data-show="open-profile-sidebar">
                                    <i class="icon icon-text-align-center"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Profile sidebar -->

                    <div class="sidebar sidebar-mobile" id="open-profile-sidebar">
                        <div class="sidebar-content">

                            <div class="sidebar-header clearfix d-lg-none">
                                <button type="button" class="close toggle-show p-3" data-show="open-profile-sidebar" aria-label="Close">
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
                                        <a href="profile.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-user mr-2"></i>
                                                    <span>Profile account</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item  active">
                                        <a href="profile-payment.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Paymnet methods</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="profile-notifications.html">
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
                                        <a href="profile-orders.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Orders</span>
                                                </span>
                                                <span class="badge  badge-pill">125</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="profile-whishlist.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-heart mr-2"></i>
                                                    <span>Whishlist</span>
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
                                        <a href="profile-reset-password.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-lock mr-2"></i>
                                                    <span>Reset password</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#">
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

            <!-- Payment content -->

            <div class="col-lg-9 pt-lg-4">

                <h2 class="pre-label font-size-base">Payment options</h2>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-visa.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                            <span class="align-middle badge badge-success">Primary</span>
                                        </small>
                                        <small class="text-muted">Visa | Exp date: 08/23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-mastercard.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                        </small>
                                        <small class="text-muted">MasterCard | Exp date: 08/23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-2">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-jcb.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                        </small>
                                        <small class="text-muted">JCB | Exp date: 01/19</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-3">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-discover.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                        </small>
                                        <small class="text-muted">Discover | Exp date: 04/21</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-4">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-diners-club.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                        </small>
                                        <small class="text-muted">DinnersClub | Exp date: 04/21</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-5">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white mb-3 shadow-sm rounded">
                    <div class="card-header py-4 p-3 p-md-5">
                        <div class="row align-items-lg-center no-gutters">
                            <div class="col-9">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                    <div class="pr-lg-3">
                                        <img src="assets/images//demo/card-amex.png" alt="" width="100">
                                    </div>
                                    <div class="pt-3 pt-lg-0">
                                        <p class="pre-label mb-0">•••• •••• •••• 7041</p>
                                        <small>
                                        </small>
                                        <small class="text-muted">AmericanExpress | Exp date: 04/21</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-icon btn-rounded btn-outline-gray" type="button" id="dropdownMenuButton-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-menu text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-6">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
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

@endsection

@section('script')

@endsection
