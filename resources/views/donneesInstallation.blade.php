@extends('layouts.app')
@section('content')


    <h1>Données Installation</h1>
    @if(isset($site1))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Coût installation</th>
                <th scope="col">Date installation</th>
                <th scope="col">Position installation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$site1->latitude}}</td>
                <td>{{$site1->longitude}}</td>
                <td>{{$site1->coutInstallation}}</td>
                <td>{{$site1->dateInstallation}}</td>
                <td>{{$site1->positionInstallation}}</td>
            </tr>
            </tbody>
        </table>

           {{-- <h2>Nombre de panneaux</h2>
            <li>{{$panneau->nb}}</li>j
--}}
            <a class="btn btn-primary btn-x1 text-uppercase" href="{{url('/donneesInstallation')}}/{{$user->id}}/edit">
                Modifier vos données
            </a>

    @else
    <a class="btn btn-primary btn-x1 text-uppercase" href="{{url('/donneesInstallation/insert')}}">
        Ajouter vos données
    </a>
    @endif
    @include('layouts.footer')
@endsection