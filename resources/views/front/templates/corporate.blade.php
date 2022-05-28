<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->

    <meta name="description" content="Extended Bootstrap 4 Template">
    <meta name="author" content="Goran Hrustic">
    <link rel="icon" href="{{asset('ashry/front/assets/svg/favicon.ico')}}">

    <!-- Title -->

    <title>@yield('title')</title>

    <!-- Vendor stylesheets -->
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/animate.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/font-awesome.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/linear-icons.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/owl.carousel.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/vendor/jquery.lavalamp.css')}}" />


    <!-- Template stylesheets -->
    @yield('style')
    <link rel="stylesheet" media="all" href="{{asset('ashry/front/css/style.css')}}" />

    <!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<body>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<!-- Navbar -->

<nav class="navbar navbar-sticky navbar-expand-lg navbar-light p-0 flex-column">

    <!-- Top Navigation -->

    <div class="w-100 p-0 d-none d-lg-block">

        <div class="container-fluid bg-dark p-2 justify-content-between">
            <div>
                <a href="#" class="text-muted font-weight-normal link link-swipe link-secondary">Get a call now!</a>
            </div>
            <div>
                <a href="#" class="text-muted font-weight-normal px-3">Support</a>
                <a href="#" class="text-muted font-weight-normal px-3">Offices</a>
                <a href="#" class="text-muted font-weight-normal px-3">Search</a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-2 pb-2 pt-lg-5 bg-white">

        <!-- Company name -->

        <a class="h5 mb-0 link link-swipe link-secondary" href="#">
            <span class="font-weight-normal font-family-serif text-secondary">REVEAL Inc.</span>
        </a>

        <!-- Mobile toggles -->

        <div class="d-flex d-lg-none">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link">
                        <div class="px-2 py-1"><span class="icon icon-phone-handset"></span></div>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corporateNavbar" aria-controls="corporateNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon icon-menu"></span>
            </button>
        </div>

        <!-- Navbar collapse -->

        <div class="collapse navbar-collapse navbar-collapse-sidebar" id="corporateNavbar">
            <div class="ml-auto">

                <div class="d-block d-lg-none">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="h5 mb-0 link link-swipe link-secondary" href="#">
                                <span class="font-weight-normal font-family-serif text-secondary">REVEAL Inc.</span>
                            </a>
                            <button class="btn p-0" type="button" data-toggle="collapse" data-target="#corporateNavbar" aria-controls="corporateNavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon icon-cross font-size-lg"></span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-light">
                        <div class="form-group form-group-icon">
                            <input type="text" class="form-control form-control-simple" placeholder="Search site">
                            <button class="btn btn-clean"><i class="icon icon-magnifier"></i></button>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav h5 font-weight-normal">
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark"
                           href="{{ route('main') }}">
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark" href="#news">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark" href="#testimonials">
                            Testimonials
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark" href="#jobs">
                            Jobs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark" href="#cases">
                            Cases
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-to font-family-serif text-dark" href="#contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Subscribe -->

<nav id="subscribeComponent" class="sidebar sidebar-right bg-white border-left">
    <div class="sidebar-content">
        <div class="sidebar-header px-3 pt-3 clearfix">
            <button type="button" class="toggle-show close" data-show="subscribeComponent">
                <span class="icon icon-cross"></span>
            </button>
        </div>
        <hr />
        <div class="p-4">
            <h4 class="font-family-serif font-weight-normal">Sign up for the newsletter</h4>
            <p>Receive our newsletter and stay up to date on legal topics and new courses.</p>
            <div class="form-group">
                <label class="label" for="name">Name</label>
                <input type="text" class="form-control form-control-simple" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label class="label" for="searchContent">Email</label>
                <input type="email" class="form-control form-control-simple" id="searchContent" placeholder="Add email">
            </div>
            <div class="row justify-content-center pt-3">
                <div class="col-md-10">
                    <button type="button" class="btn btn-slide btn-slide-dark px-5 btn-block">Subscribe</button>
                </div>
            </div>
        </div>

    </div>
