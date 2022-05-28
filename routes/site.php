<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([
        //'namespace' => 'Site',
        'prefix' => 'user',
        'middleware' => 'auth',
    ], function () {

        Route::get('category/{slug}', 'CategoryUserController@categoryMain')->name('category');


    });

    Route::group(['namespace' => 'Site\Profile'], function () {
        Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function () {

            Route::get('/', 'ProfileRegisterController@index')->name('profile.profile-register');
            //Route::get('create', 'ProfileRegisterController@create')->name('profile.create');
            Route::post('store', 'ProfileRegisterController@store')->name('profile.store');

            //Route::get('/', 'ProfileRegisterController@profileMain')->name('profile-users');
            //Route::get('create', 'ProfileRegisterController@create')->name('profile.create');
            //Route::post('store', 'ProfileRegisterController@store')->name('profile.store');
            //Route::post('update', 'ProfileRegisterController@updateProfile')->name('profile.update');

            //Route::get('payment', 'ProfileRegisterController@payment')->name('profile.payment');
            //Route::get('notifications', 'ProfileRegisterController@notifications')->name('profile.notifications');
            //Route::get('chats', 'ProfileRegisterController@orders')->name('profile.orders');
            //Route::get('projects', 'ProfileRegisterController@whishlist')->name('profile.whishlist');
            //Route::get('reset-password', 'ProfileRegisterController@resetPassword')->name('profile.reset-password');
//            Route::get('create', 'ProfileRegisterController@create')->name('profile.create');
//            Route::post('store', 'ProfileRegisterController@store')->name('profile.store');
//            Route::get('edit/{id}', 'ProfileRegisterController@edit')->name('profile.edit');
//            Route::post('update/{id}', 'ProfileRegisterController@update')->name('profile.update');

        });

    Route::group([
        'namespace' => 'Site\Subscription',
        'middleware' => 'auth',
        'prefix' => 'subscription'
    ], function () {



    });



    });


    Route::group([
        'namespace' => 'Site\Profile',
        'prefix' => 'user',
        //'middleware' => 'auth',
    ], function () {




    });







});

//Auth::routes();


