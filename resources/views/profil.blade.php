@extends('layouts.app')
@section('content')

<h1>Profil</h1>
            Afficher les infos de l'user ici
{{--
    {!! $user->render() !!}
--}}
<p>
        <li>{{$user->id}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>

</p>

<a href="{{url('/profil')}}/{{$user->id}}/edit">
    Modifier vos infos
</a>
@endsection
