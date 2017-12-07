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

// If email already exist in users table then show error with their parent email
Route::get('ajax',function(){
   return view('message');
});

Route::post('/get_exist_user_details','AjaxController@index');

Auth::routes();

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('sendEmail', 'EmailController@sendEmail');


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