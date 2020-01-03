@extends('layout')
@section('contenu_page')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_x.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Des génies</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href={{route('accueil.index')}}>Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Etudiants <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/blog-1.jpg')}});">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Je suis heureux d'etre ici</a></h3>
                
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/image_2.jpg')}});">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">la solidarite est au rendez-vous</a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/image_3.jpg')}});">
                
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Nous sommes heureux pour la qualite de la formation</a></h3>
                
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/image_4.jpg')}});">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">un texte a ecrire</a></h3>
                
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/image_5.jpg')}});">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">epanouissement</a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('images/image_6.jpg')}});">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Heureux avec mes camarades</a></h3>
                
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

@endsection('')
