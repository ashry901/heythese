<?php

namespace App\Http\Controllers\Site\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Nationalitie;
use App\Models\Profile;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('front.subscriptions.index');
    }

    public function create()
    {
        //
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }



}
