<?php

class ConnectionController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Connection Controller
	|--------------------------------------------------------------------------
	|
	| Users Connection . To route to this controller, just add the route:
	|
	|	Route::get('connection', 'ConnectionController@showConnection');
	|
	*/

	public function showConnection()
	{
        // Redirect to the page CONNECTION
		return View::make('connection');
	}
        
        public function submitConnection()
        {
                $login = Input::get('username'); // Recovery username in form 
                $password = Input::get('password'); // Recovery password in form 
                
                if (Auth::attempt(array('username' => $login, 'password' => $password)))  // condition to validate user's connection
                {
                    // Redirect to show all avatar of the user
                    return Redirect::action('ProfileController@allAvatar', array('user' => $login));                    
                }
                else
                {
                    // condition to not validate : Redirect to view connection with message error
                    return View::make('connection')->with('errorUser', 'Nom d\'utilisateur ou mot de passe incorrect');  
                }   
        }
}