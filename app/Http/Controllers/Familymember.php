<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Storage;

class Familymember extends Controller
{
    // Add family member
    public function add_member(Request $request)
    {
        // If image is uploaded
        $filename = '';
        if($request->hasFile('image'))
        {
            $file = $request->file('image');

            $filename = $request->image->getClientOriginalName();

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $filename = substr(md5(microtime()),rand(0,26),6);

            $filename .= '.'.$ext;

            $filesize = $request->image->getClientSize();

            $destinationPath = config('app.fileDestinationPath').'/'.$filename;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        }

        $email = $request->email;
        $phone = $request->phone;

        $is_available = DB::table('users')->where('email', $email)->first();

        $is_mobile_available = DB::table('users')->where('phone', $phone)->first();

        if(!empty($is_available))
        {
            $member_email_exist = 'This email is already exist.';
            return redirect('profile')->with('member_email_exist', $member_email_exist);
        }

        /*if(!empty($is_mobile_available))
        {
            $member_mobile_exist = 'This mobile no. is already exist.';
            return redirect('profile')->with('member_email_exist', $member_mobile_exist);
        }*/

        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;

        $name = $request->name;
        $relation_to_head_member = $request->relation_to_head_member;
        $gender = $request->m_gender;
        $father_husband_name = $request->father_husband_name;
        $whatsapp_mobile = $request->whatsapp_mobile;
        $sampraday = $request->sampraday;
        $cast = $request->cast;
        $sub_cast = $request->sub_cast;
        $gotra = $request->gotra;
        $bunk = $request->bunk;
        $origin_place = $request->origin_place;
        $dob = $request->dob;
        $married = $request->married;
        $marriage_date = $request->marriage_date;
        $life_partner_name = $request->life_partner_name;
        $education = $request->education;
        $special_qualification = $request->special_qualification;
        $experience_field = $request->experience_field;
        $occupation = $request->occupation;
        $seva_nivrat = $request->seva_nivrat;
        $occupation_address = $request->occupation_address;
        $occupation_pincode = $request->occupation_pincode;
        $occupation_district = $request->occupation_district;
        $occupation_state = $request->occupation_state;
        $residential_address = $request->residential_address;
        $residential_pincode = $request->residential_pincode;
        $residential_district = $request->residential_district;
        $residential_state = $request->residential_state;
        $social_hours = $request->social_hours;
        $social_field = $request->social_field;
        $social_hours_according = $request->social_hours_according;
        $donate_hundred = $request->donate_hundred;
        $bio = $request->bio;

        $blood_group = $request->blood_group;
        $blood_information = $request->blood_information;
        $consumer_forum = $request->consumer_forum;
        $club_member = $request->club_member;
        $abc_club_member = $request->abc_club_member;
        $project_community = $request->project_community;
        $vaishya_panchayat = $request->vaishya_panchayat;
        $donate_body_parts = $request->donate_body_parts;
        $samaj_sanstha = $request->samaj_sanstha;
        $samaj_patrika = $request->samaj_patrika;
        $self_home = $request->self_home;

        $vehicle = $request->vehicle;

        if(!empty($vehicle))
        {
            $vehicle = implode("-", $vehicle);
        }
        else
        {
            $vehicle = '';
        }

        $pan_card = $request->pan_card;
        $adhar_card = $request->adhar_card;

        $agree = $request->agree;

        if($agree == 'on')
        {
            # Get data user table
            $user = DB::table('users')->where('id', $user_id)->first();

            # Get password user table
            $user_password = $user->password;

            # insert data user table
            $user_table = DB::table('users')->insert(
                array(
                        'name' => $name,
                        'family_head_id' => $user_id,
                        'username' => $email,
                        'email' => $email,
                        'password' => $user_password,
                        'phone' => $phone,
                        'created_at' => $date,
                        'status' => 0
                )
            );

            $lastInsertId = DB::getPdo()->lastInsertId();

            // Insert member detail in user_family_details table
            $memberAdd = DB::table('user_family_details')->insert(
                array(
                    'family_head_id' => $user_id,
                    'f_member_user_id' => $lastInsertId,
                    'name' => $name,
                    'father_husband_name' => $father_husband_name,
                    'relation_to_head_member' => $relation_to_head_member,
                    'email' => $email,
                    'whatsapp_mobile' => $whatsapp_mobile,
                    'phone' => $phone,
                    'sampraday' => $sampraday,
                    'cast' => $cast,
                    'sub_cast' => $sub_cast,
                    'gotra' => $gotra,
                    'bunk' => $bunk,
                    'origin_place' => $origin_place,
                    'married' => $married,
                    'marriage_date' => $marriage_date,
                    'life_partner_name' => $life_partner_name,
                    'education' => $education,
                    'special_qualification' => $special_qualification,
                    'experience_field' => $experience_field,
                    'occupation' => $occupation,
                    'seva_nivrat' => $seva_nivrat,
                    'image' => $filename,
                    'bio' => $bio,
                    'gender' => $gender,
                    'dob' => $dob,
                    'residential_address' => $residential_address,
                    'residential_pincode' => $residential_pincode,
                    'residential_district' => $residential_district,
                    'residential_state' => $residential_state,
                    'occupation_address' => $occupation_address,
                    'occupation_pincode' => $occupation_pincode,
                    'occupation_district' => $occupation_district,
                    'occupation_state' => $occupation_state,
                    'social_hours' => $social_hours,
                    'social_field' => $social_field,
                    'social_hours_according' => $social_hours_according,
                    'donate_hundred' => $donate_hundred,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
                )
            );

            // If add member successfully then add member's optional information
            if($memberAdd)
            {
                // Insert member OPTIONAL detail in user_family_optional_details table
                $memberOptional = DB::table('user_family_optional_details')->insert(
                    array(
                        'family_head_id' => $user_id,
                        'f_member_user_id' => $lastInsertId,
                        'blood_group' => $blood_group,
                        'blood_information' => $blood_information,
                        'consumer_forum' => $consumer_forum,
                        'club_member' => $club_member,
                        'abc_club_member' => $abc_club_member,
                        'project_community' => $project_community,
                        'vaishya_panchayat' => $vaishya_panchayat,
                        'donate_body_parts' => $donate_body_parts,
                        'samaj_sanstha' => $samaj_sanstha,
                        'samaj_patrika' => $samaj_patrika,
                        'self_home' => $self_home,
                        'vehicle' => $vehicle,
                        'pan_card' => $pan_card,
                        'adhar_card' => $adhar_card,
                        'created_at' => $date,
                        'updated_at' => $date,
                        'status' => 1
                    )
                );

                if($memberOptional)
                {
                    $status = 'Add member successfully.';
                }
                else
                {
                    $status = 'Something went wrong !';
                }
            }
            else
            {
                $status = 'Something went wrong !';
            }
        }
        else
        {
            $status = "Please agree before add new member !";
        }

        return redirect('profile')->with('add_member', $status);
    }

