@extends('layouts.admin')
@section('title', 'Add Subsection')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css')}}">
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

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>

                            <form class="form repeater-default"
                                  action="{{ route('admin.subsections.store') }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div data-repeater-list="list_classes">
                                    <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-3 col-sm-12 form-group">
                                                <label for="Email">
                                                    {{ trans('cpanel/myclasses.Name Class Ar') }}
                                                </label>
                                                <input class="form-control" type="text" name="name" />
                                            </div>

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <label for="Email">
                                                    {{ trans('cpanel/myclasses.Name Class En') }}
                                                </label>
                                                <input class="form-control" type="text" name="name_class_en" />
                                            </div>

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <label for="Profession">
                                                    {{ trans('cpanel/myclasses.Name Grade') }}
                                                </label>
                                                <select id="Profession"
                                                        class="form-control"
                                                        name="section_id">
                                                    @foreach ($sections as $section)
                                                        <option value="{{ $section->id }}">
                                                            {{ $section->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                <button class="btn btn-danger" data-repeater-delete type="button">
                                                    <i class="bx bx-x"></i>
                                                    {{ trans('cpanel/myclasses.Delete') }}
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col p-0">
                                        <button class="btn btn-primary" data-repeater-create type="button">
                                            <i class="bx bx-plus"></i>
                                            {{ trans('cpanel/myclasses.Add Row') }}
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group float-right">
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
    <script>
        $('.repeater-default').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
    </script>

    <script src="{{asset('ashry/back/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('ashry/back/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>

    <script src="{{asset('ashry/back/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset('ashry/back/app-assets/js/scripts/forms/form-repeater.js')}}"></script>

    @toastr_js
    @toastr_render

@endsection
