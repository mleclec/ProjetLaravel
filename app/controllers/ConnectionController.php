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
		return View::make('connection');
	}
        
        public function submitConnection()
        {
                $login = Input::get('username');
                $password = Input::get('password');
                
                if (Auth::attempt(array('username' => $login, 'password' => $password))) {
                    return Redirect::to('profile');
                }else{
                    return View::make('connection');
                }   
        }
}