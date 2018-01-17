@extends('layouts.app')
@section('content')

    <h1>Saisie Utilisateur</h1>
    {!! Form::open(['url'=>'saisieUtilisateur/insertSaisie','method'=>'post']) !!}
    <div class="form-group">
        {!! Form::label('Date','Date') !!}
        {!! Form::date('date','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('production','Production') !!}
        {!! Form::number('production','',['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
    <a href="{{url('/saisieUtilisateur')}}">
        Retour
    </a>
    @include('layouts.footer')
@endsection
