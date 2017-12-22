<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use \App\User;


class AuthController extends Controller
{

    public function login(Request $req) {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(Request $req) {
        $fb_user = Socialite::driver('facebook')->user();
        if ($fb_user) {
            $email = $fb_user->getEmail();
            if (User::where('email', $email)->count() == 0) {
                // User not registered yet!
                $user = new User;
                $user->email = $email;
                $user->name = $fb_user->getName();
                $user->save();
            }
            $fb_user->expiresIn += time() - 30;
            $req->session()->put(['fb_user' => $fb_user]);
            return redirect('/dashboard');
        }
        else {
            $req->session()->flash(['message' => 'Login Failed! Try again.']);
            return view('/notlogin');
        }
    }
}
