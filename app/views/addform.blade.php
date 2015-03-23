@extends('layout.regis')

@section('content')
    {{ HTML::link('connexion', 'Se deconnecter') }}
    Vous etes connecté en tant que {{ $user }} 
    {{ HTML::link('profile/'.$user, 'Mon Profil') }}
    {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars') }}
    {{ HTML::link('profile/'.$user.'/addform', 'Ajouter') }} <br />
    
	{{ Form::open(array(
                    'action'=> 'ProfileController@addAvatar',
                    'route'=> 'profile.addAvatar',
                    'files'=> 'true',
                    'method'=>'POST')) }}
                    
            {{Form::label('photo', 'Image avatar');}}
            {{Form::file('photo')}}
            {{"<br/>"}}

            {{Form::label('email', 'Email associé');}}
            {{Form::text('email')}}
            {{"<br/>"}}

            {{ Form::submit('Envoyer'); }}
	{{ Form::close() }}
@stop