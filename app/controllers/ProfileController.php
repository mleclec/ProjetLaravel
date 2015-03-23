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
        
        public function allAvatar()
        {
            $avatars = Avatar::where('user_id','=', Auth::user()->id)->get();            
            return View::make('list',array('user' =>  Auth::user()->username))->with('avatars' , $avatars);
        }

        public function showAvatar()
        {
            return View::make('addAvatar',array('user' => Auth::user()->username));
        }

        public function addAvatar()
        {
            $data = Input::all();
            $rules=array(
                           'picture' => 'image|required|mimes:jpeg,png,jpg',
                           'email' => 'email|required'
        		);
		// Création du validateur //
		$validator=Validator::make($data,$rules);

		// Validation des données //
		if ($validator->passes()) // everything is ok
		{
			// Ajout des données dans la base et téléchargement de l'image//
                        $email = Input::get('email');
                        $file = Input::file('picture');
                        $fileName = $file->getClientOriginalName();
                        Input::file('picture')->move('pictures', $fileName);

                        $avatar = new Avatar();
                        $avatar->photo = 'pictures/'.$fileName;
                        $avatar->email = $email;
                        $avatar->user_id = Auth::user()->id;
                        $avatar->save(); 

                        return Redirect::action('ProfileController@allAvatar', array('user' => Auth::user()->username));
		}else{
			return Redirect::action('ProfileController@addAvatar', array('user' => Auth::user()->username));
		}
        }
        
        public function deleteAvatar($user,$avatarID)
        {   
            $user = Input::get('user');
            $avatarID = Input::get('id');
            
            $avatar = Avatar::find($avatarID);
            $avatar->delete();
            
            return Redirect::action('ProfileController@allAvatar', array('user' => Auth::user()->username));
        }
        
}
