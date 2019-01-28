<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use App\user_details;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Mail;
use App\Mail\verifyEmail;
use Session;
use Illuminate\Support\Facades\Redirect;

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

    public function how_can_help()
    {
        $how_can_help = DB::table('website_pages')->where('id', 31)->first();
        return view('home.how_can_help', array('how_can_help' => $how_can_help));
    }

    public function donate()
    {
        $donate = DB::table('website_pages')->where('id', 30)->first();
        return view('home.donate', array('donate' => $donate));
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

    public function today_tomorrow_news()
    {
        $today_tomorrow_news = DB::table('website_pages')->where('id', 8)->first();
        return view('home.today_tomorrow_news', array('today_tomorrow_news' => $today_tomorrow_news));
    }

    public function matrimonial_services()
    {
        $matrimonial_services = DB::table('website_pages')->where('id', 32)->first();
        return view('home.matrimonial_services', array('matrimonial_services' => $matrimonial_services));
    }

    public function maharaja_agrasen_agroha_dham()
    {
        $maharaja_agrasen_agroha_dham = DB::table('website_pages')->where('id', 34)->first();
        return view('home.maharaja_agrasen_agroha_dham', array('maharaja_agrasen_agroha_dham' => $maharaja_agrasen_agroha_dham));
    }

    public function our_big_industries()
    {
        $our_big_industries = DB::table('website_pages')->where('id', 35)->first();
        return view('home.our_big_industries', array('our_big_industries' => $our_big_industries));
    }

    public function school_college_eng_medical__industries()
    {
        $school_college_eng_medical__industries = DB::table('website_pages')->where('id', 36)->first();
        return view('home.school_college_eng_medical__industries', array('school_college_eng_medical__industries' => $school_college_eng_medical__industries));
    }

    public function our_clinic_hospital()
    {
        $our_clinic_hospital = DB::table('website_pages')->where('id', 37)->first();
        return view('home.our_clinic_hospital', array('our_clinic_hospital' => $our_clinic_hospital));
    }

    public function working_social_religious_units()
    {
        $working_social_religious_units = DB::table('website_pages')->where('id', 29)->first();
        return view('home.working_social_religious_units', array('working_social_religious_units' => $working_social_religious_units));
    }

    public function blood_donors()
    {
        $blood_donors = DB::table('website_pages')->where('id', 42)->first();
        return view('home.blood_donors', array('blood_donors' => $blood_donors));
    }

    public function video_documentary_film()
    {
        $video_documentary_film = DB::table('website_pages')->where('id', 45)->first();
        return view('home.video_documentary_film', array('video_documentary_film' => $video_documentary_film));
    }

    public function brilliant_children()
    {
        $brilliant_children = DB::table('website_pages')->where('id', 64)->first();
        return view('home.brilliant_children', array('brilliant_children' => $brilliant_children));
    }

    public function player_persons()
    {
        $player_persons = DB::table('website_pages')->where('id', 49)->first();
        return view('home.player_persons', array('player_persons' => $player_persons));
    }
    
    public function master_other_arts()
    {
        $master_other_arts = DB::table('website_pages')->where('id', 50)->first();
        return view('home.master_other_arts', array('master_other_arts' => $master_other_arts));
    }    

    public function other_religious_bodies()
    {
        $other_religious_bodies = DB::table('website_pages')->where('id', 51)->first();
        return view('home.other_religious_bodies', array('other_religious_bodies' => $other_religious_bodies));
    }

    public function useful_information()
    {
        $useful_information = DB::table('website_pages')->where('id', 53)->first();
        return view('home.useful_information', array('useful_information' => $useful_information));
    }

    public function trade_directory()
    {
        $trade_directory = DB::table('website_pages')->where('id', 40)->first();
        return view('home.trade_directory', array('trade_directory' => $trade_directory));
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

    // send register otp function
    public function verifyRegisterOtp(Request $request){

        //dd($request);
        $phone = $request->phone;
        $name = $request->name;
        
        # Set validation for
        $this->validate($request, [
            'phone' => 'required|numeric|digits:10',
        ]);

        $is_mobile_available = DB::table('users')->where('phone', $phone)->first();

        if(!empty($is_mobile_available))
        {
            $mobile_exist = 'This mobile no. is already exist.';
            return redirect('register')->with('mobile_exist', $mobile_exist);
        }

        if(empty($is_mobile_available))
        {
            /*echo "amit";
            exit;*/
            $password = "123456";

            $otp = rand(1000, 9999);
            
            $user = User::create([
                //'family_head_id ' => null,
                'name' => $name,
                //'username' => $data['email'],
                'otp' => $otp,
                'password' => bcrypt($password),
                'phone' => $phone,
                'status' => 1
                //'verify_token' => Str::random(40)
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
                        'name' => $name,
                        //'email' => $data['email'],
                        'phone' => $phone,
                        'image' => 'user.png',
                        'status' => 1,
                        'created_at' => $date,
                        'updated_at' => $date
                 )
            );

            #user insert in user optional table
            $user_insert = DB::table('user_optional_details')->insert(
                 array(
                        'user_id' => $user_id,
                        'status' => 1,
                        'created_at' => $date,
                        'updated_at' => $date
                 )
            );

            if($user_insert)
            {

                // send otp on mobile number using curl
                $url = "http://bulksms.dexusmedia.com/sendsms.jsp";                    
                //$mobiles = implode(",", $mobilesArr);
                $sms = 'Verify your mobile to register ABVPSR with OTP - '.$otp;

                $params = array(
                            "user" => "abvpsr",
                            "password" => "452311821aXX",
                            "senderid" => "ABVPSR",
                            "mobiles" => $phone,
                            "sms" => $sms
                            );

                $params = http_build_query($params);            

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($ch);
                
                return view('auth.register', array('otp' => $otp, 'exist_phone' => $phone ));
            }
        }
    }


    // send otp and verify otp function 
    public function verifyOtp(Request $request){

        //dd($request);
        if(!empty($request->phone)){

            # Set validation for
            $this->validate($request, [
                'phone' => 'required|numeric|digits:10',
            ]);

            $exist = DB::table('users')->where(['phone' => $request->phone, 'status' => 1])->first();

            if(!empty($exist)){

                $otp = $exist->otp;

                if(is_null($otp))
                    {
                        $otp = rand(1000, 9999);
                    }

                if(!empty($otp)){

                    $send_otp = DB::table('users')->where('phone', $request->phone)->update(['otp' => $otp]);

                    // send otp on mobile number using curl
                    $url = "http://bulksms.dexusmedia.com/sendsms.jsp";                    
                    //$mobiles = implode(",", $mobilesArr);
                    $sms = 'Verify your mobile to login ABVPSR with OTP - '.$otp;

                    $params = array(
                                "user" => "abvpsr",
                                "password" => "452311821aXX",
                                "senderid" => "ABVPSR",
                                "mobiles" => $request->phone,
                                "sms" => $sms
                                );

                    $params = http_build_query($params);            

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $result = curl_exec($ch);
                }

                return view('auth.login', array('otp' => $otp, 'exist_phone' => $request->phone ));

            }else{
                return Redirect::back()->withErrors(['This phone number is not exist in our record ! Please try with another phone number.']);
            }
        }else{
            return redirect('/login');
        }
    }

}
