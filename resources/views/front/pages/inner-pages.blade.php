@extends('layouts.site')
@section('title', 'inner-pages')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Inner pages</h2>
                    <small class="pre-label d-none d-lg-block">Predefined elements</small>
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

<section class="pt-3">
    <div class="container">
        <header class="mb-3">
            <label class="pre-label">Inner pages</label>
        </header>

        <div class="row mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="about.html">
                            <img src="assets/images//layouts/page-about.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">About</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="portfolio.html">
                            <img src="assets/images//layouts/page-portfolio.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Portfolio</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="services.html">
                            <img src="assets/images//layouts/page-services.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Services</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="team.html">
                            <img src="assets/images//layouts/page-team.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Team</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="blog.html">
                            <img src="assets/images//layouts/page-blog.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Blog</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="blog-2.html">
                            <img src="assets/images//layouts/page-blog-2.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Blog fullpage</p>
                </div>
            </div>

        </div>
        <header class="mb-3">
            <label class="pre-label">Ecommerce</label>
        </header>

        <div class="row mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="products-grid-flat.html">
                            <img src="assets/images//layouts/page-products-grid.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Products grid</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="products-list.html">
                            <img src="assets/images//layouts/page-products-list.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Products list</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="product.html">
                            <img src="assets/images//layouts/page-product-preview-1.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Product preview</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="product-advanced.html">
                            <img src="assets/images//layouts/page-product-preview-2.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Product preview gallery</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="product-flat.html">
                            <img src="assets/images//layouts/page-product-preview-3.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Product preview flat</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="products-grid-flat.html">
                            <img src="assets/images//layouts/page-products-grid-flat.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Products grid flat</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="products-list-flat.html">
                            <img src="assets/images//layouts/page-products-list-flat.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Products list flat</p>
                </div>
            </div>

        </div>
        <header class="mb-3">
            <label class="pre-label">Profile</label>
        </header>

        <div class="row mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="profile.html">
                            <img src="assets/images//layouts/page-profile.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Profile account</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="profile-payment.html">
                            <img src="assets/images//layouts/page-profile-payment.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Profile payment</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="profile-notifications.html">
                            <img src="assets/images//layouts/page-profile-notifications.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Profile notifications</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="profile-orders.html">
                            <img src="assets/images//layouts/page-profile-orders.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Profile orders</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="profile-whishlist.html">
                            <img src="assets/images//layouts/page-profile-whishlist.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Profile whishlist</p>
                </div>
            </div>

        </div>
        <header class="mb-3">
            <label class="pre-label">Cart</label>
        </header>

        <div class="row mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="checkout.html">
                            <img src="assets/images//layouts/page-checkout.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Checkout</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="checkout-login.html">
                            <img src="assets/images//layouts/page-checkout-login.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Checkout login</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="checkout-delivery.html">
                            <img src="assets/images//layouts/page-checkout-delivery.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Checkout delivery</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="checkout-payment.html">
                            <img src="assets/images//layouts/page-checkout-payment.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Checkout payment</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="mb-3">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="checkout-receipt.html">
                            <img src="assets/images//layouts/page-checkout-receipt.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Checkout receipt</p>
                </div>
            </div>

        </div>

        <div class="pt-5 text-center">
            <a href="landing-pages.html" class="btn btn-primary btn-rounded px-4">
                <i class="icon icon-book"></i>
                View landing pages
            </a>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
