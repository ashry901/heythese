@extends('layouts.admin')
@section('title', 'Edit Subsection')

@section('style')
    @toastr_css
@endsection


@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h2 class="content-header-title">
            {{trans('cpanel/teacher.Teachers')}}
        </h2>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard')}}">
                            {{trans('cpanel/teacher.Dashboard')}}
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{route('admin.section.create')}}">
                            {{trans('cpanel/teacher.Teachers')}}
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{trans('cpanel/teacher.All Teachers')}}
                    </li>

                </ol>
            </div>
        </div>
    </div>

    <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right">
            <a href=""
               class="btn btn-info btn-md round" role="button"
               aria-pressed="true">
                {{ trans('cpanel/teacher.All Teachers') }}
            </a>
        </div>
    </div>

</div>

<div class="content-body">
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">
                            Project Info
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>This is the most basic</p>
                            </div>

                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>
                                        Personal Info
                                    </h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">First Name</label>
                                                <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput2">Last Name</label>
                                                <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')
    @toastr_js
    @toastr_render
@endsection

