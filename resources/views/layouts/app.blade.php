<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="locale" content="{{ app()->getLocale() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/bootstrapAr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleAr.css') }}">
    @endif
    @stack('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- nav bar section -->
    @include("layouts.navbar")
    <!-- nav bar section -->
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- footer section -->
    @include('layouts.footer')
    <!-- footer section -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/weather.js')}}"></script>
    <script src="{{asset('js/intelligent.js')}}" type="text/javascript"></script>
    @stack('scripts')
</body>
</html>
