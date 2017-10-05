<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class User extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # User profile view
    public function profile()
    {
        # Get user id
        $currentuserid = Auth::user()->id;

        # Get User role
        $user = DB::table('user_details')->where('user_id', $currentuserid)->first();

        return view('user.profile', array('user' => $user));
    }

    # Update Personal Info
    public function updatePersonalInfo(Request $request)
    {
        $user_id = $request->user_id;
        $fname = $request->fname;
        $lname = $request->lname;

        $user_update = DB::table('users')->where('id', $user_id)->update(array('name' => $fname, 'lastname' => $lname));

        if($user_update)
        {
             $user_details_update = DB::table('user_details')->where('user_id', $user_id)->update(array('name' => $fname, 'lastname' => $lname));
        }

        # Get User role
        $user = DB::table('user_details')->where('user_id', $user_id)->first();

        return view('user.profile', array('user' => $user));

    }

}
