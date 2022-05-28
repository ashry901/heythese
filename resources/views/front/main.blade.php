@extends('layouts.site')
@section('title', 'main')

@section('style')

@endsection

@section('slider')



@endsection

@section('content')

<!-- Hero -->
<section class="bg-primary-gradient text-white p-0 overflow-hidden position-relative">
    <div class="container-fluid">

        <!-- Hero content -->
        <div class="rellax-cover rellax-cover-bottom scroll-opacity">
            <div class="row row-mobile justify-content-between align-items-center no-gutters">
                <div class="col-6 col-lg-3 px-1 px-lg-2 rellax rellax-move"
                     data-rellax-speed="3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="t-0">
                            <div class="itemx">
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0444.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0441.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1 px-lg-2 rellax rellax-move" data-rellax-speed="2">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <div class="t-3">
                            <div class="itemx">
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0442.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0442.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 px-1 px-lg-2 rellax rellax-move" data-rellax-speed="4">
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <div class="t-1">
                            <div class="itemx">
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0443.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0443.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 px-1 px-lg-2 rellax rellax-move" data-rellax-speed="1">
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <div class="t-0">
                            <div class="itemx">
                                <img src="{{asset('ashry/front/assets/images/general/IMG_0441.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />

                                <img src="{{asset('ashry/front/assets/images/general/IMG_0444.jpg')}}"
                                     alt="..." class="br-sm w-100 mb-2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero text -->
        <div class="row justify-content-center align-items-center align-items-lg-start pt-lg-8 vh-100">

            <div class="col-md-8 text-center">

                <div class="wow fadeInDown" data-wow-delay="0.3s">
                    <div class="text-center mb-4 rellax" data-rellax-speed="-1">
                    {{--<img src="{{asset('ashry/front/assets/svg/reveal-symbol.svg')}}" height="120" />--}}
                        <img src="{{asset('ashry/front/assets/images/logo/logompns3-removebg.png')}}"
                             alt="..." height="120">
                    </div>

                </div>

                <div class="wow fadeInDown" data-wow-delay="0.4s">
                    <h1 class="display-4 mb-3 mb-lg-5 rellax" data-rellax-speed="-2">
                        Siriussync <b>Siriussync </b> Siriussync
                    </h1>
                </div>

                <div class="d-none d-md-block">
                    <div class="wow fadeInDown" data-wow-delay="0.5s">
                        <p class="lead mb-5 rellax" data-rellax-speed="-2.2">
                            Siriussync a new level
                            <br class="d-none d-lg-inline">
                            Any user who wants to sign up at Siriussync
                        </p>
                    </div>
                </div>

                <div class="rellax pt-3" data-rellax-speed="-2.5">
                    <span class="wow fadeInDown" data-wow-delay=".6s">
                        <a href="#" class="btn btn-rounded btn-light px-4">

                            Get Started
                        </a> &nbsp;
                    </span>
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

<!-- Templates -->
<section class="bg-white">
    <div class="container-fluid" id="templates">
        <div class="row gutters-mobile pt-lg-5">

            @isset($categories)
                @foreach($categories as $category)
                    <div class="col-6 col-lg-2" data-rellax-speed="1">
                        <div class="mb-3 wow fadeInUp" data-wow-delay="0.0s">
                            <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">

                                <a href="#">
                                    {{--{{$category->photo}}--}}
                                    <img src="{{asset('ashry/front/assets/images/layouts/layout-clothing.png')}}"
                                         class="card-img-top" alt="...">
                                    <p class="lead text-center">{{$category->name}}</p>
                                </a>

                            </div>

                        </div>
                    </div>
                @endforeach
            @endisset

            {{--
            <div class="col-6 col-lg-2" data-rellax-speed="-1">
                <div class="mb-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box box-image box-hover br-sm mb-3 shadow-sm bg-gray px-3 pt-3 px-lg-5 pt-lg-5">
                        <a href="{{ route('hotel') }}" >
                            <img src="{{asset('ashry/front/assets/images/layouts/layout-hotel.png')}}"
                                 class="card-img-top" alt="...">
                            <p class="lead text-center">Hotel</p>
                        </a>
                    </div>

                </div>
            </div>
            --}}



        </div>
    </div>
