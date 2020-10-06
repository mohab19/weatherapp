<!--top button-->
<button id="btnUp" class="btn btn-sm btn-dark rounded-circle p-1">
    <i class="fas fa-arrow-up"></i>
</button>
<!--top button-->

<!--header-->
<header>
    <div class="container">
        <div class="logo">
            <div class="logo-img d-flex align-items-center">
                <div class="logoMyImage d-flex align-items-center">
                <img src="{{asset('images/settings/'.$settings->where('name', 'logo')->first()->image)}}" alt="logo">
                <p class="">{{$settings->where('name', 'website_name')->first()->value}}</p>
                </div>
                <div class="lang-dropdown">
                    <div class="lang-select">
                        <span><i class="fas fa-globe-asia"></i></span>&nbsp;
                        @if(app()->getLocale() == 'ar')
                        <span>عربي</span>&nbsp;
                        @else
                        <span>English</span>&nbsp;
                        @endif
                        <span><i class="fas fa-caret-down"></i></span>
                    </div>
                    <div class="lang-list">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/ar')}}" class="d-flex" style="justify-content: space-between;"><span>عربي</span>@if(app()->getLocale() == 'ar') <span><i class="fas fa-check"></i></span> @endif</a></li>
                            <li><a href="{{url('/en')}}" class="d-flex" style="justify-content: space-between;"><span>English</span>@if(app()->getLocale() == 'en') <span><i class="fas fa-check"></i></span> @endif</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <span class="@if(!auth()->user()) login @endif d-flex align-items-center">
                @if(auth()->user())
                <div class="lang-dropdown">
                    <div class="lang-select">
                        <span>{{auth()->user()->name}}</span>&nbsp;
                        <span><i class="fas fa-caret-down"></i></span>
                    </div>
                    <div class="lang-list">
                        <ul class="list-unstyled">
                            <li><a href="{{url(app()->getLocale().'/logout')}}" class="d-flex" style="justify-content: space-between;"><span>@lang('main.logout')</span></a></li>
                        </ul>
                    </div>
                </div>
                @else
                <a href="{{route('login', app()->getLocale())}}"><i class="fas fa-user"></i><b class="@if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif"> @lang('home.login') </b></a>
                @endif
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
            <ul class="navbar-nav mt-2 mt-lg-0" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{url('/').'/'}}@lang('home.lng')"><i class="fas fa-home @if(app()->getLocale() == 'ar') ml-2 @else mr-2 @endif"></i> @lang('home.home') </a>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.satellite')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        @foreach($satellites as $key => $satellite)
                        <a class="dropdown-item @if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif" href="{{url(app()->getLocale().'/satellite/'.$satellite->id)}}"> {{$satellite->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.radar')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        @foreach($radars as $key => $radar)
                        <a class="dropdown-item @if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif" href="{{url(app()->getLocale().'/radar/'.$radar->id)}}">{{$radar->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#followers">@lang('home.your_news')</a>
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
            <ul class="navbar-nav mt-2 mt-lg-0" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{url('/').'/'}}@lang('home.lng')"><i class="fas fa-home @if(app()->getLocale() == 'ar') ml-2 @else mr-2 @endif"></i> @lang('home.home') </a>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.satellite')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        @foreach($satellites as $key => $satellite)
                        <a class="dropdown-item @if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif" href="{{url(app()->getLocale().'/satellite/'.$satellite->id)}}"> {{$satellite->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('home.radar')
                    </a>
                    <div class="dropdown-menu sm-menu">
                        @foreach($radars as $key => $radar)
                        <a class="dropdown-item @if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif" href="{{url(app()->getLocale().'/radar/'.$radar->id)}}">{{$radar->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#followers">@lang('home.your_news')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--nav small-->
