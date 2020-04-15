<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Verify User</title>

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
                        <li><a href="login-register.html" class="active">Verify</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="login-register-wrapper">
                    <div class="{{$result?'alert alert-success':'alert alert-danger'}} text-center">
                        <br>
                        {{$msg}}(redirect at <span id="timeLeft">5</span> sec ...)
                        <br>
                        <br>
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
    $(document).ready(function () {
        window.setInterval(function () {
            var timeLeft = $("#timeLeft").html();
            if (eval(timeLeft) == 0) {
                if ('{{$result}}')
                    window.location.href = "/dashboard";
                else
                    window.location.href = "/login-register";
            } else {
                $("#timeLeft").html(eval(timeLeft) - eval(1));
            }
        }, 1000);
    });
</script>
</body>
</html>
