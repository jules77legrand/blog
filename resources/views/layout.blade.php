
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecole Superieure d'Einstein</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

     
     <link href="{{asset('css/all.css')}}" rel="stylesheet" />


  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">ESE<span>ECOLE</span></a>
    			</div>
	    		
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="/recherche" method="GET"  class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Recherche">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href={{route('accueil.index')}} class="nav-link pl-0">Accueil</a></li>
	        	<li class="nav-item"><a href="{{route('admission')}}" class="nav-link">Admission</a></li>
	        	<li class="nav-item"><a href="{{route('formation')}}" class="nav-link">Formation</a></li>
	        	<li class="nav-item"><a href="{{route('Professeur')}}" class="nav-link">Professeur</a></li>
	        	<li class="nav-item"><a href="{{route('Blog')}} "class="nav-link">Etudiant</a></li>

	          <li class="nav-item">
            <!------------------------------------------fomulair--------------->
            
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Deconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            <a href="{{route('Contact')}}" class="nav-link"></a></li>
	        </ul>
	      </div>
	    </div>
    </nav>
    <!-- END nav -->




  @yield('contenu_page')
  



    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">As-tu un question?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Hann Maristes. Dalifor, DAKAR, SENEGAL</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+221 33 832 60 61/+221 78 178 80 94 </span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@ese.edu.sn</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Le blog Recent</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('images/bg_1.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href={{route('Blog')}}>Nous avons un destin qui s'appelle la reussite</a></h3>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('images/bg_2.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href={{route('Blog')}}>Ensemble pour acquerir plus de connaissances</a></h3>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Liaison rapide</h2>
              <ul class="list-unstyled">
                <li><a href={{route('accueil.index')}}><span class="ion-ios-arrow-round-forward mr-2"></span>Accueil</a></li>
                <li><a href={{route('admission')}}><span class="ion-ios-arrow-round-forward mr-2"></span>Admission</a></li>
                <li><a href={{route('Professeur')}}><span class="ion-ios-arrow-round-forward mr-2"></span>Professeur</a></li>
                <li><a href={{route('formation')}}><span class="ion-ios-arrow-round-forward mr-2"></span>Formations</a></li>
                <li><a href={{route('Contact')}}><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">INSCRIVEZ-VOUS!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter votre adresse email">
                  <a href="/login" class="btn form-control submit px-3">Se connecter</a>
                  
                </div>
              </form>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Conçu. <i class="icon-heart" aria-hidden="true"></i>  <a href="#" target="_blank">Souleymane NGOM</a>

          </div>
        </div>
      </div>
    </footer>
    
  

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>