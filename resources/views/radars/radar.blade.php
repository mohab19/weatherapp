@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
@endpush
@section('content')
<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="sat-map text-center">
            <h2>@lang('radars.forecasting') {{$radar->name}}</h2>
            <!--next & prev button-->
            <div class="mb-3">
                <div class="container">
                    <div class="buttons-toward d-flex row">
                        <button type="button" class="col-xs-12 btn-block" id="animate">@lang('radars.animated')</button>
                    </div>
                    @if($radar->Types)
                    <div class="row">
                        <select class="form-control col-xs-12" style="width:100%;height:29.6;direction:rtl;" id="script">
                            @foreach($radar->Types as $key => $type)
                            @php
                            $trans      = array(
                                "{date('Y/m/d/')}" => date("Y/m/d/"),
                                "{date('Ymd')}"    => date("Ymd"),
                                "{date('Ym')}"    => date("Ym"),
                                "{-date('Ymd')}"   => date("Ymd", strtotime('-1 day')),
                                "{+1}"             => ($key+1)*1,
                                "{+6}"             => sprintf('%02d', ($key+1)*6),
                            );
                            @endphp
                            @if(app()->getLocale() == 'ar')
                            <option value="{{strtr($type->basic_url, $trans)}}">{{$type['name_ar']}}</option>
                            @else
                            <option value="{{strtr($type->basic_url, $trans)}}">{{$type['name_en']}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="buttons-toward row">
                        <div class="col-md-4 col-xs-12">
                            <button type="button" class="btn-block" id="down">@lang('radars.previous')</button>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <select class="form-control text-center" id="hours">
                                @for($i = 1; ($i*$radar->time_interval) <= ($radar->time_limits*24); $i++)
                                @php
                                $trans      = array(
                                    "{date('Y/m/d/')}" => date("Y/m/d/"),
                                    "{date('Ymd')}"    => date("Ymd"),
                                    "{date('Ym')}"    => date("Ym"),
                                    "{-date('Ymd')}"   => date("Ymd", strtotime('-1 day')),
                                    "{+1}"             => ($i+1)*1,
                                    "{+6}"             => sprintf('%02d', ($i+1)*6),
                                );
                                @endphp
                                @if($i*$radar->time_interval >= $radar->start_from)
                                    @if($radar->sprint_digits != null)
                                    <option value="{{sprintf($radar->sprint_digits, ($i*($radar->time_interval)))}}{{strtr($radar->url_call, $trans)}}">+{{$i*$radar->time_interval}} @lang('radars.hours')</option>
                                    @else
                                    <option value="{{($i*($radar->time_interval))}}{{strtr($radar->url_call, $trans)}}">+{{$i*$radar->time_interval}} @lang('radars.hours')</option>
                                    @endif
                                @endif
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <button type="button" class="btn-block" id="up">@lang('radars.next')</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---map-->
            <section class="map">
                <div class="map-base">
                    <img id="img" src="" alt="map">
                </div>
                <div class="map-cities">
                    <img id="city_map" src="{{asset('images/cities/'.$radar->name.'.png')}}" alt="map" class="hide">
                </div>
                <!--button hide cities-->
                <div class="mt-3">
                    <button style="height:25;width:40%" id="hide_city_map" type="button">@lang('radars.hide_cities')</button>
                    <button style="height:25;width:40%;display: none;" id="show_city_map" type="button">@lang('radars.show_cities')</button>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{asset('js/function.js')}}"></script>
@endpush
