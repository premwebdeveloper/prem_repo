<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminUser extends Controller
{
    // Get All Users For admin console
    public function index()
    {
        //  Get Users
        $users = DB::table('user_details')->get();

        return view('admin_user.index', array('users' => $users));
    }

    // User profile ( User details view )
    public function user_profile()
    {
        return view('admin_user.user_profile');
    }
}
