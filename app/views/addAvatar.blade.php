@extends('layout.master')

@section('header')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Gravatar</a>
                <p class="navbar-text">Connecté en tant que {{ $user }}</p>
            </div>
            <ul class="nav navbar-nav navbar-right">
                {{-- Create redirection link --}}
                <li> {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars'); }} </li>
                <li> {{ HTML::link('profile/'.$user.'/addAvatar', 'Ajouter'); }} </li>
                <li> {{ HTML::link('connection', 'Se déconnecter'); }} </li>
            </ul>
        </div>
    </nav>
@stop

@section('content')  
    {{-- addAvatar Form : file and email --}}
    {{ Form::open(array(
                'action'=> 'ProfileController@addAvatar',
                'route'=> 'profile.addAvatar',
                'files'=> 'true',
                'method'=>'POST')); }}
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">
            {{ Form::label('picture', 'Image de l\'avatar'); }}
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::file('picture'); }}
                <label class="control-label" for="email">
                    {{ $errors->first('picture'); }}
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2"> 
            {{ Form::label('email', 'Email associé'); }}
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::email('email', '', ['class' => 'form-control']); }}        
                <label class="control-label" for="email">
                    {{ $errors->first('email'); }}
                </label>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            {{ Form::submit('Envoyer', ['class' => 'btn btn-lg btn-primary btn-block']); }}
        </div>
    </div>
    {{ Form::close(); }}
@stop