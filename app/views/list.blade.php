    
@extends('layout.regis')

@section('content')
    <?php echo HTML::link('connexion', 'Se deconnecter'); ?>
    Vous etes connecté en tant que {{ $user }}
    {{ HTML::link('profile/'.$user, 'Mon Profil') }}
    {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars') }}
    {{ HTML::link('profile/'.$user.'/addform', 'Ajouter') }} <br />
    @foreach($avatars as $a)
        {{ HTML::image($a->photo) }}<br /> 
        {{ $a->email }} <br />
        {{ HTML::link('profile/'.$user.'/list/delete', 'supprimer') }} <br />
    @endforeach

    
@stop