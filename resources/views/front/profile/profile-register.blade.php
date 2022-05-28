@extends('layouts.site')
@section('title', 'profile-register')

@section('style')

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

<section class="pt-0">

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="br-sm pr-lg-4 mt-xl-n6">
                    <div class="py-3 py-lg-4">
                        <div class="row align-items-center justify-content-center no-gutters text-lg-center">
                            <div class="col-9 col-lg-12">
                                <div class="d-flex flex-lg-column align-items-center">
                                    <div class="pr-3 pr-lg-0">
                                        <img src="{{asset('ashry/front/assets/images//demo/user-5.jpg')}}"
                                             alt="..." class="rounded-circle mb-lg-2 img-fluid"
                                             style="width: 50px;">
                                    </div>
                                    <div>
                                        <div class="h5 m-0">
                                            {{ Auth::user()->name }}
                                        </div>
                                        <div class="text-muted">
                                            {{ Auth::user()->email }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-lg-none text-right">
                                <button class="btn btn-icon btn-primary btn-sm toggle-show"
                                        data-show="open-profile-sidebar">
                                    <i class="icon icon-text-align-center"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar sidebar-mobile" id="open-profile-sidebar">
                        <div class="sidebar-content">

                            <div class="sidebar-header clearfix d-lg-none">
                                <button type="button" class="close toggle-show p-3"
                                        data-show="open-profile-sidebar" aria-label="Close">
                                    <i class="icon icon-cross font-size-lg"></i>
                                </button>
                            </div>

                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Account</label>
                                    </li>

                                    <li class="list-group-item  active">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-user mr-2"></i>
                                                    <span>Profile account</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-cart mr-2"></i>
                                                    <span>Paymnet methods</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-alarm mr-2"></i>
                                                    <span>Notifications</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                            <!-- Profile dashboard links -->
                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Dashboard</label>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span></i>
                                                    <span>Character Concept</span>
                                                </span>
                                                <span class="badge  badge-pill">1</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span></i>
                                                    <span>Connections</span>
                                                </span>
                                                <span class="badge  badge-pill">9</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Profile reset -->
                            <div class="mb-4 px-4 p-lg-0">
                                <ul class="list-group list-group-clean">

                                    <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                        <label class="pre-label">Access</label>
                                    </li>

                                    <li class="list-group-item ">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-lock mr-2"></i>
                                                    <span>Reset password</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="icon icon-enter-down mr-2"></i>
                                                    <span>Sign out</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9 pt-lg-4">

                <h2 class="pre-label font-size-base">
                    Select From Roles
                </h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.store') }}"
                      enctype="multipart/form-data">
                    @csrf


{{--                    <input type="hidden" name="user_id" value=""--}}
{{--                           class="form-control form-control-simple">--}}


                    <div class="form-group">
                        <label class="pre-label pre-label-sm" for="account-country">
                            Section
                        </label>

                        <select class="custom-select form-control-simple"
                                id="account-country"
                                name="section_id">
                            <option value="">Select Section</option>

                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">
                                    {{ $section->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label class="pre-label pre-label-sm" for="account-country">Gender</label>
                        <select class="custom-select form-control-simple"
                                id="account-country"
                                name="gender_id">
                            <option value="">Select Gender</option>
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}">
                                    {{ $gender->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="pre-label pre-label-sm" for="account-country">Country</label>
                        <select class="custom-select form-control-simple"
                                name="nationalitie_id"
                                id="account-country">
                            <option value="">Select country</option>
                            @foreach($nationals as $nal)
                                <option value="{{ $nal->id }}">
                                    {{ $nal->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label class="pre-label pre-label-sm" for="account-country">
                            Phone
                        </label>
                        <input type="text"
                               value="" name="phone"
                               class="form-control form-control-simple"
                               placeholder="Please Enter : *">
                    </div>


                    <div class="accordion br-sm" id="accordionDeliveryExample">

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header p-3 p-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1"
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseOne"
                                                   aria-controls="collapseOne">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio1">
                                                <span class="h5 m-0">System Integrator</span>
                                                <br />
                                                <small></small>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="collapseOne" class="collapse pt-0"
                                 aria-labelledby="customRadio1"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck1"
                                               name="category[]"
                                               value="Consultation">
                                        <label class="custom-control-label" for="customExampleCheck1">
                                            Consultation
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck2"
                                               name="category[]"
                                               value="System Design Drawings">
                                        <label class="custom-control-label" for="customExampleCheck2">
                                            System Design & Drawings
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck10"
                                               name="category[]"
                                               value="Equipment Supply">
                                        <label class="custom-control-label" for="customExampleCheck10">
                                            Equipment Supply
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck11"
                                               name="category[]"
                                               value="Installation Implementation">
                                        <label class="custom-control-label" for="customExampleCheck11">
                                            Installation & Implementation
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck12"
                                               name="category[]"
                                               value="Training Support">
                                        <label class="custom-control-label" for="customExampleCheck12">
                                            Training & Support
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck15"
                                               name="category[]"
                                               value="Project Management">
                                        <label class="custom-control-label" for="customExampleCheck15">
                                            Project Management
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck13"
                                               name="category[]"
                                               value="Maintenance">
                                        <label class="custom-control-label" for="customExampleCheck13">
                                            Maintenance
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header p-3 p-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2"
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseTwo"
                                                   aria-controls="collapseTwo">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio2">
                                                <span class="h5 m-0">Service Provider</span>
                                                <br />
                                                <small></small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="h4 m-0 pt-3 pt-lg-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse pt-0"
                                 aria-labelledby="customRadio2"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck14"
                                               name="category[]"
                                               value="Video Equipment Rentals">
                                        <label class="custom-control-label" for="customExampleCheck14">
                                            Video Equipment Rentals
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck16"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck16">
                                            Audio Equipment Rentals
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck17"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck17">
                                            Lighting Equipment Rentals
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck18"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck18">
                                            Video Walls Rentals
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck19"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck19">
                                            SNG Services
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck20"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck20">
                                            OB Services
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck21"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck21">
                                            Live Streaming Services
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck22"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck22">
                                            Live Event Services
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck23"
                                               name="category[]"
                                               value="Video">
                                        <label class="custom-control-label" for="customExampleCheck23">
                                            Media Production & Distribution
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header p-3 p-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3"
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseThree"
                                                   aria-controls="collapseThree">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio3">
                                                <span class="h5 m-0">Production / Rental House</span>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="h4 m-0 pt-3 pt-lg-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse pt-0"
                                 aria-labelledby="customRadio3"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Possimus, consectetur ullam dicta explicabo
                                    sit corrupti incidunt
                                    exercitationem optio quos doloremque neque placeat
                                    recusandae obcaecati ab quidem commodi, eaque
                                    earum unde?
                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header p-3 p-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4"
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseFour"
                                                   aria-controls="collapseFour">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio4">
                                                <span class="h5 m-0">Free Lancer</span>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="h4 m-0 pt-3 pt-lg-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="collapse pt-0"
                                 aria-labelledby="customRadio4"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Possimus, consectetur ullam dicta explicabo
                                    sit corrupti incidunt
                                    exercitationem optio quos doloremque neque placeat
                                    recusandae obcaecati ab quidem commodi, eaque
                                    earum unde?
                                </div>
                            </div>
                        </div>

                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header p-3 p-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6"
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseSix"
                                                   aria-controls="collapseSix">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio6">
                                                <span class="h5 m-0">General User</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="collapseSix" class="collapse pt-0"
                                 aria-labelledby="customRadio6"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck30"
                                               name="category[]"
                                               value="TV Station">
                                        <label class="custom-control-label" for="customExampleCheck30">
                                            TV Station
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck31"
                                               name="category[]"
                                               value="University">
                                        <label class="custom-control-label" for="customExampleCheck31">
                                            University
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck32"
                                               name="category[]"
                                               value="Media Hub">
                                        <label class="custom-control-label" for="customExampleCheck32">
                                            Media Hub
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck33"
                                               name="category[]"
                                               value="Procurement">
                                        <label class="custom-control-label" for="customExampleCheck33">
                                            Procurement
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck34"
                                               name="category[]"
                                               value="Sales">
                                        <label class="custom-control-label" for="customExampleCheck34">
                                            Sales
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck35"
                                               name="category[]"
                                               value="Public Relation">
                                        <label class="custom-control-label" for="customExampleCheck35">
                                            Public Relation
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-checkbox-primary py-2">
                                        <input type="checkbox"
                                               class="custom-control-input"
                                               id="customExampleCheck36"
                                               name="category[]"
                                               value="Marketing">
                                        <label class="custom-control-label" for="customExampleCheck36">
                                            Marketing
                                        </label>
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
                                                   name="customRadio"
                                                   class="custom-control-input"
                                                   data-toggle="collapse"
                                                   data-target="#collapseFive"
                                                   aria-controls="collapseFive">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio5">
                                                <span class="h5 m-0">Others User</span>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="h4 m-0 pt-3 pt-lg-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFive" class="collapse pt-0"
                                 aria-labelledby="customRadio5"
                                 data-parent="#accordionDeliveryExample">
                                <hr class="m-0">
                                <div class="card-body">

                                    <input type="text"
                                           class="form-control form-control-simple"
                                           placeholder="Please Enter : *"
                                           name="category[]"
                                           value="">

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="py-3">
                        <div class="row align-items-center no-gutters">
                            <div class="col-6">

                            </div>
                            <div class="col-6 text-right">

                                <button type="submit" class="btn btn-primary btn-rounded px-lg-5">
                                    Proceed Your Account
                                </button>

                            </div>
                        </div>
                    </div>

                </form>

                <h2 class="pre-label font-size-base">Avatar settings</h2>

                <div class="bg-white p-4 p-lg-5 br-sm shadow-sm mb-3 mb-lg-5">
                    <div>
                        <div class="media d-block d-sm-flex align-items-center">
                            <img src="{{asset('ashry/front/assets/images//demo/user-5.jpg')}}"
                                 class="d-block rounded-circle mx-auto mb-3 mb-sm-0"
                                 width="110" alt="John Doe">
                            <div class="media-body pl-sm-3 text-center text-sm-left">
                                <button class="btn btn-rounded btn-outline-primary btn-sm px-3 mb-2"
                                        type="button">
                                    <i class="icon icon-sync"></i> Change avatar
                                </button>
                                <div>
                                    <small class="text-muted">
                                        Upload JPG, GIF or PNG image. 100 x 100
                                        required.</small>
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

@stop
