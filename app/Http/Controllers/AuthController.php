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
            $row = User::select('user_id')->where('email', $email)->first();
            if ($row == null) {
                // User not registered yet!
                $user = new User;
                $user->email = $email;
                $user->name = $fb_user->getName();
                $user_id = $user->save();
            }
            else {
                $user_id = $row->user_id;
            }
            $fb_user->localUserId = $user_id;
            $fb_user->expiresIn += time() - 30;
            $req->session()->put(['fb_user' => $fb_user]);
            return redirect('/dashboard');
        }
        else {
            $req->session()->flash(['message' => 'Login Failed! Try again.']);
            return view('/notlogin');
        }
    }

    public function logout(Request $req) {
        $req->session()->invalidate();
        $req->session()->flash(['message' => 'Logout Successfull!']);
        return redirect('/');
    }
}
