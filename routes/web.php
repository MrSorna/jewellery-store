<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::group(['namespace' => 'View'], function () {
        Route::get('/', 'IndexController@index');
        Route::get('home', 'IndexController@index');
        Route::get('contact-us', 'IndexController@contact');
        Route::get('faq', 'IndexController@faq');

//    Route::get('/aboutus', 'AboutUsController@index');
//
        Route::group(['namespace' => 'Profile'], function () {
            Route::get('login-register', 'LoginRegisterController@index');
            Route::get('logout', 'LoginRegisterController@logout');
            Route::get('verify', 'LoginRegisterController@verify');
            Route::post('register', 'LoginRegisterController@register');
            Route::post('login', 'LoginRegisterController@login');
            Route::get('reset-password', 'LoginRegisterController@resetPasswordView');
            Route::post('reset-password', 'LoginRegisterController@resetPassword');
            Route::post('forget-password', 'LoginRegisterController@forget');

            Route::get('dashboard', 'DashboardController@index');
            Route::post('change-details', 'DashboardController@changeDetails');
            Route::post('change-password', 'DashboardController@changePassword');
        });

        Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function () {
            Route::get('/', 'BlogController@index');
            Route::get('/{url}', 'BlogController@post');
        });
    });
});


