<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($userId){
        $profile = User::all()->where('user_id',$userId);
        return view('profile')->with('profiles',$profile);

    }
}
