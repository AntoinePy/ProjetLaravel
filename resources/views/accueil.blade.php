@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>



</head>

<body id="page-top">



<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Panneaux solaires</div>
            <div class="intro-heading text-uppercase">Voltaico</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Fonctionnalités</a>
        </div>
    </div>
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Fonctionnalités</h2>
                <h3 class="section-subheading text-muted">Voici ce que vous permet le site Voltaico</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="http//www.google.fr"><i class="fa fa-circle fa-stack-2x text-primary"> </i></a>
              <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Saisie des données</h4>
                <p class="text-muted">Le site vous permet de saisir les données correspondants à votre installation photovoltaïque</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Statistiques</h4>
                <p class="text-muted">Retrouvez les données de performance de vos panneaux</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-flash fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Données installation</h4>
                <p class="text-muted">Voyez un aperçu des données de votre installation (emplacement...)</p>
            </div>
        </div>
    </div>
</section>



<!-- Clients -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="http://www.iut-bm.univ-fcomte.fr/">
                    <img class="img-fluid d-block mx-auto" src="img/logos/iutbm.png" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="http://www.iut-bm.univ-fcomte.fr/pages/fr/dut-info-14115.html">
                    <img class="img-fluid d-block mx-auto" src="img/logos/logoinfo.PNG" alt="">
                </a>
            </div>
        </div>
    </div>
</section>



@include('layouts.footer')


@endsection
