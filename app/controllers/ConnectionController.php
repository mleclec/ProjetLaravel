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
                $login = Input::get('login');
                $password = Input::get('password');
                
                $users = Users::where('login', '=', $login)->get();
                
        }

}