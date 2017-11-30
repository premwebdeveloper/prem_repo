<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class problems extends Controller
{
    public function problems()
    {
        $problems = DB::table('problems')->get();

      	return view('problrms.problems', array('problems'=> $problems));

    }
}
