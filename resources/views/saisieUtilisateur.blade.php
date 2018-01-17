@extends('layouts.app')
@section('content')

    <h1>Saisir vos données</h1>
    Afficher les saisies par mois ici <br>

{{--    <table>
        <tr>
        <td>{{$prod->nbkWh}}</td>

            <td>{{$prod->date}}</td>

        </tr>
    </table>--}}
    @foreach ($prod as $prods)
        {{$prods->nbkWh}}
        {{$prods->date}}
        <br>
    @endforeach
    <a href="{{url('/saisieUtilisateur/insert')}}">
        Ajouter des saisies
    </a>
@endsection