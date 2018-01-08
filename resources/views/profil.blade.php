@extends('layouts.app')
@section('content')

<h1>Profil</h1>
    {!! Form::open(['method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','E-mail') !!}
        {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::text('password',$user->password,['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
@endsection
