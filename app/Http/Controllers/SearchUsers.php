<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchUsers extends Controller
{
    // Search users form view
    public function index()
    {
        $states = DB::table('states')->where(['country_id' => 101])->get();

        return view('search_users.search_users', array('states' => $states));
    }

    // Search users
    public function searchUsers(Request $request)
    {
        $state = $request->state;
        $district = $request->district;
        $blood_group = $request->blood_group;
        $search_by = $request->search_by;

        $search_users = array();
        $i = 0;

        // Search in states
        if(!is_null($state) && is_null($district) && is_null($blood_group) && is_null($search_by))
        {
            $head_users = DB::table('user_details')->where(['residential_state' => $state])->get();

            $family_members = DB::table('user_family_details')->where(['residential_state' => $state])->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(!is_null($state) && !is_null($district) && is_null($blood_group) && is_null($search_by)) // state & district
        {
            $head_users = DB::table('user_details')->where(['residential_state' => $state, 'residential_district' => $district])->get();

            $family_members = DB::table('user_family_details')->where(['residential_state' => $state, 'residential_district' => $district])->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }

        }
        elseif(!is_null($state) && !is_null($district) && !is_null($blood_group) && is_null($search_by)) // state, district & blood
        {
            $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.blood_group', '=', $blood_group],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

            $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.blood_group', '=', $blood_group],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(!is_null($state) && !is_null($district) && is_null($blood_group) && !is_null($search_by)) // state, district & search by
        {
            if($search_by == 1)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.consumer_forum', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.consumer_forum', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 2)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 3)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.abc_club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.abc_club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 4)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.project_community', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.project_community', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 5)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 6)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['ud.residential_district', '=', $district],
                                ['uod.donate_body_parts', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufd.residential_district', '=', $district],
                                ['ufod.donate_body_parts', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 7)
            {
                $head_users = DB::table('user_details')->where([['residential_state', '=', $state], ['residential_district', '=', $district], ['social_hours', '=', '']])->get();

                $family_members = DB::table('user_family_details')->where([['residential_state', '=', $state], ['residential_district', '=', $district], ['social_hours', '!=', '']])->get();
            }
            if($search_by == 8)
            {
                $head_users = DB::table('user_details')->where(['residential_state' => $state, 'residential_district' => $district, 'donate_hundred' => 1])->get();

                $family_members = DB::table('user_family_details')->where(['residential_state' => $state, 'residential_district' => $district, 'donate_hundred' => 1])->get();
            }

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(is_null($state) && is_null($district) && !is_null($blood_group) && is_null($search_by)) // blood
        {
            $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.blood_group', '=', $blood_group],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

            $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.blood_group', '=', $blood_group],
                            ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(is_null($state) && is_null($district) && is_null($blood_group) && !is_null($search_by)) // search by
        {
            if($search_by == 1)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.consumer_forum', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.consumer_forum', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 2)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 3)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.abc_club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.abc_club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 4)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.project_community', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.project_community', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 5)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 6)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['uod.donate_body_parts', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufod.donate_body_parts', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 7)
            {
                $head_users = DB::table('user_details')->where([['social_hours', '=', '']])->get();

                $family_members = DB::table('user_family_details')->where([['social_hours', '!=', '']])->get();
            }
            if($search_by == 8)
            {
                $head_users = DB::table('user_details')->where(['donate_hundred' => 1])->get();

                $family_members = DB::table('user_family_details')->where(['donate_hundred' => 1])->get();
            }

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(!is_null($state) && is_null($district) && !is_null($blood_group) && is_null($search_by)) //state & blood
        {
            $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['uod.blood_group', '=', $blood_group],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

            $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.blood_group', '=', $blood_group],
                            ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(!is_null($state) && is_null($district) && is_null($blood_group) && !is_null($search_by)) // state & search by
        {
            if($search_by == 1)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.consumer_forum', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.consumer_forum', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 2)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 3)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.abc_club_member', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.abc_club_member', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 4)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.project_community', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.project_community', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 5)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.vaishya_panchayat', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 6)
            {
                $head_users = DB::table('user_details as ud')
                    ->join('user_optional_details as uod', 'ud.user_id', '=', 'uod.user_id')
                    ->where([
                                ['ud.residential_state', '=', $state],
                                ['uod.donate_body_parts', '=', 1],
                             ])
                    ->select('ud.*', 'uod.blood_group')
                    ->get();

                $family_members = DB::table('user_family_details as ufd')
                    ->join('user_family_optional_details as ufod', 'ufd.f_member_user_id', '=', 'ufod.f_member_user_id')
                    ->where([
                                ['ufd.residential_state', '=', $state],
                                ['ufod.donate_body_parts', '=', 1],
                             ])
                    ->select('ufd.*', 'ufod.blood_group')
                    ->get();
            }
            if($search_by == 7)
            {
                $head_users = DB::table('user_details')->where([['residential_state', '=', $state], ['social_hours', '=', '']])->get();

                $family_members = DB::table('user_family_details')->where([['residential_state', '=', $state], ['social_hours', '!=', '']])->get();
            }
            if($search_by == 8)
            {
                $head_users = DB::table('user_details')->where(['residential_state' => $state, 'donate_hundred' => 1])->get();

                $family_members = DB::table('user_family_details')->where(['residential_state' => $state, 'donate_hundred' => 1])->get();
            }

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }
        elseif(is_null($state) && is_null($district) && is_null($blood_group) && is_null($search_by)) // nun
        {
            $head_users = DB::table('user_details')->get();

            $family_members = DB::table('user_family_details')->get();

            if(!empty($head_users))
            {
                foreach($head_users as $head)
                {
                    $search_users[$i] = $head;
                    $i++;
                }
            }

            if(!empty($family_members))
            {
                foreach($family_members as $member)
                {
                    $search_users[$i] = $member;
                    $i++;
                }
            }
        }

        $states = DB::table('states')->where(['country_id' => 101])->get();

        return view('search_users.search_users', array('search_users' => $search_users, 'states' => $states));
    }

}
