@extends('layouts.app')
@section('content')

    <h1>Données Installation</h1>
    Afficher les données de l'installation de l'user ici


    </p>

    <a href="{{url('/donneesInstallation/insert')}}">
        Modifier vos données
    </a>
@endsection