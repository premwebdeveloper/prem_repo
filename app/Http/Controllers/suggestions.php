<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class suggestions extends Controller
{
    public function suggestions()
    {

        # Get User role
        $suggestions = DB::table('suggestions')->get();
  
 		return view('suggestions.suggestions', array('suggestions' => $suggestions));
    }
}
