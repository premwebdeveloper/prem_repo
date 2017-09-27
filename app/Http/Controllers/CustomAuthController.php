<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class CustomAuthController extends Controller
{
	# registration form view
    public function showRegisterForm()
	{
		return view('custom_auth.register');
	}
	
	# Registration 
    public function registration(Request $request)
	{
		$this->validation($request);
		//User::create($request->all());
		$this->createUser($request->all());
		return redirect('registration')->with('status', 'Registration Successfully.');
	}
	
	# Validation
	public function validation($request)
	{
		return $this->validate($request, [
			'name' => 'required|max:255',
			'lastname' => 'required|max:255',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|confirmed|max:255|min:6',
			
		]);		
	}
	
	# custom registration function
	protected function createUser(array $data)
    {
		#First generate otp and send on email id  then register successfully
		
        $id = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
			'username' => $data['name'].$data['lastname'],
            'email' => $data['email'],            
            'password' => bcrypt($data['password']),
            'status' => 1,
        ]);
		
		$user_id = $id->id;
		
		$user_insert = DB::table('user_details')->insert(
			 array(
					'user_id'     =>   $user_id, 
					'name'   =>   $data['name'],
					'lastname'   =>   $data['lastname'],
					'email'   =>   $data['email'],
					'contact'   =>   $data['contact']
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
		return redirect('registration')->with('status', $status);
    }
}
