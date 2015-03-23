@extends('layout.master')

@section('header')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Gravatar</a>
                    <p class="navbar-text">Connecté en tant que {{ $user }}</p>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars') }} </li>
                    <li> {{ HTML::link('profile/'.$user.'/addAvatar', 'Ajouter') }} </li>
                    <li> {{ HTML::link('connection', 'Se déconnecter') }} </li>
                </ul>
            </div>
        </nav>
@stop

@section('content')  
    <div class="row">
        {{ Form::open(array(
                    'action'=> 'ProfileController@addAvatar',
                    'route'=> 'profile.addAvatar',
                    'files'=> 'true',
                    'method'=>'POST')) }}

            <div class="col-lg-offset-4 col-lg-2">{{Form::label('photo', 'Image de l\'avatar');}}</div>
            <div class="col-lg-6">{{ Form::file('picture'); }}</div>
    </div>
    <div class="row">
            <div class="col-lg-offset-4 col-lg-2">{{Form::label('email', 'Email associé');}}</div>
            <div class="col-lg-6">{{ Form::text('email'); }}</div>
    </div>
    <div class="row">
            <div class="col-lg-offset-8 col-lg-4">{{ Form::submit('Envoyer'); }}</div>
    </div>
    {{ Form::close() }}
@stop