<div class="overlay">
    <div class="container">
        <div class="weather-table" style="height: 400px;">
            @foreach($forcasting["forcast"] as $key => $day)
                @if($key < 5)
                    <div class="weather-info text-center @if($key==0) current @endif" style="color: white;">
                        <div class="">
                            <p class="day day2 text-center">{{$day["date_name"]}}</p>
                            <span class="city text-center">{{$day["date"]}}</span>
                            <p class="text-center">{{$day["weather"]}}</p>
                            <h5 class="d1">{{intval($day["max_temp"])}}<span class="degree">&#8451;</span></h5>
                            <img src="{{$day['icon']}}" alt="">
                            <h5 class="d1">{{intval($day["min_temp"])}}<span class="degree">&#8451;</span></h5>
                        </div>
                        <br>
                        <div class="avg-temp" style="height: 70px;">
                            <span>@lang('home.wind_speed'): </span> {{$day["wind"]}}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