    # view family member
    public function viewfamilymember($id)
    {
        #Get User Id
        $currentuserid = Auth::user()->id;

        #Get User role
        $user = DB::table('user_details')->where('user_id', $currentuserid)->first();

        #Get Family Member
        $familymember = DB::table('user_family_details')->where('family_head_id', $currentuserid)->first();

        #view family member
        $view_family_member = DB::table('user_family_details')->where('id', $id)->first();

        $f_member_user_id = $view_family_member->f_member_user_id;
        #Get Satet
        $state_id = $view_family_member->residential_state;
        $city_id = $view_family_member->residential_district;

        $state_details = DB::table('states')->where('id', $state_id)->first();
        $city_details = DB::table('cities')->where('id', $city_id)->first();

        $family_member_optional = DB::table('user_family_optional_details')->where('f_member_user_id', $f_member_user_id)->first();

        #Get States
        $states = DB::table('states')->where(['country_id' => 101])->get();

        return view('user.view-family-member', array('user' => $user, 'viewfamily' => $view_family_member, 'family_member_optional' => $family_member_optional, 'familymember' => $familymember, 'states'=> $states, 'state_details'=> $state_details, 'city_details'=> $city_details));
    }

    // Update family member
    public function updateMemberPersonalInfo(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $member_id = $request->member_id;
        $f_member_user_id = $request->f_member_user_id;

        $memberData = DB::table('user_family_details')->where('f_member_user_id', $f_member_user_id)->first();
        $filename = $memberData->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');

            $filename = $request->image->getClientOriginalName();

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $filename = substr(md5(microtime()),rand(0,26),6);

            $filename .= '.'.$ext;

            $filesize = $request->image->getClientSize();

            $destinationPath = config('app.fileDestinationPath').'/'.$filename;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        }

        $name = $request->name;
        $relation_to_head_member = $request->relation_to_head_member;
        $gender = $request->m_gender;
        $father_husband_name = $request->father_husband_name;
        $whatsapp_mobile = $request->whatsapp_mobile;
        $email = $request->email;
        $phone = $request->phone;
        $sampraday = $request->sampraday;
        $cast = $request->cast;
        $sub_cast = $request->sub_cast;
        $gotra = $request->gotra;
        $bunk = $request->bunk;
        $origin_place = $request->origin_place;
        $dob = $request->dob;
        $married = $request->married;
        $marriage_date = $request->marriage_date;
        $life_partner_name = $request->life_partner_name;
        $education = $request->education;
        $special_qualification = $request->special_qualification;
        $experience_field = $request->experience_field;
        $occupation = $request->occupation;
        $seva_nivrat = $request->seva_nivrat;
        $occupation_address = $request->occupation_address;
        $occupation_pincode = $request->occupation_pincode;
        $occupation_district = $request->occupation_district;
        $occupation_state = $request->occupation_state;
        $residential_address = $request->residential_address;
        $residential_pincode = $request->residential_pincode;
        $residential_district = $request->residential_district;
        $residential_state = $request->residential_state;
        $social_hours = $request->social_hours;
        $social_field = $request->social_field;
        $social_hours_according = $request->social_hours_according;
        $donate_hundred = $request->donate_hundred;
        $bio = $request->bio;

