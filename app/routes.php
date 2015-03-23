<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
        // Accueil //

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

        // Profil //

Route::get('profile/{user}', array(
                'uses' => 'ProfileController@showProfile', 
                'as' => 'profile.show'
        ));


Route::get('profile/{user}/list', array(
                'uses' => 'ProfileController@allAvatar',
                'as' => 'profile.all'
        ));

Route::get('profile/{user}/addform', array(
                'uses' => 'ProfileController@showAvatar',
                'as' => 'profile.showAvatar'
        ));

Route::post('profile/{user}/addform', array(
                'uses' => 'ProfileController@addAvatar',
                'as' => 'profile.addAvatar'
        ));

Route::post('profile/{user}/list', array(
                'uses' => 'ProfileController@deleteAvatar',
                'as' => 'profile.deleteAvatar'
        ));

        // Recherches //
Route::get('/search', function()
{
        return 'Ok';
});