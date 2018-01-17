<?php
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Charts\BarChart;

?>
@extends('layouts.app')
@section('content')
    <a class="btn btn-primary btn-x1 text-uppercase" href="#">Production journalière</a>
    <a class="btn btn-primary btn-x1 text-uppercase" href="#">Production Mensuelle</a>
    <a class="btn btn-primary btn-x1 text-uppercase" href="#">Production annuelle</a>

    <div id="ca_graph"></div>

    {!! $chart->render() !!}
    @include('layouts.footer')
@endsection

