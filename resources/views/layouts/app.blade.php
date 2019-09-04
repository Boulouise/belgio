<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Belgio Car</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{asset('/css/plugins/slicknav.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/vegas.min.css')}}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{asset('css/plugins/owl.carousel.min.css')}}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{asset('css/plugins/gijgo.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.8.95/css/materialdesignicons.min.css">
    <link href="{{ asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

  <link href="{{asset('img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="loader-active" >

    <header id="header-area" class="fixed-top">
    <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> 87, Rue Saint Saens Magasin Rdc - Casablanca
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> 0663 185 447/0522 400 975
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> 7j/7 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <!-- <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
  


        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-2">
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{asset('img/LOGO2.png')}}" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-10 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                   
                        
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }} "><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                        <li class="nav-item {{ Request::is('entreprise*') ? 'active' : '' }} "><a href="{{ route('entreprise') }}" class="nav-link">Entreprise</a></li>
                        <li class="nav-item {{ Request::is('service*') ? 'active' : '' }} "><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                        <li class="nav-item {{ Request::is('service*') ? 'active' : '' }} " id="smenu1">
                             <a href="" class="nav-link"> Rendez-Vous</a>
                           <ul style="color:black">
                              <li class="nav-item " style="color:black" id="ssmenu1"><a href="{{ route('PrendreRendezVous',['service'=>'lavage']) }}" class="nav-link">Lavage</a>
                               
                              </li>
                              <li class="nav-item"><a href="{{ route('PrendreRendezVous',['service'=>'mecanique']) }}" class="nav-link">Mécanique</a></li>
                              <li class="nav-item"><a href="{{ route('PrendreRendezVous',['service'=>'vidange']) }}" class="nav-link">Vidange</a></li>
                           </ul>
                        </li>
                        <li class="nav-item {{ Request::is('reservation*') ? 'active' : '' }} "><a href="{{ route('reservation') }}" class="nav-link">Réservation</a></li>
                        @if (auth()->id()==1) 
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('adminC') }}">{{ __('Tableau de bord') }}</a>
                            </li>
                     @endif
                     <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }} "><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        @guest
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                    @endguest
                   
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
    </header>
        <main class="">
            @yield('content')
        </main>

    </div>


     <!--== Footer Area Start ==-->
     <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>À propos de nous</h2>
                            <div class="widget-body">
                                <img src="{{ asset('img/logo.png')}}" alt="JSOFT">
                                <p>Agence de location voiture a Casablanca
                                        Avec ses longues années d’expérience et d’implication dans le domaine de la location voiture .</p>

                               

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Nos services</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="{{ route('service') }}">
                                                Location voiture
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">
                                          Maintenance
                                          
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">
                                          Diagnostique
                                           
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">
                                            Lavage
                                          
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Contact</h2>
                            <div class="widget-body">
                             

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 87, Rue Saint Saens Magasin Rdc - Casablanca</li>
                                    <li><i class="fa fa-mobile"></i> 0663 185 447/0522 400 975</li>
                                    <li><i class="fa fa-envelope"></i>Belgiocar@gmail.com</li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by <a href="https://www.yansoft.ma" target="_blank">Yan Soft</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('img/scroll-top.png')}}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('js/jquery-migrate.min.js')}}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('js/plugins/gijgo.js')}}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('js/plugins/vegas.min.js')}}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('js/plugins/isotope.min.js')}}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('js/plugins/owl.carousel.min.js')}}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('js/plugins/waypoints.min.js')}}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('js/plugins/counterup.min.js')}}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('js/plugins/mb.YTPlayer.js')}}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('js/plugins/magnific-popup.min.js')}}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('js/plugins/slicknav.min.js')}}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('js/plugins/slicknav.min.js')}}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>

<script type="text/javascript">
 
 <!--
 
 window.onload=montre;
 
 window.onload=montreSous;
 
 function montre(id) {
 
 var d = document.getElementById(id);
 
  for (var i = 1; i<=10; i++) {
 
  	if (document.getElementById('smen​u'+i)) {document.getElementById('smen​u'+i).style.display='none';}
 
  }
 
 if (d) {d.style.display='block';}
 
 }
 
 
 
 
 
 function montreSous(id) {
 
 var d = document.getElementById(id);
 
  for (var i = 1; i<=10; i++) {
 
  	if (document.getElementById('ssme​nu'+i)) {document.getElementById('ssme​nu'+i).style.display='none';}
 
  }
 
 if (d) {d.style.display='block';}
 
 }
 
 //-->
 
 </script>
</body>
</html>
