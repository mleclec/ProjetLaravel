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

}