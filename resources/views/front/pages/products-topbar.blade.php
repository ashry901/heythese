@extends('layouts.site')
@section('title', 'products-topbar')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Products topbar</h2>
                    <small class="pre-label d-none d-lg-block">Grid listing with filters on top</small>
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

<div class="py-3 py-lg-4">
    <div class="container">
        <div class="row">

            <!-- Column dropdown -->

            <div class="col-md-3">
                <div class="dropdown mb-2">

                    <div class="btn btn-white btn-block dropdown-toggle pr-5" role="button" id="dropdownCheckboxes" data-toggle="dropdown" aria-expanded="false">
                        Checkboxes
                    </div>

                    <div class="dropdown-menu p-4 w-100" aria-labelledby="dropdownCheckboxes">
                        <ul class="list-group list-group-clean pt-2 keep-open">

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckGroup1">
                                    <label class="custom-control-label" for="customCheckGroup1">Men</label>
                                </span>
                                <span class="badge badge-light badge-pill">14</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckGroup2">
                                    <label class="custom-control-label" for="customCheckGroup2">Woman</label>
                                </span>
                                <span class="badge badge-light badge-pill">250</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckGroup3">
                                    <label class="custom-control-label" for="customCheckGroup3">Kid&#x27;s</label>
                                </span>
                                <span class="badge badge-light badge-pill">313</span>
                            </li>

                            <li class="list-group-item">
                                <hr />
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckCategory1">
                                    <label class="custom-control-label" for="customCheckCategory1">Clothing</label>
                                </span>
                                <span class="badge badge-light badge-pill">150</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckCategory2">
                                    <label class="custom-control-label" for="customCheckCategory2">Shoes</label>
                                </span>
                                <span class="badge badge-light badge-pill">184</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckCategory3">
                                    <label class="custom-control-label" for="customCheckCategory3">Bags</label>
                                </span>
                                <span class="badge badge-light badge-pill">164</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckCategory4">
                                    <label class="custom-control-label" for="customCheckCategory4">Accessories</label>
                                </span>
                                <span class="badge badge-light badge-pill">212</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckCategory5">
                                    <label class="custom-control-label" for="customCheckCategory5">Collection</label>
                                </span>
                                <span class="badge badge-light badge-pill">50</span>
                            </li>

                        </ul>

                        <div class="pt-2">
                            <div class="btn btn-primary btn-sm btn-block">Update filters</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Column dropdown -->

            <div class="col-md-3">
                <div class="dropdown mb-2">

                    <div class="btn btn-white btn-block dropdown-toggle pr-5" role="button" id="dropdownRadiobuttons" data-toggle="dropdown" aria-expanded="false">
                        Radio buttons
                    </div>

                    <div class="dropdown-menu p-4 w-100" aria-labelledby="dropdownRadiobuttons">
                        <ul class="list-group list-group-clean pt-2 keep-open">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">In stock</label>
                                </span>
                                <span class="badge badge-light badge-pill">1250</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Upcomming</label>
                                </span>
                                <span class="badge badge-light badge-pill">245</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Presale</label>
                                </span>
                                <span class="badge badge-light badge-pill">86</span>
                            </li>

                        </ul>

                        <div class="pt-2">
                            <div class="btn btn-primary btn-sm btn-block">Update filters</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column dropdown -->

            <div class="col-md-3">
                <div class="dropdown mb-2">

                    <div class="btn btn-white btn-block dropdown-toggle pr-5" role="button" id="dropdownCheckboxButtons" data-toggle="dropdown" aria-expanded="false">
                        Checkbox buttons
                    </div>

                    <div class="dropdown-menu p-4 w-100" aria-labelledby="dropdownCheckboxButtons">
                        <div class="keep-open d-flex justify-content-between">

                            <span class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-sm active">
                                    <input type="checkbox" checked> S
                                </label>
                            </span>

                            <span class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-sm">
                                    <input type="checkbox"> M
                                </label>
                            </span>

                            <span class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-sm">
                                    <input type="checkbox"> L
                                </label>
                            </span>

                            <span class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-sm">
                                    <input type="checkbox"> XL
                                </label>
                            </span>

                            <span class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-sm">
                                    <input type="checkbox"> XXL
                                </label>
                            </span>
                        </div>
                        <div class="pt-2">
                            <div class="btn btn-primary btn-sm btn-block">Update filters</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column dropdown -->

            <div class="col-md-3">
                <div class="dropdown mb-2">

                    <div class="btn btn-white btn-block dropdown-toggle pr-5" role="button" id="dropdownSliderRange" data-toggle="dropdown" aria-expanded="false">
                        Slider range
                    </div>

                    <div class="dropdown-menu p-4 w-100" aria-labelledby="dropdownSliderRange">
                        <div class="keep-open">
                            <label for="customRange1">Price</label>
                            <input type="range" class="custom-range" id="customRange1" min="0" max="5" step="0.5">
                        </div>
                        <div class="pt-2">
                            <div class="btn btn-primary btn-sm btn-block">Update filters</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<section class="pt-0">
    <div class="container">
        <div class="row gutters-mobile">

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Coretta</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-1.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">314 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Tonya</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-2.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">293 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Raven</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-3.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">340 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Mufi</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-4.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">358 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Audrie</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-5.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">626 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Kira</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-6.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">378 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Dianne</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-7.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">471 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Chery</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-8.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">327 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Willi</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-9.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">447 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Ofelia</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-10.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">352 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Janeta</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-11.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">644 Products</small>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                    <div class="card-body pb-0 text-center">
                        <h2 class="card-title mb-2 h4">
                            <a href="products-grid.html" class="text-dark">Hannie</a>
                        </h2>
                    </div>
                    <div class="card-image">
                        <a href="products-grid.html" class="d-inline-block">
                            <img src="assets/images//demo/product-12.png" class="card-img-top" alt="Product image">
                        </a>
                    </div>
                    <div class="card-footer text-center pb-5">
                        <small class="text-muted">493 Products</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
