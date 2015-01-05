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

Route::get('list', array('before' => 'auth', 'uses' => 'UserController@getIndex'));

Route::get('logout', 'UserController@logOut');

Route::get('login', 'UserController@showLogin');

Route::get('register', 'UserController@showRegister');

Route::get('profile/{id}', 'UserController@showProfile');

Route::post('create', array('before' => 'csrf', 'uses' => 'UserController@createUser'));//array('before' => 'csrf', 

Route::post('authorize', array('before' => 'csrf', 'uses' => 'UserController@doAuth'));//array('before' => 'csrf', 