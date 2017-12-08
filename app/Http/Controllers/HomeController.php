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

    public function renowned_persons()
    {
        $renowned_persons = DB::table('website_pages')->where('id', 23)->first();
        return view('home.renowned_persons', array('renowned_persons' => $renowned_persons));
    }

    public function car_pooling()
    {
        $car_pooling = DB::table('website_pages')->where('id', 11)->first();
        return view('home.car_pooling', array('car_pooling' => $car_pooling));
    }

    public function tolet_services()
    {
        $tolet_services = DB::table('website_pages')->where('id', 27)->first();
        return view('home.tolet_services', array('tolet_services' => $tolet_services));
    }

    public function karya_pranali()
    {
        $karya_pranali = DB::table('website_pages')->where('id', 14)->first();
        return view('home.karya_pranali', array('karya_pranali' => $karya_pranali));
    }

    public function sangthan_pranali()
    {
        $sangthan_pranali = DB::table('website_pages')->where('id', 25)->first();
        return view('home.sangthan_pranali', array('sangthan_pranali' => $sangthan_pranali));
    }

    public function membership()
    {
        $membership = DB::table('website_pages')->where('id', 17)->first();
        return view('home.membership', array('membership' => $membership));
    }

    public function new_calendar()
    {
        $new_calendar = DB::table('website_pages')->where('id', 20)->first();
        return view('home.new_calendar', array('new_calendar' => $new_calendar));
    }

    public function representative_member()
    {
        $representative_member = DB::table('website_pages')->where('id', 24)->first();
        return view('home.representative_members', array('representative_member' => $representative_member));
    }

    public function abc_club()
    {
        $abc_club = DB::table('website_pages')->where('id', 5)->first();
        return view('home.abc_club', array('abc_club' => $abc_club));
    }

    public function may_i_help_you()
    {
        $may_help_you_club = DB::table('website_pages')->where('id', 15)->first();
        return view('home.may_help_you_club', array('may_help_you_club' => $may_help_you_club));
    }

    public function vaish_panchayat()
    {
        $vaish_panchayat = DB::table('website_pages')->where('id', 28)->first();
        return view('home.vaish_panchayat', array('vaish_panchayat' => $vaish_panchayat));
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
        $problem = DB::table('website_pages')->where('id', 22)->first();
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


    public function news_exchange()
    {
        $news_exchange = DB::table('website_pages')->where('id', 21)->first();
        return view('home.news_exchange', array('news_exchange' => $news_exchange));
    }

    public function employee_services()
    {
        $employee_services = DB::table('website_pages')->where('id', 9)->first();
        return view('home.employee_services', array('employee_services' => $employee_services));
    }

    public function motivational_article()
    {
        $motivational_article = DB::table('website_pages')->where('id', 19)->first();
        return view('home.motivational_article', array('motivational_article' => $motivational_article));
    }

    public function digital_directory()
    {
        $digital_directory = DB::table('website_pages')->where('id', 8)->first();
        return view('home.digital_directory', array('digital_directory' => $digital_directory));
    }

    public function moa_registration()
    {
        $moa_registration = DB::table('website_pages')->where('id', 18)->first();
        return view('home.moa_registration', array('moa_registration' => $moa_registration));
    }

    public function annual_action_plan()
    {
        $annual_action_plan = DB::table('website_pages')->where('id', 6)->first();
        return view('home.annual_action_plan', array('annual_action_plan' => $annual_action_plan));
    }

    public function five_year_central_action_plan()
    {
        $five_year_central_action_plan = DB::table('website_pages')->where('id', 10)->first();
        return view('home.five_year_central_action_plan', array('five_year_central_action_plan' => $five_year_central_action_plan));
    }

    public function history_motivational_story()
    {
        $history_motivational_story = DB::table('website_pages')->where('id', 13)->first();
        return view('home.history_motivational_story', array('history_motivational_story' => $history_motivational_story));
    }

    public function heritage_cultural_festival()
    {
        $heritage_cultural_festival = DB::table('website_pages')->where('id', 12)->first();
        return view('home.heritage_cultural_festival', array('heritage_cultural_festival' => $heritage_cultural_festival));
    }

    public function dharmshala()
    {
        $dharmshala = DB::table('website_pages')->where('id', 7)->first();
        return view('home.dharmshala', array('dharmshala' => $dharmshala));
    }

    public function working_social_religious_units()
    {
        $working_social_religious_units = DB::table('website_pages')->where('id', 29)->first();
        return view('home.working_social_religious_units', array('working_social_religious_units' => $working_social_religious_units));
    }

}
