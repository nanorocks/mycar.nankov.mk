<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use InvalidArgumentException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SSOController extends Controller
{
    public function login()
    {
        return view('sso.login');
    }

    public function redirect(Request $request)
    {
        $request->session()->put('state', $state = Str::random(40));

        $query = http_build_query([
            'client_id' => config('auth.sso_client_id'),
            'redirect_uri' => config('auth.sso_redirect'),
            'response_type' => 'code',
            'scope' => '*',
            'state' => $state,
        ]);

        return redirect(config('auth.sso_url') . '/oauth/authorize?' . $query);
    }

    public function callback(Request $request)
    {
        // $state = $request->session()->pull('state');

        // throw_unless(
        //     strlen($state) > 0 && $state === $request->state,
        //     InvalidArgumentException::class,
        //     'Invalid state value.'
        // );

        $response = Http::asForm()->post(config('auth.sso_url') . '/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => config('auth.sso_client_id'),
            'client_secret' => config('auth.sso_client_secret'),
            'redirect_uri' => config('auth.sso_redirect'),
            'code' => $request->code,
        ]);

        $authTokenData = $response->json();

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => sprintf('%s %s', $authTokenData['token_type'], $authTokenData['access_token']),
        ])->get(config('auth.sso_url')  . '/api/profile');

        try {
            $payload = $response->json();

            $user = User::where('email', $payload['email'])->first();

            Auth::login($user);

            Session::put('authTokenData', $authTokenData);

            return redirect()->route('dashboard');
        } catch (Exception $e) {
            return new Exception($e->getMessage());
        }

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        // $authTokenData = Session::get('authTokenData');

        // $response = Http::withHeaders([
        //     'Accept' => 'application/json',
        //     'Authorization' => sprintf('%s %s', $authTokenData['token_type'], $authTokenData['access_token']),
        // ])->post(config('auth.sso_url') . '/api/logout');

        // Session::flash('authTokenData');

        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        Auth::logout();

        return redirect('/');
    }
}