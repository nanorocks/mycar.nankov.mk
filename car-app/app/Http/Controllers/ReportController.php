<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function maintenance()
    {
        return view('reports.maintenance');
    }

    public function fuelEfficiency()
    {
        return view('reports.fuel-efficiency');
    }

    public function utilization()
    {
        return view('reports.utilization');
    }
}
