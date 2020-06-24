<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//User Auth
Route::post('userlogin', 'Api\User\Auth\LoginController@login');
Route::post('userregister', 'Api\User\Auth\RegisterController@register');

//Admin Auth
Route::post('adminlogin', 'Api\Admin\Auth\LoginController@login');
Route::post('adminregister', 'Api\Admin\Auth\RegisterController@register');

//Here is the protected User Routes Group,
Route::group(['middleware' => 'jwt.auth', 'prefix' => 'user'], function () {
    Route::get('logout', 'Api\User\UserController@logout');
    Route::get('dashboard', 'Api\User\UserController@dashboard');
});

//Here is the protected Admin Routes Group
Route::group(['prefix' => 'admin'], function () {
    Route::post('settings', 'Api\Admin\AdminController@settings');
    Route::post('dashboard', 'Api\Admin\AdminController@dashboard');
});

