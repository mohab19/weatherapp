@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <style media="screen">
        .search-result {
            padding: 5px 10px;
            font-weight: bold;
        }
        .search-result:hover {
            background: blue;
            color: white;
        }
    </style>
@endpush
@section('content')
<!--weather table
<div class="weather-table">
    <div class="container">
        <div class="search-box d-flex align-items-center">
            <img class="search-box-flag img-circle" src="https://assets.devops.arabiaweather.com/images/flags/svg/1x1/sa.svg" width="26" height="26">
            <input type="text" class="form-control text-center" id="search" placeholder="@lang('home.search')" autocomplete="off">
            <i class="fas fa-search" id="add-location" style="cursor: pointer;"></i>
        </div>
        <div class="p-3" style="width: 100%;background: #fff;z-index: 9;position: relative;top: -19px;border: 1px solid #b9b7b7;display: none;" id="search-result">
            <ul style="list-style: none;">

            </ul>
        </div>
        forcasting section
        <div class="row" id="climate">
            include('climate', ['forcasting' => $forcasting])
        </div>
        forcasting section
    </div>
</div>
end main -->

<!--radar section-->
<section class="radar">
    <div class="container-fluid">
        <div class="row text-center">
            @foreach($RNRadars as $key => $radar)
            <div class="col-md-3 @if($key < 4 && $key%2 == 0) grey @elseif($key > 4 && $key%2 != 0) grey @endif">
                <a href="{{url(app()->getLocale() . '/radar/'.$radar->id)}}">
                    <div class="radar-ex">
                        @if(isset($radar->image))
                        <img src="{{asset('images/radars'.'/'.$radar->image)}}" alt="{{$radar->name}}">
                        @endif
                        <h4>{{strtoupper($radar->name)}}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                 <div class="sat-map">
                    <h3><i class="fas fa-satellite-dish mx-2"></i>@lang('home.satellite')</h3>
                    <iframe width="100%" height="350" src="https://embed.windy.com/embed2.html?lat=24.7136&lon=46.6753&detailLat=24.7136&detailLon=46.6753&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                </div>
                <div class="weather-news">
                    <h3> <i class="fas fa-cloud-sun mx-2"></i>Weather Map</h3>
                    <div class="news-box d-flex">
                        <iframe src="https://www.rainviewer.com/map.html?loc=24.7136,46.6753,5&oFa=0&oC=0&oU=0&oCS=1&oF=0&oAP=0&rmt=4&c=1&o=83&lm=0&th=0&sm=1&sn=1" width="100%" style="height:50vh;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="news-carousel">
                    <div class="weather-news">
                        <h3><i class="fas fa-cloud-sun mx-2"></i> Weather Models </h3>
                        <div class="news-box d-flex">
                            <div class="owl-carousel owl-theme">
                                @foreach($radars as $key => $radar)
                                <div class="carousel-item active">
                                    <div class="card">
                                        @if($radar->image == null)
                                        <img src="{{asset('images/weather.png')}}" class="card-img-top" alt="{{$radar->name}}">
                                        @else
                                        <img src="{{asset('images/radars'.'/'.$radar->image)}}" class="card-img-top" alt="{{$radar->name}}">
                                        @endif
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{$radar->name}}</h6>
                                            <a href="{{url(app()->getLocale().'/radar/'.$radar->id)}}" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-carousel news-carousel-small">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" >
                                    <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="adv">
                    <p class="text-muted">advertisement</p>
                    <div class="story">
                        <p class="d-flex">
                            <span>stories</span>
                            <svg style="width:26px;position:relative;top:-6px;float:right;margin-left:5px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                <g>
                                    <path d="M13,3c-5,0-9,4-9,9H1l3.9,3.9L5,16l4-4H6c0-3.9,3.1-7,7-7s7,3.1,7,7s-3.1,7-7,7c-1.9,0-3.7-0.8-4.9-2.1l-1.4,1.4,C8.3,20,10.5,21,13,21c5,0,9-4,9-9S18,3,13,3z"></path>
                                    <polygon points="12,8 12,13 16.3,15.5 17,14.3 13.5,12.2 13.5,8"></polygon>
                                </g>
                            </svg>
                        </p>
                        <ul class="list-unstyled">
                            <li><a href="#"><img src="img/pic1.jpg" class=" img-rounded" alt="weather pic"> <p>video nd photo after</p></a></li>
                            <li><a href="#"><img src="img/pic1.jpg" class=" img-rounded" alt="weather pic"> <p>video nd photo after</p></a></li>
                            <li><a href="#"><img src="img/pic1.jpg" class=" img-rounded" alt="weather pic"> <p>video nd photo after</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="map">
                    <p>weather map</p>
                    <iframe width="100%" height="250" src="https://embed.windy.com/embed2.html?lat=24.7136&lon=46.6753&detailLat=24.7136&detailLon=46.6753&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--stalite map-->

<!--arabia carousel-->
<div class="arabia-carousel mb-5">
    <div class="container">
        <div class="weather-news">
            <h3><i class="fas fa-cloud-sun mx-2"></i> Weather With Friends </h3>
            <div class="news-box d-flex">
                <div class="owl-carousel owl-theme">
                    @foreach($news as $key => $new)
                    <div class="item">
                        <div class="card">
                            <img src="{{url('images/news/'.$new->image)}}" class="card-img-top" alt="{{$new['title_'.app()->getLocale()]}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$new['title_'.app()->getLocale()]}}</h5>
                                <a href="{{url(app()->getLocale().'/news/'.$new->id)}}" class="d-flex align-items-center justify-content-center">
                                    <span>Details</span> <i class="fas fa-angle-double-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-title"></h5>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
<!--arabia carousel-->
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    </script>
@endpush
