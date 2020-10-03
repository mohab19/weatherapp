@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="wrapper fadeInDown mt-5 mb-5">
            <div id="formContent">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true"> @lang('main.signin') </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="profile" aria-selected="false">@lang('main.signup')</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                        <h2 class="active"> @lang('main.signin') </h2>
                        <form>
                            <input type="text" id="name" class="fadeIn second" name="login" placeholder="name">
                            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                            <input type="submit" class="fadeIn fourth" value="Log In">
                        </form>
                        <!-- Remind Passowrd -->
                        <div id="formFooter">
                            <a class="underlineHover" href="#">Forgot Password?</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <h2 class="inactive underlineHover"> @lang('main.signup') </h2>
                        <form method="post" action="{{route('register', app()->getLocale())}}">
                            @csrf
                            <input type="text" id="name" class="fadeIn first" name="name" placeholder="name">
                            <input type="email" id="email" class="fadeIn second" name="email" placeholder="email">
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                            <input type="password" id="password_confirmation" class="fadeIn fourth" name="password_confirmation" placeholder="password confirmation">
                            <input type="submit" class="fadeIn fifth mt-3" value="@lang('main.signup')">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
