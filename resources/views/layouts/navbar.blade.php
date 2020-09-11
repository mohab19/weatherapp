<!--top button-->
<button id="btnUp" class="btn btn-lg btn-dark rounded-circle p-3">
    <i class="fas fa-arrow-up"></i>
</button>
<!--start header-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Weather <span>info</span></a>
        <p class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </p>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">@lang('home.home')<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/climate')}}">@lang('home.climate')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/news')}}">@lang('home.news')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/radar')}}">@lang('home.radar')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">@lang('home.login')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--end header-->
