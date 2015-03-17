@extends('layout.regis')

@section('content')
	{{ Form::open(array('route' => 'connection.submit')) }}
		{{ Form::label('username', 'username :'); }}
		{{ Form::text('username'); }}
		<br />
		{{ Form::label('password' , 'mot de passe :'); }}
		{{ Form::password('password'); }}
		{{ $errors->first('login'); }} 
		<br />
		{{ Form::submit('Envoyer'); }}
	{{ Form::close() }}
        <?php echo HTML::link('inscription', 'Si vous n etes pas inscrit, inscrivez-vous...'); ?>
@stop 