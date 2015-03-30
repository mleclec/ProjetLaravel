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
                // Home page of the application
		return View::make('home');
	}

	public function showRegistration()
	{
                // Redirect to registration page 
		return View::make('registration');
	}

	public function submitRegistration()
	{
		// Recovery of data seizures
		$data=Input::all();

		// Create rules
		$rules=array(
						'firstname' => 'alpha|required|max:128',
						'login' => 'alpha_num|required|min:4|unique:users,username',
						'pwd' => 'alpha_num|required|min:8',
						'confirmPwd' => 'alpha_num|required|same:pwd',
						'email' => 'email|required|unique:users,email'
					);

        // Message error 
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
        
		// Create validator 
		$validator=Validator::make($data,$rules,$messages);

		// Validate datas 
		if ($validator->passes()) // everything is ok
		{
			// Add data in database column USERS //
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
