@extends('layouts.admin')
@section('title', 'Sections')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/css/plugins/forms/wizard.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('ashry/back/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
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
                            {{trans('cpanel/sections.Create Section')}}
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{trans('cpanel/sections.All Sections')}}
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
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Zero configuration</h4>
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
                        <div class="card-body card-dashboard">
                            <p class="card-text">DataTables has most features </p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th style="width: 7%">Num</th>
                                        <th>Name</th>
                                        <th style="width: 25%">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section->name }}</td>
                                        <td>
                                            {{-- {{route('processingFee.edit',$processingFee->id)}} --}}
                                            <a href="{{route('admin.section.edit', $section->id)}}"
                                               class="btn btn-info btn-sm" role="button"
                                               aria-pressed="true">
                                                {{trans('cpanel/students.Edit')}}
                                            </a>

                                            &nbsp; &nbsp; &nbsp; &nbsp;

                                            {{--
                                            <a href="{{route('processingFee.edit',$processingFee->id)}}"
                                               class="btn btn-danger btn-sm" role="button"
                                               aria-pressed="true">
                                                {{trans('cpanel/students.Delete')}}
                                            </a>
                                            --}}
                                            <button type="button"
                                                    class="btn btn-danger btn-sm"
                                                    data-toggle="modal"
                                                    data-target="#Delete_Section{{$section->id}}">
                                                <i class="ft-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @include('dashboard.sections.delete')
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Num</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop

@section('script')
    <script src="{{asset('ashry/back/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>

    <script src="{{asset('ashry/back/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('ashry/back/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>

    @toastr_js
    @toastr_render
@endsection


