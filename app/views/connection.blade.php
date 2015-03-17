@extends('layout.regis')

@section('content')
	{{ Form::open(array('route' => 'connection.submit')) }}
		{{ Form::label('login', 'login :'); }}
		{{ Form::text('login'); }}
		<br />
		{{ Form::label('password' , 'mot de passe :'); }}
		{{ Form::text('password'); }}
		{{ $errors->first('login'); }} 
		<br />
		{{ Form::submit('Envoyer'); }}
	{{ Form::close() }}

@stop 