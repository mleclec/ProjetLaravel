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
            // research avatars partner has authenticated user
            $avatars = Avatar::where('user_id','=', Auth::user()->id)->get();            
            return View::make('list',array('user' =>  Auth::user()->username))->with('avatars' , $avatars);
        }

        public function showAvatar()
        {
            // Display form add Avatar
            return View::make('addAvatar',array('user' => Auth::user()->username));
        }

        public function addAvatar()
        {
            // Recovery of data seizures
            $data = Input::all();
            // Create rules
            $rules=array(
                           'picture' => 'image|required|mimes:jpeg,png,jpg',
                           'email' => 'email|required'
        		        );
            // Message error 
            $messages=array(
                            'image' => 'Cet attribut doit être une image. Extension valide : JPEG,PNG,JPG.',
                            'required' => 'Cet attribut est obligatoire.',
                            'mimes' => 'Extension non valide. Extension valide : JPEG,PNG,JPG.',
                            'email' => 'Inscrire une adresse valide.'
                            );
            
    		// Create validator //
    		$validator=Validator::make($data,$rules,$messages);

    		// Validate datas 
            if ($validator->passes()) // everything is ok
    		{
                // Uploading image file in server 
                $email = Input::get('email');
                $emailC = md5(Input::get('email'));
                $file = Input::file('picture');
                $fileName = $file->getClientOriginalName();
                Input::file('picture')->move('pictures', $fileName);
                
                // Add data in database column AVATARS 
                $avatar = new Avatar();
                $avatar->link = 'pictures/'.$fileName;
                $avatar->email = $email;
                $avatar->email_MD5 = $emailC;
                $avatar->user_id = Auth::user()->id;
                $avatar->save();
                return Redirect::action('ProfileController@allAvatar', array('user' => Auth::user()->username));
    		}
            
            else
            {
                            // Redirect page of addAvatar's form with message error
    			return View::make('addAvatar', array('user' => Auth::user()->username))->withErrors($validator);
    		}
        }
        
        public function deleteAvatar($user,$avatarID)
        {   
            // Recovery data of Avatar
            $user = Input::get('user');
            $avatarID = Input::get('id');
            // Find Avatar 
            $avatar = Avatar::find($avatarID);
            File::delete($avatar->link); // Remove file in server
            $avatar->delete(); // Remove avatar in database
            
            return Redirect::action('ProfileController@allAvatar', array('user' => Auth::user()->username));
        }        
}
