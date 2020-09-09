@extends('layouts.app')

@section('content')
<!--start location-->
<div class="location">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="search-part">
                    <input type="search" placeholder="city name" id="cityInp">
                </div>
            </div>
            <div class="col-md-6  col-sm-12">
                <div class="location">
                    <div class="box">
                        <span><i class="fas fa-plus"></i></span>
                        <h2>Add location</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end location-->

<!--start climate-->
<section class="climate">
    <div class="overlay">
        <div class="container">
            <div class="weather-table">
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
                            <div class="avg-temp"></div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--end climate-->

<!--start videos section-->
<div class="videos">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="video-part">
                    <h3>Weather Forecast pictures</h3>
                    <p>Climate Changes Make Some Aspects of Weather Forecasting Increasingly Difficult</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('images/weather1.jpg') }}" class="weather-pic" alt="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('images/weather2.jpg') }}" alt="weather-pic" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('images/weather3.jpg') }}" alt="weather-pic" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!--end videos section -->

<!--start map-->
<div class="map">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="calendar">
                    <div id="jquery-script-menu">
                        <div class="jquery-script-center">
                            <div class="jquery-script-ads"></div>
                            <div class="jquery-script-clear"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="icalendar">
                            <div class="icalendar__month">
                                <div class="icalendar__prev" onclick="moveDate('prev')">
                                    <span> &10094 </span>
                                </div>
                                <div class="icalendar__current-date">
                                    <h2 id="icalendarMonth"></h2>
                                    <div>
                                        <div id="icalendarDateStr"></div>
                                    </div>

                                </div>
                                <div class="icalendar__next" onclick="moveDate('next')">
                                    <span>&10095</span>
                                </div>
                            </div>
                            <div class="icalendar__week-days">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="icalendar__days"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="myMap">
                    <img src="images/map1.png" alt="world-map" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!--end map-->

<!--start main-->
<div class="main ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="weather-card wow slideInLeft" data-wow-duration="2s" data-wow-delay="3s">
                    <div class="card">
                        <img src="images/weatherpic.jpg" class="card-img-top img-fluid" alt="weather">
                        <div class="card-body">
                            <h5 class="card-title">Weather in picture</h5>
                            <hr>
                            <p>Weather is the day-to-day or hour-to-hour change in the atmosphere. Weather includes wind, lightning, storms,
                            hurricanes, tornadoes, rain, hail, snow, and lots more. Energy from the Sun affects the weather.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6">
                <div class="cities wow slideInDown" data-wow-duration="2s" data-wow-delay="3.5s">
                    <h5>TOP 10 CITY WEATHER FORECASTS</h5>
                    <div class="list-city">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-chevron-right"></i> <b>PARIS</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>NEW YORK</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>LONDON</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>MOSCOW</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>ROME</b></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-chevron-right"></i> <b>DUBAI</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>MADRID</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>BERLIN</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>MUMBAI</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>THENSE</b></li>
                        </ul>
                    </div>
                    <p>Weather happens because different parts of the Earth get different amounts of heat from the Sun.</p>
                </div>
            </div>
            <div class="col-lg-3 feat">
                <div class="feature wow slideInRight" data-wow-duration="2s" data-wow-delay="3s">
                    <img src="images/feature.jpg" alt="nature" class="img-fluid">
                    <h5>Features & Analysis</h5>
                    <p>Weather Analysis and Forecasting is a practical guide to using potential vorticity fields</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end main-->
@endsection
