<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function scheduled()
    {
        return view('maintenance.scheduled');
    }

    public function history()
    {
        return view('maintenance.history');
    }

    public function add()
    {
        return view('maintenance.add');
    }
}
