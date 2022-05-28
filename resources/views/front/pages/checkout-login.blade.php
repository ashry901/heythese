@extends('layouts.site')
@section('title', 'checkout-login')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Login and registration</h2>
                    <small class="pre-label d-none d-lg-block">Login on your profile</small>
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
                            <li class="col  active">
                                <a href="checkout.html">
                                    <span class="step-item" data-text="Checkout">
                                        <span>1</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col current">
                                <a href="checkout-login.html">
                                    <span class="step-item" data-text="Login">
                                        <span>2</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col ">
                                <a href="checkout-delivery.html">
                                    <span class="step-item" data-text="Delivery">
                                        <span>3</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="checkout-payment.html">
                                    <span class="step-item" data-text="Payment">
                                        <span>4</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="checkout-receipt.html">
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

    <!-- Login &amp; register -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="accordion" id="accordion1">

                    <!-- Checkout registration -->

                    <div class="card card-panel bg-white shadow-sm mb-2">

                        <div class="card-header py-4 bg-white" role="button" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h2 class="h4 mb-0">Register now</h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="card-body p-0">
                                <hr class="m-0">
                                <div class="p-4 p-md-6">
                                    <form>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="First name: *">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Last name: *">
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Company name:">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Zip code: *">
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="City: *">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Email: *">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Phone: *">
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck1">
                                                    <label class="custom-control-label" for="customExampleCheck1">
                                                        I have read and accepted the <a href="#">terms and conditions</a>
                                                    </label>
                                                </div>

                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck2">
                                                    <label class="custom-control-label" for="customExampleCheck2">
                                                        Subscribe to exciting newsletters and great tips
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-right py-4">
                                                <a href="checkout-delivery.html" class="btn btn-primary">Create an account</a>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Checkout login -->

                    <div class="card card-panel bg-white shadow-sm mb-2">

                        <div class="card-header py-4 collapsed bg-white" role="button" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                            <h2 class="h4 mb-0"> Already member?</h2>
                        </div>

                        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                            <div class="card-body p-0">
                                <hr class="m-0">
                                <div class="p-4 p-md-6">
                                    <form>
                                        <div class="row justify-content-center py-4">
                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <input type="text" value="" class="form-control form-control-simple" placeholder="Email">
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" value="" class="form-control form-control-simple" placeholder="Password">
                                                </div>

                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                    <input type="checkbox" class="custom-control-input" id="rememberCheck">
                                                    <label class="custom-control-label" for="rememberCheck">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class=" text-right py-4">
                                                    <a href="checkout-delivery.html" class="btn btn-dark">Sign in</a>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
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
