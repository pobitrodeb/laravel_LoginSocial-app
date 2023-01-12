<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Auth;
// use Socialite;
class SocialController extends Controller
{
    //Login with facebook
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    // ->scopes(['read:user', 'public_repo'])
    // ->redirect();
    }

    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('facebook_id', $user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }else{
            $newUser            = new User();
            $newUser->name      = $user->name;
            $newUser->email      = $user->email;
            $newUser->facebook_id      = $user->id;
            $newUser->password      = bcrypt('1234');
            $newUser->save();
            Auth::login($newUser);
            return redirect('/home');
        }
    }

    // Login with google
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    // ->scopes(['read:user', 'public_repo'])
    // ->redirect();
    }

    public function loginWithGoogle(){
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id', $user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }else{
            $newUser            = new User();
            $newUser->name      = $user->name;
            $newUser->email      = $user->email;
            $newUser->google_id      = $user->id;
            $newUser->password      = bcrypt('1234');
            $newUser->save();
            Auth::login($newUser);
            return redirect('/home');
        }
    }

}
