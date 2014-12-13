<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main');
});

Route::get('users', array('before' => 'auth', 'uses' => 'UserController@getIndex'));

Route::get('login', 'UserController@showLogin');

Route::get('register', 'UserController@showRegister');

Route::post('create', array('before' => 'csrf', 'UserController@createUser'));

Route::post('authorize', array('before' => 'csrf', 'UserController@doAuth'));