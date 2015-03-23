@extends('layout.master')

@section('header')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('connection') }}">Gravatar</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> {{ HTML::link('registration', 'Si vous n\'etes pas inscrit, inscrivez-vous...') }} </li>
                </ul>
            </div>
        </nav>
@stop
@section('content')
    <div class="row">
        {{ Form::open(array('route' => 'connection.submit')) }}
            <div class="col-lg-offset-4 col-lg-2">{{ Form::label('username', 'Nom d\'utilisateur :'); }}</div>
            <div class="col-lg-6">{{ Form::text('username'); }}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-4 col-lg-2">{{ Form::label('password' , 'Mot de passe :'); }}</div>
            <div class="col-lg-6">{{ Form::password('password'); }}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-8 col-lg-4">{{ Form::submit('Se connecter'); }}</div>
      </div>
	{{ Form::close() }}
@stop 