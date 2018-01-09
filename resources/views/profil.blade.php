@extends('layouts.app')
@section('content')

<h1>Profil</h1>
    {!! Form::open(['method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','E-mail') !!}
        {!! Form::text('email','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::text('password','',['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
@endsection
