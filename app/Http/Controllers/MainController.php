<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('front.main');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function service()
    {
        return view('front.service');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function offer()
    {
        return view('front.offer');
    }

}
