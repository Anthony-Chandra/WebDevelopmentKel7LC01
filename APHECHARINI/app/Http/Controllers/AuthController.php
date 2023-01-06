<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if($request->has('remember_me')){
         Cookie::queue('whycookie', $request->email,120);
        }

        if(Auth::attempt($credentials, $request->has('remember_me'))){
            Session::put('mysession', $credentials);
            return redirect('/')->withSuccess('Succesfully loggedin');
        }

        return redirect()->back()->withErrors('Wrong credentials');
    }

    public function register(){
        return view('register');
    }
}
