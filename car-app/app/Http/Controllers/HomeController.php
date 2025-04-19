<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function serviceHistoryManager(int $id)
    {
        return view('service-history-manager', [
            'vehicleId' => $id,
        ]);
    }

    public function neededServiceManager(int $id)
    {
        return view('needed-service-manager', [
            'vehicleId' => $id,
        ]);
    }

    public function baseInformationManager(int $id)
    {
        return view('base-information-manager', [
            'vehicleId' => $id,
        ]);
    }

    public function vehicles(int $id)
    {
        return view('vehicles' , [
            'vehicleId' => $id,
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}