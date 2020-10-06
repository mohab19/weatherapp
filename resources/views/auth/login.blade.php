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
                        <form method="post" action="{{route('login', app()->getLocale())}}">
                            @csrf
                            <input type="email" class="fadeIn second" name="email" placeholder="E-mail">
                            <input type="password" class="fadeIn third" name="password" placeholder="password">
                            <input type="submit" class="fadeIn fourth" value="@lang('main.signin')">
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
                            <input type="text"     id="name" class="fadeIn first" name="name" placeholder="name">
                            <input type="email"    id="email" class="fadeIn second" name="email" placeholder="email">
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                            <input type="password" id="password_confirmation" class="fadeIn fourth" name="password_confirmation" placeholder="password confirmation">
                            <script src="https://www.paypal.com/sdk/js?client-id=ASa1ceotXl3lQ51BhEZ5mRBBKYmrUmu2_ATTsYCytZXEkzFd1guWWZD-HOK0mhlSWe66jC1LS_KqkzaH"></script>
                            <div class="row text-center d-flex justify-content-center mt-3">
                                <div id="paypal-button-container"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var amount_setting = 0;
    $.ajax({
        type: 'GET',
        url: 'get_settings',
        success: function(response) {
            amount_setting = response['value'];
        }
    });
    var actionStatus;
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: amount_setting,
                        currency: 'SAR'
                    }
                }]
            });
        },
        onInit:  function(data, actions) {
            actions.disable();
            actionStatus = actions;
        },
        onClick :  function(){
            if($("#name").val() != "" && $("#email").val() != "" && $("#password").val() != "" && $("#password_confirmation").val() != "") {
                actionStatus.enable();
            } else {
                actionStatus.disable();
                alert("يرجى التأكد من جميع الحقول!");
            }
        },
        onCancel: function(data,actions) {
            alert("لم يتم التسجيل بسبب إلغاء عملية الدفع");
        },
        onError: function(data,actions) {
            alert("حدث خطأ ما، الرجاء المحاولة في وقت آخــر");
        },
        onApprove: function(data, actions) {
            var token                 = $("meta[name='csrf-token']").attr("content");
            var lang                  = $("meta[name='locale']").attr("content");
            var name                  = $("#name").val();
            var email                 = $("#email").val();
            var password              = $("#password").val();
            var password_confirmation = $("#password_confirmation").val();
            $.ajax({
                type: "POST",
                url: "register",
                data: {
                    _token               : token,
                    name                 : name,
                    email                : email,
                    password             : password,
                    password_confirmation: password_confirmation
                },
                success: function(response) {
                    window.location.href = "/";
                },
                error: function(response) {
                    console.log(response);
                    $('#notification').removeClass('alert-success');
                    $('#notification').addClass('alert-danger');
                    var html = '';
                    $.each(response.responseJSON.errors, function(key, value) {
                        html += '<li>'+value+'</li>';
                    });
                    $('#notification ul').html(html);
                    $('#notification').show(300);
                }
            });
        }
    }).render('#paypal-button-container');
</script>
@endpush