</section>

<!-- Intro -->
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center rellax rellax-move" data-rellax-speed="0.5">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="display-4">Why <b>We are different</b> Than others?</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an
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
                        <h2 class="display-4"><b>Lorem Ipsum</b> are improving</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="rellax rellax-move" data-rellax-speed="-0.3">
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pt-5 pt-lg-0">
                            <img src="{{asset('ashry/front/assets/images/demo/demo-mobile.jpg')}}" alt="..."
                                 class="img-fluid">
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
                        <h2 class="display-4"><b>Desktop Remains</b> Very Important</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to
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
                    <p class="lead">Lorem Ipsum</p>
                </div>
            </div>
            <div class="col-lg-4 py-4 py-lg-8">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="display-2">50<sup>+</sup></div>
                    <p class="lead">Lorem Ipsum</p>
                </div>
            </div>
            <div class="col-lg-4 py-4 py-lg-8">
                <div class="wow fadeInRight" data-wow-delay="0.5s">
                    <div class="display-2">30<sup>+</sup></div>
                    <p class="lead">Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile examples -->
<section class="bg-dark text-white overflow-hidden position-relative wow fadeIn"
         data-wow-delay="0.5">
    <div class=" w-100 mx-2">
        <div class="rellax-cover rellax-cover-center">
            <div class="row align-items-center gutters-mobile">
                <div class="col-4 col-lg-2 rellax rellax-move" data-rellax-speed="-0.5">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/1.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/2.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/3.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                </div>
                <div class="col-4 col-lg-2 rellax rellax-move" data-rellax-speed="0.5">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/4.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/5.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/6.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/7.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                </div>
                <div class="col-4 col-lg-2 rellax rellax-move" data-rellax-speed="0.85">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/8.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/9.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/10.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="">
                </div>
                <div class="d-none d-lg-inline col-lg-2 rellax rellax-move" data-rellax-speed="-0.5">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/11.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/12.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/13.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/14.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                </div>
                <div class="d-none d-lg-inline col-lg-2 rellax rellax-move" data-rellax-speed="0.85">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/15.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/16.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/17.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                </div>
                <div class="d-none d-lg-inline col-lg-2 rellax rellax-move" data-rellax-speed="-0.25">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/18.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/19.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/20.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                    <img src="{{asset('ashry/front/assets/images/layouts/mobile/21.png')}}"
                         class="img-fluid mb-2 mb-lg-4" alt="...">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center pt-lg-8 vh-100">
                <div class="col-md-8 col-xl-6 text-center">
                    <span class="wow fadeIn" data-wow-delay="0.5s">
                        <img src="{{asset('ashry/front/assets/svg/mobile-usage.svg')}}"
                             alt="..." class="img-fluid">
                    </span>
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
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it
                    </p>
                </div>
                <div class="wow fadeInUp pt-5" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-rounded btn-outline-dark px-4">
                        Send request
                    </a>
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
                    <p class="lead mb-3 mb-lg-5">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it
                    </p>
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
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c1.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c2.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c3.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="-0.5">
                            <div class="t-2">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c4.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c5.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c6.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c7.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="0.8">
                            <div class="t-1">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c8.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c9.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c10.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="rellax rellax-move" data-rellax-speed="0.8">
                            <div class="t-2">
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c11.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c12.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c13.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                                <div class="br-sm mb-3 p-1 bg-white shadow-sm">
                                    <img src="{{asset('ashry/front/assets/images/layouts/components/c14.jpg')}}"
                                         class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<br><br>
@endsection



@section('script')

@endsection
