{{
	Form::open(array
	('url' => 'views',
 	 'action'=> 'Controller@showRegistration',
 	 'route'=> 'route.contact',
 	 'files'=> 'false',
 	 'method'=>'POST')
	)
}}

{{Form::label('firstname', 'Prénom');}}
{{Form::label('login', 'Login');}}
{{Form::label('pwd', 'Mot de passe');}}
{{Form::label('confirmPwd', 'Confirmer le mot de passe');}}
{{Form::label('email', 'Adresse e-mail');}}

{{Form::close()}}