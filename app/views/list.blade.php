@extends('layout.master')

@section('header')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Gravatar</a>
                    <p class="navbar-text">Connecté en tant que {{ $user }}</p>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars'); }} </li>
                    <li> {{ HTML::link('profile/'.$user.'/addAvatar', 'Ajouter'); }} </li>
                    <li> {{ HTML::link('connection', 'Se déconnecter'); }} </li>
                </ul>
            </div>
        </nav>
@stop

@section('content')
    <div class="row">
        @foreach($avatars as $a)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    {{ HTML::image($a->photo, 'image de l\'avatar', array('width' => 242,'height' => 200)); }}
                    <div class="caption">
                        <h3 style="text-align: center">{{ $a->email }}</h3>
                        {{ Form::open(array(
                                    'action'=> 'ProfileController@deleteAvatar',
                                    'method'=>'POST',
                                    'onsubmit' => 'return verifForm(this)')); }}

                                {{ Form::hidden('id', $a->id); }}
                                {{ Form::hidden('user', $user); }}
                                {{ Form::submit('supprimer', ['class' => 'btn btn-lg btn-primary btn-block']); }}

                        {{ Form::close(); }}
                    </div>
                </div>
            </div>
        @endforeach  
    </div>     
@stop