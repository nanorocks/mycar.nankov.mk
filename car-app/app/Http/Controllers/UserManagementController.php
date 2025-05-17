<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        // Logic for user management (if needed)
        return view('user-management.index');
    }
}
