<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\response;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    public function index(Request $request){


        /*$data = $request->all(); // This will get all the request data.

        dd($data);*/ // This will dump and die

        $email = $request->email;

        $user_details = DB::table('users')->where('email', $email)->first();

        $family_head_id = $user_details->family_head_id;

        $user = DB::table('users')->where('id', $family_head_id)->first();

        $head_email = $user->email;

        return response()->json([
                "head_email" => $head_email
            ]);
   }
}
