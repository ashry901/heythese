<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    Route::get('/', 'MainController@main')->name('main');
    Route::get('portfolio', 'MainController@portfolio')->name('portfolio');
    Route::get('about', 'MainController@about')->name('about');

    Route::group(['middleware' => 'guest'], function () {


    });

});

Auth::routes();
