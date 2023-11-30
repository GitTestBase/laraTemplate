<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginpost(Request $request)
    {

    }

    public function dashboardview()
    {
            return view('Admin.dashboard');

    }
       
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
