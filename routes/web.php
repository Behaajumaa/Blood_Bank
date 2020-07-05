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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::post('Register', 'Auth\RegisterController@register') ->name('Register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


  Route::get('/contactUs', function () {
    return view('contactUs');
  });

  Route::get('/searchForm', function () {
    return view('searchForm');
  });
   
 

  Route::get('/viewDonors', function () {
    return view('viewDonors');
  });
 