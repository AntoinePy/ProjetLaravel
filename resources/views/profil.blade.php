@extends('layouts.app')
@section('content')

<h1>Profil</h1>
            Afficher les infos de l'user ici
<a href="{{url('/profil/edit')}}">
    Modifier vos infos
</a>
@endsection
