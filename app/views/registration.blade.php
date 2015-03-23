@extends('layout.regis')

@section('content')
	{{
		Form::open(array
		('action'=> 'Controller@submitRegistration',
	 	 'route'=> 'registration.submit',
	 	 'files'=> 'false',
	 	 'method'=>'POST')
		)
	}}

	{{Form::label('firstname', 'Prénom');}}
	{{Form::text('firstname')}}
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

	<?php echo HTML::link('connexion', 'Se connecter'); ?>

@stop

 