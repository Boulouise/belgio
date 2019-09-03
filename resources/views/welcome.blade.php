@extends('layouts.app')


@section('content')
          
<section id="slideslow-bg">
        <div class="container">
            <div class="row">  
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                       
                            <div class="display-table-cell">
                                <br><br><br><br><br>
                               
                                <h1>Bienvenue chez Belgio Car, location de voiture au Maroc.  </h1>
                                <p> Partez à la découverte du Maroc à un prix avantageux.</p>

                                <div class="book-ur-car">
                                   
                                    <form action="{{ route('reservation') }}">
                                    <div class="bookcar-btn bookinput-item" style="margin-left:28%">
                                        <button type="submit">Réservez votre voiture maintenant</button>
                                    </div></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="about-area" class="section-padding">
        <div class="container">
       
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>À propos de nous</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Agence de location voiture a Casablanca
                            Avec ses longues années d’expérience et d’implication dans le domaine de la location voiture .</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Le bureau Belgio Car vous propose des tarifs idéals pour le long et le court terme.
                                    <br>
                                    Que vous soyez un particulier ou une organisation, avec Belgio Car, l’agence de location voiture Casablanca, 
                                    vous pouvez découvrir diverses voitures à louer.
                                     <!-- Notre agence se trouve dans plusieurs villes du Maroc notamment Marrakech, -->

L’équipe dévouée de Belgio Car vous accompagne durant votre séjour au Maroc et vous assure un service de haute qualité afin de satisfaire ses chers clients.<br>Nous somme aussi Spécialisés dans le diagnostic automobile.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('img/home-2-about.png')}}" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                  
                   

                   
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
   
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/Ford.png')}}" width="40%" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/nissan.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/hd.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/vw.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/pg.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/ms.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{asset('img/partner/p.png')}}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                     
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-taxi"></i> -->
							<h3>Location Voiture</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-cog"></i> -->
							<h3>Maintenance</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-map-marker"></i> -->
							<h3>Diagnostique</h3>
						
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-life-ring"></i> -->
							<h3>Lavage</h3>
							
						</div>
						

					
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
  
   

@endsection