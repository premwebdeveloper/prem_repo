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

Auth::routes();

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('sendEmail', 'EmailController@sendEmail');


/**************************************************/
// A user can access after login only these routes//
/**************************************************/

Route::get('profile', 'User@profile')->name('profile');

Route::post('updateProfileImage', 'User@updateProfileImage')->name('updateProfileImage');

Route::post('updatePersonalInfo', 'User@updatePersonalInfo')->name('updatePersonalInfo');

Route::post('updateReligionInfo', 'User@updateReligionInfo')->name('updateReligionInfo');

Route::post('updateExtraInfo', 'User@updateExtraInfo')->name('updateExtraInfo');

Route::post('add_member', 'User@add_member')->name('add_member');

Route::get('familymember', 'User@familymember')->name('familymember');

//Route::get('viewfamilymember', 'User@viewfamilymember')->name('viewfamilymember');

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