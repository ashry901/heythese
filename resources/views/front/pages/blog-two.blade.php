@extends('layouts.site')
@section('title', 'blog-two')

@section('style')

@endsection

@section('content')

<hr class="m-0">

<header class="bg-light py-4 py-lg-5">
    <div class="pb-2 py-lg-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Latest articles</h2>
                    <small class="pre-label d-none d-lg-block">News archive</small>
                </div>
                <div class="col-lg-4 text-lg-right pt-2 pt-lg-0">
                    <ol class="breadcrumb justify-content-lg-end">
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

<hr class="m-0">

<section class="bg-white py-4 py-lg-5">
    <div class="container">

        <!-- Articles -->

        <div class="row istp-wrap istp-wrap-vertical">
            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/1.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">
                                    Home Organizers that Add Color to Your Space
                                </a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/x1.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span class="badge badge-danger mr-2">Promo</span>
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">How to Use Room Dividers in Small Spaces</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/2.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">
                                    Get a notification when your kids walk in the door
                                </a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/3.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">Open your shades with a simple voice command</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/x2.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">Automatically lock
                                    the front door when you head to work</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/4.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">Lorem ipsum dolor isum</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/x4.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span class="badge badge-success mr-2">Ad</span>
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">Everything you need to know about vaccinations</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="istp col-sm-6 col-lg-4">
                <div class="card card-box mb-3 mb-lg-5 br-sm">
                    <div class="card-image">
                        <img src="{{asset('ashry/front/assets/images/general/6.jpg')}}"
                             class="card-img-top" alt="...">
                        <div class="card-body card-body-top text-white">
                            <div class="pre-label pre-label-primary mb-2">
                                <span>Category</span>
                            </div>
                            <h4 class="card-title mb-3">
                                <a href="#" class="text-white">Six simple ways to save money on airport car parking</a>
                            </h4>
                            <div class="card-text">
                                <a href="#" class="link link-right link-light">Read more</a>
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
</section>

@endsection

@section('script')

@endsection
