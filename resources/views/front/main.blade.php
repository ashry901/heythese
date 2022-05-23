@extends('layouts.site')
@section('title', 'main')

@section('style')

@endsection

@section('slider')

@endsection

@section('content')

<section class="section bg-white">
    <div class="container">
        <header class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center pt-5">
                <div class="col-lg-8">
                    <label class="pre-label mb-0">Hey These</label>
                    <h2 class="display-2">
                        <strong>Branding Proposal</strong>
                    </h2>
                </div>
            </div>
        </header>
    </div>
</section>

<!-- Top columns -->

<section class="bg-white p-0">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4 lg-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">

                    <a href="{{ route('subscriptions') }}"
                       class="box box-image box-hover-pull br-sm"
                       style="background-image: url('{{asset('ashry/front/assets/images/general/IMG_0441.jpg')}}');">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4">
                                    <strong>System Integrator</strong>
                                </span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">
                                    Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry
                                </small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 lg-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">
                    <a href=""
                       class="box box-image box-hover-pull br-sm"
                       style="background-image: url('{{asset('ashry/front/assets/images/general/IMG_0442.jpg')}}');">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4">
                                    <strong>Service Provider</strong>
                                </span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">
                                    Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry
                                </small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 lg-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">
                    <a href=""
                       class="box box-image box-hover-pull br-sm"
                       style="background-image: url('{{asset('ashry/front/assets/images/general/IMG_0443.jpg')}}');">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content text-white text-center">
                            <header>
                                <span class="display-4">
                                    <strong>Free Lancer</strong>
                                </span>
                            </header>
                            <footer class="p-4">
                                <small class="pre-label text-white">
                                    Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry
                                </small>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="box box-image box-hover-fall br-sm"
                         style="background-image:url({{asset('ashry/front/assets/images/templates/clothing/shop-1.jpg')}})">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>System Integrator</strong>
                            </h2>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <div class="box box-image box-hover-fall br-sm"
                         style="background-image:url({{asset('ashry/front/assets/images/templates/clothing/shop-2.jpg')}})">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>Service Provider</strong>
                            </h2>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <div class="box box-image box-hover-fall br-sm"
                         style="background-image:url({{asset('ashry/front/assets/images/templates/clothing/shop-3.jpg')}})">
                        <div class="box-spacer-xl"></div>
                        <div class="box-content">
                            <h2 class="display-4 font-family-body text-white">
                                <strong>Free Lancer</strong>
                            </h2>
                            <p>
                                <span>
                                    <a href="#" class="text-muted">
                                        Proposal
                                    </a>
                                </span>
                            </p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                            <p><span><a href="#" class="text-muted">Proposal</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<hr class="divider">

<section class="p-0 bg-light cover"
         style="background-image:url({{asset('ashry/front/assets/images/templates/agency/demo-1.jpg')}})"
         id="home">

    <div class="vh-100 container">
        <div class="row no-gutters justify-content-center align-items-center pt-5 vh-100">
            <div class="col-lg-8 text-white">
                <p class="lead rellax" data-rellax-speed="-1.9">
                    <small class="text-white pre-label">
                        The Best Creative Service
                    </small>
                </p>
                <div class="display-1 rellax mb-4" data-rellax-speed="-2">
                    Branding <strong class="font-weight-bold">Proposal</strong>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rellax" data-rellax-speed="2">
                    <div class="row">
                        <div class="col-6">

                            <div class="box bg-white box-image box-hover br-sm mb-4">
                                <div class="box-content">


                                    <div>
                                        <h2 class="card-title mb-1 h5">
                                            <a href="">
                                                System Integrator
                                            </a>
                                        </h2>

                                    </div>
                                    <div>
                                        <a href=""
                                           class="d-inline-block"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="System Integrator">
                                            <i class="icon icon-tag font-size-xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="box box-image box-hover box-border br-sm mb-4">
                                <div class="box-content text-white">

                                    <div>
                                        <h2 class="card-title mb-1 h5">
                                            <a href="">
                                                Service Provider
                                            </a>
                                        </h2>

                                    </div>
                                    <div>
                                        <a href="" class="d-inline-block"
                                           data-toggle="tooltip" data-placement="top"
                                           title="Service Provider">
                                            <i class="icon icon-tag font-size-xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 pt-5">
                            <div class="box box-image box-hover box-border br-sm mb-4">
                                <div class="box-content text-white">
                                    <div>
                                        <h2 class="card-title mb-1 h5">
                                            <a href="">
                                                Free Lancer
                                            </a>
                                        </h2>

                                    </div>
                                    <div>
                                        <a href="" class="d-inline-block"
                                           data-toggle="tooltip" data-placement="top"
                                           title="Free Lancer">
                                            <i class="icon icon-tag font-size-xl"></i>
                                        </a>
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

