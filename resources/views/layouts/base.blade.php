<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'PADC CMS') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.edit') }}" role="button">
          <i class="fas fa-user"></i> Profile
        </a>
      </li>
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="nav-link" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" role="button">
                <i class="fas fa-lock"></i> Se déconnecter
            </a>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  sidebar-dark-primary text-white elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/client/images/Padc_logo.png')}}" alt="PADC" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PADC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="{{ route('dashboard') }}" class="d-block"> {{ Auth::user()->name }} </a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Gestion des articles -->
          
          <!-- Affichier le site -->
          <li class="nav-item">
            <a href="{{route('home.index')}}" target="__blank" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Afficher le site
              </p>
            </a>
          </li>
          <!-- Gestion des catégories des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Catégories Projets
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une catégorie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des catégories</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gestion des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-atom"></i>
              <p>
                Projets
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogs.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publier un projet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les projets</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gestion des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-award"></i>
              <p>
                Missions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('zones.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une mission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('zones.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les missions</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gestion des domaines d'expertise -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-archway"></i>
              <p>
                Domaines d'expertise
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('expertises.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une expertise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('expertises.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les expertises</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gestion des domaines d'expertise -->
          {{-- <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Comptes des dons
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('comptes.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un compte</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('comptes.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les comptes</p>
                </a>
              </li>
              
            </ul>
          </li> --}}
          <!-- Qui Sommes nous -->
          <li class="nav-item">
            <a href="{{route('apropos')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Qui sommes nous
              </p>
            </a>
          </li>
          <!-- Contact du ceruki -->
          <li class="nav-item">
            <a href="{{route('details.edit')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Adresse de contact
              </p>
            </a>
          </li>
          
          <!-- Gestion des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-atom"></i>
              <p>
                Faq
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('faq.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un faq</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('faq.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les faq</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <!-- Gestion des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Partenaires
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('partenaires.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un partenaire</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('partenaires.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les partenaires</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gestion des blog -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Rapports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('rapports.create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un rapport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rapports.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les rapports</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- /.footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024<?php $date = date('Y'); echo ($date == '2024') ? '' : '-'.$date ; ?> <a href="#">PADC</a>.</strong>
    Tous drois réservés.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>


  <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
  <!-- AdminLTE App -->


<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
    $('#compose-textarea1').summernote()
  })
</script>
</body>
</html>
