<?php

namespace App\Http\Controllers\Site\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileUserRequest;
use App\Models\Gender;
use App\Models\Nationalitie;
use App\Models\Profile;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    public function index()
    {
        //
    }

    public function profileMain()
    {
        //$profile_users = Profile::orderBy()->where('id', auth()->user()->id)->get();
        //$profile_users = Profile::latest()->where('user_id', auth()->user()->id)->get();
        //$profile_users = Profile::orderBy('id', 'DESC');
        $profile_users = Profile::with('user_id')->orderBy('id', 'DESC');
        //$profile_users = Profile::latest()->where('user_id')->orderBy('id', 'DESC');
        return view('front.profile.profile-main', compact('profile_users'));
        //return view('front.profile.profile-main');
    }

    public function create()
    {
        $data = [];
        $data['sections']       = Section::all();
        $data['genders']        = Gender::all();
        $data['nationals']      = Nationalitie::all();

        //return view('front.profile.create');
        return view('front.profile.create', $data);
    }

    public function store(ProfileUserRequest $request)
    {
        $profile_user = Profile::create($request->except('_token'));

//        $profile_user->section_id         = $request->section_id;
//        $profile_user->subsection_id      = $request->subsection_id;
//        $profile_user->gender_id          = $request->gender_id;
//        $profile_user->nationalitie_id    = $request->nationalitie_id;
//        $profile_user->phone              = $request->phone;
//        $profile_user->profile_photo_path = $request->profile_photo_path;

//        $profile_user = Profile::create([
//            'user_id'               => $request->user_id,
//            'section_id'            => $request->section_id,
//            'subsection_id'         => $request->subsection_id,
//            'gender_id'             => $request->gender_id,
//            'nationalitie_id'       => $request->nationalitie_id,
//            'phone'                 => $request->phone,
//            'profile_photo_path'    => $request->profile_photo_path,
//        ]);

        $profile_user->save();
        return redirect()->route('front.profile.profile-main')
                         ->with(['success' => 'Successfully Added']);
    }

    public function updateProfile()
    {
        //
    }

    public function payment()
    {
        return view('front.profile.profile-payment');
    }

    public function notifications()
    {
        return view('front.profile.profile-notifications');
    }

    public function orders()
    {
        return view('front.profile.profile-orders');
    }

    public function whishlist()
    {
        return view('front.profile.profile-whishlist');
    }

    public function resetPassword()
    {
        return view('front.profile.profile-reset-password');
    }



//    public function editProfile()
//    {
//        $admin = Admin::find(auth('admin')->user()->id);
//
//        return view('dashboard.profile.edit', compact('admin'));
//    }

//    public function updateProfile(ProfileRequest $request)
//    {
//        //validate
//        // db
//        try {
//            $admin = Admin::find(auth('admin')->user()->id);
//
//            if ($request->filled('password')) {
//                $request->merge(['password' => bcrypt($request->password)]);
//            }
//
//            unset($request['id']);
//            unset($request['password_confirmation']);
//
//            $admin->update($request->all());
//
//            return redirect()->back()->with(['success' => 'Successfully Updated']);
//
//        } catch (\Exception $ex) {
//            return redirect()->back()->with(['error' => 'Something Wrong Try Again']);
//
//        }
//
//    }


}
