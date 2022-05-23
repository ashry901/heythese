@extends('layouts.site')
@section('title', 'about')

@section('style')

@endsection

@section('content')

<!-- Header -->
<section class="section bg-light">
    <div class="container">
        <header class="wow fadeInUp" data-wow-delay=".1s">
            <div class="row justify-content-center pt-5 text-center">
                <div class="col-lg-8">
                    <h1 class="mb-0">Gues what?</h1>
                    <h2>You're lucky to be with us</h2>
                    <div class="pb-4">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Modi nesciunt pariatur culpa dolor laboriosam inventore officiis iusto!
                            Voluptatibus laborum aliquid fugiat enim!
                        </p>
                    </div>
                    <p><a href="#" class="btn btn-outline-dark btn-rounded px-lg-4">Read more</a></p>
                </div>
            </div>
        </header>
    </div>
</section>

<!-- Carousel -->
<section class="overflow-hidden py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel owl-primary owl-visible owl-bottom "
                     data-items="3" data-nav="false" data-margin="15"
                     data-dots="false" data-autoplay="true">
                    <div class="wow fadeInUp p-0" data-wow-delay=".9s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/box-4.jpg')}}"
                             alt="..." />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/box-3.jpg')}}"
                             alt="..." />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1.2s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/img-2.jpg')}}"
                             alt="..." />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/box-1.jpg')}}"
                             alt="..." />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/box-5.jpg')}}"
                             alt="..." />
                    </div>
                    <div class="wow fadeInUp p-0" data-wow-delay="1.3s">
                        <img src="{{asset('ashry/front/assets/images/templates/corporate/img-1.jpg')}}"
                             alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="cover-wrap bg-white">
    <div class="cover cover-overlay"
         style="background-image: url({{asset('ashry/front/assets/images/general/8.jpg')}});">

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-white">
                <div class="py-6 wow fadeInUp" data-wow-delay=".4s">
                    <h2>We always care about our clients!</h2>
                    <p class="lead mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Cras molestie metus a blandit tincidunt. Pellentesque placerat,
                        enim vitae tristique suscipit, lorem nunc venenatis purus
                    </p>
                    <a href="#" class="btn btn-rounded btn-outline-light">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section">
    <div class="container">
        <header class="mb-4 mb-lg-6 text-center wow fadeInUp" data-wow-delay=".8s">
            <h2>Did we get your attention?</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aliquam, molestias quidem ut rem unde.</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="box box-image box-hover bg-primary br-sm mb-4 text-white">
                            <div class="box-content">
                                <div class="d-flex pt-4">
                                    <div>
                                        <div class="h2 mb-0">1000+</div>
                                        <p>Projects</p>
                                        <small>
                                            Architecto officiis ipsa quaerat laudantium,
                                            qui quibusdam accusamus.
                                        </small>
                                    </div>
                                    <i class="icon icon-database icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="box box-image box-hover bg-white box-border br-sm mb-4">
                            <div class="box-content">
                                <div class="d-flex pt-4">
                                    <div>
                                        <div class="h2 mb-0">400+</div>
                                        <p>Happy clients</p>
                                        <small>
                                            Architecto officiis ipsa quaerat laudantium,
                                            qui quibusdam accusamus.
                                        </small>
                                    </div>
                                    <i class="icon icon-heart-pulse icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-0 pt-lg-5 wow fadeInUp" data-wow-delay=".8s">
                        <div class="box box-image box-hover bg-white box-border br-sm mb-4">
                            <div class="box-content">
                                <div class="d-flex pt-4">
                                    <div>
                                        <div class="h2 mb-0">20k</div>
                                        <p>Working hours</p>
                                        <small>
                                            Architecto officiis ipsa quaerat laudantium,
                                            qui quibusdam accusamus.</small>
                                    </div>
                                    <i class="icon icon-history icon-lg"></i>
                                </div>
                            </div>
                        </div>

                        <div class="box box-image box-hover bg-white box-border br-sm mb-4">
                            <div class="box-content">
                                <div class="d-flex pt-4">
                                    <div>
                                        <div class="h2 mb-0">10</div>
                                        <p>Years</p>
                                        <small>
                                            Architecto officiis ipsa quaerat
                                            laudantium, qui quibusdam accusamus.
                                        </small>
                                    </div>
                                    <i class="icon icon-layers icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Faqs -->
