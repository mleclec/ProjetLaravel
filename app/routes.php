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
	return View::make('hello');
});


	// Inscription //

Route::get('inscription', array(
		'uses' => 'HomeController@showRegistration',
		'as'   => 'inscription.show'
	));

Route::post('inscription', array(
		'uses' => 'HomeController@submitRegistration',
		'as'   => 'inscription.submit'
	));