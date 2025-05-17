<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function index()
    {
        // Logic for preferences (if needed)
        return view('preferences.index');
    }
}
