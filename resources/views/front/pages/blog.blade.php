@extends('layouts.site')
@section('title', 'blog')

@section('style')

@endsection

@section('content')

<!-- Header -->

<header class="cover pt-6 pt-lg-8 pb-2 pb-lg-6"
        style="background-image: url({{asset('ashry/front/assets/images/demo/banner-1.jpg')}})">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Latest articles</h2>
                    <small class="pre-label d-none d-lg-block">Latest news</small>
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

<!-- Blog content -->

<section class="py-4 py-lg-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-9">

                <!-- Articles -->

                <div class="row gutters-mobile istp-wrap istp-wrap-vertical">
                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/1.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Home Organizers that Add Color to Your Space</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/x1.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span class="badge badge-danger mr-2">Promo</span>
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">How to Use Room Dividers in Small Spaces</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/2.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Get a notification when your kids walk in the door</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/3.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Open your shades with a simple voice command</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/x2.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Automatically lock the front door when you head to work</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/4.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Lorem ipsum dolor isum</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/x4.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span class="badge badge-success mr-2">Ad</span>
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Everything you need to know about vaccinations</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
                            </div>
                        </div>
                    </div>

                    <div class="istp col-6">
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-image lift br-sm">
                                <a href="#">
                                    <img src="{{asset('ashry/front/assets/images/general/6.jpg')}}"
                                         class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="pt-2 pt-lg-3">
                                <div class="mb-lg-2">
                                    <small class="pre-label d-flex align-items-center">
                                        <span>Category</span>
                                    </small>
                                </div>
                                <div class="card-title h5"><a href="#">Six simple ways to save money on airport car parking</a></div>
                                <small class="card-text text-muted">Posted by John Doe</small>
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

            <div class="col-lg-3">

                <!-- Blog sidebar -->

                <div class="bg-white shadow-sm br-sm p-4 mb-4">

                    <small class="pre-label mb-4">Categories</small>

                    <hr>

                    <ul class="list-group list-group-clean">
                        <li class="list-group-item">
                            <a href="#" class="link link-right link-dark">Business</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="link link-right link-dark">Lifestyle</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="link link-right link-dark">Technology</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="link link-right link-dark">Business</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="link link-right link-dark">Entertainment</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white shadow-sm br-sm p-4 mb-4">

                    <small class="pre-label mb-4">Popular</small>

                    <hr>

                    <ul class="list-group list-group-clean">
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <span class="text-center pr-4">
                                    <small>Dec</small>
                                    <span class="h5 m-0">24</span>
                                </span>
                                <span>Home Organizers that Add Color to Your Space</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <span class="text-center pr-4">
                                    <small>Dec</small>
                                    <span class="h5 m-0">24</span>
                                </span>
                                <span>How to Use Room Dividers in Small Spaces</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <span class="text-center pr-4">
                                    <small>Dec</small>
                                    <span class="h5 m-0">24</span>
                                </span>
                                <span>Get a notification when your kids walk in the door</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <span class="text-center pr-4">
                                    <small>Dec</small>
                                    <span class="h5 m-0">24</span>
                                </span>
                                <span>Open your shades with a simple voice command</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <span class="text-center pr-4">
                                    <small>Dec</small>
                                    <span class="h5 m-0">24</span>
                                </span>
                                <span>Automatically lock the front door when you head to work</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white shadow-sm br-sm p-4 mb-4">

                    <small class="pre-label mb-4">Tags</small>

                    <hr>

                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Travel</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Design</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Business</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Economy</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">World</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Technology</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Marketing</a>
                    <a href="#" class="btn btn-outline-dark btn-rounded btn-sm mb-2">Shopping</a>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
