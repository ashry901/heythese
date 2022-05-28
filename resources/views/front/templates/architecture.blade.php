@extends('layouts.site')
@section('title', 'architecture')

@section('style')

@endsection

@section('content')

<div class="modal fade" id="modalMeeting" tabindex="-1" aria-labelledby="modalMeeting" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content overflow-hidden">
            <div class="cover cover-overlay cover-gradient-vertical"></div>
            <div class="position-relative">
                <div class="modal-header">
                    <span>&nbsp;</span>
                    <button type="button" class="btn btn-light btn-icon" data-dismiss="modal" aria-label="Close">
                        <i class="icon icon-cross"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Book a meeting</h2>
                    <p>Our interior design experts are ready to fulfill your dream! Fill the form and your're receive a call!</p>
                    <form>
                        <div class="form-group">
                            <label class="label" for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control form-control-simple" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="label" for="exampleInputName">Your name</label>
                            <input type="text" class="form-control form-control-simple" id="exampleInputName">
                        </div>
                        <div class="form-group">
                            <label class="label" for="exampleInputDesc">Description</label>
                            <textarea class="form-control form-control-simple" id="exampleInputDesc" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn link link-right link-dark">Send email</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small class="text-muted pre-label">Every detail matter</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabzy gallery -->

<section class="position-relative bg-white pt-6 pt-lg-7">

    <div class="bg-layer bg-layer-horizontal bg-layer-horizontal-top bg-gray h-25 wow slideInDown" data-wow-delay="1s"></div>

    <div class="container-fluid">

        <div class="pb-4">
            <div class="row justify-content-between">
                <div class="col-6 wow fadeInDown" data-wow-delay="1.4s">
                    <a href="#" class="link link-right link-dark">Call us 22 33 5566</a>
                </div>
                <div class="col-6 text-right wow fadeInDown" data-wow-delay="1.6s">
                    <a href="#" class="link link-right link-dark" data-toggle="modal" data-target="#modalMeeting">Book a meeting</a>
                </div>
            </div>
        </div>

        <div class="tabzy text-white wow fadeInUp br-sm" data-wow-delay="2s">

            <div class="row no-gutters">

                <div class="col-lg-4">
                    <div class="tabzy-item p-2 p-lg-4">
                        <img src="../assets/images/templates/architecture/gallery-3.jpg" alt="..." />
                        <div class="box box-hover-pull">
                            <div class="box-spacer"></div>
                            <div class="box-content">
                                <header>
                                    <small class="pre-label text-light">Exterior</small>
                                    <h3>Dream Home</h3>
                                </header>
                                <footer><a href="#" class="link link-right link-light">View details</a></footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tabzy-item p-2 p-lg-4">
                        <img src="../assets/images/templates/architecture/gallery-2.jpg" alt="..." />
                        <div class="box box-hover-pull">
                            <div class="box-spacer"></div>
                            <div class="box-content">
                                <header>
                                    <small class="pre-label text-light">Exterior</small>
                                    <h3>Apollo Building</h3>
                                </header>
                                <footer><a href="#" class="link link-right link-light">View details</a></footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tabzy-item p-2 p-lg-4">
                        <img src="../assets/images/templates/architecture/gallery-1.jpg" alt="..." />
                        <div class="box box-hover-pull">
                            <div class="box-spacer"></div>
                            <div class="box-content">
                                <header>
                                    <small class="pre-label text-light">Interior</small>
                                    <h3>Private Office</h3>
                                </header>
                                <footer><a href="#" class="link link-right link-light">View details</a></footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tabzy-item p-2 p-lg-4">
                        <img src="../assets/images/templates/architecture/gallery-4.jpg" alt="..." />
                        <div class="box box-hover-pull">
                            <div class="box-spacer"></div>
                            <div class="box-content">
                                <header>
                                    <small class="pre-label text-light">Exterior</small>
                                    <h3>Silence House</h3>
                                </header>
                                <footer><a href="#" class="link link-right link-light">View details</a></footer>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pt-4 wow fadeInDown" data-wow-delay="2.5s">
            <a href="#" class="link link-right link-dark">View all projects</a>
        </div>

    </div>
</section>

<hr class="m-0">

<!-- Architecture principles -->

