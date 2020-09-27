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
                    <button type="button" style="width:100%;" id="a" onclick="op()" disabled="">@lang('categories.still')</button>

                    <button type="button" style="width:100%;" id="b" onclick="document.getElementById(&quot;s&quot;).innerHTML=document.getElementById(&quot;hour&quot;).options[document.getElementById(&quot;hour&quot;).selectedIndex].text;op();">@lang('categories.animated')</button>
                </div>
                <div id="s" style="display: none;"></div>
                <div id="all">
                    @if($category->Types)
                    <div>
                        <select class="form-control" style="width:100%;height:29.6;direction:rtl;" id="script" onchange="update();">
                            @foreach($category->Types as $key => $type)
                            <option value="{{$type->basic_url}}">{{$type['name_'.Lang::Locale()]}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="buttons-toward d-flex">
                        <div>
                            <button type="button" onclick="chang('-')">@lang('categories.previous')</button>
                        </div>
                        <div>
                            <select class="form-control" id="hour" onchange="update();">
                                @if($category->time_format == null)
                                    @for($i = -2; ($i*$category->time_interval) <= ($category->time_limits*$category->time_interval); $i++)
                                    <option value="{{($i*($category->time_interval))}}{{$category->url_call}}">+{{$i*$category->time_interval}} @lang('categories.hours')</option>
                                    @endfor
                                @endif
                            </select>
                        </div>
                        <div>
                            <button type="button" onclick="chang('+')" >@lang('categories.next')</button>
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
    <script src="{{asset('js/').'/'.$category->name.'.js'}}"></script>
    <script>
        x = document.getElementById("hour");
        if (new Date().getUTCHours() < 6) {
            document.getElementById("hour").selectedIndex = 0;
        } else if (new Date().getUTCHours() < 12) {
            x.remove(x.selectedIndex);
            document.getElementById("hour").selectedIndex = 1;
        } else if (new Date().getUTCHours() < 18) {
            var x = document.getElementById("hour");
            x.remove(0);
            x.remove(0);
            document.getElementById("hour").selectedIndex = 1;
        } else {
            x.remove(0);
            x.remove(0);
            x.remove(0);
            document.getElementById("hour").selectedIndex = 1;
        }
        if (location.hash) {
            document.getElementById('selectmap').selectedIndex = location.hash.replace("#","")-1;
            document.getElementById('map').src = document.getElementById('selectmap').value;
        }
        update();
        selected = 50;
    </script>
@endpush
