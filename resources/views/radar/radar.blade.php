@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/radar.css') }}">
@endpush
@section('content')
<!--radar map-->
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <br>
            <h3>@lang('radar.rain_radar')</h3>
            <br>
            <iframe src="https://www.rainviewer.com/map.html?loc=24.7136,46.6753,6&oFa=0&oC=0&oU=0&oCS=1&oF=0&oAP=0&rmt=4&c=1&o=83&lm=0&th=0&sm=1&sn=1" height="500" width="100%" allowfullscreen></iframe>
        </div>

        <div class="col-sm-12">
            <br>
            <h3>@lang('radar.wind_radar')</h3>
            <br>
            <iframe src="https://embed.windy.com/embed2.html?lat=24.7136&lon=46.6753&detailLat=24.7136&detailLon=46.6753&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" height="500" width="100%"  allowfullscreen frameborder="0"></iframe>
        </div>
    </div>
</div>
<!--radar-->
<div class="radar-gallery mt-3">
    <div class="container">
        <div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block" src="images/radar1.jpg" alt="radar photo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/radar2.jpg" alt="radar photo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/radar3.jpg" alt="radar photo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/radar4.jpg" alt="radar photo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/radar5.jpg" alt="radar photo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/radar6.jpg" alt="radar photo">
                            </div>
                       </div>
                       <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar1.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>Radar is a detection system that uses radio waves to determine the range, angle, or velocity of objects.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar2.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>It can be used to detect aircraft, ships, spacecraft, guided missiles, motor vehicles, weather formations.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar3.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>A radar system consists of a transmitter producing electromagnetic waves in the radio or microwaves domain, a transmitting antenna</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar4.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>Radio waves (pulsed or continuous) from the transmitter reflect off the object and return to the receiver, giving information about the object's location and speed.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar5.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>A radar system has a transmitter that emits radio waves known as radar signals in predetermined directions.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="radar-card">
                    <img class="d-block img-fluid" src="images/radar6.jpg" alt="First slide" data-toggle="modal" data-target="#basicExample">
                    <div class="card-body">
                        <p>electromagnetic waves travelling through one material meet another material, having a different dielectric constant or diamagnetic constant</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
