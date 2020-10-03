@extends('admin.layouts.head')
@section('StyleSheets')
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/select.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endsection
@section('title')
    <title>@lang('categories.categories')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('categories.categories')
                    <small>@lang('main.edit')</small>
                </h1>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('categories.categories')</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
                <!-- ============================================================== -->
                <!-- data table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">@lang('categories.edit')</h5>
                        <div class="card-body">
                            <div class="alert alert-dismissible" id="notification" style="display: none;">
                                <ul style="margin-bottom: 0;">

                                </ul>
                            </div>
                            <form id="form">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="form_name" value="Category" data-id="categories">
                                <input type="hidden" name="url" id="route" value="{{route('categories.update', [ app()->getLocale(), $category->id])}}">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">@lang('categories.name')</label>
                                    <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="basic_url" class="col-form-label">@lang('categories.basic_url')</label>
                                    <input type="text" name="basic_url" class="form-control" value="{{$category->basic_url}}">
                                </div>
                                <div class="form-group">
                                    <label for="url_call" class="col-form-label">@lang('categories.url_call')</label>
                                    <input type="text" name="url_call" class="form-control" value="{{$category->url_call}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="time_format" class="col-form-label">@lang('categories.time_format')</label>
                                    <input type="text" name="time_format" class="form-control" placeholder="Y-m-d H:i:s" value="{{$category->time_format}}">
                                </div>
                                <div class="form-group">
                                    <label for="sprint_digits" class="col-form-label">@lang('categories.sprint_digits')</label>
                                    <input type="text" name="sprint_digits" class="form-control" placeholder="001"  value="{{$category->sprint_digits}}">
                                </div>
                                <div class="form-group">
                                    <label for="time_interval" class="col-form-label">@lang('categories.time_interval')</label>
                                    <input type="number" name="time_interval" class="form-control" value="{{$category->time_interval}}">
                                </div>
                                <div class="form-group">
                                    <label for="time_limits" class="col-form-label">@lang('categories.time_limits')</label>
                                    <input type="number" name="time_limits" class="form-control" value="{{$category->time_limits}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label" for="customFile">@lang('news.image')</label>
                                    <input type="file" name="image" onchange="readURL(this)" class="form-control" id="customFile">
                                </div>

                                <div class="form-group col-sm-6 mt-4">
                                    <div class="image">
                                        <img src="{{url('images/categories').'/'.$category->image}}" width="200" height="180" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center pl-0 mt-3" style="float: right;">
                                    <button type="submit" class="btn btn-space btn-primary col-sm-4">@lang('main.edit')</button>
                                    <a href="{{url()->previous()}}"><span class="btn btn-space btn-secondary col-sm-4">@lang('main.cancel')</span></a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end data table  -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
</div>
@endsection
