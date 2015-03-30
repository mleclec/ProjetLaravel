@extends('layout.master')

@section('header')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('connection'); }}">Gravatar</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                {{-- Create redirection link --}}
                <li> {{ HTML::link('connection', 'Se connecter'); }} </li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    {{-- Registration form --}}
    {{ Form::open(array(
                        'action'=> 'Controller@submitRegistration',
                        'route'=> 'registration.submit',
                        'files'=> 'false',
                        'method'=>'POST')); }}

    <div class="row">	
        <div class="col-lg-offset-4 col-lg-2">
            {{ Form::label('firstname', 'Prénom'); }}
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::text('firstname', '', array('class' => 'form-control')); }}
                <label class="control-label" for="login"> 
                    {{ $errors->first('firstname'); }} {{-- error handling of firstname --}}
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">{{ Form::label('login', 'Nom d\'utilisateur'); }}</div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::text('login', '', array('class' => 'form-control')); }}
                <label class="control-label" for="login">
                    {{ $errors->first('login'); }} {{-- error handling of login --}}
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">{{ Form::label('pwd', 'Mot de passe'); }}</div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::password('pwd', ['class' => 'form-control']); }}
                <label class="control-label" for="pwd">
                    {{ $errors->first('pwd'); }} {{-- error handling of password --}}
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2"> {{ Form::label('confirmPwd', 'Confirmer le mot de passe'); }}</div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::password('confirmPwd', ['class' => 'form-control']); }}
                <label class="control-label" for="confirmPwd">
                    {{ $errors->first('confirmPwd'); }} {{-- error handling of confirmation password --}}
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-2">{{ Form::label('email', 'Adresse e-mail'); }}</div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::email('email', '', ['class' => 'form-control']); }}
                <label class="control-label" for="email">
                    {{ $errors->first('email'); }} {{-- error handling of email --}} 
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">{{ Form::submit('Valider', ['class' => 'btn btn-lg btn-primary btn-block']); }}</div>
    </div>
    {{ Form::close(); }}
@stop 

