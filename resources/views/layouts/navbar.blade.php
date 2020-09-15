<!--top button-->
<button id="btnUp" class="btn btn-sm btn-dark rounded-circle p-1">
    <i class="fas fa-arrow-up"></i>
</button>
<!--top button-->

<!--header-->
<header>
    <div class="container">
        <div class="logo">
            <div class="logo-img align-items-center row">
                <img src="img/logo.svg" alt="logo">
                <div class="nav-wrapper @if(app()->getLocale() == 'ar') mr-3 @else ml-3 @endif" style="border: 1px solid #fff;border-radius: 5px;padding: 5px 15px;">
                    <div class="sl-nav text-white">
                        <ul>
                            <li>
                                <a href="{{url('/').'/'}}@lang('home.lng')"><b class="text-white">@lang('home.lang_op')</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <span class="login d-flex align-items-center">
                <a href="{{route('login')}}"><i class="fas fa-user"></i> <b class="ml-2">@lang('home.login')</b></a>
            </span>
            <i class="fas fa-bars navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"></i>
        </div>
    </div>
</header>
 <!--header-->

<!--nav-->
<nav class="navbar navbar-expand-lg  navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav @if(app()->getLocale() == 'ar') ml-auto @else mr-auto @endif mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link d-flex align-items-center" href="{{url('/').'/'}}@lang('home.lng')"><i class="fas fa-home @if(app()->getLocale() == 'ar') ml-2 @else mr-2 @endif"></i> @lang('home.home') </a>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.weather')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">10 Days Forecast</a>
                        <hr>
                        <a class="dropdown-item" href="#">Hourly Weather</a>
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.news')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">Local Weather News</a>
                        <hr>
                        <a class="dropdown-item" href="#">Arabia Local News</a>
                        <hr>
                        <a class="dropdown-item" href="#">Global Weather News</a>
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        LifeStyle & Weather
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">Places</a>
                        <hr>
                        <a class="dropdown-item" href="#">Tips For Travellers</a>
                        <hr>
                        <a class="dropdown-item" href="#">Health & Weather</a>
                        <hr>
                        <a class="dropdown-item" href="#">Travel & Tourism</a>
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Science & Nature
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">Astronomy & Space</a>
                        <hr>
                        <a class="dropdown-item" href="#">Nature</a>
                        <hr>
                        <a class="dropdown-item" href="#">Animal & Insects</a>
                        <hr>
                        <a class="dropdown-item" href="#">Energy</a>
                        <hr>
                        <a class="dropdown-item" href="#">Weather Science</a>
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Specialists & Amateurs
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">Bader System</a>
                        <hr>
                        <a class="dropdown-item" href="#">Weather Stations</a>
                        <hr>
                        <a class="dropdown-item" href="#">Elevation of Your area</a>
                        <hr>
                        <a class="dropdown-item" href="#">Earthquake Observatory</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sat.html">@lang('home.satellite')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--nav-->

<!--nav small-->
<nav class="navbar navbar-expand-lg navbar-light bg-light small">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link d-flex align-items-center" href="index.html"><i class="fas fa-home  mx-2"></i> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sun mx-2"></i>Weather</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-globe-americas mx-2"></i>Weather News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-umbrella mx-2"></i>Lifestyle & Weather</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tree mx-2"></i>Science & Nature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user mx-2"></i>Specialists & Amature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sat.html"><i class="fas fa-satellite-dish mx-2"></i>Satellite</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--nav small-->
