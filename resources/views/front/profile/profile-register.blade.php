@extends('layouts.site')
@section('title', 'profile-register')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop

@section('content')

<!-- Breadcrumbs -->
<header class="header header-main header-sticky bg-dark">
    <div class="pb-2 py-lg-3">
        <div class="container text-light">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-0 h4">Complete Profile</h2>
                    <small class="pre-label d-none d-lg-block">
                        Complete Profile
                    </small>
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

<!-- SVG Divider -->
<section class="divider bg-dark">
    <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
        <path d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z" transform="translate(0 -1)" />
        <path d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z" transform="translate(0 -73.005)" fill-opacity=".2" />
        <path d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z" transform="translate(0 -73.347)" fill-opacity=".4" />
    </svg>
</section>

<!-- Checkout delivery -->
<section class="pt-0">

    <!-- Checkout steps -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="" >

                    <!-- Checkout registration -->
                    <div class="card bg-white shadow-sm mb-2">

                        <div class="card-header py-4 bg-white">

                            <h2 class="h4 mb-0">Complete Profile</h2>
                        </div>

                        <div class="">
                            <div class="card-body p-0">
                                <hr class="m-0">
                                <div class="p-4 p-md-6">


                                    <form class="form" method="post"
                                          action="{{ route('profile-store') }}"
                                          autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">

                                                            <h2 class="pre-label font-size-base">
                                                                Select Lorem Ipsum
                                                            </h2>

                                                            <!-- Delivery oneday shipping -->
                                                            <div class="accordion br-sm" id="accordionDeliveryExample">

                                                                {{--
                                                                <div class="card card-fill mb-3 shadow-sm rounded">
                                                                    <div class="card-header p-3 p-md-5">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" id="customRadio4"
                                                                                           name="customRadio"
                                                                                           class="custom-control-input"
                                                                                           data-toggle="collapse"
                                                                                           data-target="#collapseOne"
                                                                                           aria-controls="collapseOne">

                                                                                    <label class="custom-control-label pl-2 pl-lg-4"
                                                                                           for="customRadio4">
                                                                                        <span class="h5 m-0">System Integrator</span>
                                                                                        <br />
                                                                                        <small>System Integrator</small>
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 text-right">
                                                                                <div class="h4 m-0 pt-3 pt-lg-0">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="collapseOne" class="collapse pt-0"
                                                                         aria-labelledby="customRadio1"
                                                                         data-parent="#accordionDeliveryExample">
                                                                        <hr class="m-0">
                                                                        <div class="card-body">
                                                                            <div class="col-md-12">

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck30">
                                                                                    <label class="custom-control-label" for="customExampleCheck30">
                                                                                        Broadcast Integrator
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck31">
                                                                                    <label class="custom-control-label" for="customExampleCheck31">
                                                                                        Audio Visual Integrator
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck32">
                                                                                    <label class="custom-control-label" for="customExampleCheck32">
                                                                                        IT Integrator
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck33">
                                                                                    <label class="custom-control-label" for="customExampleCheck33">
                                                                                        TI Otheus Specify
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card card-fill mb-3 shadow-sm rounded">
                                                                    <div class="card-header p-3 p-md-5">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" id="customRadio5"
                                                                                           name="customRadio" class="custom-control-input"
                                                                                           data-toggle="collapse" data-target="#collapseTwo"
                                                                                           aria-controls="collapseTwo">
                                                                                    <label class="custom-control-label pl-2 pl-lg-4" for="customRadio5">
                                                                                        <span class="h5 m-0">Service Provider</span>
                                                                                        <br />
                                                                                        <small>Service Provider</small>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="h4 m-0 pt-3 pt-lg-0">
                                                                                    Service Provider
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapseTwo" class="collapse pt-0"
                                                                         aria-labelledby="customRadio2"
                                                                         data-parent="#accordionDeliveryExample">
                                                                        <hr class="m-0">

                                                                        <div class="card-body">
                                                                            <div class="col-md-12">

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck5">
                                                                                    <label class="custom-control-label" for="customExampleCheck5">
                                                                                        Project Consultation

                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck6">
                                                                                    <label class="custom-control-label" for="customExampleCheck6">
                                                                                        Project Design
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck7">
                                                                                    <label class="custom-control-label" for="customExampleCheck7">
                                                                                        Project Implementation
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck8">
                                                                                    <label class="custom-control-label" for="customExampleCheck8">
                                                                                        Project Commissioning
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck9">
                                                                                    <label class="custom-control-label" for="customExampleCheck9">
                                                                                        Training Suppout
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck10">
                                                                                    <label class="custom-control-label" for="customExampleCheck10">
                                                                                        Rental Company
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck11">
                                                                                    <label class="custom-control-label" for="customExampleCheck11">
                                                                                        Production With Live Broadcast
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck12">
                                                                                    <label class="custom-control-label" for="customExampleCheck12">
                                                                                        Others Specify
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card card-fill mb-3 shadow-sm rounded">
                                                                    <div class="card-header p-3 p-md-5">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" id="customRadio6" name="customRadio"
                                                                                           class="custom-control-input" data-toggle="collapse"
                                                                                           data-target="#collapseThree" aria-controls="collapseThree">
                                                                                    <label class="custom-control-label pl-2 pl-lg-4"
                                                                                           for="customRadio6">
                                                                                        <span class="h5 m-0">Free Lancer</span><br />
                                                                                        <small>Free Lancer</small>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="h4 m-0 pt-3 pt-lg-0">
                                                                                    Free Lancer
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapseThree" class="collapse pt-0" aria-labelledby="customRadio3"
                                                                         data-parent="#accordionDeliveryExample">
                                                                        <hr class="m-0">
                                                                        <div class="card-body">
                                                                            <div class="col-md-12">

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck13">
                                                                                    <label class="custom-control-label" for="customExampleCheck13">
                                                                                        Consultant
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck14">
                                                                                    <label class="custom-control-label" for="customExampleCheck14">
                                                                                        Techniclan
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck15">
                                                                                    <label class="custom-control-label" for="customExampleCheck15">
                                                                                        Broadcast Engineer
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck16">
                                                                                    <label class="custom-control-label" for="customExampleCheck16">
                                                                                        Electnicain
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck17">
                                                                                    <label class="custom-control-label" for="customExampleCheck17">
                                                                                        Sasten Designer & Architect
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck18">
                                                                                    <label class="custom-control-label" for="customExampleCheck18">
                                                                                        Audio Specialist
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck19">
                                                                                    <label class="custom-control-label" for="customExampleCheck19">
                                                                                        Elighting Specialist
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck20">
                                                                                    <label class="custom-control-label" for="customExampleCheck20">
                                                                                        IT Spelalist
                                                                                    </label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                                                                    <input type="checkbox" class="custom-control-input" id="customExampleCheck21">
                                                                                    <label class="custom-control-label" for="customExampleCheck21">
                                                                                        Others Specify
                                                                                    </label>
                                                                                </div>



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                --}}

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">
                                                            <div class="form-group">
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="sections_id">
                                                                    <option selected>
                                                                        Open this select menu
                                                                    </option>
                                                                    @foreach($sections as $section)
                                                                        <option value="{{ $section->id }}">
                                                                            {{ $section->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">
                                                            <div class="form-group">
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="gender_id">
                                                                    <option selected>
                                                                        Please Select Gender
                                                                    </option>
                                                                    @foreach($genders as $gender)
                                                                        <option value="{{ $gender->id }}">
                                                                            {{ $gender->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">

                                                            <div class="form-group">
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="nationalitie_id">
                                                                    <option selected>
                                                                        Please Select Country
                                                                    </option>
                                                                    @foreach($nationals as $nal)
                                                                        <option value="{{ $nal->id }}">
                                                                            {{ $nal->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">

                                                            <div class="form-group">
                                                                <input type="text" name="phone" id="phone"
                                                                       class="form-control form-control-simple"
                                                                       placeholder="Phone: *">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-right py-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit An Profile
                                                </button>
                                            </div>

                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>




</section>

@stop

@section('script')
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>--}}
@stop
