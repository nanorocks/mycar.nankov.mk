<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function index()
    {
        // Logic for alerts (if needed)
        return view('alerts.index');
    }
}