</nav>

<!-- Hero -->

<section id="home" class="pt-5 pt-lg-8 pb-0">
    <section class="container-fluid position-relative p-0 py-lg-8 overflow-hidden">
        <div class="absolute-full-lg offset-lg-3">
            <div class="reveal reveal-cover rellax" data-rellax-speed="0.3" data-reveal="left">
                <span style="background-image:url(../assets/images/templates/corporate/img-1.jpg)"></span>
            </div>
        </div>
        <div class="row mt-n8 mt-lg-0">
            <div class="col-lg-5 offset-2 offset-lg-1">
                <div class="wow fadeInDown" data-wow-delay="1.5s">
                    <div class="bg-white p-4 p-lg-6 rellax" data-rellax-speed="-0.5">
                        <h2 class="font-family-serif">Corporate and Commercial</h2>
                        <p class="lead">
                            Friendly, professional legal services for clients in and around the world.
                        </p>
                        <button type="button" class="btn btn-slide btn-slide-dark">Click here now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- News -->

<section id="news" class="pt-0">
    <div class="container-fluid position-relative pt-4">
        <div class="offset-2 offset-lg-3 px-3 px-lg-0">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="pt-3">
                            <div class="pre-label mb-2">20 Jan. 2020</div>
                            <h4 class="card-title font-family-serif">
                                <a href="#" class="link link-underline link-secondary">Case again Named among Reveal for Competition Practice</a>
                            </h4>
                            <p class="card-text">Cxiuspecajn la ni cxu kiam cxar el mi bieno kiu grandan ili longe sxipanoj estas ideo sxipon bone kiuj kion</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="pt-3">
                            <div class="pre-label mb-2">24 Jan. 2020</div>
                            <h4 class="card-title font-family-serif">
                                <a href="#" class="link link-underline link-secondary">Five Corporate Transactions Named PFI Deals of the Year</a>
                            </h4>
                            <p class="card-text">Mi liberigxinte iujn sian povas boaton ankaux sed sanktuloj mi ni sia estis tiel anglujo lasi dubi en viron plencxase</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="pt-3">
                            <div class="pre-label mb-2">28 Jan. 2020</div>
                            <h4 class="card-title font-family-serif">
                                <a href="#" class="link link-underline link-secondary">Consumer deals fall but disruption may be a driver</a>
                            </h4>
                            <p class="card-text">Soon weary objects forgot his might land have favour minstrels and to little cheer near him sea nor sing change</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="link link-swipe link-secondary">Read more cases</a>

        </div>
    </div>
</section>

<!-- Intro services -->

<section id="intro" class="p-0">
    <div class="container-fluid position-relative p-0 py-lg-8 overflow-hidden">
        <div class="absolute-full-lg col-lg-9 p-0">
            <div class="reveal reveal-cover rellax" data-rellax-speed=".3" data-reveal="left">
                <span style="background-image:url(../assets/images/templates/corporate/img-5.jpg)"></span>
            </div>
        </div>
        <div class="row mt-n8 mt-lg-0">
            <div class="col-lg-5 offset-2 offset-lg-6">
                <div class="wow fadeInDown" data-wow-delay="1.5s">
                    <div class="bg-white p-4 p-lg-6 rellax" data-rellax-speed="-0.5">
                        <h2 class="font-family-serif">Our services are efficent.</h2>
                        <p class="lead">
                            Friendly, professional legal services for clients in and around the world.
                        </p>
                        <button type="button" class="btn btn-slide btn-slide-dark">Find out more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->

