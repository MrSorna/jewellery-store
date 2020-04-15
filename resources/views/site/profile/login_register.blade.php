<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Login & Register</title>

    @include('layouts.head')
</head>
<body>
<!--== Header Area Start ==-->
@include('layouts.navbar')
<!--== Header Area End ==-->


<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Member Area</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login-register.html" class="active">Login & Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

{{--loader--}}
<div class="loader-box">
    <div class="loader"></div>
</div>
{{--loader--}}

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- Login & Register Content Start -->

                <div class="login-register-wrapper">
                    <!-- Login & Register tab Menu -->
                    <nav class="nav login-reg-tab-menu">
                        <a class="active" id="login-tab" data-toggle="tab" href="#login">Login</a>
                        <a id="register-tab" data-toggle="tab" href="#register">Register</a>
                    </nav>
                    <!-- Login & Register tab Menu -->

                    <div class="tab-content" id="login-reg-tabcontent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <div class="login-reg-form-wrap">
                                <form id="login-form" action="/login">
                                    <div class="single-input-item">
                                        <input type="email" id="email" placeholder="Enter your Email"
                                               required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" id="password"
                                               placeholder="Enter your Password"
                                               required/>
                                    </div>
                                    {{--                                    <div class="single-input-item">--}}
                                    {{--                                        <div--}}
                                    {{--                                            class="login-reg-form-meta d-flex align-items-center justify-content-between">--}}
                                    {{--                                            <div class="remember-meta">--}}
                                    {{--                                                <div class="custom-control custom-checkbox">--}}
                                    {{--                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">--}}
                                    {{--                                                    <label class="custom-control-label" for="rememberMe">--}}
                                    {{--                                                        Remember Me--}}
                                    {{--                                                    </label>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <a href="#" class="forget-pwd">Forget Password?</a>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="single-input-item">
                                        <button class="btn-login">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div id="login-result"></div>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <div class="login-reg-form-wrap">
                                <form id="register-form" action="/register">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="text" id="first_name" placeholder="First Name" required/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="text" id="last_name" placeholder="Last Name" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <input type="email" id="email" placeholder="Enter your Email" required/>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" id="password" placeholder="Enter your Password"
                                                       required/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" id="password_confirmation"
                                                       placeholder="Repeat your Password"
                                                       required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn-login">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div id="register-result"></div>
                        </div>
                    </div>
                </div>
                <!-- Login & Register Content End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
@include('layouts.footer')
<!-- Footer Area End -->


<!--=======================Javascript============================-->
@include('layouts.js')
<script>
    //login ajax
    $('#login-form').submit(function () {
        $('.loader-box').show();
        var action = $(this).attr('action'),
            result = $('#login-result');
        result.html('');
        result.removeClass('alert alert-danger');
        result.removeClass('alert alert-success');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: action,
            type: 'POST',
            data: {
                email: $(this).find('#email').val(),
                password: $(this).find('#password').val(),
            },
            success: function (data) {
                $('.loader-box').hide();
                result.html(data);
                result.addClass('alert alert-success');
                window.location.href = "/dashboard";
            },
            error: function ($xhr) {
                result.addClass('alert alert-danger');
                $('.loader-box').hide();
                if ($xhr.status == 401)
                    result.html($xhr.responseText);
                else
                    result.html('Sorry, an error occurred.');
            }
        });
        return false;
    });

    //register ajax
    $('#register-form').submit(function () {
        $('.loader-box').show();
        var action = $(this).attr('action'),
            result = $('#register-result');
        result.html('');
        result.removeClass('alert alert-danger');
        result.removeClass('alert alert-success');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: action,
            type: 'POST',
            data: {
                first_name: $(this).find('#first_name').val(),
                last_name: $(this).find('#last_name').val(),
                email: $(this).find('#email').val(),
                password: $(this).find('#password').val(),
                password_confirmation: $(this).find('#password_confirmation').val(),
            },
            success: function (data) {
                $('.loader-box').hide();
                $('.login-register-wrapper').html('<div class="alert alert-success text-center"><br>sing-up is successfully<br>check your email to verify your account<br><br></div>');
            },
            error: function ($xhr) {
                $('.loader-box').hide();
                result.addClass('alert alert-danger');
                if ($xhr.status == 422) {
                    const errors = JSON.parse($xhr.responseText).errors;
                    if (errors.email) {
                        result.append('Email: <br>');
                        errors.email.forEach(function (error, index) {
                            result.append((index + 1) + '. ' + error + '<br>');
                        });
                        result.append('<br>---------------------<br>');
                    }
                    if (errors.password) {
                        result.append('Password: <br>');
                        errors.password.forEach(function (error, index) {
                            result.append((index + 1) + '. ' + error + '<br>');
                        });
                        result.append('<br>---------------------<br>');
                    }
                    if (errors.first_name) {
                        result.append('First Name: <br>');
                        errors.first_name.forEach(function (error, index) {
                            result.append((index + 1) + '. ' + error + '<br>');
                        });
                        result.append('<br>---------------------<br>');
                    }
                    if (errors.last_name) {
                        result.append('Last Name: <br>');
                        errors.last_name.forEach(function (error, index) {
                            result.append((index + 1) + '. ' + error + '<br>');
                        });
                        result.append('<br>---------------------<br>');
                    }
                } else
                    result.html('Sorry, an error occurred.');
            }
        });
        return false;
    });
</script>
</body>
</html>
