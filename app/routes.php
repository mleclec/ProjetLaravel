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

Route::get('registration', array(
		'uses' => 'HomeController@showRegistration',
		'as'   => 'registration.show'
	));

Route::post('home', array(
		'uses' => 'HomeController@submitRegistration',
		'as'   => 'registration.submit'
	));

        // Connexion //

Route::get('connection', array (
                'uses' => 'ConnectionController@showConnection',
                'as' => 'connection.show'
        ));

Route::post('connection', array (
                'uses' => 'ConnectionController@submitConnection',
                'as' => 'connection.submit'
        ));

        // Profile //

Route::get('profile/{user}', array(
                'uses' => 'ProfileController@showProfile', 
                'as' => 'profile.show'
        ));

Route::get('profile/{user}/list', array(
                'uses' => 'ProfileController@allAvatar',
                'as' => 'profile.allAvatar'
        ));


Route::get('profile/{user}/addAvatar', array(
                'uses' => 'ProfileController@showAvatar',
                'as' => 'profile.showAvatar'
        ));

Route::post('profile/{user}/addform', array(
                'uses' => 'ProfileController@addAvatar',
                'as' => 'profile.addAvatar'
        ));

Route::post('profile/{user}/list/{id}', array(
                'uses' => 'ProfileController@deleteAvatar',
                'as' => 'profile.deleteAvatar'
        ));

        // Research //
Route::post('/search', function()
{
        // Recovery of datas //
       # $datae = Hash::make(Input::get('email'));
        $datae = Input::get('email');
        $datas = Input::get('size');

        $avatars = Avatar::where('email','=', $datae)->first();
        if ($avatars->photo != null) // there is an avatar for the adress entered
        {
                // Display the avatar with the size selected //
                echo(HTML::image($avatars->photo, 'Votre avatar'));
        }

        else // there is no avatar for the adress entered
        {
                echo "Nous n'avons pas trouvé d'avatars";
        }
});

        // Information //
Route::get('information',function()
{
    return View::make('information');
});

        // Research //
Route::get('search',function()
{
    return Redirect::to('../../ProjetLaravelJQuery/accueil.php');
});
