@extends('layouts.app')

@section('content')
 <!--== Page Title Area Start ==-->
 <section id="page-title-area" class="section-padding overlay" style="background-image:url({{ asset('img/page-title.jpg') }})">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Belgio Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>À propos de nous</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Agence de location voiture a Casablanca Avec ses longues années d’expérience et d’implication dans le domaine de la location voiture .</p>
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
                                <p> <p>Le bureau Belgio Car vous propose des tarifs idéals pour le long et le court terme.
                                        <br>
                                        Que vous soyez un particulier ou une organisation, avec Belgio Car, l’agence de location voiture Casablanca, 
                                        vous pouvez découvrir diverses voitures à louer.
                                         <!-- Notre agence se trouve dans plusieurs villes du Maroc notamment Marrakech, -->
    
                                         L’équipe dévouée de Belgio Car vous accompagne durant votre séjour au Maroc et 
                                         vous assure un service de haute qualité afin de satisfaire ses chers clients.
                                         <br>Nous somme aussi Spécialisés dans le diagnostic automobile.<br>
                                         <h4>Notre cible</h4>
                                         <ul>
                                         <li>Satisfaire nos clients en leur proposant un produit de qualité et un service d’une haute qualité.
                                         </li>
                                         <li>
                                         Être attentif aux besoins particuliers des clients.</li>
                                         <li>
                                         Rajouter une valeur ajoutée à notre équipe en l’encourageant et en instaurant des investissements car on est intransigeant et veille sur la qualité de nos services
                                         </li></ul>
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
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            <h3>Qualité et expérience</h3>
                            <p>Expert depuis plus de 10 ans pour vous aider à louer une voiture au le Maroc.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>Garantie meilleur prix
                               </h3>
                            <p> Nous garantissons le meilleur prix pour nos offres de location de voitures !</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>Annulation gratuite
                               </h3>
                            <p> Annulez sans frais jusqu'à 24h avant la location.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Page Content End ==-->
    
@endsection
