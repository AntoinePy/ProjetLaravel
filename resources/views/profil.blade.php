@extends('layouts.app')
@section('content')

<h1>Profil</h1>
            Afficher les infos de l'user ici
{{--
    {!! $user->render() !!}
--}}

<a href="{{url('/profil/edit')}}">
    Modifier vos infos
</a>
@endsection
