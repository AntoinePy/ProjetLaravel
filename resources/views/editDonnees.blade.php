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
    <h1>Données Installation</h1>
    {!! Form::open(['url'=>'donneesInstallation/'.$user->id.'/update','method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nombrePanneaux','Nombre de Panneaux') !!}
        {!! Form::text('nombrePanneaux','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('surface','Surface') !!}
        {!! Form::text('surface','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('latitude','Latitude') !!}
        {!! Form::text('latitude','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('longitude','Longitude') !!}
        {!! Form::text('longitude','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('coutInstallation','Coût Installation') !!}
        {!! Form::text('coutInstallation','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('positionInstallation','Position Installation') !!}
        {!! Form::text('positionInstallation','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dateInstallation','Date Installation') !!}
        {!! Form::date('dateInstallation','',['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
    {!! Form::close() !!}
    <a href="{{url('/donneesInstallation')}}">
        Retour
    </a>
    @include('layouts.footer')
@endsection
