<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function LoginForm(){
        return view('components.Login');
    }
    // return view('components.Profile');


    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Debug the credentials and attempt result
        // dd($credentials, Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return to_route('profiles.home_list')->with('success', 'Welcome to the home page');
        }
        else{
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ])->onlyInput('email');
        }
    }

    public function Logout(){
        Session::flush();
        Auth::logout();
        return to_route('Login')->with('success', 'You have been logged out');
    }




}
