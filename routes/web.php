<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::get('/', 'MainController@main')->name('main');

//    Route::get('clothing', 'MainController@clothing')->name('clothing');
//    Route::get('hotel', 'MainController@hotel')->name('hotel');
//    Route::get('furniture', 'MainController@furniture')->name('furniture');
//    Route::get('architecture', 'MainController@architecture')->name('architecture');
//    Route::get('agency', 'MainController@agency')->name('agency');
//    Route::get('corporate', 'MainController@corporate')->name('corporate');
//
//    Route::get('about', 'MainController@about')->name('about');
//    Route::get('blog', 'MainController@blog')->name('blog');
//    Route::get('blog-two', 'MainController@blogTwo')->name('blog-two');
//    Route::get('checkout', 'MainController@checkout')->name('checkout');
//    Route::get('checkout-login', 'MainController@checkoutLogin')->name('checkout-login');
//    Route::get('checkout-delivery', 'MainController@checkoutDelivery')->name('checkout-delivery');
//    Route::get('checkout-payment', 'MainController@checkoutPayment')->name('checkout-payment');
//    Route::get('checkout-receipt', 'MainController@checkoutReceipt')->name('checkout-receipt');
//    Route::get('demo', 'MainController@demo')->name('demo');
//    Route::get('inner-pages', 'MainController@innerPages')->name('inner-pages');
//    Route::get('landing-pages', 'MainController@landingPages')->name('landing-pages');
//    Route::get('page-about', 'MainController@pageAbout')->name('page-about');
//    Route::get('portfolio', 'MainController@portfolio')->name('portfolio');
//    Route::get('product', 'MainController@product')->name('product');
//    Route::get('product-advanced', 'MainController@productAdvanced')->name('product-advanced');
//    Route::get('product-flat', 'MainController@productFlat')->name('product-flat');
//    Route::get('products-grid', 'MainController@productsGrid')->name('products-grid');
//    Route::get('products-grid-flat', 'MainController@productsGridFlat')->name('products-grid-flat');
//    Route::get('products-list', 'MainController@productsList')->name('products-list');
//    Route::get('products-list-flat', 'MainController@productsListFlat')->name('products-list-flat');
//    Route::get('products-topbar', 'MainController@productsTopbar')->name('products-topbar');
//    Route::get('profile-main', 'MainController@profile')->name('profile');
//    Route::get('profile-notifications', 'MainController@profileNotifications')->name('profile-notifications');
//    Route::get('profile-orders', 'MainController@profileOrders')->name('profile-orders');
//    Route::get('profile-payment', 'MainController@profilePayment')->name('profile-payment');
//    Route::get('profile-reset-password', 'MainController@profileResetPassword')->name('profile-reset-password');
//    Route::get('profile-whishlist', 'MainController@profileWhishlist')->name('profile-whishlist');
//    Route::get('services', 'MainController@services')->name('services');
//    Route::get('team', 'MainController@team')->name('team');

    Route::get('pricing', 'SocialController@pricing')->name('pricing');
    Route::get('jobs', 'SocialController@jobs')->name('jobs');
    Route::get('profile-social', 'SocialController@profileSocial')->name('profile-social');
    Route::get('connection', 'SocialController@connection')->name('connection');
    Route::get('company-profile', 'SocialController@companyProfile')->name('company-profile');
    Route::get('job-profile', 'SocialController@jobProfile')->name('job-profile');
    Route::get('messages', 'SocialController@messages')->name('messages');
    Route::get('notifications', 'SocialController@notifications')->name('notifications');
    Route::get('not-found', 'SocialController@notFound')->name('not-found');
    Route::get('faq', 'SocialController@faq')->name('faq');
    Route::get('terms', 'SocialController@terms')->name('terms');
    Route::get('privacy', 'SocialController@privacy')->name('privacy');
    Route::get('blog', 'SocialController@blog')->name('blog');
    Route::get('blog-single', 'SocialController@blogSingle')->name('blog-single');
    Route::get('contact', 'SocialController@contact')->name('contact');
    Route::get('pricing', 'SocialController@pricing')->name('pricing');
    Route::get('maintence', 'SocialController@maintence')->name('maintence');
    Route::get('coming-soon', 'SocialController@comingSoon')->name('coming-soon');
    Route::get('sign-in', 'SocialController@signIn')->name('sign-in');
    Route::get('sign-up', 'SocialController@signUp')->name('sign-up');
    Route::get('edit-profile', 'SocialController@editProfile')->name('edit-profile');
    Route::get('forgot-password', 'SocialController@forgotPassword')->name('forgot-password');

});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