<section class="bg-white">
    <div class="container-fluid">

        <header class="mb-5 text-center wow fadeInUp" data-wow-delay=".1s">
            <h2 class="display-4">Architecture <b>principles </b></h2>
            <p>Define the underlying general rules and guidelines for the use and deployment</p>
        </header>

        <div class="py-lg-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="wow fadeInUp" data-wow-delay=".2s">
                        <img src="../assets/images/templates/architecture/gallery-7.jpg" alt="" class="img-fluid br-sm mb-2 mb-lg-0">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wow fadeInUp" data-wow-delay=".4s">
                        <div class="pre-label">Step 1</div>
                        <h2 class="text-over display-4 position-relative">Build better <b>buildings</b></h2>
                        <p>We believe everybody should work in an inspiring workplace. Most employees spend a lot of time at the office, it is vital that the environment they are working in stimulates creativity while minimizing tension and stress wherever possible.</p>
                        <a href="#" class="link link-right link-dark">Read the case</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="py-lg-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="wow fadeInUp" data-wow-delay=".7s">
                        <div class="pre-label">Step 2</div>
                        <h2 class="text-over display-4 position-relative">Emphasize a <b>company’s values</b></h2>
                        <p>It is about the identity of the company who are you and where are you going? An office emphasizes the company’s values to the employees and clients. </p>
                        <a href="#" class="link link-right link-dark">Read the case</a>
                    </div>

                </div>
                <div class="col-lg-7 text-center order-1 order-lg-2">
                    <div class="wow fadeInUp" data-wow-delay=".5s">
                        <img src="../assets/images/templates/architecture/gallery-8.jpg" alt="" class="img-fluid br-sm mb-2 mb-lg-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container-fluid">
        <div class="py-lg-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="wow fadeInUp" data-wow-delay=".7s">
                        <img src="../assets/images/templates/architecture/gallery-9.jpg" alt="" class="img-fluid br-sm mb-2 mb-lg-0">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wow fadeInUp" data-wow-delay=".9s">
                        <div class="pre-label">Step 1</div>
                        <h2 class="text-over display-4 position-relative">Create with <b>heart and brain</b></h2>
                        <p>Forming space into the perfect fit for our client’s is our big passion. Starting from scratch with just a vision, translating it into a balanced space filled with architectural details.</p>
                        <a href="#" class="link link-right link-dark">Read the case</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="m-0">

<!-- Inspirin -->

<section class="position-relative bg-white overflow-hidden">

    <div class="bg-layer bg-layer-vertical bg-gray wow fadeInLeft" data-wow-delay="1s"></div>

    <div class="container position-relative">
        <div class="py-4 w-75 m-auto">
            <div class="wow fadeInDown" data-wow-delay=".3s">
                <h2 class="display-4">Inspiring <b>architecture</b></h2>
                <p>We firmly believe that our surroundings can inspire. We aspire to create these surroundings for you.</p>
                <button type="button" class="btn link link-right link-dark" data-toggle="modal" data-target="#modalMeeting">Book a meeting</button>
            </div>
        </div>
    </div>

</section>

<hr class="m-0">

<!-- Made to measure -->

<section class="position-relative bg-white overflow-hidden">

    <div class="bg-layer bg-layer-vertical bg-layer-vertical-right bg-gray wow fadeInRight" data-wow-delay="1s"></div>

    <div class="container position-relative">
        <div class="py-4 text-right w-75 m-auto">
            <div class="wow fadeInDown" data-wow-delay=".3s">
                <h2 class="display-4">Made to <b>measure</b></h2>
                <p>At Firm we always incorporate elements uniquely designed for you. We design to measure.</p>
                <button type="button" class="btn link link-right link-dark" data-toggle="modal" data-target="#modalMeeting">Book a meeting</button>
            </div>
        </div>
    </div>

</section>

<hr class="m-0">

<!-- Eye for detail -->

<section class="position-relative bg-white overflow-hidden">

    <div class="bg-layer bg-layer-vertical bg-gray wow fadeInLeft" data-wow-delay="1s"></div>

    <div class="container position-relative">
        <div class="py-4 w-75 m-auto">
            <div class="wow fadeInDown" data-wow-delay=".3s">
                <h2 class="display-4">Eye for <b>detail</b></h2>
                <p>Specialized in both furniture design as well as architecture, we at firm have an innate sense for detail.</p>
                <button type="button" class="btn link link-right link-dark" data-toggle="modal" data-target="#modalMeeting">Book a meeting</button>
            </div>
        </div>
    </div>

</section>

<hr class="m-0">

<!-- News -->

