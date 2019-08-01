<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function redirectToProvider() {
        return \Socialite::driver('google')->redirect();
    }

    public function handleProviderCallBack() {
        $user = \Socialite::driver('google')->user();
        dd(\user);
    }
}
