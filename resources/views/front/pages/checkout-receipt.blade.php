@extends('layouts.site')
@section('title', 'checkout-receipt')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Receipt page</h2>
                    <small class="pre-label d-none d-lg-block">Order confirmation</small>
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
                            <li class="col active">
                                <a href="checkout-login.html">
                                    <span class="step-item" data-text="Login">
                                        <span>2</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col  active">
                                <a href="checkout-delivery.html">
                                    <span class="step-item" data-text="Delivery">
                                        <span>3</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col active">
                                <a href="checkout-payment.html">
                                    <span class="step-item" data-text="Payment">
                                        <span>4</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col current">
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

    <!-- Receipt -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">

                <div class="alert alert-primary shadow-sm rounded alert-dismissible fade show p-3 p-lg-4 mb-5 p-md-5" role="alert">
                    <h2 class="h6 mb-0">Your order is completed!</h2>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Receipt shipping info -->

                <h2 class="pre-label font-size-base">Shipping info</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Name</small>
                                <p>John Doe</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Email</small>
                                <p>johndoe@company.com</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Phone</small>
                                <p>+122 523 352</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Zip</small>
                                <p>94107</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">City</small>
                                <p>San Francisco, California</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Address</small>
                                <p>795 Folsom Ave, Suite 600</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Company name</small>
                                <p>Divano Corporation</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Company phone</small>
                                <p>+122 333 6665</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Receipt Order details -->

                <h2 class="pre-label font-size-base">Order details</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Order no.</small>
                                <p>52522-63259226</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Transaction ID</small>
                                <p>2265996</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Order date</small>
                                <p>20/04/2020</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Shipping arrival</small>
                                <p>25/04/2020</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Receipt Payment details -->

                <h2 class="pre-label font-size-base">Payment details</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Transaction time</small>
                                <p>20/04/2020 at 20:50</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Amount</small>
                                <p>$ 1259,00</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Total items</small>
                                <p>4</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Cart details</small>
                                <p>**** **** **** 9656</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->

                <div class="py-3">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6">
                            <a href="profile-orders.html" class="btn btn-dark btn-primary btn-rounded px-lg-5">Order history</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="profile-whishlist.html" class="btn btn-primary btn-rounded px-lg-5">My whishlist</a>
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
