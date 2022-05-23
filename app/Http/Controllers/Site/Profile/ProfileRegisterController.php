<?php

namespace App\Http\Controllers\Site\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRegisterRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Gender;
use App\Models\Nationalitie;
use App\Models\Profile;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileRegisterController extends Controller
{
    public function index()
    {
        $profile_users = Profile::orderBy('id', 'DESC');
        return view('front.profile.profile-register', compact('profile_users'));
        //return view('front.profile.profile-register');
    }

    public function create()
    {

        //$data = [];
        $data['sections']       = Section::all();
        $data['genders']        = Gender::all();
        $data['nationals']      = Nationalitie::all();

        return view('front.profile.profile-register', $data);
    }

    public function show()
    {
        //
    }

    public function store(ProfileRegisterRequest $request)
    {
//        DB::beginTransaction();
//
//        try {
            //$validated = $request->validated();
            $profile_users = new Profile();

            $profile_users->section_id       = $request->section_id;
            $profile_users->subsection_id    = $request->subsection_id;
            $profile_users->gender_id        = $request->gender_id;
            $profile_users->nationalitie_id  = $request->nationalitie_id;
            $profile_users->phone            = $request->phone;
            $profile_users->save();

            //DB::commit();
            toastr()->success(trans('cpanel/messages.success'));
            return redirect()->route('front.profile.profile-main');

//        }
//        catch (\Exception $e){
//            DB::rollback();
//            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
//        }
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
