@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
@endpush
@section('content')
<!--stalite map-->
<div class="satellite">
    <div class="container">
        <div class="sat-map text-center">
            <h2>@lang('satellites.forecasting') {{$satellite->name}}</h2>

            <!---map-->
            <section class="map">
                <iframe src="{{$satellite->frame_url}}" width="100%" height="480"></iframe>
            </section>
        </div>
    </div>
</div>
@endsection
