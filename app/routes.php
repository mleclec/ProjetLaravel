<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function()
{
	return View::make('home');
});

	// Inscription //

Route::get('inscription', array(
		'uses' => 'HomeController@showRegistration',
		'as'   => 'registration.show'
	));

Route::post('Accueil', array(
		'uses' => 'HomeController@submitRegistration',
		'as'   => 'registration.submit'
	));
        // Connexion //

Route::get('connexion', array (
                'uses' => 'ConnectionController@showConnection',
                'as' => 'connection.show'
        ));

Route::post('connexion', array (
                'uses' => 'ConnectionController@submitConnection',
                'as' => 'connection.submit'
        ));

Route::get('profile/{user}', array(
                'uses' => 'ProfileController@showProfile', 
                'as' => 'profile.show'
        ));