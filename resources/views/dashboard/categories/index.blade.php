@extends('layouts.admin')
@section('title', 'Main Categories')
@section('content')


<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Circle Style</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{route('admin.categories.create')}}">
                            Add New Category
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Main Categories</h4>
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
                            <p class="card-text">
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th style="width: 3%">Num.</th>
                                        <th>Category Name</th>
                                        <th>Main Category</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->_parent->name ?? '--'}}</td>
                                                <td>{{$category->slug}}</td>
                                                <td>{{$category->getActive()}}</td>
                                                <td>
                                                    <img style="width: 100px; height: 75px;"
                                                         src="{{$category->photo}}">
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{route('admin.categories.edit', $category->id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                        <a href="{{route('admin.categories.delete', $category->id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th style="width: 3%">Num.</th>
                                        <th>Category Name</th>
                                        <th>Main Category</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </section>
</div>

@stop
