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
Route::get('problem', 'HomeController@problem')->name('problem');

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

Route::Post('updateMemberPersonalInfo', 'Familymember@updateMemberPersonalInfo')->name('updateMemberPersonalInfo');

Route::Post('updateMemberOptionalInfo', 'Familymember@updateMemberOptionalInfo')->name('updateMemberOptionalInfo');

Route::get('deletefamilymember{id}', 'User@deletefamilymember')->name('deletefamilymember');

/**************************************************/
// A user can access after login only these routes//
/**************************************************/


/**************************************************/
//     Only Admin can access these controllers    //
/**************************************************/

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('dashboard', 'Dashboard@admin')->name('dashboard');

    Route::get('users', 'AdminUser@index')->name('users');
    Route::get('user_profile', 'AdminUser@user_profile')->name('user_profile');
});

/**************************************************/
//     Only Admin can access these controllers    //
/**************************************************/