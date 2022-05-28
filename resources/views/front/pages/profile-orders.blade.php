@extends('layouts.site')
@section('title', 'profile-orders')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Orders history</h2>
                    <small class="pre-label d-none d-lg-block">Transactions list</small>
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

                                    <li class="list-group-item ">
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

                                    <li class="list-group-item  active">
                                        <a href="profile-orders.html">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Orders</span>
                                                </span>
                                                <span class="badge  badge-primary  badge-pill">125</span>
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

            <!-- Orders content -->

            <div class="col-lg-9 pt-lg-4">

                <h2 class="pre-label font-size-base">Orders in process</h2>

                <div class="mb-3 mb-lg-5">
                    <div class="accordion br-sm" id="accordionOrdersExample">

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-1" role="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>044349699-4</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>31 Aug, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$490,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-success rounded-sm text-white btn-block text-uppercase">
                                            Delivered
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne1" class="collapse pt-0" aria-labelledby="heading-1" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-2" role="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>567585806-7</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>07 Aug, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$419,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-success rounded-sm text-white btn-block text-uppercase">
                                            Delivered
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne2" class="collapse pt-0" aria-labelledby="heading-2" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-3" role="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>571792662-6</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>31 Aug, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$502,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-danger rounded-sm text-white btn-block text-uppercase">
                                            Canceled
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne3" class="collapse pt-0" aria-labelledby="heading-3" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-4" role="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>905541940-0</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>13 Aug, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$584,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-primary rounded-sm text-white btn-block text-uppercase">
                                            pending
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne4" class="collapse pt-0" aria-labelledby="heading-4" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-5" role="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>271532298-4</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>08 Jul, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$470,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-primary rounded-sm text-white btn-block text-uppercase">
                                            pending
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne5" class="collapse pt-0" aria-labelledby="heading-5" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-6" role="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>395612765-X</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>10 Sep, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$579,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-success rounded-sm text-white btn-block text-uppercase">
                                            Delivered
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne6" class="collapse pt-0" aria-labelledby="heading-6" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-7" role="button" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>884547994-3</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>24 Jul, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$526,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-primary rounded-sm text-white btn-block text-uppercase">
                                            pending
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne7" class="collapse pt-0" aria-labelledby="heading-7" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-8" role="button" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>596572667-8</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>04 Aug, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$424,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-danger rounded-sm text-white btn-block text-uppercase">
                                            Canceled
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne8" class="collapse pt-0" aria-labelledby="heading-8" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-9" role="button" data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true" aria-controls="collapseOne9">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>261778742-7</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>13 Jun, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$494,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-danger rounded-sm text-white btn-block text-uppercase">
                                            Canceled
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne9" class="collapse pt-0" aria-labelledby="heading-9" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header bg-white py-4 p-2 p-md-4 pointer" id="heading-10" role="button" data-toggle="collapse" data-target="#collapseOne10" aria-expanded="true" aria-controls="collapseOne10">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <i class="icon icon-tag mr-3"></i>
                                        <span>620627573-6</span>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="icon icon-clock mr-3"></i>
                                        <span>11 Jul, 2020</span>
                                    </div>
                                    <div class="col-6 col-xl-3 text-right">
                                        <span>$625,00</span>
                                    </div>
                                    <div class="col-xl-2 text-center pt-3 pt-xl-0">
                                        <small class="p-1 bg-light-success rounded-sm text-white btn-block text-uppercase">
                                            Delivered
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne10" class="collapse pt-0" aria-labelledby="heading-10" data-parent="#accordionOrdersExample">
                                <hr class="m-0">
                                <div class="card-body bg-white">

                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-1.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Coretta</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$490,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-2.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Tonya</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$419,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-3.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Raven</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$502,00</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-lg-2">
                                                <img src="assets/images/demo/product-4.png" class="img-fluid br-sm shadow-sm" alt="Image title">
                                            </div>
                                            <div class="col-lg-5 pl-lg-3 py-2 py-lg-0">
                                                <div><strong>Mufi</strong></div>
                                                <small class="text-muted">Electronics</small>
                                            </div>
                                            <div class="col-6 col-lg-2">
                                                <div><small class="pre-label">Qty</small></div>
                                                <span>2</span>
                                            </div>
                                            <div class="col-6 col-lg-3 text-right">
                                                <div><small class="pre-label">Total</small></div>
                                                <span>$584,00</span>
                                            </div>
                                        </div>
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
