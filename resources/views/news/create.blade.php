@extends('admin.layouts.head')
@section('title')
    <title>@lang('news.news')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('news.news')
                    <small>{{ Lang::get('main.create') }}</small>
                </h1>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">{{ Lang::get('main.dashboard') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('news.news')</span></li>
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
                        <h5 class="card-header">@lang('news.add_new')</h5>
                        <div class="card-body">
                            <div class="alert alert-dismissible"  id="notification" style="display: none;">
                                <ul style="margin-bottom: 0;">

                                </ul>
                            </div>
                            <form id="form" class="row" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="route" value="{{route('news.store', app()->getLocale())}}">
                                <input type="hidden" id="form_name" value="News" data-id="news">
                                <div class="form-group col-sm-6">
                                    <label for="title_ar" class="col-form-label">@lang('news.title_ar')</label>
                                    <input type="text" name="title_ar" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="title_en" class="col-form-label">@lang('news.title_en')</label>
                                    <input type="text" name="title_en" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="writer" class="col-form-label">@lang('news.writer')</label>
                                    <input type="text" name="writer" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="description" class="col-form-label">@lang('news.description')</label>
                                    <textarea name="description" rows="3" cols="80" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="image_url" class="col-form-label">@lang('news.image_url')</label>
                                    <input type="text" name="image_url" class="form-control" required>
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

                                <div class="form-group col-sm-12 text-center mt-3">
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