<section id="services">
    <div class="container container-wide">

        <div class="row mb-5">
            <div class="col-lg-9 offset-2 offset-lg-0">
                <div class="row">

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div><i class="icon icon-heart-pulse display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Buying your Business</a>
                                    </h5>
                                    <p>When you run a business, there’s never just one problem to solve. We’ll solve them with you.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div><i class="icon icon-layers display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Criminal Litigation</a>
                                    </h5>
                                    <p>Our criminal lawyers are astute, supportive and highly sophisticated, particularly known for providing strategic, sensible and practical advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div><i class="icon icon-leaf display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Regulatory</a>
                                    </h5>
                                    <p>Our criminal lawyers are astute, supportive and highly sophisticated, particularly known for providing strategic, sensible and practical advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div><i class="icon icon-paperclip display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Employment</a>
                                    </h5>
                                    <p>Whether you are a business or a senior employee, our employment law specialists will give pragmatic and commercial advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="0.8s">
                            <div class="d-flex">
                                <div><i class="icon icon-code display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Data Protection</a>
                                    </h5>
                                    <p>We help negotiate this complicated area of law, ensuring personal data is protected and helping to manage the consequences when it is not.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 mb-3">
                        <div class="wow fadeInDown" data-wow-delay="1s">
                            <div class="d-flex">
                                <div><i class="icon icon-pie-chart display-4 text-secondary"></i></div>
                                <div class="pl-4">
                                    <h5 class="font-family-serif">
                                        <a href="#" class="link link-underline link-secondary">Financial Services</a>
                                    </h5>
                                    <p>Financial services firms, professionals and clients need advice more than ever to safeguard their business interests, careers and reputations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a href="#" class="link link-swipe link-secondary">More info</a>

    </div>
</section>

<!-- Testimonials -->

<section id="testimonials">
    <div class="container-fluid position-relative pt-0 bg-dark">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-white">
                    <div class="p-5 p-lg-6">
                        <h2 class="font-family-serif mb-5 text-center">What other says?</h2>
                        <div class="owl-carousel" data-dots="true">
                            <blockquote class="blockquote-prime ">
                                <h4 class="mb-0">Il non mossa lui alcun con i che pregator in intendo noi ammirabile da piú cosa gli di per nome</h4>
                                <div class="text-center pt-3">
                                    <cite title="Source Title">John Doe</cite>
                                </div>
                            </blockquote>
                            <blockquote class="blockquote-prime text-white">
                                <h4 class="mb-0">A il dio se né e lui quale verso piú prestasse suo quale esperienza dinanzi per coloro sono di avvien</h4>
                                <div class="text-center pt-3">
                                    <cite title="Source Title">John Doe</cite>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jobs -->

<section id="jobs">
    <div class="container-fluid position-relative pt-0">
        <div class="offset-lg-3 px-3 px-lg-0">
            <div class="row mb-lg-5 justify-content-between">
                <div class="col-lg-8 pb-4 pb-lg-0">
                    <div class="wow fadeInDown">
                        <h2 class="font-family-serif">Why join us?</h2>
                        <p>Intellectually challenging work from day one</p>
                        <p>High-profile client projects, nuanced local market knowledge and global capabilities define who we are. As a trainee, you'll work on challenging, sophisticated and complex cross-border matters across both the developed and fast growth markets where rules are still being made (often with our help). You'll be an integral member of your team and have genuine responsibility early on in your career.</p>
                        <p>As a global firm, we're strategically focused on handling complex, cross-border work. In London, you will progress through a structured sequence of practice rotations to give you broad exposure early on in your career.</p>
                        <p>Many of our clients 1are multinational organisations with complex needs that require the involvement of multiple Firm offices. You'll work in a fast-paced, collaborative environment with colleagues across the global network on multijurisdictional matters, and experience the operational realities of cross-border law. We believe global exposure is an integral part of becoming a great lawyer, and our trainees have the chance to shape their own career progression, with a guaranteed six-month secondment in one of our overseas offices.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow fadeInUp">
                        <button type="button" class="btn btn-blink-dark btn-block btn-lg mb-5">Apply now!</button>
                        <div class="bg-white p-5">
                            <h4 class="font-family-serif">Company insights</h4>
                            <ul class="list-group list-group-clean">
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">Our Firm</a></li>
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">History</a></li>
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">Diversity</a></li>
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">Client Service</a></li>
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">Awards &amp; Rankings</a></li>
                                <li class="list-group-item"><a href="#" class="link link-swipe link-secondary">Annual Review 2018</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More help -->

