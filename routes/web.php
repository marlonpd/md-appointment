<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('pages.home');
});

Route::get('home', function () {
    return view('pages.home');
});


// Authentication routes...
Route::get('login', 'Auth\LoginController@getLogin');
Route::post('login', 'Auth\LoginController@postLogin');
Route::get('logout', 'Auth\LogoutController@getLogout');

// Registration routes...
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('timeline', 'TimelineController@index');
Route::get('connections', 'ConnectionsController@index');
Route::get('settings', 'SettingsController@index');

Route::post('settings/profile' , 'SettingsController@profile');