<section class="bg-white">
    <div class="container">

        <header class="mb-4 mb-lg-6 text-center wow fadeInUp" data-wow-delay=".4s">
            <h2>Ask us. Anything!</h2>
            <p>Apply Now. Browse open positions, check out the exciting job opportunities we offer in different countries!</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="accordion" id="accordion1">
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".6s">
                        <div class="card-header py-4 collapsed"
                             id="accordion1heading1" data-toggle="collapse"
                             data-target="#accordion1collapse1" aria-expanded="false"
                             aria-controls="accordion1collapse1">
                            Help a buyer with an item that hasn’t arrived
                        </div>
                        <div id="accordion1collapse1"
                             class="collapse"
                             aria-labelledby="accordion1heading1"
                             data-parent="#accordion1">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab consectetur deleniti sequi
                                voluptates neque minus, nulla dolore dolorem totam facilis cumque modi ex cupiditate laudantium
                                repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".7s">
                        <div class="card-header py-4 collapsed"
                             id="accordion1heading2" data-toggle="collapse"
                             data-target="#accordion1collapse2"
                             aria-expanded="false"
                             aria-controls="accordion1collapse2">
                            Handle a cancellation request
                        </div>
                        <div id="accordion1collapse2" class="collapse"
                             aria-labelledby="accordion1heading2" data-parent="#accordion1">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab consectetur deleniti sequi
                                voluptates neque minus, nulla dolore dolorem totam facilis cumque modi ex cupiditate
                                laudantium repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".8s">
                        <div class="card-header py-4 collapsed"
                             id="accordion1heading3"
                             data-toggle="collapse"
                             data-target="#accordion1collapse3"
                             aria-expanded="false" aria-controls="accordion1collapse3">
                            Offer a refund as a managed payments seller
                        </div>
                        <div id="accordion1collapse3" class="collapse"
                             aria-labelledby="accordion1heading3"
                             data-parent="#accordion1">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab consectetur deleniti
                                sequi voluptates neque minus, nulla dolore dolorem totam facilis cumque modi ex cupiditate
                                laudantium repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 pt-lg-5">
                <div class="accordion" id="accordion2">
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".6s">
                        <div class="card-header py-4 collapsed" id="accordion2heading1"
                             data-toggle="collapse" data-target="#accordion2collapse1"
                             aria-expanded="false" aria-controls="accordion2collapse1">
                            Help a buyer with an item that hasn’t arrived
                        </div>
                        <div id="accordion2collapse1" class="collapse"
                             aria-labelledby="accordion2heading1"
                             data-parent="#accordion2">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Ab consectetur deleniti sequi
                                voluptates neque minus, nulla dolore dolorem totam
                                facilis cumque modi ex cupiditate laudantium
                                repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".7s">
                        <div class="card-header py-4 collapsed" id="accordion2heading2"
                             data-toggle="collapse" data-target="#accordion2collapse2"
                             aria-expanded="false" aria-controls="accordion2collapse2">
                            Handle a cancellation request
                        </div>
                        <div id="accordion2collapse2" class="collapse"
                             aria-labelledby="accordion2heading2" data-parent="#accordion2">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Ab consectetur deleniti sequi
                                voluptates neque minus, nulla dolore dolorem totam facilis
                                cumque modi ex cupiditate laudantium
                                repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                    <div class="card card-panel bg-light shadow-sm mb-3 wow fadeInUp"
                         data-wow-delay=".8s">
                        <div class="card-header py-4 collapsed" id="accordion2heading3"
                             data-toggle="collapse" data-target="#accordion2collapse3"
                             aria-expanded="false" aria-controls="accordion2collapse3">
                            Offer a refund as a managed payments seller
                        </div>
                        <div id="accordion2collapse3" class="collapse"
                             aria-labelledby="accordion2heading3" data-parent="#accordion2">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Ab consectetur deleniti sequi
                                voluptates neque minus, nulla dolore dolorem totam
                                facilis cumque modi ex cupiditate laudantium
                                repudiandae ratione. Magnam, doloremque fugiat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="divider">

<!-- Jobs -->
<section class="bg-light overflow-hidden">
    <div class="container">

        <header class="mb-4 mb-lg-6 text-center wow fadeInUp" data-wow-delay=".6s">
            <h2>Get a job! We're hiring!</h2>
            <p>
                Browse open positions, check out the exciting
                job opportunities we offer in different countries!
            </p>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel owl-primary owl-visible owl-center"
                     data-items="2" data-nav="true"
                     data-margin="15" data-dots="true">

                    <figure class="p-3 p-lg-4 br-sm bg-white text-center wow fadeInUp"
                            data-wow-delay=".0s">
                        <label class="pre-label">
                            Berlin
                        </label>
                        <h4>Truck driver</h4>
                        <figcaption class="mb-3">
                            Aspernatur in mollitia officia
                            magni corrupti explicabo
                        </figcaption>
                        <a href="#" class="link link-right link-primary">
                            Apply now
                        </a>
                    </figure>

                    <figure class="p-3 p-lg-4 br-sm bg-white text-center wow fadeInUp"
                            data-wow-delay=".1s">
                        <label class="pre-label">Amsterdam</label>
                        <h4>Data analyst</h4>
                        <figcaption class="mb-3">
                            Aspernatur in mollitia officia
                            magni corrupti explicabo
                        </figcaption>
                        <a href="#" class="link link-right link-primary">
                            Apply now
                        </a>
                    </figure>

                    <figure class="p-3 p-lg-4 br-sm bg-white text-center wow fadeInUp"
                            data-wow-delay=".2s">
                        <label class="pre-label">London</label>
                        <h4>Customer support</h4>
                        <figcaption class="mb-3">
                            Aspernatur in mollitia officia
                            magni corrupti explicabo
                        </figcaption>
                        <a href="#" class="link link-right link-primary">
                            Apply now
                        </a>
                    </figure>

                    <figure class="p-3 p-lg-4 br-sm bg-white text-center wow fadeInUp"
                            data-wow-delay=".3s">
                        <label class="pre-label">Paris</label>
                        <h4>Marketing manager</h4>
                        <figcaption class="mb-3">Aspernatur in mollitia officia
                            magni corrupti explicabo</figcaption>
                        <a href="#" class="link link-right link-primary">
                            Apply now
                        </a>
                    </figure>

                    <figure class="p-3 p-lg-4 br-sm bg-white text-center wow fadeInUp"
                            data-wow-delay=".4s">
                        <label class="pre-label">Barcelona</label>
                        <h4>Software developer</h4>
                        <figcaption class="mb-3">
                            Aspernatur in mollitia
                            officia magni corrupti explicabo
                        </figcaption>
                        <a href="#" class="link link-right link-primary">Apply now</a>
                    </figure>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