{{--
<section class="bg-primary-gradient text-white p-0 overflow-hidden position-relative">
    <div class="container-fluid">

        <!-- Hero content -->

        <!-- Hero text -->
        <div class="row justify-content-center align-items-center align-items-lg-start pt-lg-8 vh-100">
            <div class="col-md-8 text-center">
                <div class="wow fadeInDown" data-wow-delay="0.3s">
                    <div class="text-center mb-4 rellax" data-rellax-speed="-1">
                        <img src="{{asset('ashry/front/assets/images/logo/logompns3-removebg.png')}}"
                             height="120" />
                    </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.4s">
                    <h1 class="display-4 mb-3 mb-lg-5 rellax" data-rellax-speed="-2">
                        Multipurpose <b>Bootstrap 4</b> Template
                    </h1>
                </div>
                <div class="d-none d-md-block">
                    <div class="wow fadeInDown" data-wow-delay="0.5s">
                        <p class="lead mb-5 rellax" data-rellax-speed="-2.2">
                            Reveal a new level template with dark mode support
                            <br class="d-none d-lg-inline">
                            with extended components and new features
                        </p>
                    </div>
                </div>
                <div class="rellax pt-3" data-rellax-speed="-2.5">
                        <span class="wow fadeInDown" data-wow-delay=".6s">
                            <a href="#"
                               class="btn btn-rounded btn-light px-4">
                                <i class="icon icon-cart"></i>
                                Buy now
                            </a> &nbsp;
                        </span>
                    <span class="wow fadeInDown" data-wow-delay=".7s">
                            <a href="" class="btn btn-rounded btn-outline-light px-4">
                                Documentation
                            </a>
                        </span>
                </div>
            </div>
        </div>

    </div>
</section>
--}}

