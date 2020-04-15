<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Dashboard</title>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login-register.html" class="active">Dashboard</a></li>
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
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>
                                <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                                <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 mt-5 mt-lg-0">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome">
                                            <p>Hello, <strong>{{$user->first_name.' '.$user->last_name}}</strong> !</p>
                                        </div>

                                        <p class="mb-0">From your account dashboard. you can easily check & view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td><a href="cart.html" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>July 22, 2018</td>
                                                    <td>Approved</td>
                                                    <td>$200</td>
                                                    <td><a href="cart.html" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>June 12, 2017</td>
                                                    <td>On Hold</td>
                                                    <td>$990</td>
                                                    <td><a href="cart.html" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn-add-to-cart">Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2018</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="btn-add-to-cart">Download File</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form id="details-form" action="/change-details">
                                                <div class="single-input-item">
                                                    <label>Email Address
                                                        : </label>
                                                    <span>{{$user->email}}</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" id="first_name"
                                                                   placeholder="First Name"
                                                                   value="{{$user->first_name}}"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" id="last_name" placeholder="Last Name"
                                                                   value="{{$user->last_name}}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="phone">Phone</label>
                                                    <input type="phone" id="phone"
                                                           placeholder="Phone number (+19029092002)"
                                                           value="{{$user->phone}}"/>
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="address">Address</label>
                                                    <textarea rows="5" type="text" id="address" placeholder="Address"
                                                              value="{{$user->address}}">{{$user->address}}</textarea>
                                                </div>
                                                <div class="single-input-item">
                                                    <button class="btn-login btn-add-to-cart">Save Changes</button>
                                                </div>
                                                <div class="mt-3" id="result"></div>
                                            </form>

                                            <form id="password-form" action="/change-password">
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current
                                                            Password</label>
                                                        <input type="password" id="password"
                                                               placeholder="Current Password"/>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New
                                                                    Password</label>
                                                                <input type="password" id="new_password"
                                                                       placeholder="New Password"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm
                                                                    Password</label>
                                                                <input type="password" id="new_password_confirmation"
                                                                       placeholder="Confirm Password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="single-input-item">
                                                    <button class="btn-login btn-add-to-cart">Change Password</button>
                                                </div>
                                                <div class="mt-3" id="result"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->
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

    //change password ajax
    $('#password-form').submit(function () {
        $('.loader-box').show();
        var action = $(this).attr('action'),
            result = $(this).find('#result');
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
                password: $(this).find('#password').val(),
                new_password: $(this).find('#new_password').val(),
                new_password_confirmation: $(this).find('#new_password_confirmation').val(),
            },
            success: function (data) {
                $('.loader-box').hide();
                result.addClass('alert alert-success');
                result.html('Changed Successfully.');
                window.setInterval(function () {
                    result.html('');
                    result.removeClass('alert alert-success');
                }, 3000);
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
                        result.append('<br>---------------------<br>');
                    }
                    if (errors.new_password) {
                        result.append('New Password: <br>');
                        errors.new_password.forEach(function (error, index) {
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

    //change details ajax
    $('#details-form').submit(function () {
        $('.loader-box').show();
        var action = $(this).attr('action'),
            result = $(this).find('#result');
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
                phone: $(this).find('#phone').val(),
                address: $(this).find('#address').val(),
            },
            success: function (data) {
                $('.loader-box').hide();
                result.addClass('alert alert-success');
                result.html('Changed Successfully.');
                window.setInterval(function () {
                    result.html('');
                    result.removeClass('alert alert-success');
                }, 3000);
            },
            error: function ($xhr) {
                $('.loader-box').hide();
                result.addClass('alert alert-danger');
                if ($xhr.status == 422) {
                    const errors = JSON.parse($xhr.responseText).errors;
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
