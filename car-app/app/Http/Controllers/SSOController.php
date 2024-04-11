<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use InvalidArgumentException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
            'client_id' => '9bc6ca47-9ff8-4b25-b590-e019c3ea944b',
            'redirect_uri' => 'http://localhost/auth/callback',
            'response_type' => 'code',
            'scope' => '*',
            'state' => $state,
        ]);

        return redirect('https://andrej.nankov.mk/oauth/authorize?' . $query);
    }


    public function callback(Request $request)
    {
        $state = $request->session()->pull('state');

        throw_unless(
            strlen($state) > 0 && $state === $request->state,
            InvalidArgumentException::class,
            'Invalid state value.'
        );

        $response = Http::asForm()->post('https://andrej.nankov.mk/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => '9bc6ca47-9ff8-4b25-b590-e019c3ea944b',
            'client_secret' => '5msUIfazZSfelQvVpFcsjTVrKV2nBobVpNoyuukA',
            'redirect_uri' => 'http://localhost/auth/callback',
            'code' => $request->code,
        ]);

        $request->session()->put('authTokenData', $response->json());

        return redirect('/user/profile');
    }

    public function profile(Request $request)
    {
        $authTokenData = $request->session()->pull('authTokenData');

        throw_unless(
            !is_null($authTokenData) && count($authTokenData) > 0,
            InvalidArgumentException::class,
            'Invalid authTokenData value.'
        );

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => sprintf('%s %s', $authTokenData['token_type'], $authTokenData['access_token']),
        ])->get('https://andrej.nankov.mk/api/profile');

        try {
            $payload = $response->json();

            $user = User::where('email', $payload['email'])->first();

            Auth::login($user);

            Session::put('authTokenData', $authTokenData);

            return redirect('/');
        } catch (Exception $e) {
            return new Exception($e->getMessage());
        }

        return redirect('/');
    }

    public function logout(Request $request)
    {

        $authTokenData = Session::get('authTokenData');

        // dd($authTokenData);
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => sprintf('%s %s', $authTokenData['token_type'], $authTokenData['access_token']),
        ])->get('https://andrej.nankov.mk/api/logout');


        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
