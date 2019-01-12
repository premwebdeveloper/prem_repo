<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /* Check user role if the if the user role is user then redirect to frontend else dashboard */

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        # Get user id
        $currentuserid = Auth::user()->id;

        # empty otp for this user if successfully logged iN
        $user = DB::table('users')->where('id', $currentuserid)->update([
            'otp' => null
        ]);

        # Get User role
        $user = DB::table('user_roles')->where('user_id', $currentuserid)->first();

        # User Role id
        $role_id = $user->role_id;

        if($role_id == 1)
        {
            return redirect(route('dashboard'));
        }
        else
        {
            return redirect(route('user_home'));
        }

        /*return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());*/
    }

    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
