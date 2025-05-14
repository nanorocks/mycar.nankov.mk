<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuelTrackingController extends Controller
{
    public function log()
    {
        return view('fuel-tracking.log');
    }

    public function history()
    {
        return view('fuel-tracking.history');
    }

    public function efficiencyReport()
    {
        return view('fuel-tracking.efficiency-report');
    }
}