<section class="bg-light text-dark p-0 overflow-hidden position-relative">
    <div class="container-fluid">

        <!-- Hero content -->

        <!-- Hero text -->
        <div class="row justify-content-center align-items-center align-items-lg-start pt-lg-8 vh-100">
            <div class="col-md-8 text-center">

                <div class="wow fadeInDown" data-wow-delay="0.4s">
                    <h1 class="display-4 mb-3 mb-lg-5 rellax" data-rellax-speed="-2">
                        A New Way <b>Of </b> Working
                    </h1>
                </div>
                <div class="d-none d-md-block">
                    <div class="wow fadeInDown" data-wow-delay="0.5s">
                        <p class="lead mb-5 rellax" data-rellax-speed="-2.2">
                            for high-growth
                            <br class="d-none d-lg-inline">
                            What would you like to manage with BRANDING PROPOSAL
                        </p>
                    </div>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row gutters-mobile">

                                <div class="col-4 col-xl-4">
                                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm bg-light-light">

                                        {{--
                                        <div class="card-image">
                                            <a href="">
                                                <img src="{{asset('ashry/front/assets/images/demo/card-visa.png')}}"
                                                     class="card-img-top" alt="...">
                                            </a>
                                        </div>

                                        <div class="card-image">
                                            <a href=""
                                               class="d-inline-block"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Merge PDF">
                                                <i class="icon icon-cog font-size-xl"></i>

                                            </a>
                                        </div>
                                        --}}

                                        <div class="card-body p-3 p-lg-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h2 class="card-title mb-1 h5">
                                                        <a href="">
                                                            System Integrator
                                                        </a>
                                                    </h2>

                                                </div>
                                                <div>
                                                    <a href=""
                                                       class="d-inline-block"
                                                       data-toggle="tooltip"
                                                       data-placement="top"
                                                       title="System Integrator">
                                                        <i class="icon icon-tag font-size-xl"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-xl-4">
                                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm bg-light">
                                        <div class="card-image">
                                            <a href="" class="d-inline-block"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Service Provider">

                                            </a>
                                        </div>

                                        <div class="card-body p-3 p-lg-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h2 class="card-title mb-1 h5">
                                                        <a href="">
                                                            Service Provider
                                                        </a>
                                                    </h2>

                                                </div>
                                                <div>
                                                    <a href="" class="d-inline-block"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Service Provider">
                                                        <i class="icon icon-tag font-size-xl"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-xl-4">
                                    <div class="card card-fill border-0 mb-2 mb-lg-4 shadow-sm bg-light-light">
                                        <div class="card-image">
                                            <a href="" class="d-inline-block"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Free Lancer">

                                            </a>
                                        </div>

                                        <div class="card-body p-3 p-lg-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h2 class="card-title mb-1 h5">
                                                        <a href="">
                                                            Free Lancer
                                                        </a>
                                                    </h2>

                                                </div>
                                                <div>
                                                    <a href="" class="d-inline-block"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Free Lancer">
                                                        <i class="icon icon-tag font-size-xl"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>




                        </div>



                    </div>




                </div>

                {{--
                <div class="row">

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="{{asset('ashry/front/assets/images/templates/furniture/project-1.jpg')}}"
                                         class="card-img-top" alt="...">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">
                                            20.01.2020
                                        </div>
                                        <h4 class="card-title mb-3">
                                            <span class="text-white">
                                                Quick brown fox
                                            </span>
                                        </h4>
                                        <div class="card-text">
                                            <p>
                                                Duis aute irure dolor in reprehenderit
                                                in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".3s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="{{asset('ashry/front/assets/images/templates/furniture/project-2.jpg')}}"
                                         class="card-img-top" alt="...">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">
                                            20.01.2020
                                        </div>
                                        <h4 class="card-title mb-3">
                                            <span class="text-white">
                                                Quick brown fox
                                            </span>
                                        </h4>
                                        <div class="card-text">
                                            <p>
                                                Duis aute irure dolor in reprehenderit in
                                                voluptate velit esse cillum dolore eu
                                                fugiat nulla pariatur
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2 mb-lg-0">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <a href="#" class="card card-box">
                                <div class="card-image">
                                    <img src="{{asset('ashry/front/assets/images/templates/furniture/project-3.jpg')}}"
                                         class="card-img-top" alt="...">
                                    <div class="card-body card-body-top text-white">
                                        <div class="pre-label pre-label-light mb-2">
                                            20.01.2020
                                        </div>
                                        <h4 class="card-title mb-3">
                                            <span class="text-white">
                                                Quick brown fox
                                            </span>
                                        </h4>
                                        <div class="card-text">
                                            <p>Duis aute irure dolor in reprehenderit
                                                in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                --}}

                {{--
                <div class="row">

                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="wow fadeInUp p-0" data-wow-delay="0.0s">

                            <div class="card card-fill border-0 br-sm shadow-sm">

                                <img src="{{asset('ashry/front/assets/images/templates/hotel/room-1.jpg')}}"
                                     class="card-img-top" alt="...">

                                <div class="card-body">

                                    <small class="pre-label">
                                        Presidential Suite
                                    </small>
                                    <h4 class="card-title">
                                        System Integrator
                                    </h4>

                                    <div class="d-flex align-items-center">

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                                <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                            </svg>
                                            <small>Wifi</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            </svg>
                                            <small>2 Pers</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                                <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                            </svg>
                                            <small>TV</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                                <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                                <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                            </svg>
                                            <small>Room service</small>
                                        </div>

                                    </div>
                                </div>

                                <a href="#" class="card-footer d-block pb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>From <b>$ 299,00</b> day</small>
                                        <button class="btn btn-outline-dark btn-rounded">Book now</button>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="wow fadeInUp p-0" data-wow-delay="0.1s">

                            <div class="card card-fill border-0 br-sm shadow-sm">

                                <img src="{{asset('ashry/front/assets/images/templates/hotel/room-2.jpg')}}"
                                     class="card-img-top" alt="...">

                                <div class="card-body">

                                    <small class="pre-label">Service Provider</small>
                                    <h4 class="card-title">Service Provider</h4>

                                    <div class="d-flex align-items-center">

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                                <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                            </svg>
                                            <small>Wifi</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            </svg>
                                            <small>2 Pers</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                                <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                            </svg>
                                            <small>TV</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                                <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                                <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                            </svg>
                                            <small>Room service</small>
                                        </div>

                                    </div>
                                </div>

                                <a href="#" class="card-footer d-block pb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>From <b>$ 199,00</b> day</small>
                                        <button class="btn btn-outline-dark btn-rounded">Book now</button>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="wow fadeInUp p-0" data-wow-delay="0.2s">

                            <div class="card card-fill border-0 br-sm shadow-sm">

                                <img src="{{asset('ashry/front/assets/images/templates/hotel/room-3.jpg')}}"
                                     class="card-img-top" alt="...">

                                <div class="card-body">

                                    <small class="pre-label">Service Provider</small>
                                    <h4 class="card-title">Service Provider</h4>

                                    <div class="d-flex align-items-center">

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
                                                <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
                                            </svg>
                                            <small>Wifi</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            </svg>
                                            <small>2 Pers</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z" />
                                                <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                            </svg>
                                            <small>TV</small>
                                        </div>

                                        <div class="px-2">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                                                <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                                                <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                                            </svg>
                                            <small>Room service</small>
                                        </div>

                                    </div>
                                </div>

                                <a href="#" class="card-footer d-block pb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>From <b>$ 99,00</b> day</small>
                                        <button class="btn btn-outline-dark btn-rounded">Book now</button>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
                --}}



            </div>


            <div class="col-12 text-center">
                <div class="rellax pt-3" data-rellax-speed="-2.5">
                    <span class="wow fadeInDown" data-wow-delay=".7s">
                        <a href="#"
                           class="btn btn-rounded btn-outline-light px-4">
                            Get Started
                        </a>
                    </span>
                </div>
            </div>



        </div>

    </div>
