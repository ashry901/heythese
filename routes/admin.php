<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([
        'namespace' => 'Dashboard',
        'middleware' => 'auth:admin',
        'prefix' => 'admin'
    ], function () {

        Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout-admin', 'LoginAdminController@logoutAdmin')->name('admin.logout');

        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@updateprofile')->name('update.profile');
        });

        Route::group(['prefix' => 'section'], function () {
            Route::get('/', 'SectionController@index')->name('admin.section');
            Route::get('create', 'SectionController@create')->name('admin.section.create');
            Route::post('store', 'SectionController@store')->name('admin.section.store');
            Route::get('edit/{id}', 'SectionController@edit')->name('admin.section.edit');
            Route::post('update/{id}', 'SectionController@update')->name('admin.section.update');
            Route::get('delete/{id}','SectionController@destroy') -> name('admin.section.delete');
        });

        Route::group(['prefix' => 'subsections'], function () {
        Route::get('/', 'SubsectionController@index')->name('admin.subsections');
        Route::get('create', 'SubsectionController@create')->name('admin.subsections.create');
        Route::post('store', 'SubsectionController@store')->name('admin.subsections.store');
        Route::get('edit/{id}', 'SubsectionController@edit')->name('admin.subsections.edit');
        Route::post('update/{id}', 'SubsectionController@update')->name('admin.subsections.update');
        Route::get('delete/{id}','SubsectionController@destroy') -> name('admin.subsections.delete');
        });

        Route::group(['prefix' => 'categories'], function () {
            Route::get('/', 'CategoriesController@index')->name('admin.categories');
            Route::get('create', 'CategoriesController@create')->name('admin.categories.create');
            Route::post('store', 'CategoriesController@store')->name('admin.categories.store');
            Route::get('edit/{id}', 'CategoriesController@edit')->name('admin.categories.edit');
            Route::post('update/{id}', 'CategoriesController@update')->name('admin.categories.update');
            Route::get('delete/{id}', 'CategoriesController@destroy')->name('admin.categories.delete');
        });


    });

    Route::group([
        'namespace' => 'Dashboard',
        'middleware' => 'guest:admin',
        'prefix' => 'admin'
    ], function () {
        Route::get('login-admin', 'LoginAdminController@loginAdmin')->name('admin.login');
        Route::post('login-admin', 'LoginAdminController@postLoginAdmin')->name('admin.post.login');
    });


});
