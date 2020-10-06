@extends('admin.layouts.head')
@section('StyleSheets')
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/select.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endsection
@section('title')
    <title>@lang('radars.radars')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('radars.radars')
                    <small>@lang('main.create')</small>
                </h1>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('radars.radars')</span></li>
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
                        <h5 class="card-header">@lang('radars.add_new')</h5>
                        <div class="card-body">
                            <div class="alert alert-dismissible" id="notification" style="display: none;">
                                <ul style="margin-bottom: 0;">

                                </ul>
                            </div>
                            <form id="form">
                                @csrf
                                <input type="hidden" id="form_name" value="Radar" data-id="radars">
                                <input type="hidden" id="route" value="{{route('radars.store', app()->getLocale())}}">
                                <div class="form-group">
                                    <label for="title" class="col-form-label">@lang('radars.title')</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">@lang('radars.name')</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="basic_url" class="col-form-label">@lang('radars.basic_url')</label>
                                    <input type="text" name="basic_url" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="url_call" class="col-form-label">@lang('radars.url_call')</label>
                                    <input type="text" name="url_call" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="time_format" class="col-form-label">@lang('radars.time_format')</label>
                                    <input type="text" name="time_format" class="form-control" placeholder="Y-m-d H:i:s">
                                </div>
                                <div class="form-group">
                                    <label for="sprint_digits" class="col-form-label">@lang('radars.sprint_digits')</label>
                                    <input type="text" name="sprint_digits" class="form-control" placeholder="001">
                                </div>
                                <div class="form-group">
                                    <label for="time_interval" class="col-form-label">@lang('radars.time_interval')</label>
                                    <input type="number" name="time_interval" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="time_limits" class="col-form-label">@lang('radars.time_limits')</label>
                                    <input type="number" name="time_limits" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="start_from" class="col-form-label">@lang('radars.start_from')</label>
                                    <input type="number" name="start_from" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label" for="customFile">@lang('news.image')</label>
                                    <input type="file" name="image" onchange="readURL(this)" class="form-control" id="customFile">
                                </div>

                                <div class="form-group col-sm-6 mt-4">
                                    <div class="image" style="display: none;">
                                        <img src="" width="200" height="180" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center pl-0 mt-3" style="float: right;">
                                    <button type="submit" class="btn btn-space btn-primary col-sm-4">@lang('main.save')</button>
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