</section>


<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center rellax rellax-move" data-rellax-speed="0.5">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="display-4">Why <b>we are different</b> than others?</h2>
                    <p>
                        With clean code and universal pattern,
                        this Bootstrap extended template will provide you easy access
                        and layout manipulation through the project.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="divider">

<!-- Mobile experience -->
<section class="bg-white">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 pr-lg-5">
                <div class="rellax rellax-move" data-rellax-speed="0.4">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="display-4">
                            <b>Mobile Experiences</b> are improving
                        </h2>
                        <p>
                            Mobile user interfaces are improving,
                            and users are getting more accustomed to them.
                            Being mobile friendly is important in all industries.
                            Instead of coding your desktop
                            site and then writing style sheets to shrink it into
                            a smartphone form factor,
                            we design your mobile site first.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="rellax rellax-move" data-rellax-speed="-0.3">
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pt-5 pt-lg-0">
                            <img src="{{asset('ashry/front/assets/images/demo/demo-mobile.jpg')}}"
                                 alt="..." class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Desktop experience -->
<section class="bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-2 pl-lg-5">
                <div class="rellax rellax-move" data-rellax-speed="0.3">
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="display-4">
                            <b>Desktop Remains</b> Very Important
                        </h2>
                        <p>
                            Other industry data still suggests that
                            more conversions continue to happen on desktop
                            in most industries. Even the
                            <b>desktop bounce rate in 2020</b>
                            is lower than the mobile
                            bounce rate in every single industry,
                            we still continuing to pay a lot of attention
                            to your desktop site makes a great deal of sense.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="rellax rellax-move" data-rellax-speed="-0.4">
                    <div class="wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pt-5 pt-lg-0">
                            <img src="{{asset('ashry/front/assets/images/demo/demo-desktop.jpg')}}"
                                 alt="..." class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="divider">

