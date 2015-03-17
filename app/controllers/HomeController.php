<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showRegistration()
	{
		return View::make('registration');
	}

	public function submitRegistration()
	{
		// Récupération des données saisies //
		$data=Input::all();

		// Création des règles //
		$rules=array(
						'firstname' => 'alpha|required|max:128',
						'login' => 'alpha_num|required|min:4|unique:users,username',
						'pwd' => 'alpha_num|required|min:8',
						'confirmPwd' => 'alpha_num|required|same:pwd',
						'email' => 'email|required|unique:users,email'
					);

		// Création du validateur //
		$validator=Validator::make($data,$rules);

		// Validation des données //
		if ($validator->passes()) // everything is ok
		{
			// Ajout des données dans la base //
			$user=new User;
			$user->firstname = $data['firstname'];
			$user->username = $data['login'];
			$user->email = $data['email'];
			$user->password = Hash::make($data['pwd']);
			$user->save();

			return View::make('hello');
		}

		else
		{
			// there is a problem!!
			return View::make('registration');
		}
	}
}
