<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile(){
        $profile = User::find(auth()->user()->user_id);
        return view('profile')->with('profile',$profile);

    }

    public function editProfile(Request $req){
        $req->validateWithBag('profileUpdate', [
            'username' => 'required|unique:users,username,'.auth()->user()->user_id.',user_id|min:4',
            'email' => 'required|unique:users,email,'.auth()->user()->user_id.',user_id|email:dns',
            'phone' => 'required|numeric|min:8'
        ]);
        $profile = User::find(auth()->user()->user_id);
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
        $profile->save();
        return redirect('/profile')->with('success', 'Profile has been updated');
    }
    public function changePassword(Request $request){
        $request->validateWithBag('passUpdate',[
            'oldPassword' => 'required|',
            'newPassword' => 'required|min:6',
            'confirmPassword' => 'required|same:newPassword'
        ]);
        $user = User::find(auth()->user()->user_id);
        if(!Hash::check($request->oldPassword, $user->password)){
            return redirect('/profile')->with('passError', 'Old Password is Wrong');
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect('/profile')->with('success', 'Password has been updated');
    }

}
