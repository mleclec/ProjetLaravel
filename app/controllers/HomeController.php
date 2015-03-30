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
		return View::make('home');
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

                $messages=array(
                                'alpha' => 'l\'attribut doit contenir que des lettres.',
                                'required' => 'l\'attribut est obligatoire.',
                                'max' => 'Ne doit pas dépasser 128 caractères.',
                                'alph_num' => 'l\'attribut doit contenir des lettres et/ou des chiffres.',
                                'login.min' => 'Doit dépasser 4 caractères.',
                                'pwd.min' => 'Doit dépasser 8 caractères.',    
                                'same' => 'Mot de passe de confirmation doit être identique au Mot du passe.',
                                'email' => 'Inscrire une adresse valide',
                                'login.unique' => 'Cet utilisateur est déjà inscrit.',
                                'email.unique' => 'Cet email est déjà enregistré.'
                                );
		// Création du validateur //
		$validator=Validator::make($data,$rules,$messages);

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

			return View::make('connection');
		}

		else
		{
			// there is a problem!!
			return View::make('registration')->withErrors($validator);
		}
	}
}
