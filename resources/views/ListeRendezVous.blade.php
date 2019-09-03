
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
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
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
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="{{ route('adminC') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="{{ route('admin') }}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
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
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0" style="max-width: max-content !important;">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
              @if( $services->count()==0) 
                 <div class="col-12">
                  <h3 class="mb-0" style="margin-left: 28px;">Aucun rendez_vous</h3>
                 </div>
                 

              @else
                <div class="col">
                  <h3 class="mb-0" style="margin-left: 28px;">La liste des rendez_vous</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ route('AjoutCategorie') }}" class="btn btn-sm btn-primary">Ajouter</a>
                </div> 

                <div class="col text-right ml-2">
                  <form action="{{ route('searchS') }}" method="post" role="search">
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
                            <th>Identifiant</th>
                            <th class="number">Service</th>
                            <th class="number">Date </th>
                            <th class="number">Heure </th>
                            <th class="actions">Etat</th>
                            <th class="actions">Action</th>
                            <!-- <th style="width: 570px !important;" >Action</th> -->
                  </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->NomService}}</td>
                                <td> {{$service->Date}}</td>
                                <td> {{$service->Heure}}</td>
                                <td>{{$service->etat}}</td>
                                <td >
                               
                               <form action="{{ url('ListeRendezVous/'.$service->id) }}" method="POST" style="display: inline;">
                               <input type="hidden" name="_method" value="PUT">
                                 {{ csrf_field() }} 
                                
                                 <input type="hidden"  name="id" value="{{$service->id}}">
                                
                                 @if ($service->etat=="en cours")  <button type="submit" name="etat"  class="btn btn-success" value="confirmé" data-toggle="tooltip" title="Confirmer la réservation"><i class="mdi mdi-check"></i></button> @endif
                               @if ($service->etat=="confirmé" || $service->etat=="en cours")   
                                <button type="submit" name="etat"  class="btn btn-primary" value="annuler" data-toggle="tooltip" title="Annuler la réservation"><i class="mdi mdi-close"></i></button>
                                 
                              </form> 
                              @endif
                              <form action="{{ url('ListeRendezVous/'.$service->id) }}" method="POST" style="display: inline;">
                              <input type="hidden"  name="id" value="{{$service->id}}">
                              {{ method_field('DELETE') }}  {{ csrf_field() }}
                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sure?')" data-toggle="tooltip" title="Supprimer"><i class="mdi mdi-delete"></i></button>
                               </form>
                           </td>
                        @endforeach
                </tbody>
              </table>@endif
            </div>
          </div>
          <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination"> {{ $services->onEachSide(1)->links() }}
                              
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