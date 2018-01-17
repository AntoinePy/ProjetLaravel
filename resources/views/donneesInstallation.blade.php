@extends('layouts.app')
@section('content')


    <h1>Données Installation</h1>
    Afficher les données de l'installation de l'user ici <br>
    @if(isset($site1))
            <h2>Latitude</h2>
            <li>{{$site1->latitude}}</li>
            <h2>Longitude</h2>
            <li>{{$site1->longitude}}</li>
            <h2>Cout Installation</h2>
            <li>{{$site1->coutInstallation}}</li>
            <h2>Date Installation</h2>
            <li>{{$site1->dateInstallation}}</li>
            <h2>Position Installation</h2>
            <li>{{$site1->positionInstallation}}</li>
           {{-- <h2>Nombre de panneaux</h2>
            <li>{{$panneau->nb}}</li>
--}}
            <a href="{{url('/donneesInstallation')}}/{{$user->id}}/edit">
                Modifier vos données
            </a>

    @else
    <a href="{{url('/donneesInstallation/insert')}}">
        Ajouter vos données
    </a>
    @endif
    @include('layouts.footer')
@endsection