<section id="meeting" class="p-0">
    <div class="container position-relative">
        <div class="mb-3 mb-lg-5">
            <h2 class="font-family-serif">Need more help?</h2>
            <p>Intellectually challenging work from day one</p>
        </div>
        <div class="row">
            <div class="col-lg-5 mb-4 rellax-horizontal" data-rellax-speed="0.5">
                <div class="box box-image box-hover-fall bg-light-secondary" style="background-image:url(../assets/images/templates/corporate/box-1.jpg)">
                    <div class="box-spacer-lg"></div>
                    <div class="box-content">
                        <h3 class="mb-3 text-white font-family-serif">Banking</h3>
                        <p><span>Fist paragraph comming</span></p>
                        <p><span>Keep calm and build code</span></p>
                        <p><span>Last paragraph animated</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mb-4">
                <div class="box box-image box-hover-fall bg-light-warning" style="background-image:url(../assets/images/templates/corporate/box-2.jpg)">
                    <div class="box-spacer-lg"></div>
                    <div class="box-content">
                        <h3 class="mb-3 text-white font-family-serif">Real estate</h3>
                        <p><span>Fist paragraph comming</span></p>
                        <p><span>Keep calm and build code</span></p>
                        <p><span>Last paragraph animated</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mb-4">
                <div class="box box-image box-hover-fall bg-light-danger" style="background-image:url(../assets/images/templates/corporate/box-3.jpg)">
                    <div class="box-spacer-lg"></div>
                    <div class="box-content">
                        <h3 class="mb-3 text-white font-family-serif">Media</h3>
                        <p><span>Fist paragraph comming</span></p>
                        <p><span>Keep calm and build code</span></p>
                        <p><span>Last paragraph animated</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-4">
                <div class="box box-image box-hover-fall bg-light-success" style="background-image:url(../assets/images/templates/corporate/box-4.jpg)">
                    <div class="box-spacer-lg"></div>
                    <div class="box-content">
                        <h3 class="mb-3 text-white font-family-serif">Experienced workers</h3>
                        <p><span>Fist paragraph comming</span></p>
                        <p><span>Keep calm and build code</span></p>
                        <p><span>Last paragraph animated</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meetings -->

<section>
    <div class="container-fluid position-relative py-lg-8 py-0 pr-0 overflow-hidden">
        <div class="cover cover-back offset-lg-3 rellax" data-rellax-speed="-0.5">
            <div class="reveal" data-reveal="left">
                    <span>
                        <img src="../assets/images/templates/corporate/img-3.jpg" alt="Alternate Text" class="img-fluid" />
                    </span>
            </div>
        </div>
        <div class="offset-1">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="bg-white p-5 p-lg-6 rellax" data-rellax-speed="0.5">
                        <h2 class="font-family-serif">Request a meeting</h2>
                        <p class="lead">
                            The grief massy by and sought though a break venerable spoiled whom there in not
                        </p>
                        <form>
                            <div class="py-4">
                                <div class="form-group">
                                    <label class="label" for="exampleMail">Email address</label>
                                    <input type="email" class="form-control form-control-simple" id="exampleMail">
                                </div>
                            </div>
                            <button type="button" class="btn btn-slide btn-slide-dark">Submit request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cases -->

