@extends('layouts.app')
@section('content')

    <h1>Saisie Utilisateur</h1>
    {!! Form::open(['method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('Date','Date') !!}
         {!!  Form::selectMonth('month') !!}
        {!!  Form::selectYear('year',2000,2100) !!}
    </div>
    <div class="form-group">
        {!! Form::label('production','Production') !!}
        {!! Form::number('production','',['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
@endsection
