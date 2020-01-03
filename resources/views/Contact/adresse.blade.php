@extends('layout')
@section('contenu_page')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}})">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contactez nous</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href={{route('accueil.index')}}>Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Lieu de l'ecole</h3>
	            <p>Hann Maristes. Dalifor, DAKAR, SENEGAL</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4"> Nos contacts</h3>
	            <p><a href="#">+221 33 888 88 88//+221 77441 91 00</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Notre adresse email</h3>
	            <p><a href="#">info@ese.edu.sn</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Notre site web</h3>
	            <p><a href={{route('accueil.index')}}>www.ese.edu.sn</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
	

    <h2>Merci de nous avoir contacté</h2>


@endsection('')