<!-- Response -->
<section class="bg-white p-0">
    <div class="container">
        <div class="row text-center line-divider">
            <div class="col-lg-4 py-4 py-lg-8">
                <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="display-2">100<small>%</small></div>
                    <p class="lead">Responsive</p>
                </div>
            </div>
            <div class="col-lg-4 py-4 py-lg-8">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="display-2">50<sup>+</sup></div>
                    <p class="lead">Widgets & components</p>
                </div>
            </div>
            <div class="col-lg-4 py-4 py-lg-8">
                <div class="wow fadeInRight" data-wow-delay="0.5s">
                    <div class="display-2">30<sup>+</sup></div>
                    <p class="lead">Predefined templates</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unlimited adjustments -->
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="display-4">Unlimited adjustments, <b>just for you</b>!</h2>
                    <p class="lead">
                        We have <b>great support</b>! That's right, just create ticket on our helpdesk and we will
                        extend and upgrade any layout, no metter it is still existing or complete new one!
                    </p>
                </div>
                <div class="wow fadeInUp pt-5" data-wow-delay="0.8s">
                    <a href="http://helpdesk.elathemes.com/" class="btn btn-rounded btn-outline-dark px-4">Send request</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SVG Divider -->
<section class="divider bg-white">
    <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</section>

<!-- Section Hero -->
<section class="pb-0 position-relative">

    <!-- Header -->
    <div class="container">
        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-md-8">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2 class="display-4"><b>Premium</b> components</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <p class="lead mb-3 mb-lg-5">Epic collection of UI elements that are all flexible and modular. If you need help to build custom layout or landing page just send request, we have great support team</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->

    <div class="rellax-wrapper d-none d-lg-block">
        <div class="flex-content">
            <div class="w-100">
                <div class="row mx-2">

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="0.5">
                            <div class="t-1">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c1.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c2.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c3.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="-0.5">
                            <div class="t-2">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c4.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c5.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c6.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c7.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="0.8">
                            <div class="t-1">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c8.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c9.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c10.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="0.8">
                            <div class="t-2">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c11.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c12.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c13.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="assets/images/layouts/components/c14.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- Templates -->
<section class="bg-white">
    <div class="container-fluid" id="templates">

        <!-- Header -->
        <div class="container">
            <div class="row justify-content-center align-items-center text-center py-5">
                <div class="col-md-8">
                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="display-4"><b>Predefined</b> templates</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".5s">
                        <p class="lead mb-3">
                            Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->

        <div class="row gutters-mobile pt-lg-5">

            <div class="col-6 col-lg-4" data-rellax-speed="1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/clothing.html" target="_blank">
                            <img src="assets/images/layouts/layout-clothing.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Clothing</p>
                </div>
            </div>
            <div class="col-6 col-lg-4" data-rellax-speed="-1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/hotel.html" target="_blank">
                            <img src="assets/images/layouts/layout-hotel.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Hotel</p>
                </div>
            </div>
            <div class="col-6 col-lg-4" data-rellax-speed="1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/furniture.html" target="_blank">
                            <img src="assets/images/layouts/layout-furniture.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Furniture</p>
                </div>
            </div>
            <div class="col-6 col-lg-4" data-rellax-speed="1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/architecture.html" target="_blank">
                            <img src="assets/images/layouts/layout-architecture.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Architecture</p>
                </div>
            </div>
            <div class="col-6 col-lg-4" data-rellax-speed="-1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/agency.html" target="_blank">
                            <img src="assets/images/layouts/layout-agency.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Agency</p>
                </div>
            </div>
            <div class="col-6 col-lg-4" data-rellax-speed="1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="templates/corporate.html" target="_blank">
                            <img src="assets/images/layouts/layout-corporate.png" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <p class="lead">Corporate</p>
                </div>
            </div>

        </div>

        <!-- Text -->

        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-md-8 mt-5">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2 class="display-4">We are <b>growing</b>!</h2>
                    <p class="lead mb-5">
                        Free updates & new features are comming soon!
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Dark Mode -->
<section data-theme="dark">

    <!-- Header -->
    <div class="container">
        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-md-8">
                <div class="wow fadeInUp" data-wow-delay=".1s">
                    <h2 class="display-4">Even better in <b>Dark mode</b></h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <p class="lead">
                        Every component is optimized with dark mode. Apply dark mode on
                        any component, element, section or even whole page!
                    </p>
                </div>
            </div>
        </div>
    </div>



</section>

@endsection

@section('script')

@endsection
