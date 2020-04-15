<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>500 Internal Server Error</title>
    @include('layouts.head')

</head>
<body>
<!--== Header Area Start ==-->
@include('layouts.navbar')
<!--== Header Area End ==-->


{{--<!--== Page Title Area Start ==-->--}}
{{--<div id="page-title-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="page-title-content">--}}
{{--                    <h1>404</h1>--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="/">Home</a></li>--}}
{{--                        <li><a href="login-register.html" class="active">404</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!--== Page Title Area End ==-->--}}

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  m-auto text-center">
                <div class="error-page-content-wrap">
                    <h2>500</h2>
                    <h3>Internal Server Error</h3>
                    <p>Something Gets Wrong !</p>
                    <a href="/" class="btn-add-to-cart">Back to Home Page</a>
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
</body>
</html>
