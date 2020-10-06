@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
@endpush
@section('content')
<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="sat-map text-center">
            <h2>{{$news['title_'.app()->getLocale()]}}</h2>
            <!---map-->
            <section class="map">
                <div class="map-base">
                    <img id="img" src="{{asset('images/news/'.$news->image)}}" alt="map">
                </div>
                <!--button hide cities-->
                <p>{{$news->description}}</p>
            </section>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush
