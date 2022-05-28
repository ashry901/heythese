@extends('layouts.site')
@section('title', 'products-grid-flat')

@section('style')

@endsection

@section('content')

<section class="box box-image bg-light text-white" style="background-image: url(assets/images/demo/banner-1.jpg);">
    <div class="container">
        <header class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center pt-5 text-center">
                <div class="col-lg-8">
                    <h1 class="mb-0">Everything you love</h1>
                    <p>Find new items now, with great deals and limited time offers</p>
                </div>
            </div>
        </header>
    </div>
</section>

<section class="bg-white p-0 sider sider-left">
    <div class="container">
        <div class="row">

            <!-- Left side filters -->

            <div class="col-lg-3 sidebar sidebar-mobile pr-lg-5" id="open-mobile-filters">
                <div class="sidebar-content pt-lg-5">

                    <!-- Sidebar header -->

                    <div class="sidebar-header clearfix d-lg-none">
                        <button type="button" class="close toggle-show p-3" data-show="open-mobile-filters" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Search -->

                    <div class="mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Go!</button>
                            </div>
                        </div>
                    </div>

                    <!-- Slider range -->

                    <div class="mb-4">

                        <div class="pt-4">
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

                    <!-- Checkbox group -->

                    <div class="mb-4">
                        <a class="btn btn-sm btn-clean px-0 py-1" data-toggle="collapse" href="#collapseExampleCheckbox" role="button" aria-expanded="false" aria-controls="collapseExampleCheckbox">
                            <span>Checboxes</span>
                        </a>
                        <div class="collapse show" id="collapseExampleCheckbox">
                            <ul class="list-group list-group-clean pt-2">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup1">
                                        <label class="custom-control-label text-muted" for="customCheckGroup1">Men</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">14</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup2">
                                        <label class="custom-control-label text-muted" for="customCheckGroup2">Woman</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">250</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckGroup3">
                                        <label class="custom-control-label text-muted" for="customCheckGroup3">Kid&#x27;s</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">313</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory1">
                                        <label class="custom-control-label text-muted" for="customCheckCategory1">Clothing</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">150</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory2">
                                        <label class="custom-control-label text-muted" for="customCheckCategory2">Shoes</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">184</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory3">
                                        <label class="custom-control-label text-muted" for="customCheckCategory3">Bags</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">164</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory4">
                                        <label class="custom-control-label text-muted" for="customCheckCategory4">Accessories</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">212</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckCategory5">
                                        <label class="custom-control-label text-muted" for="customCheckCategory5">Collection</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">50</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Radio buttons group -->

                    <div class="mb-4">
                        <a class="btn btn-sm btn-clean px-0 py-1" data-toggle="collapse" href="#collapseExampleRadio" role="button" aria-expanded="false" aria-controls="collapseExampleRadio">
                            <span>Radio buttons</span>
                        </a>
                        <div class="collapse show" id="collapseExampleRadio">
                            <ul class="list-group list-group-clean pt-2">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label text-muted" for="customRadio1">In stock</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">1250</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label text-muted" for="customRadio2">Upcomming</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">245</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label text-muted" for="customRadio3">Presale</label>
                                    </span>
                                    <span class="badge badge-light badge-pill">86</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Checkbox group -->

                    <div class="mb-4">

                        <a class="btn btn-sm btn-clean px-0 py-1 mb-2" data-toggle="collapse" href="#collapseExampleSize" role="button" aria-expanded="false" aria-controls="collapseExampleSize">
                            <span>Sizes</span>
                        </a>

                        <div class="collapse show" id="collapseExampleSize">
                            <div class="d-flex justify-content-between">

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-gray active">
                                        <input type="checkbox" checked> S
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-gray active">
                                        <input type="checkbox" checked> M
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-gray active">
                                        <input type="checkbox"> L
                                    </label>
                                </span>

                                <span class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-gray active">
                                        <input type="checkbox"> XL
                                    </label>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Products content -->

            <div class="col-lg-9 bg-white pl-lg-5">

                <!-- Products header -->

                <div class="pt-3 pt-lg-5 mb-3 mb-lg-4">
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
                                    <a href="products-grid-flat.html" class="btn btn-sm  text-primary" data-toggle="tooltip" data-placement="top" title="Grid view">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                    <a href="products-list-flat.html" class="btn btn-sm " data-toggle="tooltip" data-placement="top" title="List view">
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

                <div class="row gutters-mobile">

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Coretta
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$490</span>
                                    <s>$877</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-2.png" class="card-img-top" alt="...">
                                <span class="card-badge badge badge-danger">50%</span>
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Tonya
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$419</span>
                                    <s>$958</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-3.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Raven
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$502</span>
                                    <s>$857</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-4.png" class="card-img-top" alt="...">
                                <span class="card-badge badge badge-dark">Last offer</span>
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Mufi
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$584</span>
                                    <s>$838</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-5.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Audrie
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$470</span>
                                    <s>$937</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-6.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Kira
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$579</span>
                                    <s>$915</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-7.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Dianne
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$526</span>
                                    <s>$1111</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-8.png" class="card-img-top" alt="...">
                                <span class="card-badge badge badge-success">New</span>
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Chery
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$424</span>
                                    <s>$901</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-9.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Willi
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$494</span>
                                    <s>$1088</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-10.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Ofelia
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$625</span>
                                    <s>$876</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-11.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Janeta
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$626</span>
                                    <s>$1140</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-4">
                        <div class="card card-fill mb-2 mb-lg-4">
                            <div class="card-image">
                                <img src="assets/images//demo/product-12.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-2 p-lg-3 text-center">
                                <h4 class="card-title mb-0">
                                    <a href="product-flat.html">
                                        Hannie
                                    </a>
                                </h4>
                                <small class="pre-label text-muted">
                                    <span>$518</span>
                                    <s>$803</s>
                                </small>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="px-1" data-toggle="tooltip" data-placement="top" title="Whishlist">
                                        <i class="icon icon-heart font-size-lg text-muted"></i>
                                    </a>
                                    <a href="#" class="px-2" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                        <i class="icon icon-cart font-size-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pb-3 pb-lg-5">

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
    </div>

</section>

@endsection

@section('script')

@endsection
