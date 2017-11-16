<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Familyhead extends Controller
{
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

        $personal_status = "Personal information updated successfully !";

        return redirect('profile')->with('personal_status', $personal_status);
    }

    // Update User optional information
    public function updateOptionalInfo(Request $request)
    {
        $user_id = $request->user_id;
        $bloodgroup = $request->bloodgroup;
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

        $family_cards = $request->family_cards;

        if(!empty($family_cards))
        {
            $family_cards = implode("-", $family_cards);
        }
        else
        {
            $family_cards = '';
        }

        $pan_card = $request->pan_card;
        $adhar_card = $request->adhar_card;
        $annual_income = $request->annual_income;

        $updated_at = date('Y-m-d H:i:s');
        $agree = $request->agree;

        if($agree == 'on')
        {
            $user_details_update = DB::table('user_optional_details')->where('user_id', $user_id)->update(array('blood_group' => $bloodgroup, 'blood_information' => $blood_information, 'consumer_forum' => $consumer_forum, 'club_member' => $club_member, 'abc_club_member' => $abc_club_member, 'project_community' => $project_community, 'vaishya_panchayat' => $vaishya_panchayat, 'donate_body_parts' => $donate_body_parts, 'samaj_sanstha' => $samaj_sanstha, 'samaj_patrika' => $samaj_patrika, 'self_home' => $self_home, 'vehicle' => $vehicle, 'family_cards' => $family_cards, 'pan_card' => $pan_card, 'adhar_card' => $adhar_card, 'annual_income' => $annual_income, 'updated_at' => $updated_at));

            $user_optional_details = "Optional information updated successfully !";
        }
        else
        {
            $user_optional_details = "Please agree before update optional informations !";
        }

        return redirect('profile')->with('personal_status', $user_optional_details);
    }
}
