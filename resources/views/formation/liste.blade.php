@extends('layout')
@section('contenu_page')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_z.jpg')}})">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-2 bread">Des formations de qualité</h1>
		  <p class="breadcrumbs"><span class="mr-2"><a href={{route('accueil.index')}}>Accuel <i class="ion-ios-arrow-forward"></i></a></span> <span>Formation <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
	  </div>
	</div>
  </section>


<div class="text pt-4">
						  <h3><a href="#">La liste de nos formations</a></h3>	
					  </div>

	  <section
	   class="ftco-section">
		  <div class="container-fluid px-4">
			  <div class="row">
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/course-1.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Sécurité et Défense</a></h3>
						  <p>NOus formations des enqueteurs ont la capacité de retrouver les coupables dans un temps minime. </p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-11.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Les metiers de l'avion</a></h3>
						  <p>Des techniciens et des pioltes qui maitrisent bien le monde de l'avion</p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-2.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Métiers du Port</a></h3>
						  <p>Nous formouns des techniciens qui maitrisent les engins et des transitaires</p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-6.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Electricité</a></h3>
						  <p>Des techniciens et ingenieurs du metier.</p>
						  
					  </div>
				  </div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-6.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Informatique</a></h3>
						  <p>Des informaticens tres doués et qui vont changer le monde.</p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-3.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Technicien de la défense</a></h3>
						  <p>Nous formons des techniciens qui ont la facilité à maitriser tres vite l'adversaire. </p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-10.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">Techniciens de la santé</a></h3>
						  <p>La santé est l'un des facteurs les plus importants de la population.</p>
						  
					  </div>
				  </div>
				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{asset('images/enquete-7.jpg')}});"></div>
					  <div class="text pt-4">
						  
						  <h3><a href="#">ingenieur en électricité</a></h3>
						  <p>L'électricité contribue au développement d'un pays.</p>
						  
					  </div>
				  </div>
			  </div>
		  </div>

		  </div>

	  </section>





@endsection