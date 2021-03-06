<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
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

        $state_id = $user->residential_state;
        $city_id = $user->residential_district;

        $state_details = DB::table('states')->where('id', $state_id)->first();
        $city_details = DB::table('cities')->where('id', $city_id)->first();

        # Get User Religion
        $user_optional_details = DB::table('user_optional_details')->where('user_id', $currentuserid)->first();

        #Get Family Member
        $familymember = DB::table('user_family_details')->where('family_head_id', $currentuserid)->where('status', 1)->get();

        #Get Family Member
        $familyOptionalDetails = DB::table('user_family_optional_details')->where('family_head_id', $currentuserid)->where('status', 1)->get();

        #Get States
        $states = DB::table('states')->where(['country_id' => 101])->get();

        return view('user.profile', array('user' => $user, 'user_optional_details'=> $user_optional_details, 'familymember'=> $familymember, 'familyOptionalDetails'=> $familyOptionalDetails, 'states'=> $states, 'state_details'=> $state_details, 'city_details'=> $city_details));
    }

    #family member view
    public function familymember()
    {
        # Get User Id
        $currentuserid = Auth::user()->id;

        # Get User role
        $user = DB::table('user_details')->where('user_id', $currentuserid)->first();

        #Get Family Member
        $familymember = DB::table('user_family_details')->where('family_head_id', $currentuserid)->get();

        return view('user.family-member', array('user' => $user, 'familymember' => $familymember));
    }

    # user home page
    public function user_home()
    {
        return view('user.home');
    }

    # user vivah page
    public function vivah()
    {
        return view('user.vivah_biodata');
    }

    # user rojgar page
    public function rojgar()
    {
        return view('user.rojgar_biodata');
    }

    # user vacancy page
    public function vacancy()
    {
        return view('user.vacancies');
    }

    /*# view family member
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

        $family_member_optional = DB::table('user_family_optional_details')->where('f_member_user_id', $f_member_user_id)->first();

        return view('user.view-family-member', array('user' => $user, 'viewfamily' => $view_family_member, 'family_member_optional' => $family_member_optional, 'familymember' => $familymember));
    }*/

    # update Profile Image
    public function updateProfileImage(Request $request)
    {
        $user_id = $request->user_id;

        $date = date('Y-m-d H:i:s');

        if($request->hasFile('file'))
        {
            $file = $request->file('image');

            $filename = $request->image->getClientOriginalName();

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $filename = substr(md5(microtime()),rand(0,26),6);

            $filename .= '.'.$ext;

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
        }
        else
        {
            $status = "Please upload any image !";
            return redirect('profile')->with('status', $status);
        }
    }

    // Add family member
    /*public function add_member(Request $request)
    {
        // If image is uploaded
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

            $member_image = $filename;
        }
        else    // If image not uploaded then image name will be null
        {
            $member_image = null;
        }

        $email = $request->email;

        $mobile = $request->mobile;

        $is_available = DB::table('users')->where('email', $email)->first();

        $is_mobile_available = DB::table('users')->where('phone', $mobile)->first();

        if(!empty($is_available))
        {
            $member_email_exist = 'This email is already exist.';
            return redirect('profile')->with('member_email_exist', $member_email_exist);
        }

        if(!empty($is_mobile_available))
        {
            $member_mobile_exist = 'This mobile no. is already exist.';
            return redirect('profile')->with('member_email_exist', $member_mobile_exist);
        }

        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;
        $fname = $request->fname;
        $lname = $request->lname;
        $gender = $request->gender;

        //$mobile = $request->mobile;
        $dob = $request->dob;
        $mang = $request->mang;
        $bloodgroup = $request->bloodgroup;
        $married = $request->married;
        $marriage_date = $request->marriage_date;
        $experience = $request->experience;
        $ph = $request->ph;
        $job_busi = $request->job_busi;

        # Get data user table
        $user = DB::table('users')->where('id', $user_id)->first();

        # Get password user table
        $user_password = $user->password;

        # insert data user table
        $user_table = DB::table('users')->insert(
            array(
                    'name' => $fname,
                    'family_head_id' => $user_id,
                    'lastname' => $lname,
                    'username' => $fname.$lname,
                    'email' => $email,
                    'password' => $user_password,
                    'phone' => $mobile,
                    'created_at' => $date,
                    'status' => 0
            )
        );

       $lastInsertId = DB::getPdo()->lastInsertId();

        $user_insert = DB::table('user_family_details')->insert(
             array(
                    'family_head_id' => $user_id,
                    'f_member_user_id' => $lastInsertId,
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
                    'mobile' => $mobile,
                    'gender' => $gender,
                    'dob' => $dob,
                    'blood_group' => $bloodgroup,
                    'image' => $member_image,
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
    }*/

    // Update family member
    public function updateMemberPersonalInfo(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;
        $id = $request->id;
        $f_member_user_id = $request->f_member_user_id;
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

         // If image is uploaded
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

            $member_image = $filename;
        }
        else    // If image not uploaded then image name will be null
        {
            $member = DB::table('user_family_details')->where('id', $id)->first();

            $member_image = $member->image;;
        }

        # update data user table
        $user = DB::table('users')->where('id', $user_id)->first();

       # Get password user table
        $user_password = $user->password;

        # insert data user table
        $user_table = DB::table('users')->where('id', $f_member_user_id)->update(
            array(
                    'name' => $fname,
                    'family_head_id' => $user_id,
                    'lastname' => $lname,
                    'username' => $fname.$lname,
                    'email' => $email,
                    'password' => $user_password,
                    'phone' => $mobile,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 0
            )
        );

        $user_insert = DB::table('user_family_details')->where('id', $id)->update(
             array(
                    'family_head_id' => $user_id,
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
                    'mobile' => $mobile,
                    'gender' => $gender,
                    'dob' => $dob,
                    'blood_group' => $bloodgroup,
                    'image' => $member_image,
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
            $status = 'Update member successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('update_member', $status);

        exit;
    }

    // Delete family member
    /*public function deletefamilymember(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $id = $request->id;

        $delete = DB::table('user_family_details')->where('id', $id)->update(
            array(
                    'status' => 0
            )
        );

        if($delete)
        {
            $status = 'Delete member successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('profile')->with('delete_member', $status);
    }*/

    // Change user password
    public function change_password_view()
    {
        return view('user.change_password');
    }

    // Change user password
    public function change_password(Request $request)
    {
        $old_password     = $request->old_password;
        $new_password     = $request->new_password;
        $confirm_password = $request->confirm_password;

        if(!Hash::check($old_password, Auth::user()->password))
        {
            $status = "old password did not match !";
        }
        else
        {
            if($new_password == $confirm_password)
            {
                if(strlen($new_password) < 6 || strlen($confirm_password) < 6)
                {
                    $status = "New password length should be 6 characters minimum.";
                }
                else
                {
                    $request->user()->fill(['password' => Hash::make($new_password)])->save();
                    $status = "Change password successfully.";
                }
            }
            else
            {
                $status = "New password did not match with confirm password !";
            }
        }

        return redirect('change_password')->with('status', $status);
    }

    public function getDistrictByStateForUser(Request $request)
    {
        $state = $request->state;

        // Get all districts of this state
        $cities = DB::table('cities')->where('state_id', $state)->get();

        return response()->json($cities);
    }

}
