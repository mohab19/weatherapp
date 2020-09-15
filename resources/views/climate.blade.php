@foreach($forcasting["forcast"] as $key => $day)
    @if($key < 5)
    <div class="col-md">
        <div class="weather-card @if($key==0) current-day @endif py-4">
            <div class="up @if($key==0) current @endif">
                <div class="day d-flex">
                    <span class="day-name">{{$day["date_name"]}}
                        <span class="date">{{$day["date"]}}</span>
                    </span>
                </div>
                <br>
                <div class="text-center">
                    <span class="ml-2">{{$day["weather"]}}</span><br>
                    <img src="{{$day['icon']}}" alt="{{$day['weather']}}">
                </div>
                <div class="text-center">
                    <span>@lang('home.max')</span>
                </div>
                <div class="temp-part-day">
                     <span class="temp-day">{{$day["max_temp"]}}&deg;</span>
                </div>
            </div>
            <div class="down @if($key==0) current @endif">
                <div class="text-center">
                    <span>@lang('home.min')</span>
                </div>
                <div class="temp-part-night">
                    <span class="temp-night">{{$day["min_temp"]}}&deg;</span>
                </div>
                <div class="text-center">
                    <span class="status-night">@lang('home.wind_speed')</span>
                    <br>
                    <span class="status-night">{{$day["wind"]}}</span>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach

<!--weather-table-carousel-->
<div id="weather-table-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#weather-table-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#weather-table-carousel" data-slide-to="1"></li>
        <li data-target="#weather-table-carousel" data-slide-to="2"></li>
        <li data-target="#weather-table-carousel" data-slide-to="3"></li>
        <li data-target="#weather-table-carousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($forcasting["forcast"] as $key => $day)
            @if($key < 5)
            <div class="carousel-item @if($key==0) active @endif">
                <div class="weather-table-carousel">
                    <div class="weather-card py-4">
                        <div class="up @if($key==0) current @endif">
                            <div class="day d-flex">
                                <span class="day-name">{{$day["date_name"]}}
                                    <span class="date">{{$day["date"]}}</span>
                                </span>
                            </div>
                            <br>
                            <div class="text-center">
                                <span class="ml-2">{{$day["weather"]}}</span><br>
                                <img src="{{$day['icon']}}" alt="{{$day['weather']}}">
                            </div>
                            <div class="text-center">
                                <span>@lang('home.max')</span>
                            </div>
                            <div class="temp-part-day text-center">
                                 <span class="temp-day">{{$day["max_temp"]}}&deg;</span>
                            </div>
                        </div>
                        <div class="down @if($key==0) current @endif">
                            <div class="text-center">
                                <span>@lang('home.min')</span>
                            </div>
                            <div class="temp-part-night">
                                <span class="temp-night">{{$day["min_temp"]}}&deg;</span>
                            </div>
                            <div class="text-center">
                                <span class="status-night">@lang('home.wind_speed')</span>
                                <br>
                                <span class="status-night">{{$day["wind"]}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
<!--weather-table-carousel-->
