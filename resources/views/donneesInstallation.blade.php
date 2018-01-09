@extends('layouts.app')
@section('content')

    <h1>Données installation</h1>
    {!! Form::open(['method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nombrepanneaux','NombrePanneaux') !!}
        {!! Form::number('nombrepanneaux','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('surface','Surface') !!}
        {!! Form::number('surface','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::text('type','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Date','Date') !!}
        {!! Form::selectRange('number',1,30) !!}
        {!!  Form::selectMonth('month') !!}
        {!!  Form::selectYear('year',2000,2100) !!}
    </div>
    <button class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
@endsection
