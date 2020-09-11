@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush
@section('content')
<div class="site-news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="news-left">
                <h2>LATEST NEWS & EVENTS</h2>
                    <div class="news-box">
                        <p class="date"></p>
                        <img src="images/pic1.jpg"  class="img-fluid" alt="">
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione sapiente accusantium ipsa eligendi tempore placeat distinctio </p>
                    </div>
                     <hr>
                     <div class="news-box">
                        <p class="date"></p>
                        <img src="images/pic1.jpg" class="img-fluid" alt="">
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione sapiente accusantium ipsa eligendi tempore placeat distinctio </p>
                    </div>
                    <hr>
                    <div class="news-box">
                        <p class="date"></p>
                        <img src="images/pic1.jpg" class="img-fluid" alt="">
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione sapiente accusantium ipsa eligendi tempore placeat distinctio </p>
                    </div>
                    <hr>
                    <div class="news-box">
                        <p class="date"></p>
                        <img src="images/pic1.jpg" class="img-fluid" alt="">
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione sapiente accusantium ipsa eligendi tempore placeat distinctio </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-right">
                    <h2>NEWS ARCHIVES</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>JANUARY 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>FEBRUARY 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>MARCH 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>APRIL 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>MAY 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>JUNE 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>JULY 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>AUGUST 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>SEBTEMBER 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>OCTOBER 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>NOVAMBER 2018</b></a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> <b>DECEMBER 2018</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
