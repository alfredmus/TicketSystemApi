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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');
Route::get('footballmatches', 'TicketsController@index');
Route::post('newticket', 'TicketsController@store');
Route::get('allticket', 'TicketsController@show');
Route::put('updateticket/{id}', 'TicketsController@update');
Route::get('impersonate/{uemail}', 'TicketsController@search');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

