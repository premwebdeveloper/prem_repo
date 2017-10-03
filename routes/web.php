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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('profile', 'User@profile')->name('profile');

Route::get('settings', 'User@settings')->name('settings');

Route::get('dashboard', 'Dashboard@admin')->name('dashboard');

Route::get('users', 'AdminUser@index')->name('users');

Route::get('user_profile', 'AdminUser@user_profile')->name('user_profile');

/*Route::get('registration', 'CustomAuthController@showRegisterForm')->name('registration');

Route::post('registration', 'CustomAuthController@registration');*/

Route::get('sendEmail', 'EmailController@sendEmail');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');