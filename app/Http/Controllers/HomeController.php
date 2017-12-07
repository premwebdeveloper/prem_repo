<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $about = DB::table('website_pages')->where('id', 1)->first();
        return view('home.aboutus', array('about' => $about));
    }
    public function aims()
    {
        $aims = DB::table('website_pages')->where('id', 2)->first();
        return view('home.aims', array('aims' => $aims));
    }
    public function member()
    {
        return view('home.member');
    }

    //  Suggestion view page
    public function suggestion(Request $request)
    {
        $suggestion = DB::table('website_pages')->where('id', 26)->first();
        return view('home.suggestion', array('suggestion' => $suggestion));
    }

    // Add suggestion
    public function addSuggestion(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $suggestion = $request->suggestion;

        $date = date('Y-m-d');

        $suggest = DB::table('suggestions')->insert(
                array(
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'suggestion' => $suggestion,
                    'created_at' => $date
                )
            );

        $status = 'Your suggestion submitted successfully.';

        return redirect('suggestion')->with('status', $status);
    }

    public function problem()
    {
        $problem = DB::table('website_pages')->where('id', 26)->first();
        return view('home.problem', array('problem' => $problem));
    }

    // Add problem
    public function addProblem(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $problem = $request->problem;

        $date = date('Y-m-d');

        $suggest = DB::table('problems')->insert(
                array(
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'problem' => $problem,
                    'created_at' => $date
                )
            );

        $status = 'Your problem submitted successfully.';

        return redirect('problem')->with('status', $status);
    }
}