<section id="cases">
    <div class="container-fluid position-relative">
        <div class="offset-lg-3 px-3 px-lg-0">

            <div class="mb-3 mb-lg-5">
                <h2 class="font-family-serif">Latest cases</h2>
                <p>Intellectually challenging work from day one</p>
            </div>

            <hr>

            <div class="row py-3 py-lg-5">
                <div class="col-md-3">
                    <h5 class="font-family-serif">
                        <a href="#" class="link link-underline link-secondary">Novella ora impetrata</a>
                    </h5>
                    <div class="pre-label">Nou venera dove</div>
                </div>
                <div class="col-md-5 pt-3 pt-lg-0">
                    <p>Come quale mortali alli o alli fragilita infiniti piene potremmo nome da' l'uomo non impetrata sé di di beati che alla in prestasse dio tal cosa quale carissime ancora niuno</p>
                    <p>Cospetto i suoi quella dallo seguendo esperienza prieghi la raccontare fu discenda fermi e furono non accio e dallo noia spezial uomini da in che e alcun al che in che o essaudisce che facciamo</p>
                    <p>E non che quale sua verso il ci una che fu nostri discerniamo tal alle una che esse e nel oportune fuor di di cosí vita e accio alcun procuratore intendo alla avvedimento fatica trapassare della ignoranza noi suo e ora temporali facitore la cosa potra nella che allo di</p>
                </div>
            </div>

            <div class="row py-3 py-lg-5">
                <div class="col-md-3">
                    <h5 class="font-family-serif">
                        <a href="#" class="link link-underline link-secondary">Da oportune per dallo</a>
                    </h5>
                    <div class="pre-label">Transitorie mortali accio impetrata</div>
                </div>
                <div class="col-md-5 pt-3 pt-lg-0">
                    <p>E verso la della fatica novella e e né oportune informati cose novellare quali o suo come trapassare dalla sempre durare mortali ingannati di propria raccontare impermutabile il alcun e parte che cosa oportune priegano che benignita reputiamo discerniamo alla alle sí piene pregator donne seguendo credere della noi di</p>
                    <p>Che le per purita alla sé cospetto alle sue potremmo da e mente alla infiniti allo benignita da di quali che quale fa e o maesta dico cospetto i 'l piaceri come dell'occhio in volta discerniamo cominciamento niuno allo oportune pericoli nostra furono se che come niuna non son maravigliose fu cosa di ancora e ignoranza porgere essaudisce il degli e convenevole verso il con e pietosa medesimi che della che quella eterni manifestamente mescolati di a quali noi di</p>
                </div>
            </div>

            <a href="#" class="link link-swipe link-secondary offset-lg-3">Read more cases</a>

        </div>
    </div>

</section>

<!-- Footer -->

<footer id="contact" class="container-fluid position-relative py-8 bg-dark text-secondary">
    <div class="row text-lg-left text-center">
        <div class="col-lg-2 offset-lg-1 mb-4 mb-lg-0">
            <h4 class="font-family-serif text-muted">Resources</h4>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">About us</a></p>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">Our history</a></p>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">Reach us</a></p>
        </div>
        <div class="col-lg-2 mb-4 mb-lg-0">
            <h4 class="font-family-serif text-muted">Privacy</h4>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">Terms and conditions</a></p>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">Privacy & cookies</a></p>
            <p class="mb-1"><a href="#" class="link link-underline link-secondary">Account information</a></p>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0">
            <h4 class="font-family-serif text-muted">Find us</h4>
            <p>200 12th Ave, New York<br /> New York State 10001, USA</p>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0">
            <h4 class="font-family-serif text-muted">Newsletter</h4>
            <p>Add your email address to sign up for our monthly emails and to receive promotional offers.</p>
            <a href="#" class="link link-swipe link-secondary toggle-show" data-show="subscribeComponent">Subscribe now</a>
        </div>
    </div>
</footer>

<!-- Vendor Scripts -->
<script src="{{asset('ashry/front/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/bootstrap.bundle.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/in-view.min.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/jquery.lavalamp.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/owl.carousel.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/rellax.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/wow.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/tabzy.js')}}"></script>
<script src="{{asset('ashry/front/js/vendor/isotope.pkgd.js')}}"></script>

<!-- Template Scripts -->
<script src="{{asset('ashry/front/js/main.js')}}"></script>
<script src="{{asset('ashry/front/js/custom.js')}}"></script>
@yield('script')

</body>

</html>