<section class="bg-white">
    <div class="container-fluid">

        <header class="mb-4 mb-lg-5 wow fadeInUp" data-wow-delay=".1s">
            <h2 class="display-4">Check <b>the news</b></h2>
            <p>Design isn’t just about aesthetics</p>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/architecture/gallery-1.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label">News</small>
                            </div>
                            <h5 class="card-title">Clique Apartments Unveiled</h5>
                            <a href="#" class="link link-right link-dark">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".5s">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/architecture/gallery-2.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label">Publications</small>
                            </div>
                            <h5 class="card-title">Sports Precinct Opening</h5>
                            <a href="#" class="link link-right link-dark">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".7s">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-image lift br-sm">
                            <img src="../assets/images/templates/architecture/gallery-3.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="mb-2">
                                <small class="pre-label">Archive</small>
                            </div>
                            <h5 class="card-title">Restoring Business Centres</h5>
                            <a href="#" class="link link-right link-dark">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<hr class="m-0">

<!-- Team -->

<section>
    <div class="container-fluid">

        <header class="mb-5 text-center wow fadeInUp" data-wow-delay=".1s">
            <h2 class="display-4">Meet <b>the team</b></h2>
            <p>Our architects</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row justify-content-center">

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".0s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-1.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>John</b> Bayly</div>
                                <small class="text-muted">CEO</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".1s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-2.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>Emma</b> Mance</div>
                                <small class="text-muted">Manager</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".2s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-3.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>William</b> Kores</div>
                                <small class="text-muted">Designer</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".3s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-4.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>Sophia</b> Guess</div>
                                <small class="text-muted">Architect</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".4s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-5.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>Lanny</b> Stanway</div>
                                <small class="text-muted">SEO</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".5s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-6.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>Anna</b> Genicke</div>
                                <small class="text-muted">Administration</small>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-4 col-lg-3">
                        <figure class="wow fadeInUp" data-wow-delay=".6s">
                            <div class="rounded-circle box box-hover overflow-hidden">
                                <img src="../assets/images/demo/user-7.jpg" alt="" class="img-fluid">
                            </div>
                            <figcaption class="pt-2 text-center">
                                <div><b>James</b> Tomasek</div>
                                <small class="text-muted">Designer</small>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<hr class="m-0">

<!-- Goals -->

<section class="bg-white">
    <div class="container-fluid">

        <header class="mb-5 text-center wow fadeInUp" data-wow-delay=".1s">
            <h2 class="display-4">Some of <b>our goals</b></h2>
            <p>We are constantly curious</p>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <figure class="text-center wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="display-2">50</h2>
                    <small class="pre-label">Projects</small>
                </figure>
            </div>

            <div class="col-lg-4">
                <figure class="text-center wow fadeInUp" data-wow-delay=".5s">
                    <h2 class="display-2">20</h2>
                    <small class="pre-label">Years of experience</small>
                </figure>
            </div>

            <div class="col-lg-4">
                <figure class="text-center wow fadeInUp" data-wow-delay=".7s">
                    <h2 class="display-2">100</h2>
                    <small class="pre-label">References</small>
                </figure>
            </div>

        </div>

    </div>
</section>

<hr class="m-0">

<section class="bg-dark text-white" data-theme="dark">
    <div class="container-fluid">

        <header class="mb-5 wow fadeInUp" data-wow-delay=".1s">
            <h2 class="display-4">Shall we <b>have a talk?</b></h2>
            <p class="lead">Do you have a project or collaboration you would like to turn to with us, or are you curious to hear more about how we can help you, we look forward to hearing from you.</p>
        </header>

        <div class="row wow fadeInUp" data-wow-delay=".4s">
            <div class="col-6 col-lg-3">
                <hr>
                <p><a href="#" class="link link-right link-light">Services</a></p>
                <small class="text-muted">From digital strategy to measurable results</small>
            </div>
            <div class="col-6 col-lg-3">
                <hr>
                <p><a href="#" class="link link-right link-light">Cases</a></p>
                <small class="text-muted">Solutions we are proud to in our portfolio</small>
            </div>
            <div class="col-6 col-lg-3">
                <hr>
                <p><a href="#" class="link link-right link-light">About us</a></p>
                <small class="text-muted">Collaboration across professional competencies</small>
            </div>
            <div class="col-6 col-lg-3">
                <hr>
                <p><a href="#" class="link link-right link-light">Contact</a></p>
                <small class="text-muted">Come by for a cup of coffee</small>
            </div>
        </div>


        <div class="pt-5 wow fadeInUp" data-wow-delay=".7s">
            <hr>
            <small class="text-muted">All rights reserved 2020 © Reveal</small>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection



