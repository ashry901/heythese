@extends('layouts.site')
@section('title', 'agency')

@section('style')

@endsection

@section('content')

<section class="p-0 bg-info cover"
         style="background-image:url(../assets/images/templates/agency/demo-1.jpg)" id="home">
    <div class="vh-100 container">
        <div class="row no-gutters justify-content-center align-items-center pt-5 vh-100">
            <div class="col-lg-8 text-white">
                <p class="lead rellax" data-rellax-speed="-1.9">
                    <small class="text-white pre-label">The best creative service</small>
                </p>
                <div class="display-1 rellax mb-4" data-rellax-speed="-2">
                    The <strong class="font-weight-bold">Agency!</strong>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rellax" data-rellax-speed="2">
                    <div class="row">
                        <div class="col-6">
                            <div class="box bg-white box-image box-hover br-sm mb-4">
                                <div class="box-content">
                                    <div class="pt-4">
                                        <div class="h4 mb-0">1000+</div>
                                        <p>Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-image box-hover box-border br-sm mb-4">
                                <div class="box-content text-white">
                                    <div class="pt-4">
                                        <div class="h1 mb-0">400+</div>
                                        <p>Happy clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pt-5">
                            <div class="box box-image box-hover box-border br-sm mb-4">
                                <div class="box-content text-white">
                                    <div class="pt-4">
                                        <div class="h1 mb-0">20k</div>
                                        <p>Work hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider bg-info">
    <svg class="svg svg-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</div>

<section class="bg-white" id="about">
    <div class="container">

        <div class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h1">Need help with marketing?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quos vitae commodi sit, voluptas sequi adipisci vero repellat molestiae.</p>
                    <div class="pt-3"><a href="#" class="btn btn-rounded btn-outline-info">Reach us</a></div>
                </div>
            </div>
        </div>

        <div class="pt-5">

            <div class="wow fadeInUp py-3" data-wow-delay=".3s">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 text-center">
                        <div class="px-5 px-lg-0">
                            <img src="../assets/images/templates/agency/item-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pre-label">Step 1</div>
                        <div class="h3">Bill Your Clients</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quos vitae commodi sit, voluptas sequi adipisci vero repellat molestiae.</p>
                    </div>
                </div>
            </div>

            <div class="wow fadeInUp py-3" data-wow-delay=".5s">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="pre-label">Step 2</div>
                        <div class="h3">Purchase the goods you need</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quos vitae commodi sit, voluptas sequi adipisci vero repellat molestiae.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <div class="px-5 px-lg-0">
                            <img src="../assets/images/templates/agency/item-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="divider bg-white">
    <svg class="svg svg-info" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,59.148s294.145-64.071,963.981,0,963.981-26.211,963.981-26.211L1920,101H0Z" />
    </svg>
</div>

<section class="bg-info" id="start">

    <div class="mb-5">
        <div class="container text-white">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="h1"><strong>We care </strong> about our clients!</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="wow fadeInUp" data-wow-delay=".4s">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie metus a blandit tincidunt. Pellentesque placerat, enim vitae tristique suscipit, lorem nunc venenatis purus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="p-5 bg-white br-sm">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="wow fadeInUp" data-wow-delay=".1s">
                        <h2>Start your bussiness now</h2>
                        <p>Proin porta, sapien nec rutrum sollicitudin, metus lectus lacinia ipsum, pharetra ultrices.</p>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="text2" class="sr-only">Email</label>
                                <input type="text" class="form-control" id="text2" placeholder="Your email">
                            </div>
                            <button type="submit" class="btn btn-info mb-2 ml-2">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="wow fadeIn" data-wow-delay=".4s">
                        <img src="../assets/images/templates/agency/item-1.png" alt="" class="img-fluid w-75" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider bg-info">
    <svg class="svg svg-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,59.148s294.145-64.071,963.981,0,963.981-26.211,963.981-26.211L1920,101H0Z" />
    </svg>
</div>

<section class="bg-white" id="stories">

    <div class="container text-center mb-5">
        <div class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h1">Successful stories</h2>
                    <p>Aliquam eget nisi nec diam dapibus vehicula</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/agency/demo-1.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label text-muted">01.01.2020</small>
                            </div>
                            <h5 class="card-title">Never ending story</h5>
                            <p class="card-text">Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <div class="card">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/agency/demo-1.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label text-muted">01.01.2020</small>
                            </div>
                            <h5 class="card-title">Keep up with good work</h5>
                            <p class="card-text">Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".9s">
                    <div class="card">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/agency/demo-1.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label text-muted">01.01.2020</small>
                            </div>
                            <h5 class="card-title">Find your destiny</h5>
                            <p class="card-text">Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 text-center">
            <div class="wow fadeInUp" data-wow-delay=".9s">
                <a href="#" class="btn btn-outline-info btn-rounded">Read all</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white" id="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="wow fadeInUp" data-wow-delay=".9s">
                    <blockquote class="blockquote-prime">
                        <div class="owl-carousel" data-dots="true">
                            <div class="text-center">
                                <h4 class="mb-2">I could choose code, customer, or design, everything works pretty fine, love it.</h4>
                                <div class="text-center">
                                    <cite title="Source Title">John Doe</cite>
                                </div>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-2">This site is all of perfect. <br />And customer support is professional.</h4>
                                <div class="text-center">
                                    <cite title="Source Title">Megan Right</cite>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider bg-white">
    <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,59.148s294.145-64.071,963.981,0,963.981-26.211,963.981-26.211L1920,101H0Z" />
    </svg>
</div>

<section id="jobs">
    <div class="container">
        <div class="wow fadeIn" data-wow-delay=".4s">
            <p class="lead text-center"><strong>We are hiring</strong> new agents and designers! <a href="#" class="btn btn-rounded btn-info ml-2 mt-4 mt-lg-0">Apply Now</a></p>
        </div>
    </div>
</section>

<div class="divider bg-light">
    <svg class="svg svg-info" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</div>

@endsection

@section('script')

@endsection



