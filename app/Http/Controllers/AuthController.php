<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function loginForm()
    {
        return view('auth.login');
    }

    // 
    public function processLogin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin-page')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    // 
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
