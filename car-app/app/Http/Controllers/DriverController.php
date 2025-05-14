<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        // Logic for listing drivers
        return view('drivers.index');
    }

    public function create()
    {
        // Logic for showing the create driver form
        return view('drivers.create');
    }

    public function performance()
    {
        // Logic for showing driver performance
        return view('drivers.performance');
    }
}
