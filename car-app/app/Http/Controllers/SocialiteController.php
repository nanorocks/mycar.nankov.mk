<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
            $user = User::where('email', $githubUser->getEmail())->first();

            if (!$user) {
                return redirect('/sso/login')->with('error', 'User not found. Please register first.');
            }

            Auth::login($user);

            Session::put('authTokenData', $githubUser->token);

            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/sso/login')->with('error', 'Unable to authenticate with GitHub.');
        }
    }
}