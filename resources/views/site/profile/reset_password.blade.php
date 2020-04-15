<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Reset Password</title>

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
                        <li><a href="login-register.html" class="active">Reset Password</a></li>
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
                <div class="login-register-wrapper">
                    <div class="tab-content" id="login-reg-tabcontent">
                        <div class="login-reg-form-wrap">
                            <form id="reset-form" action="/reset-password">
                                <input type="text" id="email" style="display: none"/>
                                <input type="text" id="code" style="display: none"/>
                                <div class="single-input-item">
                                    <input type="password" id="password" placeholder="Enter your Password"
                                           required/>
                                </div>
                                <input type="password" id="password_confirmation"
                                       placeholder="Repeat your Password"
                                       required/>
                                <div class="single-input-item">
                                    <button class="btn-login">Register</button>
                                </div>
                            </form>
                        </div>
                        <div id="result"></div>
                    </div>
                </div>
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
    $('#reset-form').submit(function () {
        $('.loader-box').show();
        var action = $(this).attr('action'),
            result = $('#result');
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
                code: $(this).find('#code').val(),
                password: $(this).find('#password').val(),
                password_confirmation: $(this).find('#password_confirmation').val(),
            },
            success: function (data) {
                $('.loader-box').hide();
                result.html(data);
                result.addClass('alert alert-success');
                window.location.href = "/login-register";
            },
            error: function ($xhr) {
                $('.loader-box').hide();
                result.addClass('alert alert-danger');
                if ($xhr.status == 422) {
                    const errors = JSON.parse($xhr.responseText).errors;
                    if (errors.password) {
                        result.append('Password: <br>');
                        errors.password.forEach(function (error, index) {
                            result.append((index + 1) + '. ' + error + '<br>');
                        });
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
