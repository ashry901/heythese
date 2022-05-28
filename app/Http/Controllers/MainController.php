<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {

        $data=[];
//        $data['sliders'] = Slider::get(['photo']);
//        $data['sliderups'] = Sliderup::get(['picture']);

        $data['categories'] = Category::parent()
            ->select('id', 'slug', 'photo')
            ->with(['childrens' => function($q) {
                $q->select('id', 'parent_id', 'slug');
                $q->with(['childrens' => function ($qq) {
                    $qq->select('id', 'parent_id', 'slug');
                }]);
            }])->get();

        return view('front.main', $data);
    }

//    public function clothing()
//    {
//        return view('front.templates.clothing');
//    }
//
//    public function hotel()
//    {
//        return view('front.templates.hotel');
//    }
//
//    public function furniture()
//    {
//        return view('front.templates.furniture');
//    }
//
//    public function architecture()
//    {
//        return view('front.templates.architecture');
//    }
//
//    public function agency()
//    {
//        return view('front.templates.agency');
//    }
//
//    public function corporate()
//    {
//        return view('front.templates.corporate');
//    }
//
//    public function about()
//    {
//        return view('front.pages.about');
//    }
//
//    public function blog()
//    {
//        return view('front.pages.blog');
//    }
//
//    public function blogTwo()
//    {
//        return view('front.pages.blog-two');
//    }
//
//    public function checkout()
//    {
//        return view('front.pages.checkout');
//    }
//
//    public function checkoutDelivery()
//    {
//        return view('front.pages.checkout-delivery');
//    }
//
//    public function checkoutLogin()
//    {
//        return view('front.pages.checkout-login');
//    }
//
//    public function checkoutPayment()
//    {
//        return view('front.pages.checkout-payment');
//    }
//
//    public function checkoutReceipt()
//    {
//        return view('front.pages.checkout-receipt');
//    }
//
//    public function demo()
//    {
//        return view('front.pages.demo');
//    }
//
//    public function innerPages()
//    {
//        return view('front.pages.inner-pages');
//    }
//
//    public function landingPages()
//    {
//        return view('front.pages.landing-pages');
//    }
//
//    public function pageAbout()
//    {
//        return view('front.pages.page-about');
//    }
//
//    public function portfolio()
//    {
//        return view('front.pages.portfolio');
//    }
//
//    public function product()
//    {
//        return view('front.pages.product');
//    }
//
//    public function productAdvanced()
//    {
//        return view('front.pages.product-advanced');
//    }
//
//    public function productFlat()
//    {
//        return view('front.pages.product-flat');
//    }
//
//    public function productsGrid()
//    {
//        return view('front.pages.products-grid');
//    }
//
//    public function productsGridFlat()
//    {
//        return view('front.pages.products-grid-flat');
//    }
//
//    public function productsList()
//    {
//        return view('front.pages.products-list');
//    }
//
//    public function productsListFlat()
//    {
//        return view('front.pages.products-list-flat');
//    }
//
//    public function productsTopbar()
//    {
//        return view('front.pages.products-topbar');
//    }
//
//    public function profile()
//    {
//        return view('front.pages.profile');
//    }
//
//    public function profileNotifications()
//    {
//        return view('front.pages.profile-notifications');
//    }
//
//    public function profileOrders()
//    {
//        return view('front.pages.profile-orders');
//    }
//
//    public function profilePayment()
//    {
//        return view('front.pages.profile-payment');
//    }
//
//    public function profileResetPassword()
//    {
//        return view('front.pages.profile-reset-password');
//    }
//
//    public function profileWhishlist()
//    {
//        return view('front.pages.profile-whishlist');
//    }
//
//    public function services()
//    {
//        return view('front.pages.services');
//    }
//
//    public function team()
//    {
//        return view('front.pages.team');
//    }



}
