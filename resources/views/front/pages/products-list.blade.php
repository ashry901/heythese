@extends('layouts.site')
@section('title', 'products-list')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Product list</h2>
                    <small class="pre-label d-none d-lg-block">Cards list preview</small>
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

<section class="py-3">
    <div class="container">
        <div class="row">

            <!-- Product sidebar -->

            <div class="col-lg-3 sidebar sidebar-mobile" id="open-mobile-filters">
                <div class="sidebar-content">

                    <!-- Header -->

                    <div class="sidebar-header clearfix d-lg-none">
                        <button type="button" class="close toggle-show p-3" data-show="open-mobile-filters" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Search -->

                    <div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Go!</button>
                            </div>
                        </div>
                    </div>

                    <!-- Slider range -->

                    <div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">

                        <a class="pre-label px-0" data-toggle="collapse" href="#collapseExamplePrice" role="button" aria-expanded="false" aria-controls="collapseExamplePrice">
                            <small>Slider range</small>
                        </a>

                        <div class="collapse show" id="collapseExamplePrice">
                            <div class="pt-3">
                                <div class="d-flex justify-content-between">
                                    <span>Price</span>
                                    <span>
                                        $ <b class="price-value"></b>
                                    </span>
                                </div>
                                <input type="range" class="custom-range price-range" id="customRange1" min="0" max="500" step="5">
                                <div class="d-flex justify-content-between">
                                    <small>$ 0</small>
                                    <small>$ 500</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Checkbox group -->

                    <div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">

                        <a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleCheckbox" role="button" aria-expanded="false" aria-controls="collapseExampleCheckbox">
                            <small>Checkboxes</small>
                        </a>

                        <div class="collapse show" id="collapseExampleCheckbox">
                            <ul class="list-group list-group-clean pt-4">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup1">
                                        <label class="custom-control-label" for="customCheckGroup1">Men</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">14</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup2">
                                        <label class="custom-control-label" for="customCheckGroup2">Woman</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">250</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup3">
                                        <label class="custom-control-label" for="customCheckGroup3">Kid&#x27;s</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">313</span>
                                </li>


                                <li class="list-group-item">
                                    <hr />
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory1">
                                        <label class="custom-control-label" for="customCheckCategory1">Clothing</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">150</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory2">
                                        <label class="custom-control-label" for="customCheckCategory2">Shoes</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">184</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory3">
                                        <label class="custom-control-label" for="customCheckCategory3">Bags</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">164</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory4">
                                        <label class="custom-control-label" for="customCheckCategory4">Accessories</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">212</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory5">
                                        <label class="custom-control-label" for="customCheckCategory5">Collection</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">50</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Radio buttons group -->

                    <div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">

                        <a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleRadio" role="button" aria-expanded="false" aria-controls="collapseExampleRadio">
                            <small>Radio buttons</small>
                        </a>

                        <div class="collapse show" id="collapseExampleRadio">
                            <ul class="list-group list-group-clean pt-4">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">In stock</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">1250</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Upcomming</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">245</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-control-light custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Presale</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">86</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Checkbox group -->

                    <div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">

                        <a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleSize" role="button" aria-expanded="false" aria-controls="collapseExampleSize">
                            <small>Sizes</small>
                        </a>

                        <div class="collapse show" id="collapseExampleSize">
                            <div class="d-flex justify-content-between pt-4">

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active">
                                        <input type="checkbox" checked> S
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active">
                                        <input type="checkbox"> M
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active">
                                        <input type="checkbox"> L
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active">
                                        <input type="checkbox"> XL
                                    </label>
                                </span>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Products content -->

            <div class="col-lg-9">

                <!-- Products header -->

                <div class="bg-white p-2 p-lg-3 shadow-sm mb-2 mb-lg-4">
                    <div class="d-flex justify-content-between">

                        <!-- Left -->

                        <div>
                            <div class="form-inline">
                                <div class="form-group mb-0">
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option>20</option>
                                        <option>50</option>
                                        <option>100</option>
                                        <option>All</option>
                                    </select>
                                    <label for="exampleFormControlSelect1" class="ml-3 d-none d-lg-block"><small>Showing all 24 of 128 products</small></label>
                                </div>
                            </div>
                        </div>

                        <!-- Right -->

                        <div>
                            <div class="form-inline">
                                <div class="mr-2">
                                    <a href="products-grid.html" class="btn btn-sm " data-toggle="tooltip" data-placement="top" title="Grid view">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                    <a href="products-list.html" class="btn btn-sm  text-primary" data-toggle="tooltip" data-placement="top" title="List view">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="exampleFormControlSelect2" class="mr-3 d-none d-lg-block"><small>Sort by</small></label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect2">
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                </div>
                                <div class="d-lg-none ml-2">
                                    <button class="btn btn-primary btn-sm toggle-show" data-show="open-mobile-filters">
                                        <strong>
                                            <i class="icon icon-text-align-center"></i>
                                            <span class="d-none d-sm-inline-block">Filters</span>
                                        </strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products collection -->

                <div class="clearfix">

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-1.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Coretta</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$490</span>
                                        <s>$877</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-2.png" class="card-img-top" alt="Product image">
                                    <span class="card-badge badge badge-danger text-uppercase mr-2">50%</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Tonya</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum et ultrices posuere cubilia Curae; Donec pharetra.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$419</span>
                                        <s>$958</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-3.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Raven</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$502</span>
                                        <s>$857</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-4.png" class="card-img-top" alt="Product image">
                                    <span class="card-badge badge badge-dark text-uppercase mr-2">Last offer</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Mufi</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus primis in faucibus orci luctus.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$584</span>
                                        <s>$838</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-5.png" class="card-img-top" alt="Product image">
                                    <span class="card-badge badge badge-success text-uppercase mr-2">New</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Audrie</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Fusce consequat. Nulla nisl. Nunc nisl.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$470</span>
                                        <s>$937</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-6.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Kira</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$579</span>
                                        <s>$915</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-7.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Dianne</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$526</span>
                                        <s>$1111</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-8.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Chery</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$424</span>
                                        <s>$901</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm">
                        <div class="row align-items-center no-gutters">
                            <div class="col-5">
                                <div class="card-image">
                                    <img src="assets/images//demo/product-9.png" class="card-img-top" alt="Product image">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="px-3 px-lg-4 py-3 py-lg-4">
                                    <h4 class="card-title mb-2">
                                        <a href="product.html">Willi</a>
                                    </h4>
                                    <div class="d-none d-xl-block mb-4">
                                        <p>Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.</p>
                                    </div>
                                    <div class="text-muted pre-label">
                                        <span>$494</span>
                                        <s>$1088</s>
                                    </div>
                                    <div class="pt-4 d-none d-lg-block">
                                        <a href="product.html" class="btn btn-primary">
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center py-3 py-lg-4">
                        <li class="page-item disabled">
                            <a class="page-link page-link-first" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

</section>

@endsection

@section('script')

@endsection
