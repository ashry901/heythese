@extends('layouts.site')
@section('title', 'product-advanced')

@section('style')

@endsection

@section('content')

<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Short Sleeve Top Thermal Ladies Tshirt</h2>
                    <small class="pre-label d-none d-lg-block">Women&#x27;s Clothing</small>
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
        <div class="row">

            <!-- Product gallery -->

            <div class="col-lg-8">
                <div class="mb-2">
                    <img class="img-fluid br-sm" src="assets/images//demo/fashion-1.jpg" alt="" />
                </div>
                <div class="mb-2">
                    <img class="img-fluid br-sm" src="assets/images//demo/fashion-2.jpg" alt="" />
                </div>
                <div class="mb-2">
                    <img class="img-fluid br-sm" src="assets/images//demo/fashion-3.jpg" alt="" />
                </div>
            </div>

            <!-- Product info -->

            <div class="col-lg-4">

                <div class="sticky-top" style="top:180px">
                    <div class="bg-white shadow-sm br-sm p-3 p-lg-4">
                        <!-- Product order -->

                        <div class="clearfix">

                            <!-- Product price -->

                            <div class="h2 mb-0">
                                <span>$ 260,00</span>
                                <small>
                                    <del>$ 390,00</del>
                                </small>
                            </div>

                            <hr />

                            <!-- Product brand -->

                            <div class="row">
                                <div class="col-6 col-lg-12">
                                    <div class="row mb-2">
                                        <div class="col-xl-4">
                                            <span class="text-muted">Manifacturer</span>
                                        </div>
                                        <div class="col-xl-8">Sony</div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-12">
                                    <div class="row mb-2">
                                        <div class="col-xl-4">
                                            <span class="text-muted">Materials</span>
                                        </div>
                                        <div class="col-xl-8">Plastic, Leather</div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-12">
                                    <div class="row mb-2">
                                        <div class="col-xl-4">
                                            <span class="text-muted">Shipping</span>
                                        </div>
                                        <div class="col-xl-8">
                                            <i class="icon icon-checkmark-circle"></i> Free shipping
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-12">
                                    <div class="row mb-2">
                                        <div class="col-xl-4">
                                            <span class="text-muted">Availability</span>
                                        </div>
                                        <div class="col-xl-8">
                                            <i class="icon icon-checkmark-circle"></i> In stock
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <!-- Product size -->

                            <div class="mb-2">
                                <div class="text-muted pre-label mb-2">
                                    <small>Choose size</small>
                                </div>
                                <div class="btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1 active">
                                        <input type="radio" name="options" id="size-option1" checked="checked"> XS
                                    </label>
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1">
                                        <input type="radio" name="options" id="size-option2"> &nbsp;S&nbsp;
                                    </label>
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1">
                                        <input type="radio" name="options" id="size-option3"> &nbsp;M&nbsp;
                                    </label>
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1">
                                        <input type="radio" name="options" id="size-option4"> &nbsp;L&nbsp;
                                    </label>
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1">
                                        <input type="radio" name="options" id="size-option5"> &nbsp;XL&nbsp;
                                    </label>
                                    <label class="btn btn-outline-primary btn-icon btn-icon-sm p-1">
                                        <input type="radio" name="options" id="size-option6"> XXL&nbsp;
                                    </label>
                                </div>
                            </div>

                            <hr />

                            <!-- Product colors -->

                            <div class="mb-2">
                                <div class="text-muted pre-label mb-2">
                                    <small>Choose color</small>
                                </div>
                                <div class="btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-color btn-color-orange my-1">
                                        <input type="radio" name="options" id="color-option10">
                                    </label>
                                    <label class="btn btn-color btn-color-red my-1">
                                        <input type="radio" name="options" id="color-option3">
                                    </label>
                                    <label class="btn btn-color btn-color-green my-1">
                                        <input type="radio" name="options" id="color-option4">
                                    </label>
                                    <label class="btn btn-color btn-color-yellow my-1">
                                        <input type="radio" name="options" id="color-option9">
                                    </label>
                                    <label class="btn btn-color btn-color-indigo my-1">
                                        <input type="radio" name="options" id="color-option8">
                                    </label>
                                    <label class="btn btn-color btn-color-pink my-1">
                                        <input type="radio" name="options" id="color-option5">
                                    </label>
                                    <label class="btn btn-color btn-color-purple my-1">
                                        <input type="radio" name="options" id="color-option6">
                                    </label>
                                    <label class="btn btn-color btn-color-blue my-1">
                                        <input type="radio" name="options" id="color-option7">
                                    </label>
                                    <label class="btn btn-color btn-color-cian my-1">
                                        <input type="radio" name="options" id="color-option11">
                                    </label>
                                    <label class="btn btn-color btn-color-aqua my-1">
                                        <input type="radio" name="options" id="color-option12">
                                    </label>
                                </div>
                            </div>

                            <hr>

                            <!-- Product quantity -->

                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-5">
                                        <input type="number" class="form-control mr-2" value="1">
                                    </div>
                                    <div class="col-7">
                                        <button class="btn btn-block btn-primary">
                                            <i class="icon icon-cart"></i> Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <hr />

                        </div>
                        <!-- Add to basket -->

                        <div class="btn-group w-100">
                            <span class="btn btn-sm btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                <span class="show"><i class="fa fa-heart-o"></i> Whish</span>
                                <span class="hide"><i class="fa fa-heart"></i> Whislisted</span>
                            </span>
                            <span class="btn btn-sm btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                <span class="show"><i class="fa fa-eye-slash"></i> Watch</span>
                                <span class="hide"><i class="fa fa-eye"></i> Watching</span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="bg-white">
    <div class="container">

        <!-- Product tabs -->

        <ul class="nav nav-pills nav-lavalamp justify-content-center mb-4" id="productTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">
                    Review
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">
                    Description
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">
                    Shipping
                </a>
            </li>
        </ul>

        <!-- Product tab content -->

        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">

                <!-- Widget rating -->

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="rating-overall">
                            <div class="py-3 py-lg-4">

                                <!-- Rating header -->

                                <header>
                                    <div class="row align-items-center mb-4">

                                        <div class="col-2">
                                            <div class="h1 m-0">4.8</div>
                                        </div>

                                        <div class="col-10">
                                            <div class="h3 m-0">User rating overall</div>
                                            <small class="text-muted">4.8 average based on 625 reviews</small>
                                        </div>

                                    </div>
                                </header>

                                <!-- Rating content -->

                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <p>5 <i class="fa fa-star icon-xs"></i></p>
                                    </div>

                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <p>4 <i class="fa fa-star icon-xs"></i></p>
                                    </div>

                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <p>3 <i class="fa fa-star icon-xs"></i></p>
                                    </div>
                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <p>2 <i class="fa fa-star icon-xs"></i></p>
                                    </div>
                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <p>1 <i class="fa fa-star icon-xs"></i></p>
                                    </div>
                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="15"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <!-- Comments -->

                            <div class="py-3 py-lg-4">

                                <!-- Comments header -->

                                <header>
                                    <div class="h3 mb-1">Recent comments</div>
                                    <p class="text-muted"><small>14 review for this product</small></p>
                                </header>

                                <!-- Comments feedback -->

                                <div class="pt-3 pt-lg-4">

                                    <div id="comment-1">

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center text-small">
                                                <img src="assets/images//demo/user-1.jpg" class="mr-2 rounded-circle" alt="..." style="width: 40px;">
                                                <div><strong class="mr-1">Anna North</strong></div>
                                                <div class="text-muted">- 45 minutes ago</div>
                                                <div class="ml-auto">
                                                    <i class="fa fa-star icon-xs text-primary"></i>
                                                    <i class="fa fa-star icon-xs text-primary"></i>
                                                    <i class="fa fa-star icon-xs text-primary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                </div>
                                            </div>
                                            <div class="my-2">
                                                Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div>
                                                <a href="#" class="link link-right link-dark"><strong>Reply</strong></a>
                                            </div>
                                        </div>

                                        <div id="comment-1-reply" class="mb-4">
                                            <div class="mb-4 pl-5 border-left">
                                                <div class="d-flex align-items-center text-small">

                                                    <img src="assets/images//demo/user-2.jpg" class="mr-2 rounded-circle" alt="..." style="width: 40px;">
                                                    <div><strong class="text-dark mr-1">Megan Watts</strong></div>
                                                    <div class="text-muted">- just now</div>

                                                    <div class="ml-auto">
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-secondary"></i>
                                                        <i class="fa fa-star icon-xs text-secondary"></i>
                                                    </div>

                                                </div>

                                                <div class="my-2">
                                                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                </div>

                                                <div>
                                                    <a href="#" class="link link-right link-dark"><strong>Reply</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="comment-2">

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center text-small">
                                                <img src="assets/images//demo/user-3.jpg" class="mr-2 rounded-circle" alt="..." style="width: 40px;">
                                                <div><strong class="mr-1">Sophia Guess</strong></div>
                                                <div class="text-muted">- hour ago</div>
                                                <div class="ml-auto">
                                                    <i class="fa fa-star icon-xs text-primary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                    <i class="fa fa-star icon-xs text-secondary"></i>
                                                </div>
                                            </div>
                                            <div class="my-2">
                                                Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div>
                                                <a href="#" class="link link-right link-dark"><strong>Reply</strong></a>
                                            </div>
                                        </div>

                                        <div id="comment-2-reply" class="mb-4">
                                            <div class="mb-4 pl-5 border-left">
                                                <div class="d-flex align-items-center text-small">

                                                    <img src="assets/images//demo/user-4.jpg" class="mr-2 rounded-circle" alt="..." style="width: 40px;">
                                                    <div><strong class="text-dark mr-1">James Tomasek</strong></div>
                                                    <div class="text-muted">- just now</div>

                                                    <div class="ml-auto">
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-primary"></i>
                                                        <i class="fa fa-star icon-xs text-secondary"></i>
                                                    </div>

                                                </div>

                                                <div class="my-2">
                                                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                </div>

                                                <div>
                                                    <a href="#" class="link link-right link-dark"><strong>Reply</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr>

                            <!-- Reply -->

                            <div class="py-3 py-lg-4">

                                <!-- Reply header -->

                                <header>
                                    <div class="h3 mb-1">Leave a Reply</div>
                                    <p class="text-muted"><small>Your email address will not be published.</small></p>
                                </header>

                                <!-- Reply form -->

                                <div class="pt-3 pt-lg-4">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label" for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label" for="exampleInputName1">Your name</label>
                                                    <input type="password" class="form-control" id="exampleInputName1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="label" for="exampleComment">Comment</label>
                                            <textarea class="form-control" name="" id="exampleComment" cols="20" rows="4"></textarea>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="custom-control custom-checkbox custom-control-light">
                                                <input type="checkbox" class="custom-control-input" id="customCheckTheme1">
                                                <label class="custom-control-label" for="customCheckTheme1">Notify me on reply</label>
                                            </div>
                                            <button type="submit" class="btn link link-right link-dark"><strong>Send reply</strong></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="py-3 py-lg-4">

                            <header>
                                <div class="h3 mb-1">Product description</div>
                                <p>Specfication</p>
                            </header>

                            <div class="py-3 py-lg-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>
                                <p>Sed eget erat justo. Curabitur scelerisque sagittis molestie. Nunc sit amet porttitor odio. In blandit sem eu ante pellentesque, ornare placerat metus fringilla. Ut eu arcu finibus, aliquam libero nec, porta elit. Praesent sit amet odio a quam vehicula molestie eu ut quam. Vivamus viverra augue nulla, ac commodo sapien dictum ut. Pellentesque vehicula maximus velit vitae imperdiet.</p>
                                <p>Praesent mattis justo sit amet dui semper tempus vel eu turpis. Donec sem nulla, porta vitae sollicitudin et, finibus vel ligula. Fusce et lorem pharetra, egestas tortor sit amet, ultricies mi. Cras ac tellus et eros maximus cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ultricies leo tempor, ullamcorper magna nec, consectetur sapien. Maecenas rhoncus non eros id tristique. Aenean condimentum in quam sed rhoncus. Nunc aliquet, dolor rhoncus imperdiet faucibus, est ipsum sollicitudin massa, a placerat justo leo vel turpis. In venenatis felis vitae volutpat viverra. Donec sit amet urna tempus, convallis nunc eget, tempor neque. Nunc gravida tincidunt lectus. Mauris molestie sit amet dolor sit amet luctus. Maecenas ligula mi, tempor at dignissim ut, fermentum ut arcu.</p>
                                <p>Curabitur non ipsum sit amet elit ultricies venenatis. Sed blandit vitae justo sit amet convallis. Aliquam tristique, odio quis vestibulum interdum, magna risus luctus augue, vitae lobortis est enim vel mauris. In eu nibh sed neque auctor efficitur. Aenean quis congue urna. Suspendisse id ultrices eros. Aliquam bibendum massa eget ex scelerisque, vitae convallis felis rutrum. Integer sed augue quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="py-3 py-lg-4">

                            <header>
                                <div class="h3 mb-1">Shipping information</div>
                                <p>Specfication</p>
                            </header>

                            <div class="py-3 py-lg-4">

                                <h5>Money Back Guarantee</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>

                                <h5>Need to Return an Item?</h5>
                                <p>Sed eget erat justo. Curabitur scelerisque sagittis molestie. Nunc sit amet porttitor odio. In blandit sem eu ante pellentesque, ornare placerat metus fringilla. Ut eu arcu finibus, aliquam libero nec, porta elit. Praesent sit amet odio a quam vehicula molestie eu ut quam. Vivamus viverra augue nulla, ac commodo sapien dictum ut. Pellentesque vehicula maximus velit vitae imperdiet.</p>

                                <h5>Check an open return request</h5>
                                <p>Praesent mattis justo sit amet dui semper tempus vel eu turpis. Donec sem nulla, porta vitae sollicitudin et, finibus vel ligula. Fusce et lorem pharetra, egestas tortor sit amet, ultricies mi. Cras ac tellus et eros maximus cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ultricies leo tempor, ullamcorper magna nec, consectetur sapien. Maecenas rhoncus non eros id tristique. Aenean condimentum in quam sed rhoncus. Nunc aliquet, dolor rhoncus imperdiet faucibus, est ipsum sollicitudin massa, a placerat justo leo vel turpis. In venenatis felis vitae volutpat viverra. Donec sit amet urna tempus, convallis nunc eget, tempor neque. Nunc gravida tincidunt lectus. Mauris molestie sit amet dolor sit amet luctus. Maecenas ligula mi, tempor at dignissim ut, fermentum ut arcu.</p>

                                <h5>Send the item back</h5>
                                <p>Curabitur non ipsum sit amet elit ultricies venenatis. Sed blandit vitae justo sit amet convallis. Aliquam tristique, odio quis vestibulum interdum, magna risus luctus augue, vitae lobortis est enim vel mauris. In eu nibh sed neque auctor efficitur. Aenean quis congue urna. Suspendisse id ultrices eros. Aliquam bibendum massa eget ex scelerisque, vitae convallis felis rutrum. Integer sed augue quam.</p>

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
