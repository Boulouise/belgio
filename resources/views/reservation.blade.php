@extends('layouts.app')

@section('content')
 <!--== Page Title Area Start ==-->
 <section id="page-title-area" class="section-padding overlay" style="background-image:url({{ asset('img/page-title.jpg') }})">
        <div class="container">
        @if(session()->has('DateVerification')) 
                                   <div class="alert alert-danger col-md-5" style="text-align: center;margin-left:30%" id="div_a_cacher" >
                                   {{ session()->get('DateVerification') }}
                                   <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                   </div>
                 @endif
        @if(session()->has('success')) 
                                   <div class="alert alert-success col-md-5" style="text-align: center;margin-left:30%" id="div_a_cacher" >
                                   {{ session()->get('success') }}
                                   <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                   </div>
                                @endif
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>BELGIO CAR</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Réservez votre voiture.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
          
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                             @foreach($voitures as $voiture)
                            <div class="col-lg-6 col-md-6">  
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-4" style="background-image:url({{ asset($voiture->img)}} )"></div><!--asset('img/car/car-4.jpg') -->
                                    <div class="car-list-info without-bar">
                                            <form action="{{ url('Form-reservation/'.$voiture->id) }}" method="GET">
                                           
                                                    <h2> <input type="text" name="nom" hidden value="Aston Martin One-77" /><a href="#">{{$voiture->Model}}</a></h2>
                                                    <h5><input type="text" name="prix" hidden value="399 DH /jour" />{{$voiture->Prix}} DH /jour</h5>
                                                    <p></p>
                                                    <ul class="car-info-list">
                                                        <li><input type="text" name="carburant" hidden value="AC" />{{$voiture->Carburant}}</li>
                                                        <li><input type="text" name="vitesse" hidden value="Diesel" />{{$voiture->BoiteVitesse}}</li>
                                                        <li><input type="text" name="puissance" hidden value="Auto" />{{$voiture->Puissance}}</li>
                                                    </ul>
                                                    <!-- <ul class="car-info-list">  
                                                            <li><input type="text" class="datepicker1" placeholder="Date de récupération" value="Date de récupération" style="border-style: none !important"></li>
                                                          <li> <input type="text" class="datepicker1" placeholder="Date de retour" value="Date de retour" style="border-style: none !important"></li>
                                                      </ul> -->
                                                    <input type="submit" value="Réserver" class="rent-btn">
                                                    <!-- <a href="#" class="rent-btn">Réserver</a> -->
                                                   
                                                 </form>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        

                            <!-- Single Car End -->
                        </div>
                    </div>
                   
                    <!-- Page Pagination Start -->
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination"> {{ $voitures->onEachSide(1)->links() }}
                                <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->
    <!-- <script>
        function myFunction() {
            console.log('timeD')
            // document.getElementById("time" );
            setTimeout('myFunction()', 2000);
        }
       
    
 
    </script> -->
    <script>
    (function(){
     
      var time = 10; /* time in seconds until display */
       setTimeout(function(){document.getElementById("div_a_cacher").style.visibility = "hidden";},time*1000);
})();</script>
   
@endsection
