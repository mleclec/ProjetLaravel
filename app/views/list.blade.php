    
@extends('layout.regis')

@section('content')
    <?php echo HTML::link('connexion', 'Se deconnecter'); ?>
    Vous etes connecté en tant que {{ $user }}
    {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars') }}
    {{ HTML::link('profile/'.$user.'/addform', 'Ajouter') }} <br />
    @foreach($avatars as $a)
        {{ HTML::image($a->photo) }}<br /> 
        {{ $a->email }} <br />
        
        {{ Form::open(array(
                    'action'=> 'ProfileController@deleteAvatar',
                    'method'=>'POST')) }}
            
            {{ Form::hidden('id', $a->id) }}
            {{ Form::hidden('user', $user) }}
            {{ Form::submit('supprimer') }}
            
        {{ Form::close() }}
    @endforeach

    
@stop