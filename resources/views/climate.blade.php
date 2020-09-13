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
                    <p class="ml-2">{{$day["weather"]}}</p>
                    <img src="{{$day['icon']}}" alt="{{$day['weather']}}">
                </div>
                <p class="ml-2">@lang('home.max')</p>
                <div class="temp-part-day">
                     <span class="temp-day">{{$day["max_temp"]}}&deg;</span>
                </div>
            </div>
            <div class="down @if($key==0) current @endif">
                <p class="ml-2">@lang('home.min')</p>
                <div class="temp-part-night">
                    <span class="temp-night">{{$day["min_temp"]}}&deg;</span>
                </div>
                <p class="status-night">@lang('home.wind_speed')</p>
                <p class="status-night">{{$day["wind"]}}</p>
            </div>
        </div>
    </div>
    @endif
@endforeach
