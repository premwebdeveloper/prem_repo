<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function aboutus()
    {
        return view('home.aboutus');
    }
    public function aims()
    {
        return view('home.aims');
    }
    public function member()
    {
        return view('home.member');
    }
    public function suggestion()
    {
        return view('home.suggestion');
    }
    public function problem()
    {
        return view('home.problem');
    }
}
