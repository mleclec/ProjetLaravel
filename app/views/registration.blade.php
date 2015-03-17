@extends('layout.regis')

@section('content')
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
	{{Form::text('prenom')}}
	{{"<br/>"}}

	{{Form::label('login', 'Login');}}
	{{Form::text('login')}}
	{{"<br/>"}}

	{{Form::label('pwd', 'Mot de passe');}}
	{{Form::password('pwd')}}
	{{"<br/>"}}

	{{Form::label('confirmPwd', 'Confirmer le mot de passe');}}
	{{Form::password('confirmPwd')}}
	{{"<br/>"}}

	{{Form::label('email', 'Adresse e-mail');}}
	{{Form::email('email')}}
	{{"<br/>"}}

	{{Form::submit('Valider')}}

	{{Form::close()}}

@stop

 