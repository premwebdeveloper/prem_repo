<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUser extends Controller
{
    // Get All Users For admin console
    public function index()
    {
        return view('admin_user.index');
    }

    // User profile ( User details view )
    public function user_profile()
    {
        return view('admin_user.user_profile');
    }
}
