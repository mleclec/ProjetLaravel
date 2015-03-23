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
        @foreach($avatars as $a)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                {{ HTML::image($a->photo) }}
                <div class="caption">
                    <h3>{{ $a->email }}</h3>
                    {{ Form::open(array(
                                'action'=> 'ProfileController@deleteAvatar',
                                'method'=>'POST')) }}
            
                            {{ Form::hidden('id', $a->id) }}
                            {{ Form::hidden('user', $user) }}
                            {{ Form::submit('supprimer') }}
         
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        @endforeach  
    </div>    
    
@stop