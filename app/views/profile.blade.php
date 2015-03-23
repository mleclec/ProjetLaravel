@extends('layout.regis')

@section('content')
    {{ HTML::link('connexion', 'Se deconnecter') }}
    Vous etes connecté en tant que {{ $user }} 
    {{ HTML::link('profile/'.$user, 'Mon Profil') }}
    {{ HTML::link('profile/'.$user.'/list', 'Mes Avatars') }}
    {{ HTML::link('profile/'.$user.'/addform', 'Ajouter') }}
   
@stop