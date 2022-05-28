<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function portfolio()
    {
        return view('front.pages-social.portfolio');
    }

    public function jobs()
    {
        return view('front.pages-social.jobs');
    }

    public function connection()
    {
        return view('front.pages-social.connection');
    }

    public function profileSocial()
    {
        return view('front.pages-social.profile-social');
    }

    public function companyProfile()
    {
        return view('front.pages-social.company-profile');
    }

    public function jobProfile()
    {
        return view('front.pages-social.job-profile');
    }

    public function messages()
    {
        return view('front.pages-social.messages');
    }

    public function notifications()
    {
        return view('front.pages-social.notifications');
    }

    public function notFound()
    {
        return view('front.pages-social.not-found');
    }

    public function faq()
    {
        return view('front.pages-social.faq');
    }

    public function terms()
    {
        return view('front.pages-social.terms');
    }

    public function privacy()
    {
        return view('front.pages-social.privacy');
    }

    public function blog()
    {
        return view('front.pages-social.blog');
    }

    public function blogSingle()
    {
        return view('front.pages-social.blog-single');
    }

    public function contact()
    {
        return view('front.pages-social.contact');
    }

    public function pricing()
    {
        return view('front.pages-social.pricing');
    }

    public function maintence()
    {
        return view('front.pages-social.maintence');
    }

    public function comingSoon()
    {
        return view('front.pages-social.coming-soon');
    }

    public function signIn()
    {
        return view('front.pages-social.sign-in');
    }

    public function signUp()
    {
        return view('front.pages-social.sign-up');
    }

    public function editProfile()
    {
        return view('front.pages-social.edit-profile');
    }

    public function forgotPassword()
    {
        return view('front.pages-social.forgot-password');
    }


}