         // If image is uploaded
        /*if($request->hasFile('image'))
        {
            $file = $request->file('image');

            $filename = $request->image->getClientOriginalName();

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $filename = substr(md5(microtime()),rand(0,26),6);

            $filename .= '.'.$ext;

            $filesize = $request->image->getClientSize();

            $destinationPath = config('app.fileDestinationPath').'/'.$filename;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

            $member_image = $filename;
        }
        else    // If image not uploaded then image name will be null
        {
            $member = DB::table('user_family_details')->where('id', $member_id)->first();

            $member_image = $member->image;;
        }*/

        # update data user table
        $user = DB::table('users')->where('id', $f_member_user_id)->first();

       # Get password user table
        $user_password = $user->password;

        # insert data user table
        $user_table = DB::table('users')->where('id', $f_member_user_id)->update(
            array(
                    'name' => $name,
                    'username' => $email,
                    'email' => $email,
                    'password' => $user_password,
                    'phone' => $phone,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 0
            )
        );

        $member_update = DB::table('user_family_details')->where('id', $member_id)->update(
             array(
                    'name' => $name,
                    'father_husband_name' => $father_husband_name,
                    'relation_to_head_member' => $relation_to_head_member,
                    'email' => $email,
                    'whatsapp_mobile' => $whatsapp_mobile,
                    'phone' => $phone,
                    'sampraday' => $sampraday,
                    'cast' => $cast,
                    'sub_cast' => $sub_cast,
                    'gotra' => $gotra,
                    'bunk' => $bunk,
                    'origin_place' => $origin_place,
                    'married' => $married,
                    'marriage_date' => $marriage_date,
                    'life_partner_name' => $life_partner_name,
                    'education' => $education,
                    'special_qualification' => $special_qualification,
                    'experience_field' => $experience_field,
                    'occupation' => $occupation,
                    'seva_nivrat' => $seva_nivrat,
                    'image' => $filename,
                    'bio' => $bio,
                    'gender' => $gender,
                    'dob' => $dob,
                    'residential_address' => $residential_address,
                    'residential_pincode' => $residential_pincode,
                    'residential_district' => $residential_district,
                    'residential_state' => $residential_state,
                    'occupation_address' => $occupation_address,
                    'occupation_pincode' => $occupation_pincode,
                    'occupation_district' => $occupation_district,
                    'occupation_state' => $occupation_state,
                    'social_hours' => $social_hours,
                    'social_field' => $social_field,
                    'social_hours_according' => $social_hours_according,
                    'donate_hundred' => $donate_hundred,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
             )
        );

        if($member_update)
        {
            $status = 'Update member successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('update_member', $status);

        exit;
    }

    // Update User optional information
    public function updateMemberOptionalInfo(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $member_optional_id = $request->member_optional_id;

        $blood_group = $request->blood_group;
        $blood_information = $request->blood_information;
        $consumer_forum = $request->consumer_forum;
        $club_member = $request->club_member;
        $abc_club_member = $request->abc_club_member;
        $project_community = $request->project_community;
        $vaishya_panchayat = $request->vaishya_panchayat;
        $donate_body_parts = $request->donate_body_parts;
        $samaj_sanstha = $request->samaj_sanstha;
        $samaj_patrika = $request->samaj_patrika;
        $self_home = $request->self_home;

        $vehicle = $request->vehicle;

        if(!empty($vehicle))
        {
            $vehicle = implode("-", $vehicle);
        }
        else
        {
            $vehicle = '';
        }

        $pan_card = $request->pan_card;
        $adhar_card = $request->adhar_card;

        $agree = $request->agree;

        if($agree == 'on')
        {
            $member_update = DB::table('user_family_optional_details')->where('id', $member_optional_id)->update(
                array(
                        'blood_group' => $blood_group,
                        'blood_information' => $blood_information,
                        'consumer_forum' => $consumer_forum,
                        'club_member' => $club_member,
                        'abc_club_member' => $abc_club_member,
                        'project_community' => $project_community,
                        'vaishya_panchayat' => $vaishya_panchayat,
                        'donate_body_parts' => $donate_body_parts,
                        'samaj_sanstha' => $samaj_sanstha,
                        'samaj_patrika' => $samaj_patrika,
                        'self_home' => $self_home,
                        'vehicle' => $vehicle,
                        'pan_card' => $pan_card,
                        'adhar_card' => $adhar_card,
                        'created_at' => $date,
                        'updated_at' => $date,
                        'status' => 1
                 )
            );
        }

        if($member_update)
        {
            $status = 'Update member optional information successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('update_member', $status);

    }

    // Delete family member
    public function deletefamilymember(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $id = $request->id;

        // Get family member details
        $member_details = DB::table('user_family_details')->where('id', $id)->first();

        $member_user_id = $member_details->f_member_user_id;

        //  Delete from 'users ' table
        DB::table('users')->where('id', $member_user_id)->delete();

        // Delete from 'user_family_details' table
        $delete = DB::table('user_family_details')->where('id', $id)->delete();

        /*$delete = DB::table('user_family_details')->where('id', $id)->update(
            array(
                    'status' => 0
            )
        );*/

        if($delete)
        {
            $status = 'Delete member successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('delete_member', $status);
    }
}
