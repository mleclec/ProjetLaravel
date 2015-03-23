@extends('layout.master')

@section('header')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Gravatar</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> {{ HTML::link('connection', 'Se connecter') }} </li>
                </ul>
            </div>
        </nav>
@stop
@section('content')
    <div class="row">
        {{ Form::open(array(
                        'action'=> 'Controller@submitRegistration',
                        'route'=> 'registration.submit',
                        'files'=> 'false',
                        'method'=>'POST')) }}
                        
	
            <div class="col-lg-offset-4 col-lg-2">{{Form::label('firstname', 'Prénom');}}</div>
            <div class="col-lg-6">{{Form::text('firstname')}}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-4 col-lg-2">{{Form::label('login', 'Nom d\'utilisateur');}}</div>
            <div class="col-lg-6">{{Form::text('login')}}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-4 col-lg-2">{{Form::label('pwd', 'Mot de passe');}}</div>
            <div class="col-lg-6">{{Form::password('pwd')}}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-4 col-lg-2"> {{Form::label('confirmPwd', 'Confirmer le mot de passe');}}</div>
            <div class="col-lg-6">{{Form::password('confirmPwd')}}</div>
      </div>
      <div class="row">
            <div class="col-lg-offset-4 col-lg-2">{{Form::label('email', 'Adresse e-mail');}}</div>
            <div class="col-lg-6">{{Form::email('email')}}</div>
      </div>
     
      <div class="row">
            <div class="col-lg-offset-8 col-lg-4">{{ Form::submit('Valider'); }}</div>
      </div>
	{{ Form::close() }}
@stop 

 