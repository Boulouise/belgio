@extends('layouts.app')

@section('content')
  <!--== Page Title Area Start ==-->
  <section id="page-title-area" class="section-padding overlay" style="background-image:url({{ asset('img/page-title.jpg') }})">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>BELGIO CAR</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Nos services</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-1" style="background-image:url({{ asset('img/car/car-1.jpg') }})"></div>
                        <div class="service-item-content">
                            <h3>Location voiture</h3>
                            <p>Que vous soyez un particulier, résident ou étranger, une entreprise désirant profiter
                                 de votre court ou long séjour. location de voiture BELGIO CAR vous propose une gamme 
                                 de produits diversifiés correspondant à votre demande avec la possibilité de
                                  vous livré le véhicule sur tout les aéroports marocains 
                                  Casablanca, Marrakech, Agadir ... 
                                 BELGIO CAR met à votre disposition différents services, vous
                                Permettant de passer un court ou long séjour au Maroc dans de bonnes conditions. 
                                Comme le service aéroport ou la mise à disposition de sièges enfants.
                                Si vous désirez un service qui ne figurerait pas dans Cette liste,
                                 veuillez prendre contact avec notre agence.</p> 
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-2 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>Maintenance</h3>
                            <p>Fiez-vous à des professionnels pour les réparations sur votre véhicule. Avec notre souci du détail, nous effectuons des réparations en mécanique américaine, asiatique et européenne. Nous réparons toutes les composantes de votre automobile ou camion léger telles que le moteur, la direction, la suspension, les freins, le système d'échappement et bien plus.

                                    Notre expertise nous permet d'entretenir votre automobile et camion léger. Confiez-nous votre automobile afin d'expérimenter notre service courtois et professionnel.</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none" style="background-image:url({{ asset('img/car/mecanique.jpeg') }})"></div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-3" style="background-image:url({{ asset('img/car/diagnostique.jpg') }})"></div>
                        <div class="service-item-content">
                            <h3>Diagnostique</h3>
                            <p>BERGIO CAR se charge donc d’établir un diagnostic à l’aide de la valise que l’on branche sur votre véhicule, à domicile ou sur votre lieu de travail. Un service rapide et de qualité.</p>
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-4 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>Lavage</h3>
                            <p>Quand on nous confie son véhicule, on assume totalement la responsabilité d’en 
                                prendre soin. De ce fait, nos techniciens certifiés savent très bien comment traiter 
                                chaque centimètre carré de la carrosserie de votre véhicule.

                                Nous utilisons des produits de marques reconnues mondialement, qui ont su prouver
                                 véritablement leur efficacité. Les torchons doux de nettoyage sont spécialement 
                                 conçus pour repasser des surfaces de taule peintes et vernies, afin qu’elles ne 
                                 palissent jamais par force de fréquence de repassage et de polissage.
                                 Notre stratégie de lavage nous dicte la façon avec laquelle on procède. Une façon certes,
                                  distinguée par notre expérience et notre outillage, et qui nous incite à accorder une importance particulière aux détails, car, c’est en réalité l’accumulation de la sublimité des détails qui constitue au fait l’élégance de l’allure globale de votre voiture.</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-4 d-none d-lg-block d-md-none" style="background-image:url({{ asset('img/car/lavage.jpg') }})"></div>
                    </div>
                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->
@endsection
