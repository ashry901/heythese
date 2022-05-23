<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([
        'namespace' => 'Site\Subscription',
        'middleware' => 'guest',
        'prefix' => 'subscription'
    ], function () {
        Route::get('/', 'SubscriptionController@index')->name('subscriptions');
    });


    Route::group(['namespace' => 'Site\Profile'], function () {
        Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function () {

            //Route::get('/', 'ProfileRegisterController@index')->name('profile-users');
            //Route::get('create', 'ProfileUserController@create')->name('profile.create');
            //Route::post('store', 'ProfileUserController@store')->name('profile.store');

            Route::get('/', 'ProfileUserController@profileMain')->name('profile-users');
            Route::get('create', 'ProfileUserController@create')->name('profile.create');
            Route::post('store', 'ProfileUserController@store')->name('profile.store');
            //Route::post('update', 'ProfileUserController@updateProfile')->name('profile.update');

            Route::get('payment', 'ProfileUserController@payment')->name('profile.payment');
            Route::get('notifications', 'ProfileUserController@notifications')->name('profile.notifications');
            Route::get('chats', 'ProfileUserController@orders')->name('profile.orders');
            Route::get('projects', 'ProfileUserController@whishlist')->name('profile.whishlist');
            Route::get('reset-password', 'ProfileUserController@resetPassword')->name('profile.reset-password');
//            Route::get('create', 'ProfileUserController@create')->name('profile.create');
//            Route::post('store', 'ProfileUserController@store')->name('profile.store');
//            Route::get('edit/{id}', 'ProfileUserController@edit')->name('profile.edit');
//            Route::post('update/{id}', 'ProfileUserController@update')->name('profile.update');

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


