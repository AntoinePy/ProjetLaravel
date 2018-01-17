@extends('layouts.app')
@section('content')
    <link href="css/profil_carte.css" rel="stylesheet">

{{--
    {!! $user->render() !!}
--}}
<p>
<div class="container">
        <h1>Profil</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="business-card">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{$user->name}}</h2>
                        <div class="job">Id : {{$user->id}}</div>
                        <div class="mail"><a href="mailto:{{$user->email}}">{{$user->email}}</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<a class="btn btn-primary btn-x1 text-uppercase" href="{{url('/profil')}}/{{$user->id}}/edit">
    Modifier vos infos
</a>
    </div>
    </p>
@include('layouts.footer')
@endsection
