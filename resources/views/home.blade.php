@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/styleAr.css') }}">
    @endif
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
<!--weather table-->
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
        <!-- forcasting section -->
        <div class="row" id="climate">
            @include('climate', ['forcasting' => $forcasting])
        </div>
        <!-- forcasting section -->
    </div>
</div>
<!-- end main -->

<!-- text div -->
<div class="text-forecast">
    <div class="container d-flex">
        <div class="text-forecast-label">
            <span><i class="aw-info"></i> Text Summary</span>
        </div>
        <div class="text-forecast-content">
            The weather today is expected to be mostly clear and the maximum temperature will be 37°C which is similar to yesterday. The weather tonight is expected to be foggy and the minimum temperature will be 24°C which is colder by 3°C than last night.&nbsp;
        </div>
    </div>
</div>
<!-- text div -->

<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                 <div class="sat-map">
                    <h3><i class="fas fa-satellite-dish mx-2"></i>satellite</h3>
                    <a href='#' target='sat24'><image src='img/sat.jpg' width=100% height=291></a>
                    <a href="#" class="maps">More Maps <i class="fas fa-angle-double-right"></i></a>
                </div>
                <div class="weather-news">
                    <h3> <i class="fas fa-cloud-sun mx-2"></i>weather news</h3>
                    <div class="news-box d-flex">
                        <image src='img/news.jpg' width=60% height=291>
                        <p>lorem ipsum </p>
                        <a href="#" class="details">Details <i class="fas fa-angle-double-right"></i></a>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
                <div class="news-carousel">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="d-flex np">
                                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                    <span class="fas fa-chevron-left" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                    <span class="fas fa-chevron-right" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="carousel-item active" data-interval="10000">
                                <div class="news-carousel-inner d-flex">
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <div class="news-carousel-inner d-flex">
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
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
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" >
                                    <img src="img/pic1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                    <img class="img-responsive" width="100%" alt="Weather Map" src="https://assets.devops.arabiaweather.com/images/weather-map-card.svg">
                    <iframe width="100%" height="250" src="https://embed.windy.com/embed2.html?lat=30.078&lon=31.285&detailLat=30.078&detailLon=31.285&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--stalite map-->

<!--arabia carousel-->
<div class="arabia-carousel mb-5">
    <div class="container">
        <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <h3><i class="fas fa-newspaper mx-2"></i>Weather friends articles</h3>
                <div class="d-flex np">
                    <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                        <span class="fas fa-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                        <span class="fas fa-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="carousel-item active" data-interval="10000">
                    <div class="arabia-carousel-inner d-flex">
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <div class="arabia-carousel-inner d-flex">
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/pic1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span>Details</span> <i class="fas fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--arabia carousel-->
@endsection
