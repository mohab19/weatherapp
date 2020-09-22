@extends('admin.layouts.head')

@section('title')
    <title>@lang('main.news')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('main.news')
                    <small>@lang('main.view')</small>
                </h1>
                @auth('admin')
                <a href="{{ URL( app()->getLocale() . '/admin/news/create') }}" class="btn btn-primary" id="sample_editable_1_new" style="float: right;">
                    @lang('news.add_new')
                    <i class="fa fa-plus"></i>
                </a>
                @endauth
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">
                                    @lang('main.dashboard')
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('main.news')</span></li>
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
                        <div class="card-body">
                            <div class="alert">
                                <ul id="alert-div" style="margin-bottom: 0px;">

                                </ul>
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered second text-center" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>@lang('news.id')</th>
                                            <th>@lang('news.category')</th>
                                            <th>@lang('news.title_ar')</th>
                                            <th>@lang('news.title_ar')</th>
                                            <th>@lang('news.image')</th>
                                            <th>@lang('news.writer')</th>
                                            <th>@lang('news.description')</th>
                                            <th>@lang('news.created_at')</th>
                                            <th>@lang('news.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($news as $key => $value)
                                            <tr class="delete_{{$value->id}}">
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->Category["name_".Lang::locale()]}}</td>
                                                <td>{{$value->title_ar}}</td>
                                                <td>{{$value->title_en}}</td>
                                                <td>
                                                    <a data-fancybox="images" href="{{asset('images/news/' . $value->image)}}"><img class="img-fluid" src="{{asset('images/news/' . $value->image)}}" width="800" length="660"></a>
                                                </td>
                                                <td>{{$value->writer}}</td>
                                                <td>{{substr($value->description, 0, 255)}}...</td>
                                                <td>{{$value->created_at}}</td>
                                                <td>
                                                    @auth('admin')
                                                    <a class="btn btn-success" href="{{URL( app()->getLocale() . '/admin/news/' . $value->id . '/edit')}}" style="padding: 5px 10px;">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span class="delete_this btn btn-danger" data-id="{{$value->id}}" data-type="News" data-url="news" style="padding: 5px 10px;">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    @endauth
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>@lang('news.id')</th>
                                            <th>@lang('news.category')</th>
                                            <th>@lang('news.title_ar')</th>
                                            <th>@lang('news.title_ar')</th>
                                            <th>@lang('news.image')</th>
                                            <th>@lang('news.writer')</th>
                                            <th>@lang('news.description')</th>
                                            <th>@lang('news.created_at')</th>
                                            <th>@lang('news.action')</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
