<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use Session;

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

        # Get User Religion
        $religion = DB::table('user_religion_details')->where('user_id', $currentuserid)->first();

        # Get User Extra Info
        $extra = DB::table('user_extra_details')->where('user_id', $currentuserid)->first();

        return view('user.profile', array('user' => $user, 'religion' => $religion, 'extra' => $extra));
    }

    # Update Personal Info
    public function updatePersonalInfo(Request $request)
    {
        $user_id = $request->user_id;
        $fname = $request->fname;
        $lname = $request->lname;
        $gender = $request->gender;
        $phone = $request->phone;
        $dob = $request->dob;
        $bloodgroup = $request->bloodgroup;
        $address = $request->address;
        $pincode = $request->pincode;
        $district = $request->district;
        $state = $request->state;
        $country = $request->country;
        $bio = $request->bio;

        /* dob date format chnage Y-m-d */
        //$change_format_dob = date('Y-m-d', strtotime( $dob ));

        $user_update = DB::table('users')->where('id', $user_id)->update(array('name' => $fname, 'lastname' => $lname, 'username' => $fname.$lname, 'phone' => $phone));

        $user_details_update = DB::table('user_details')->where('user_id', $user_id)->update(array('name' => $fname, 'lastname' => $lname, 'gender' => $gender, 'phone' => $phone, 'dob' => $dob, 'blood_group' => $bloodgroup, 'address' => $address, 'pin_code' => $pincode, 'district' => $district, 'state' => $state, 'country' => $country, 'bio' => $bio));

        # Get User role
        $user = DB::table('user_details')->where('user_id', $user_id)->first();

        $personal_status = "Personal information updated successfully !";

        return redirect('profile')->with('personal_status', $personal_status);

    }

    # Update Religion Info
    public function updateReligionInfo(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;
        $cast = $request->cast;
        $sub_cast = $request->sub_cast;
        $ghatak = $request->ghatak;
        $sub_ghatak = $request->sub_ghatak;
        $gotra = $request->gotra;
        $sub_gotra = $request->sub_gotra;

        $user_religion_update = DB::table('user_religion_details')->where('user_id', $user_id)->update(array('cast' => $cast, 'sub_cast' => $sub_cast, 'ghatak' => $ghatak, 'sub_ghatak' => $sub_ghatak, 'gotra' => $gotra, 'sub_gotra' => $sub_gotra, 'updated_on' => $date));

        $religion = DB::table('user_religion_details')->where('user_id', $user_id)->first();

        $religion_status = "Religion information updated successfully !";

        return redirect('profile')->with('religion_status', $religion_status);

    }

    # Update Extra Info
    public function updateExtraInfo(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;
        $donate_body_part = $request->donate_body_part;
        $farm_member = $request->farm_member;
        $club_member = $request->club_member;
        $abc_club_member = $request->abc_club_member;
        $project_committee = $request->project_committee;
        $blood_donate = $request->blood_donate;
        $vaishya_vahini = $request->vaishya_vahini;
        $year_calendar = $request->year_calendar;

        $user_extra_info = DB::table('user_extra_details')->where('user_id', $user_id)->update(array('donate_body_part' => $donate_body_part, 'farm_member' => $farm_member, 'club_member' => $club_member, 'abc_club_member' => $abc_club_member, 'project_committee' => $project_committee, 'blood_donate' => $blood_donate, 'vaishya_vahini' => $vaishya_vahini, 'year_calendar' => $year_calendar, 'updated_on' => $date));

        $extra = DB::table('user_extra_details')->where('user_id', $user_id)->first();

        $extra_status = "Extra information updated successfully !";

        return redirect('profile')->with('extra_status', $extra_status);

    }

    # update Profile Image
    public function updateProfileImage(Request $request)
    {
        $user_id = $request->user_id;

        $date = date('Y-m-d H:i:s');

        if($request->hasFile('image'))
        {
            $file = $request->file('image');

            $filename = $request->image->getClientOriginalName();
            $filesize = $request->image->getClientSize();

            $destinationPath = config('app.fileDestinationPath').'/'.$filename;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

            if($uploaded)
            {
                 $image_update = DB::table('user_details')->where('user_id', $user_id)->update(array('image' => $filename,
                    'updated_at' => $date));
            }

            if($image_update)
            {
                $status = "Profile image updated successfully !";

                return redirect('profile')->with('status', $status);

            }

            //$request->image->storeAs('public/upload', $filename);
        }
        else
        {
            $status = "Please upload any image !";

            return redirect('profile')->with('status', $status);

        }

        //return redirect('profile');
    }

    // Add family member
    public function add_member(Request $request)
    {
        $date = date('Y-m-d');

        $user_id = $request->user_id;
        $fname = $request->fname;
        $lname = $request->lname;
        $gender = $request->gender;
        $email = $request->email;
        $mobile = $request->mobile;
        $dob = $request->dob;
        $mang = $request->mang;
        $bloodgroup = $request->bloodgroup;
        $married = $request->married;
        $marriage_date = $request->marriage_date;
        $experience = $request->experience;
        $ph = $request->ph;
        $job_busi = $request->job_busi;

        $user_insert = DB::table('user_family_details')->insert(
             array(
                    'user_id' => $user_id,
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
                    'mobile' => $mobile,
                    'gender' => $gender,
                    'dob' => $dob,
                    'blood_group' => $bloodgroup,
                    'manglik' => $mang,
                    'married' => $married,
                    'marriage_date' => $marriage_date,
                    'experience' => $experience,
                    'profession' => $job_busi,
                    'ph_Divyangata' => $ph,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
             )
        );

        if($user_insert)
        {
            $status = 'Add member successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('add_member', $status);

        exit;
    }

}
