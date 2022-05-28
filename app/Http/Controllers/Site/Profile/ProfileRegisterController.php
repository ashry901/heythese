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
//        $profiles = Profile::orderBy('id');
//        return view('front.profile.profile-register', compact('profiles'));
        $data = [];
        //$data['user_id']        = Section::all();

        $data['sections']       = Section::all();
        $data['genders']        = Gender::all();
        $data['nationals']      = Nationalitie::all();
        return view('front.profile.profile-register', $data);
    }

    public function create()
    {
        //$data = [];
//        $data['user_id']        = Section::all();
//        $data['sections']       = Section::all();
//        $data['genders']        = Gender::all();
//        $data['nationals']      = Nationalitie::all();

//        return view('front.profile.profile-register', $data);
    }

    public function show()
    {
        //
    }

    public function store(ProfileRegisterRequest $request)
    {
//        $input = $request->all();
//        $input['category'] = $request->input('category');
//        Profile::create($input);

//        DB::beginTransaction();

//        try {
            $validated = $request->validated();
            $profiles = new Profile();

            //$profiles->user_id          = $request->user_id;
            $profiles->category         = $request->category;
            $profiles->section_id       = $request->section_id;
            $profiles->gender_id        = $request->gender_id;
            $profiles->nationalitie_id  = $request->nationalitie_id;
            $profiles->phone            = $request->phone;
            $profiles->save();

//            DB::commit();

            return redirect()->route('main');

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
