<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->has('remember_me')) {
            Cookie::queue('myCookie', $request->email, 1);
        }

        if (Auth::attempt($credentials, $request->has('remember_me'))) {
            Session::put('mysession', $credentials);
            return redirect('/')->withSuccess('Succesfully loggedin');
        }

        return redirect('/login')->withErrors('Invalid Username Or Password');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProcess(Request $req)
    {
        $req->validate([
            'username' => 'required|unique:users,username|min:4',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|alpha_num|min:6|confirmed',
            'role' => 'required'
        ]);

        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->role = $req->role;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/register')->with('alert', 'Register Success');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
