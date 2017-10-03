<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    # User profile view
    public function profile()
    {
    	return view('user.profile');
    }

    # User Settings view
    public function settings()
    {
    	return view('user.setting');
    }
}
