@extends('layouts.site')
@section('title', 'subscriptions')

@section('style')

@stop

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Subscription page</h2>
                    <small class="pre-label d-none d-lg-block">Subscription page</small>
                </div>
                <div class="col-lg-4 text-lg-right pt-2 pt-lg-0">
                    <ol class="breadcrumb breadcrumb-light justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>

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
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">

                <div class="alert alert-warning shadow-sm rounded mb-4 p-3 p-lg-4 mb-5 p-md-5">
                    <h2 class="h6">Subscription info</h2>
                    <p>
                        A frequently overlooked, powerful fulfillment option is offering local pick-up.
                        If you have a physical location and can allow your customers to forgo paying shipping
                        costs altogether, you should!
                    </p>
                </div>

                <h2 class="pre-label font-size-base">Select Subscription</h2>

                <!-- Delivery oneday shipping -->

                <div class="accordion br-sm" id="accordionDeliveryExample">

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header p-3 p-md-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                               class="custom-control-input" data-toggle="collapse"
                                               data-target="#collapseOne" aria-controls="collapseOne">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio1">
                                            <span class="h5 m-0">One-day Shipping</span><br />
                                            <small>Estimated around 24 hrs</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="h4 m-0 pt-3 pt-lg-0">
                                        $ 199,00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse pt-0" aria-labelledby="customRadio1"
                             data-parent="#accordionDeliveryExample">
                            <hr class="m-0">
                            <div class="card-body">
                                Possimus, consectetur ullam dicta explicabo sit corrupti incidunt exercitationem optio quos doloremque neque
                                placeat recusandae obcaecati ab quidem commodi, eaque earum unde?
                            </div>
                        </div>
                    </div>

                    <!-- Delivery economy shipping -->

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header p-3 p-md-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input" data-toggle="collapse"
                                               data-target="#collapseTwo" aria-controls="collapseTwo">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio2">
                                            <span class="h5 m-0">Economy Shipping</span><br />
                                            <small>You will receive order in 1-3 days</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="h4 m-0 pt-3 pt-lg-0">
                                        $ 99,00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse pt-0" aria-labelledby="customRadio2"
                             data-parent="#accordionDeliveryExample">
                            <hr class="m-0">
                            <div class="card-body">
                                Incidunt exercitationem optio quos doloremque neque placeat
                                recusandae obcaecati ab quidem commodi, eaque earum unde?
                            </div>
                        </div>
                    </div>

                    <!-- Delivery free shipping -->

                    <div class="card card-fill mb-3 shadow-sm rounded">
                        <div class="card-header p-3 p-md-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                               class="custom-control-input" data-toggle="collapse"
                                               data-target="#collapseThree" aria-controls="collapseThree">
                                        <label class="custom-control-label pl-2 pl-lg-4" for="customRadio3">
                                            <span class="h5 m-0">Free shipping</span><br />
                                            <small>Available for smaller packages</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="h4 m-0 pt-3 pt-lg-0">
                                        Free
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse pt-0" aria-labelledby="customRadio3"
                             data-parent="#accordionDeliveryExample">
                            <hr class="m-0">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Possimus, consectetur ullam dicta explicabo sit corrupti incidunt
                                exercitationem optio quos doloremque neque placeat recusandae
                                obcaecati ab quidem commodi, eaque earum unde?
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery buttons -->

                <div class="py-3">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6">
                            <a href="#"
                               class="btn btn-dark btn-primary btn-rounded px-lg-5">
                                Back
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="btn btn-primary btn-rounded px-lg-5">
                                Proceed to payment
                            </a>
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
