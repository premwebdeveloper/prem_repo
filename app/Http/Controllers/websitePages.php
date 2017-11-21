<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class websitePages extends Controller
{
    public function index()
    {
        $web_pages = DB::table('website_pages')->where('status',1)->get();

        return view('website_pages.index', array('web_pages' => $web_pages));
    }

    public function edit_page(Request $request)

    {	
    	$id = $request->id;

    	$edit_web_page = DB::table('website_pages')->where('id', $id)->first();

    	return view('website_pages.edit', array('edit_web_page' => $edit_web_page));
    	
    }
}
