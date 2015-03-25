@extends('layout.master')

@section('header')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/'); }}">Gravatar</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li> {{ HTML::link('registration', 'Si vous n\'etes pas inscrit, inscrivez-vous...'); }} </li>
            </ul>
        </div>
    </nav>
@stop
@section('content')
    {{ Form::open(array('route' => 'connection.submit','onsubmit' => 'valider()')); }}
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">
            {{ Form::label('username', 'Nom d\'utilisateur :'); }}
        </div>
        <div class="col-lg-2">
            {{ Form::text('username', '', array('class' => 'form-control')); }}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">
            {{ Form::label('password' , 'Mot de passe :'); }}
        </div>
        <div class="col-lg-2">
            {{ Form::password('password', ['class' => 'form-control']); }}
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            {{ Form::submit('Se connecter', ['class' => 'btn btn-lg btn-primary btn-block']); }}
        </div>
    </div>
    {{ Form::close(); }}
@stop 