<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googlecontroller extends Controller
{
    public function formg(){
        return Socialite::driver('google')->redirect();
    }

    public function loging(){
        $user = Socialite::driver('google')->user();

        $check_user = User::where('email', $user->email)->first();

        if(!$check_user){
            $new_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId()
            ]);

            Auth::login($new_user);
            return redirect()->intended('/');
        }else{
            Auth::login($check_user);
            return redirect()->intended('/');
        }
    }
}