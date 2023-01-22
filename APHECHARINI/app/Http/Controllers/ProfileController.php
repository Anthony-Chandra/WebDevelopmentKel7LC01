<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile($userId){
        $profile = User::all()->where('user_id',$userId);
        return view('profile')->with('profiles',$profile);

    }

    public function editProfile(Request $req, $userId){
        $profile = User::find($userId);
        $url = $req->imgUrl;
        if($url != null){
            $image = $req->file('imgUrl');
            $imageName = $image->getClientOriginalName();
            Storage::putFileAs('public/assets',$image,$imageName);
            $profile->imageUrl = $imageName;
        }
        $profile->username = $req->username;
        $profile->email = $req->email;
        $profile->phone = $req->phone;

        // $password = $req->password;
        // $profile->password = Hash::make($password);
        $profile->save();
        return back();
    }


}
