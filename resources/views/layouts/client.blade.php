<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $viewData['title'] }}</title>

  <link rel="stylesheet" href="{{ asset('assets/client/styles/style.css') }}">
  <script src="https://kit.fontawesome.com/d32b20ca1a.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body class="hold-transition sidebar-mini layout-fixed" >

    <!-- Back to top button -->
  <div class="back-to-top"></div>
  @php 
  
  use App\Models\Detail; 
  use App\Models\Expertise; 

  $details = Detail::latest()->get();

  $expertises = Expertise::latest()->get();


  foreach($details as $detail):
    $email = $detail->email;
    $telephone = $detail->telephone;
    $adresse = $detail->adresse;
    $title1 = $detail->title1;
    $img1 = $detail->img1;
    $title2 = $detail->title2;
    $img2 = $detail->img2;
    $title3 = $detail->title3;
    $img3 = $detail->img3;
    $facebook = $detail->facebook;
    $twitter = $detail->twitter;
    $linkedin = $detail->linkedin;
    $youtube = $detail->youtube;
  endforeach
   
  @endphp
  
  <header>
    <div class="top-bar bg-info text-yellow-50">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-white"></span> <a class="fg-white" href="mailto:{{ $email}}">{{ $email}}</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-white"></span> <a class="fg-white" href="tel:{{ $telephone}}">{{ $telephone}}</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button ">
              <a href="{{ $facebook }}" target="_blank"><span class="mai-logo-facebook-f fg-white"></span></a>
              <a href="{{ $twitter }}" target="_blank"><span class="mai-logo-twitter fg-white"></span></a>
              <a href="{{ $youtube }}" target="_blank"><span class="mai-logo-youtube fg-white"></span></a>
              <a href="{{ $linkedin }}" target="_blank"><span class="mai-logo-linkedin fg-white"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

  </header>

  <!-- barre de navigation start-->
  <div class="navbar_all">
    <nav class="navbar navbar-expand-sm navbar-dark bg-white fixed-top">
        <div class="container-fluid">
            <div class="main-menu_logo">
                <a class="navbar-brand" href="Home page.html">
                    <img class="mx-2" width="150em" src="{{ asset('assets/client/images/Padc_logo.png')}}" alt="logo de l'organisation">
                </a>
            </div>
            <div class="menu_bars">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <div class=" all_menu">

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('apropos.index') }}">A propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.all') }}">Nos projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <div class="rapports_active">
                            <li class="nav-item">
                                <a class="nav-link" href="rapports.html">
                                    <p>Nos Rapports</p>
                                </a>
                            </li>
                        </div>
                    </ul>
                    <!-- <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form> -->
                    <div class="plus_info-all">
                        <div class="plus_info">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:{{ $email}}">{{ $email}}</a>
                            <p>Pour plus d'info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  

  <!-- true footer start -->

  <div class="container7">
    <div class="container">
        <div class="row">
            <div class="footer_all">
                <div class="col-sm-4">
                    <img width="150em" height="150em" src="{{ asset('assets/client/images/Padc_logo.png')}}" alt="logo de l'organisation">
                    <div class="footer_social">
                        <!-- <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a> -->
                        <a href="{{ $twitter }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="{{ $facebook }}" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="{{ $linkedin }}" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="{{ $youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main_text_footer">
                        <h4>
                            Contact
                        </h4>
                        <div class="main_text_footer_p">
                            <p><a href="mailto:{{ $email}}">{{ $email }}</a></p>
                            <a href="tel:{{ $telephone }}">{{ $telephone }}</a>
                            <p>{{ $adresse }}.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main_text_footer">
                        <h4>
                            Nos domaines d'intervention
                        </h4>
                        <div class="main_text_footer_p">
                          @foreach ( $expertises as $expertise )
                            <p><a href="#"> {{ $expertise->title }} </a></p>
                          @endforeach
                          

                        </div>
                        <div class="plus_info_footer">
                            <div class="plus_info">
                                <p> <i class="fas fa-envelope"></i> <a href="mailto:{{ $email}}">{{ $email }}</a></p>
                                <p>Pour plus d'info</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container8">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="footer_all_copyright">
                    <hr>
                    <p><span>&copy; 2024 PADC RDCongo, Tous droit reservés.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
