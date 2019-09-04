
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    BELGIO CAR
  </title>
  <!-- Favicon -->
  <link href="{{asset('img/LOGO2.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
      
           <span class="text-dark"> Belgio Car</span>
      </a>
      <!-- User -->
   
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
       
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('adminC') }}">
              <i class="ni ni-single-02 text-yellow"></i>Réservations
            </a>
          </li>
          @if (auth()->id()==1) 
          
          <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
              <i class="ni ni-bullet-list-67 text-red"></i> Voitures
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('CategorieListe') }}">
              <i class="ni ni-bullet-list-67 text-red"></i> Catégories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('ListeRendezVous') }}">
              <i class="ni ni-bullet-list-67 text-red"></i>Rendez_Vous
            </a>
          </li>
          @endif
          <li class="nav-item">
            
            <a class="nav-link" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="ni ni-key-25 text-info"></i>         {{ __('Logout') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
          @if (auth()->id()==1) 
          <li class="nav-item">
           
            <!-- @if (Route::has('register'))  @endif -->
                               
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="ni ni-key-25 text-info"></i>{{ __('Register') }}</a>
                              
                          
          </li>
          @endif
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
       
        <!-- Navigation -->
      
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <!-- Header -->
    
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Sales value</h2>
                </div>
                <div class="col">
                  
                   
                  </ul>
                </div>
              </div>
            </div>
            
          </div>
        </div>
       
      </div>
      <div class="row mt-5" >
        <div class="col-xl-8 mb-5 mb-xl-0" style="max-width: max-content !important;">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
              @if( $voitures->count()==0) 
                 <div class="col-12">
                  <h3 class="mb-0" style="margin-left: 28px;">Aucune voiture</h3>
                 </div>
                 <div class="col text-right">
                  <a href="{{ route('AjoutVoiture') }}" class="btn btn-sm btn-primary">Ajouter</a>
                </div> 

              @else
                <div class="col">
                  <h3 class="mb-0" style="margin-left: 28px;">La liste des voitures</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ route('AjoutVoiture') }}" class="btn btn-sm btn-primary">Ajouter</a>
                </div> 

                <div class="col text-right ml-2">
                  <form action="{{ route('search') }}" method="post" role="search">
                    {{ csrf_field() }}
           
                    <div class="input-group">
                      <input type="search" class="form-control"  name="searchvalue" aria-label="Text input with segmented dropdown button">
                      <div class="input-group-append">
                        <button  type="submit" class="btn btn-secondary">Chercher<i class="fa fa-search text-dark" aria-hidden="true"></i></button>
                        
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="myTable">
                <thead class="thead-light">
                  <tr>
                            <th>Matricule</th>
                            <th class="number">Model</th>
                            <th class="actions">Catégorie</th>
                            <th class="actions">Carburant</th>
                            <th class="actions">Boite à vitesse</th>
                            <th class="actions">Puissance</th>
                            <th class="actions">Prix</th>
                            <th class="actions">Action</th>
                            <!-- <th style="width: 570px !important;" >Action</th> -->
                  </tr>
                </thead>
                <tbody>
                @foreach($voitures as $voiture)
                            <tr>
                                <td>{{$voiture->id}}</td>
                                <td>{{$voiture->Model}}</td>
                                <td>{{$voiture->Categorie->NomCategorie}}</td>
                                <td>{{$voiture->Carburant}}</td>
                                <td>{{$voiture->BoiteVitesse}}</td>
                                <td>{{$voiture->Puissance}}</td>
                                <td>{{$voiture->Prix}}</td>
                                <td >
                               
                                    <form action="{{ url('editVoiture/'.$voiture->id) }}" method="POST" style="display: inline;">
                                      <input type="hidden" name="_method" value="PUT">
                                      {{ csrf_field() }} 
                                      <input type="hidden"  name="id" value="{{$voiture->id}}">
                                      
                                      <button type="submit" name="etat"  class="btn btn-success" value="confirme" data-toggle="tooltip" title="Modifier"><i class="mdi mdi-pencil"></i></button>
                                   </form> 
                                   <form action="{{ url('deleteVoiture/'.$voiture->id) }}" method="POST" style="display: inline;">
                                   <input type="hidden"  name="id" value="{{$voiture->id}}">
                                   {{ method_field('DELETE') }}
                                   {{ csrf_field() }}
                                      <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sure?')" data-toggle="tooltip" title="Supprimer" ><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </td>
                               
                            </tr>
                        @endforeach
                </tbody>
              </table>@endif
            </div>
          </div>
          <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination"> {{ $voitures->onEachSide(1)->links() }}
                              
                            </ul>
                        </nav>
                    </div>
        </div>
     
      </div>
      </div>
  </div>
     
  
  <!--   Core   -->
  <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
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
 <script>
 $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>

</html>