<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\response;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{

    public function index(Request $request){

        $email = $request->email;

        $user_details = DB::table('users')->where('email', $email)->first();

        $family_head_id = $user_details->family_head_id;

        $user = DB::table('users')->where('id', $family_head_id)->first();

        $head_email = $user->email;

        return response()->json([
                "head_email" => $head_email
            ]);
   }

    // Get district bu states
    public function getDistrictByState(Request $request)
    {
        $state = $request->state;

        // Get all districts of this state
        $cities = DB::table('cities')->where('state_id', $state)->get();

        return response()->json($cities);
    }

    // OTP verification
    public function otpVerification(Request $request){

        $date = date('Y-m-d H:i:s');
        $otp = $request->otp;
        $exist_phone = $request->exist_phone;

        $check = DB::table('users')->where('phone', $exist_phone)->first();

        if(!empty($check)){

            if($check->otp == $otp){

                $response = 1;
            }else{

                $response = 2;
            }

        }else{

            $response = 0;
        }

        return response()->json($response);

        exit;
    }
}
