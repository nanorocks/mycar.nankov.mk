<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function serviceHistoryManager()
    {
        return view('service-history-manager');
    }

    public function neededServiceManager()
    {
        return view('needed-service-manager');
    }

    public function baseInformationManager()
    {
        return view('base-information-manager');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}