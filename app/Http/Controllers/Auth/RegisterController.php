<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use App\User;
use App\user_details;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Mail;
use App\Mail\verifyEmail;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('status', 'Registered Successfully. But verify your email to activate your account.');

        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['name'].$data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'verify_token' => Str::random(40),

        ]);

        $user_id = $user->id;

        $date = date("Y-m-d H:i:s");

        # Create user role
        $user_role = DB::table('user_roles')->insert(
             array(
                    'role_id' => '2',
                    'user_id' => $user_id,
                    'created_at' => $date,
                    'updated_at' => $date
             )
        );

        #user insert in user details table
        $user_insert = DB::table('user_details')->insert(
             array(
                    'user_id' => $user_id,
                    'name' => $data['name'],
                    'lastname' => $data['lastname'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'created_at' => $date,
                    'updated_at' => $date
             )
        );

        #user insert in user_religion_details table
        $user_religion = DB::table('user_religion_details')->insert(
             array(
                    'user_id' => $user_id,
                    'created_on' => $date,
                    'updated_on' => $date
             )
        );

        #user insert in user_extra_details table
        $user_extra = DB::table('user_extra_details')->insert(
             array(
                    'user_id' => $user_id,
                    'created_on' => $date,
                    'updated_on' => $date
             )
        );

        if($user_insert)
        {
            $status = "Registration Successfully.";
        }
        else
        {
            $status = "Something Went Wrong !";
        }

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);

        return $user;
    }

    # Verify Email First
    public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    # Send Email
    public function sendEmail($thisUser)
    {
        Mail::to($thisUser->email)->send(new verifyEmail($thisUser));
    }

    # Send Email Done
    public function sendEmailDone($email, $verifyToken)
    {
        $user = User::where(['email'=>$email, 'verify_token'=>$verifyToken])->first();

        if($user)
        {
            User::where(['email'=>$email, 'verify_token'=>$verifyToken])->update(['status'=>'1', 'verify_token'=>NULL]);

            user_details::where(['email'=>$email])->update(['status'=>'1']);

            $status = 'Verified email. You can login now.';
        }
        else
        {
            $status = 'Something Went Wrong Or Already Verified !';
        }

        if($status)
        {
            Session::flash('status', $status);
            return view('auth.login');
        }
    }
}
