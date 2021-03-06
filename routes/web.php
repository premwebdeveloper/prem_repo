<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('/');
Route::get('home', 'HomeController@index')->name('home');
Route::get('aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('aims', 'HomeController@aims')->name('aims');
Route::get('member', 'HomeController@member')->name('member');

Route::get('how_can_help', 'HomeController@how_can_help')->name('how_can_help');

Route::get('donate', 'HomeController@donate')->name('donate');

Route::get('car_pooling', 'HomeController@car_pooling')->name('car_pooling');

Route::get('tolet_services', 'HomeController@tolet_services')->name('tolet_services');

Route::get('karya_pranali', 'HomeController@karya_pranali')->name('karya_pranali');

Route::get('sangthan_pranali', 'HomeController@sangthan_pranali')->name('sangthan_pranali');

Route::get('membership', 'HomeController@membership')->name('membership');

Route::get('representative_member', 'HomeController@representative_member')->name('representative_member');

Route::get('new_calendar', 'HomeController@new_calendar')->name('new_calendar');

Route::get('abc_club', 'HomeController@abc_club')->name('abc_club');

Route::get('vaish_panchayat', 'HomeController@vaish_panchayat')->name('vaish_panchayat');

Route::get('may_i_help_you', 'HomeController@may_i_help_you')->name('may_i_help_you');

Route::get('suggestion', 'HomeController@suggestion')->name('suggestion');

Route::post('addSuggestion', 'HomeController@addSuggestion')->name('addSuggestion');

Route::post('addProblem', 'HomeController@addProblem')->name('addProblem');

Route::get('problem', 'HomeController@problem')->name('problem');

Route::get('news_exchange', 'HomeController@news_exchange')->name('news_exchange');

Route::get('employee_services', 'HomeController@employee_services')->name('employee_services');

Route::get('motivational_article', 'HomeController@motivational_article')->name('motivational_article');

Route::get('moa_registration', 'HomeController@moa_registration')->name('moa_registration');

Route::get('annual_action_plan', 'HomeController@annual_action_plan')->name('annual_action_plan');

Route::get('five_year_central_action_plan', 'HomeController@five_year_central_action_plan')->name('five_year_central_action_plan');

Route::get('renowned_persons', 'HomeController@renowned_persons')->name('renowned_persons');

Route::get('history_motivational_story', 'HomeController@history_motivational_story')->name('history_motivational_story');

Route::get('heritage_cultural_festival', 'HomeController@heritage_cultural_festival')->name('heritage_cultural_festival');

Route::get('dharmshala', 'HomeController@dharmshala')->name('dharmshala');

Route::get('working_social_religious_units', 'HomeController@working_social_religious_units')->name('working_social_religious_units');

Route::get('today_tomorrow_news', 'HomeController@today_tomorrow_news')->name('today_tomorrow_news');

Route::get('matrimonial_services', 'HomeController@matrimonial_services')->name('matrimonial_services');

Route::get('motivational_article', 'HomeController@motivational_article')->name('motivational_article');

Route::get('maharaja_agrasen_agroha_dham', 'HomeController@maharaja_agrasen_agroha_dham')->name('maharaja_agrasen_agroha_dham');

Route::get('our_big_industries', 'HomeController@our_big_industries')->name('our_big_industries');

Route::get('school_college_eng_medical__industries', 'HomeController@school_college_eng_medical__industries')->name('school_college_eng_medical__industries');

Route::get('our_clinic_hospital', 'HomeController@our_clinic_hospital')->name('our_clinic_hospital');

Route::get('blood_donors', 'HomeController@blood_donors')->name('blood_donors');

Route::get('video_documentary_film', 'HomeController@video_documentary_film')->name('video_documentary_film');

Route::get('brilliant_children', 'HomeController@brilliant_children')->name('brilliant_children');

Route::get('player_persons', 'HomeController@player_persons')->name('player_persons');

Route::get('master_other_arts', 'HomeController@master_other_arts')->name('master_other_arts');

Route::get('other_religious_bodies', 'HomeController@other_religious_bodies')->name('other_religious_bodies');

Route::get('useful_information', 'HomeController@useful_information')->name('useful_information');

Route::get('trade_directory', 'HomeController@trade_directory')->name('trade_directory');


// If email already exist in users table then show error with their parent email
Route::get('ajax',function(){
   return view('message');
});

Route::post('/get_exist_user_details','AjaxController@index');

Auth::routes();

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('sendEmail', 'EmailController@sendEmail');

// Register OTP
Route::any('verifyRegisterOtp/', 'HomeController@verifyRegisterOtp')->name('verifyRegisterOtp');

// OTP Verification
Route::post('/otpVerification', 'AjaxController@otpVerification')->name('otpVerification');

// Login OTP
Route::any('/verifyOtp', 'HomeController@verifyOtp')->name('verifyOtp');

/**************************************************/
// A user can access after login only these routes//
/**************************************************/

Route::get('change_password', 'User@change_password_view');

Route::post('getDistrictByStateForUser', 'User@getDistrictByStateForUser')->name('getDistrictByStateForUser');

Route::post('updatePersonalInfo', 'Familyhead@updatePersonalInfo')->name('updatePersonalInfo');

Route::post('updateOptionalInfo', 'Familyhead@updateOptionalInfo')->name('updateOptionalInfo');

Route::post('updateMemberPersonalInfo', 'Familymember@updateMemberPersonalInfo')->name('updateMemberPersonalInfo');

Route::post('change_password', 'User@change_password')->name('change_password');

Route::get('profile', 'User@profile')->name('profile');

Route::get('user_home', 'User@user_home')->name('user_home');

Route::get('vivah', 'User@vivah')->name('vivah');

Route::get('rojgar', 'User@rojgar')->name('rojgar');

Route::get('vacancy', 'User@vacancy')->name('vacancy');

Route::post('updateProfileImage', 'User@updateProfileImage')->name('updateProfileImage');

Route::post('updateReligionInfo', 'User@updateReligionInfo')->name('updateReligionInfo');

Route::post('updateExtraInfo', 'User@updateExtraInfo')->name('updateExtraInfo');

Route::post('add_member', 'Familymember@add_member')->name('add_member');

Route::get('familymember', 'User@familymember')->name('familymember');

Route::get('viewfamilymember{id}', 'Familymember@viewfamilymember')->name('viewfamilymember');

Route::Post('updateMemberOptionalInfo', 'Familymember@updateMemberOptionalInfo')->name('updateMemberOptionalInfo');

Route::post('deletefamilymember', 'Familymember@deletefamilymember')->name('deletefamilymember');

/**************************************************/
// A user can access after login only these routes//
/**************************************************/


/**************************************************/
//     Only Admin can access these controllers    //
/**************************************************/

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('dashboard', 'dashboard@admin')->name('dashboard');

    Route::get('users', 'AdminUser@index')->name('users');

    // Disable user by Admin
    Route::get('disableUser{id}', 'AdminUser@disableUser')->name('disableUser');

    // User view by Admin
    Route::get('userView{id}', 'AdminUser@userView')->name('userView');

    Route::get('familyMemberView{id}', 'AdminUser@familyMemberView')->name('familyMemberView');

    Route::get('website_pages', 'websitePages@index')->name('website_pages');

   // Route::get('suggestions', 'suggestions@index')->name('suggestions');

    //Route::get('problems', 'problems@index')->name('problems');

    // Search users form view
    Route::get('search_users', 'SearchUsers@index')->name('search_users');

    // Search users
    Route::post('searchUsers', 'SearchUsers@searchUsers')->name('searchUsers');

    Route::get('web_page_edit{id}', 'websitePages@edit_page')->name('web_page_edit');

    Route::post('web_page_update', 'websitePages@update_page')->name('web_page_update');

    Route::get('suggestions', 'suggestions@suggestions')->name('suggestions');

    Route::get('problems', 'problems@problems')->name('problems');

    Route::post('/getDistrictByState','AjaxController@getDistrictByState')->name('getDistrictByState');


});

/**************************************************/
//     Only Admin can access these controllers    //
/**************************************************/