<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    # Send EmailController
	public function sendEmail()
	{
		Mail::send(['text'=>'email.sendEmail'],['name','Prem'],function($message){
			$message->to('amitsharma6681@gmail.com','Amit Sharma')->subject('Test Email');
			$message->from('amitsharma6681@gmail.com','ASmit Sharma');
		});
	}
}
