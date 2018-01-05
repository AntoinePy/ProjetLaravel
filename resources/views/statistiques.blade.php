<?php
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Charts\BarChart;

?>
@extends('layouts.app')
@section('content')
    <div id="ca_graph"></div>
    {!! $chart->render() !!}

@endsection
