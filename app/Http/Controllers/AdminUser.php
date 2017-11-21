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
        $users = DB::table('user_details')->where('status', 1)->get();

        return view('admin_user.index', array('users' => $users));
    }

    // Disable user by Admin
    public function disableUser(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $id = $request->id;

        $user_disable = DB::table('users')->where('id', $id)->update(
            array(
                    'status' => 0,
                    'updated_at' => $date
            )
        );

        $disable_user_detail = DB::table('user_details')->where('user_id', $id)->update(
            array(
                    'status' => 0,
                    'updated_at' => $date
            )
        );
        if($disable_user_detail)
        {
            $status = 'Disabled User successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('users')->with('disable_user', $status);
    }

    // User profile ( User details view )
    public function userView(Request $request)
    {
        $id = $request->id;

        // Get User Detail
        $userDetail = DB::table('user_details')->where('user_id', $id)->first();

        // Get User Optional Detail
        $userOptionalDetail = DB::table('user_optional_details')->where('user_id', $id)->first();

        // Get User's family members detail
        $userFamilyMembers = DB::table('user_family_details')->where('family_head_id', $id)->get();

        return view('admin_user.user_profile', array('userDetail' => $userDetail, 'userOptionalDetail' => $userOptionalDetail, 'userFamilyMembers' => $userFamilyMembers));
    }

    // Family member view
    public function familyMemberView(Request $request)
    {
        $id = $request->id;

        // Get User Detail
        $memberView = DB::table('user_family_details')->where('f_member_user_id', $id)->first();

        /*echo '<pre>';
        print_r($memberView);
        exit;*/

        return view('admin_user.familyMemberView', array('memberView' => $memberView));
    }
}
