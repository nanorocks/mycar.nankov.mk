<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index()
    {
        // Logic for notifications (if needed)
        return view('notifications.index');
    }
}
