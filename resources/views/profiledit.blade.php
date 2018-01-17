@extends('layouts.app')
@section('content')
@if(count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>

    </div>
@endif
    <h1>Profil Edit</h1>
    {!! Form::open(['url'=>'profil/'.$user->id.'/update','method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','E-mail') !!}
        {!! Form::email('email','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {{ Form::password('password') }}
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
    <a href="{{url('/profil')}}">
        Retour
    </a>
@endsection
