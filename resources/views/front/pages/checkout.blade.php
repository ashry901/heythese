@extends('layouts.site')
@section('title', 'checkout')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Checkout page</h2>
                    <small class="pre-label d-none d-lg-block">Cart items list</small>
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

    <!-- Checkout steps -->
    <div class="pt-3 pt-lg-4 pb-5 pb-lg-6 mb-2 mb-lg-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="steps steps-sm">
                        <ul class="row">
                            <li class="col  current">
                                <a href="{{ route('checkout') }}">
                                    <span class="step-item" data-text="Checkout">
                                        <span>1</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('checkout-login') }}">
                                    <span class="step-item" data-text="Login">
                                        <span>2</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col ">
                                <a href="{{ route('checkout-delivery') }}">
                                    <span class="step-item" data-text="Delivery">
                                        <span>3</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('checkout-payment') }}">
                                    <span class="step-item" data-text="Payment">
                                        <span>4</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('checkout-receipt') }}">
                                    <span class="step-item" data-text="Receipt">
                                        <span>5</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart items -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h2 class="pre-label font-size-base">Cart items</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close" data-toggle="tooltip"
                            data-placement="top" title="Delete">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row align-items-center no-gutters p-md-2">
                        <div class="col-lg-2">
                            <img src="{{asset('ashry/front/assets/images/demo/product-1.png')}}"
                                 alt="..." class="img-fluid" />
                        </div>
                        <div class="col-lg-5 pl-lg-3 mb-2 mb-lg-0">
                            <h2 class="h5 mb-0">Coretta</h2>
                            <span>Electronics</span>
                        </div>
                        <div class="col-6 col-lg-2">
                            <input type="number" value="1" class="form-control" />
                        </div>
                        <div class="col-6 col-lg-3 text-right">
                            <div class="h5 mb-0">$490,00</div>
                            <small class="text-muted"><s>$877,00</s></small>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded mb-3 p-3 alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close" data-toggle="tooltip" data-placement="top" title="Delete">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row align-items-center no-gutters p-md-2">
                        <div class="col-lg-2">
                            <img src="{{asset('ashry/front/assets/images/demo/product-2.png')}}"
                                 alt="..." class="img-fluid" />
                        </div>
                        <div class="col-lg-5 pl-lg-3 mb-2 mb-lg-0">
                            <h2 class="h5 mb-0">Tonya</h2>
                            <span>Electronics</span>
                        </div>
                        <div class="col-6 col-lg-2">
                            <input type="number" value="1" class="form-control" />
                        </div>
                        <div class="col-6 col-lg-3 text-right">
                            <div class="h5 mb-0">$419,00</div>
                            <small class="text-muted"><s>$958,00</s></small>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded mb-3 p-3 alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            data-toggle="tooltip" data-placement="top" title="Delete">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row align-items-center no-gutters p-md-2">
                        <div class="col-lg-2">
                            <img src="{{asset('ashry/front/assets/images/demo/product-3.png')}}"
                                 alt="..." class="img-fluid" />
                        </div>
                        <div class="col-lg-5 pl-lg-3 mb-2 mb-lg-0">
                            <h2 class="h5 mb-0">Raven</h2>
                            <span>Electronics</span>
                        </div>
                        <div class="col-6 col-lg-2">
                            <input type="number" value="1" class="form-control" />
                        </div>
                        <div class="col-6 col-lg-3 text-right">
                            <div class="h5 mb-0">$502,00</div>
                            <small class="text-muted"><s>$857,00</s></small>
                        </div>
                    </div>
                </div>


                <!-- Discount and promocode -->

                <div class="bg-white shadow-sm rounded mb-3 p-3">
                    <div class="row align-items-center no-gutters p-md-2">

                        <div class="col-lg-7">
                            <div class="py-2">
                                <label>Promo code:</label>
                                <input type="text" value="" class="form-control form-control-sm w-auto"
                                       name="couponcode" id="couponcode" placeholder="Coupon code" />
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <b>Discount 20%</b>
                                </div>
                                <div class="col-6 text-right">
                                    $ 90,00
                                </div>
                                <div class="col-6">
                                    <b>Shipping</b>
                                </div>
                                <div class="col-6 text-right">
                                    $ 50,00
                                </div>
                                <div class="col-6">
                                    <b>Vat</b>
                                </div>
                                <div class="col-6 text-right">
                                    $ 49,00
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Total price -->

                <div class="bg-white shadow-sm rounded mb-2 p-3">
                    <div class="p-md-4">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="h4 mb-0">Total price</div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="h4 mb-0">$ 490,00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="py-3">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6">
                            <a href="#" class="btn btn-dark btn-primary btn-rounded px-lg-5">
                                Shop more
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('checkout-login') }}"
                               class="btn btn-primary btn-rounded px-lg-5">
                                Next step
                            </a>
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
