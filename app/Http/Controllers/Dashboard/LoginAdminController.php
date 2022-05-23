<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginAdminController extends Controller
{
    public function loginAdmin()
    {
        return view('dashboard.auth.login');
    }

    public function postLoginAdmin(AdminLoginRequest $request)
    {
        //validation
        //check , store , update

        //$remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt([
            'email'     => $request->input("email"),
            'password'  => $request->input("password")])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'Something Wrong Try Again']);
    }

    public function logoutAdmin()
    {
        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('admin.login');
    }

    private function getGaurd()
    {
        return auth('admin');
    }
}
