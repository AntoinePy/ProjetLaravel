@extends('layouts.app')
@section('content')

    <h1>Saisir vos données</h1>

{{--    <table>
        <tr>
        <td>{{$prod->nbkWh}}</td>

            <td>{{$prod->date}}</td>

        </tr>
    </table>--}}
    @foreach ($prod as $prods)
        Date : {{$prods->date}}
        Production : {{$prods->nbkWh}}

        <br>
    @endforeach
    <a class="btn btn-primary btn-x1 text-uppercase" href="{{url('/saisieUtilisateur/insert')}}">
        Ajouter des saisies
    </a>

    @include('layouts.footer')
@endsection