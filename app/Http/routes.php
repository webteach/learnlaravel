<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/account', 'DashboardController@show');

Route::get('/accounts', 'AccountController@index');
Route::post('/account', 'AccountController@store');
Route::post('/account', 'AccountController@update');
Route::delete('/account/{account}', 'AccountController@destroy');