<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/javascript-calendar.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap">
    @stack('styles')
</head>
<body>
    <!-- nav bar section -->
    @include("layouts.navbar")
    <!-- nav bar section -->
    <div id="app">
        <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- footer section -->
    @include('layouts.footer')
    <!-- footer section -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
    <script src="{{ asset('js/javascript-calendar.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    @stack('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var token     = $('meta[name="csrf-token"]').attr('content');
            new WOW().init();
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showLocation);
            } else {
                $('#location').html('Geolocation is not supported by this browser.');
            }
            $("#add-location").on("click", function() {
                var city = $("#city_name").val();
                $.ajax({
                    type:'GET',
                    url:'{{url("/choose_location")}}/'+city,
                    success:function(response){
                        if(response) {
                            $("#climate").html('');
                            $("#climate").html(response["view"]);
                        } else {
                            $("#location").html('No data for this city !');
                        }
                    }
                });
            });
        });

        function showLocation(position){
            var latitude  = position.coords.latitude;
            var longitude = position.coords.longitude;
            $.ajax({
                type:'POST',
                url:'{{url("/get_location")}}',
                data: {
                    _token: token,
                    latitude : latitude,
                    longitude: longitude
                },
                success:function($response){
                    if($response) {
                       $("#location").html($response);
                    } else {
                        $("#location").html('Not Available !');
                    }
                }
            });
        }
    </script>
</body>
</html>
