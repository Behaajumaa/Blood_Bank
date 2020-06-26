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

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});



//---------------------------------------------------------------------------------


use App\Donor;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
  return view('file.home');
});

Route::get('/donateform', function () {
  return view('file.donateForm');
});

Route::get('/searchform', function () {
  return view('file.searchForm');
});

Route::get('/contactUs', function () {
  return view('file.contactUs');
});

Route::get('/aboutUs', function () {
  return view('file.aboutUs');
});
Route::get('/admin', function () {
  return view('file.admin');
});

Route::get('/index', function () {
      $donors=Donor::all(); 
  return view('file.index',[

    'donors'=> $donors,

  ]);
});

//donors Table --> get all Donors
Route::get('/donors', 'DonorController@index');

//get donor by id 
Route::get('/donor/{id}', 'DonorController@find');

//create a Course
Route::post('/donor/create','DonorController@store');

//update a Course 
Route::put('/donor/{id}', 'DonorController@update');

//delete a donor 
Route::delete('/donor/{id}', 'DonorController@destroy');

