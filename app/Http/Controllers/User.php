<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;

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

        return redirect('profile');

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

            if( $image_update)
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

}
