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

        Route::group(['prefix' => 'grade'], function () {
            Route::resource('grades', 'GradeController');
//            Route::get('/', 'GradeController@index')->name('admin.grade');
//            Route::get('create', 'GradeController@create')->name('admin.grade.create');
//            Route::post('store', 'GradeController@store')->name('admin.grade.store');
//            Route::get('edit/{id}', 'GradeController@edit')->name('admin.grade.edit');
//            Route::post('update/{id}', 'GradeController@update')->name('admin.grade.update');
//            Route::get('delete/{id}','GradeController@destroy') -> name('admin.grade.delete');
        });

        Route::group(['prefix' => 'classroom'], function () {
            Route::resource('classrooms', 'ClassroomController');

            Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');
            Route::post('filter_classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');
//            Route::get('/', 'ClassroomController@index')->name('admin.classroom');
//            Route::get('create', 'ClassroomController@create')->name('admin.classroom.create');
//            Route::post('store', 'ClassroomController@store')->name('admin.classroom.store');
//            Route::get('edit/{id}', 'ClassroomController@edit')->name('admin.classroom.edit');
//            Route::post('update/{id}', 'ClassroomController@update')->name('admin.classroom.update');
//            Route::get('delete/{id}','ClassroomController@destroy') -> name('admin.classroom.delete');
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

        Route::group(['prefix' => 'tests'], function () {
//        Route::get('/', 'TestsController@index')->name('admin.tests');
//        Route::get('create', 'TestsController@create')->name('admin.tests.create');
//        Route::post('store', 'TestsController@store')->name('admin.tests.store');
//        Route::get('edit/{id}', 'TestsController@edit')->name('admin.tests.edit');
//        Route::post('update/{id}', 'TestsController@update')->name('admin.tests.update');
//        Route::get('delete/{id}','TestsController@destroy') -> name('admin.tests.delete');
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
