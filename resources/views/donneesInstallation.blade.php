@extends('layouts.app')
@section('content')

    <h1>Données installation</h1>
    {!! Form::open(['method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nombrepanneaux','NombrePanneaux') !!}
        {!! Form::text('nombrepanneaux','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('surface','Surface') !!}
        {!! Form::text('surface','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::text('type','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('date','Date') !!}
        {!! Form::text('date','',['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
@endsection
