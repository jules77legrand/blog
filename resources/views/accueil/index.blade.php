@extends('layout')
@section('contenu_page')
<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url({{asset('images/bg_1.jpg')}});">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-6 ftco-animate">
			  <h1 class="mb-4">Au service de la formation.</h1>
			  <p>"L'éducation est l'arme la plus puissante pour changer le monde" Nelson Mandela.</p>
			 
			</div>
		  </div>
		  </div>
		</div>
  
		<div class="slider-item" style="background-image:url({{asset('images/bg_2.jpg')}});">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-6 ftco-animate">
			  <h1 class="mb-4">Une formation de qualité</h1>
			  <p>"L'éducation est l'arme la plus puissante pour changer le monde" Nelson Mandela.</p>
			  
			</div>
		  </div>
		  </div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url({{asset('images/about.jpg; border ')}})">
            </div>
        </div>
		</div>

					   <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">

          	              <h2 class="mb-4">Ecole Supérieure d'Einstein</h2>
				              


						<p>Ecole Supérieure d'Einstein est une école de formation professionnelle sur les métiers scientifiques et techniques.Notre objectif est de former des techniciens pour deux ans et d'ingenieurs pour cinq ans dans les filieres d'avenir.</p>
						<p>Les etudiants seront familiarisés avec le monde du travail.L'ecole dispose d'appareils pour faire certaines expériences sur place et d'organiser des voyages techniques interieures comme exterieure du pays.</p>
						<p>La science et la technique sont les leviers pour batir un monde adapté à nos besoins.</p>
						<p>« Formez-vous, armez-vous de sciences jusqu’aux dents (…)Cheikh Anta DIOP»

</p>
					</div>
				</div>
			</div>
		</section>
		

		<section>
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">10</strong>
		                <span>Des professeurs certifiés</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="401">120</strong>
		                <span>Etudiants</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="30">10</strong>
		                <span>Formations</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">100</strong>
		                <span>Emplois</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    
    

@endsection