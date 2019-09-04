<!DOCTYPE html>
<html class="no-js" lang="zxx">

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
        <!--=== Responsive CSS ===-->
         <!--====- -Pakcker date -->
         <link href="{{asset('css/default.css')}}" rel="stylesheet">
         <link href="{{asset('css/default.date.css')}}" rel="stylesheet">
         <link href="{{asset('css/default.time.css')}}" rel="stylesheet">

       


         <!--====-Pakcker date -->

     
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-6 text-left">
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
                    <div class="col-lg-2 text-right">
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
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
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
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== SlideshowBg Area Start ==-->
   
    <!--== SlideshowBg Area End ==-->

    
   
   
    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> 

        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>CHOISISSEZ VOTRE VOITURE</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars" id="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->
                                <div class="home2-car-filter">
                                    <a href="{{route('chosee_a_car',['categorie'=>''])}}#choose-ur-cars" data-filter="*" class="">Tous</a>
                                   @foreach ($categories as $categorie)
                                   <a href="{{route('chosee_a_car',['categorie'=>$categorie->id])}}#choose-ur-cars" data-filter=".con">{{$categorie->NomCategorie}}</a>
                                    
                                 
                                   @endforeach
                                    </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                  
                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 con suv mpv">
                                        @foreach ($voitures as $car)
                                        <div class="single-popular-car">
                                         <form action="{{ url('Form-reservation/'.$car->id) }}" method="GET">
                                            <div class="p-car-thumbnails">
                                             <a class="car-hover" href="{{ asset($car->img)}} ">
                                                    <img src="{{asset($car->img)}}"  alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">{{$car->Model}}</a>
                                                    <span class="price"><i class="fa fa-tag"></i> {{$car->Prix}} DH /jour</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                   <form action="{{ url('Form-reservation/'.$car->id) }}">
                                                    <button value="Réserver" class="rent-btn">Réserver </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Single Popular Car End -->
                                       
                                  

                                    

                                  

                               
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

 

  
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
    <!--== Footer Area Start ==-->
   
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
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
     <!--=== data Picker  Js ===-->
     <script src="{{ asset('js/picker.js')}}"></script>
     <script src="{{ asset('js/picker.date.js')}}"></script>
     <script src="{{ asset('js/picker.time.js')}}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
    <script>

          .$('.datepicker').pickadate()
    </script>
 


</body>

</html>