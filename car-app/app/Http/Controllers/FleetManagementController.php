<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleetManagementController extends Controller
{
    public function overview()
    {
        return view('fleet-management.overview');
    }

    public function assignDrivers()
    {
        return view('fleet-management.assign-drivers');
    }

    public function utilization()
    {
        return view('fleet-management.utilization');
    }
}
