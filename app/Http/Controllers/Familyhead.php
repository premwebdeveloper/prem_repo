<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Familyhead extends Controller
{
    // Update User optional information
    public function updateOptionalInfo()
    {
        # code...
    }

    # Update Personal Info
    public function updatePersonalInfo(Request $request)
    {
        $user_id = $request->user_id;
        $name = $request->name;
        $gender = $request->gender;
        $father_husband_name = $request->father_husband_name;
        $whatsapp = $request->whatsapp;
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
        $life_partner = $request->life_partner;
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

        $updated_at = date('Y-m-d H:i:s');

        $bio = $request->bio;

        $user_update = DB::table('users')->where('id', $user_id)->update(array('name' => $name, 'phone' => $phone));

        $user_details_update = DB::table('user_details')->where('user_id', $user_id)->update(array('name' => $name, 'father_husband_name' => $father_husband_name, 'whatsapp_mobile' => $whatsapp, 'phone' => $phone, 'sampraday' => $sampraday, 'cast' => $cast, 'sub_cast' => $sub_cast, 'gotra' => $gotra, 'bunk' => $bunk, 'origin_place' => $origin_place, 'married' => $married, 'marriage_date' => $marriage_date, 'life_partner_name' => $life_partner, 'education' => $education, 'special_qualification' => $special_qualification, 'experience_field' => $experience_field, 'occupation' => $occupation, 'seva_nivrat' => $seva_nivrat, 'gender' => $gender, 'dob' => $dob, 'residential_address' => $residential_address, 'residential_pincode' => $residential_pincode, 'residential_district' => $residential_district, 'residential_state' => $residential_state, 'occupation_address' => $occupation_address, 'occupation_pincode' => $occupation_pincode, 'occupation_district' => $occupation_district, 'occupation_state' => $occupation_state, 'social_hours' => $social_hours, 'social_field' => $social_field, 'social_hours_according' => $social_hours_according, 'donate_hundred' => $donate_hundred, 'updated_at' => $updated_at, 'bio' => $bio));

        # Get User role
        $user = DB::table('user_details')->where('user_id', $user_id)->first();

        $personal_status = "Personal information updated successfully !";

        return redirect('profile')->with('personal_status', $personal_status);
    }
}
