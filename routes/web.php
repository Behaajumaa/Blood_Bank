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
use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::post('Register', 'Auth\RegisterController@register') ->name('Register');

Route::PUT('Register', 'Auth\RegisterController@update') ->name('Edit');

Route::delete('delete/{id}', 'UserController@destroy') ->name('Delete');
// Route::post('delete', 'UserController@destroy') ->name('Delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::get('/contactUs',     function () {return view('contactUs');});
Route::get('/aboutUs',       function () {return view('aboutUs');});
Route::get('/countriesApi',  function () {return view('countriesApi');});
Route::get('/citiesApi',     function () {return view('citiesApi');});
Route::get('/search',        function () {return view('search');});


Route::post('Search', 'SearchController@search');



Route::get('/viewActiveDonors',function(){
  $users=User::where('active',1)->get();
      return view('viewActiveDonors',[
        'users'=> $users,
      ]);
});


   
Route::get('/viewDonors', function () {
    $users=User::all(); 
    return view('viewDonors',[
      'users'=> $users,
      ]);
  });
 

