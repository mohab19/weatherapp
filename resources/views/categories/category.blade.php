@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
@endpush
@section('content')
<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="sat-map text-center">
            <h2>@lang('categories.forecasting') {{$category->name}}</h2>
            <!--next & prev button-->
            <div class="">
                <div id="loading" style="visibility: hidden;">
                    <div id="loading_1" class="loading"></div>
                </div>
                <div class="buttons-toward d-flex">
                    <button type="button" id="still">@lang('categories.still')</button>

                    <button type="button" id="animate">@lang('categories.animated')</button>
                </div>
                <div id="s" style="display: none;"></div>
                <div id="all">
                    @if($category->Types)
                    <div>
                        <select class="form-control" style="width:100%;height:29.6;direction:rtl;" id="script">
                            @foreach($category->Types as $key => $type)
                            @php
                            $trans      = array(
                                "{date('Y/m/d/')}" => date("Y/m/d/"),
                                "{+1}"             => ($key+1)*1,
                                "{+6}"             => sprintf('%02d', ($key+1)*6),
                            );
                            @endphp
                            <option value="{{strtr($type->basic_url, $trans)}}">{{$type['name_'.Lang::Locale()]}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="buttons-toward d-flex">
                        <div>
                            <button type="button" id="down">@lang('categories.previous')</button>
                        </div>
                        <div>
                            <select class="form-control" id="hours">
                                @for($i = 1; ($i*$category->time_interval) <= ($category->time_limits*24); $i++)
                                <option value="{{sprintf('%02d', ($i*($category->time_interval)))}}{{$category->url_call}}">+{{$i*$category->time_interval}} @lang('categories.hours')</option>
                                @endfor
                            </select>
                        </div>
                        <div>
                            <button type="button" id="up">@lang('categories.next')</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---map-->
            <section class="map">
                <div class="map-base">
                    <img id="img" src="" alt="map" onload="hideloading()">
                </div>
                <div class="map-cities">
                    <img id="map2" src="{{asset('img/forcasting/overlayermap.png')}}" alt="map" class="hide">
                </div>
                <!--button hide cities-->
                <button style="height:25;width:40%" id="bt1" onclick="setVisibility('hide');change();" type="button" value="إخفاء الخريطة">إخفاء أسماء المدن</button>
            </section>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{asset('js/function.js')}}"></script>
@endpush
