@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="wrapper fadeInDown mt-5 mb-5">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> Sign In </h2>
                <h2 class="inactive underlineHover">Sign Up </h2>
                <!-- Login Form -->
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
        </div>
    </div>
</div>
@endsection
