<?php

class ProfileController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Connection Controller
	|--------------------------------------------------------------------------
	|
	| Users Connection . To route to this controller, just add the route:
	|
	|	Route::get('profile', 'ProfileController@showProfile');
	|
	*/

	public function showProfile()
	{            
		return View::make('profile');
	}
        
}