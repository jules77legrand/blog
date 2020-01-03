@extends('layout')
@section('contenu_page')
   
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_a.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Des enseignants certifiés</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href={{route('accueil.index')}}>Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Professeur <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <h1>Nos professeurs</h1>
    <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-1.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M. NGOM</h3>
								<span class="position mb-2">Professeur de Mathématiques</span>
								<div class="faded">
									<p>Je suis à votre disposition pour vous encompagner tout au long de votre formation.Je suis disponible. </p>
									
	                          </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-12.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M.FAYE</h3>
								<span class="position mb-2">Professeur de Physiques</span>
								<div class="faded">
									<p>Je suis engagé pour vous soutenir.</p>
									
	                          </div>
							</div>
						</div>
					</div>



					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-2.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mme DIAGNE</h3>
								<span class="position mb-2">Professeur d'électricité </span>
								<div class="faded">
									<p>Je suis engagée pour vous soutenir.</p>
									
	                          </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-15.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M.CAMARA</h3>
								<span class="position mb-2">Professeur de Neurologie</span>
								<div class="faded">
									<p>Je suis engagé pour vous soutenir.</p>
									
	                          </div>
							</div>
						</div>
					</div>


					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-14.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mme DIANKHA</h3>
								<span class="position mb-2">Professeur de medecine </span>
								<div class="faded">
									<p>Je suis engagée pour donner le meilleur de moi-meme</moi-meme>.</p>
									
	                          </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-13.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M.DACOSTA</h3>
								<span class="position mb-2">Professeur de météorologie</span>
								<div class="faded">
									<p>Je suis engagé pour vous soutenir.</p>
									
	                          </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-3.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M.SYLVA</h3>
								<span class="position mb-2">Professeur de Telecommunications</span>
								<div class="faded">
									<p>Je suis ingénieur en informatique et je vais vous donner le meilleur de moi.</p>
									
	                              </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/teacher-11.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>M.DIOP</h3>
								<span class="position mb-2">Professeur de Systemes Réseaux et Sécurité</span>
								<div class="faded">
									<p>Je suis ambtion et je ferai de mon mieux pour que vous soyez de bons ingenieurs en cybersécurité  </p>
									
	                             </div>
							</div>
						</div>
					</div>
	



 </div>
</section>





@endsection('')
