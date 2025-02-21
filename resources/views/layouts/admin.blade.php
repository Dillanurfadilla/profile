<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Profile kependudukan">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Profile Kependudukan') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!--tabel-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- Icon -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

    <!-- Favicon -->
    <link href="{{ asset('img/logo_disdukcapil.png') }}" rel="icon" type="image/png">
   
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
    <div class="sidebar-brand-text mx-3">PROFILE KEPENDUDUKAN</div>
</a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Kecamatan -->
        <li class="nav-item {{ Nav::isRoute('kecamatan.index') }}">
            <a class="nav-link" href="{{ route('kecamatan.index') }}">
                <ion-icon name="business-sharp" class="me-3"></ion-icon>
                <span>{{ __('Kecamatan') }}</span>
            </a>
        </li>

        <!-- Nav Item - Desa -->
        <li class="nav-item {{ Nav::isRoute('desaa.index') }}">
            <a class="nav-link" href="{{ route('desaa.index') }}">
                <i class="fas fa-building" aria-hidden="true"></i>
                <span>{{ __('Desa') }}</span>
            </a>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider">


         <!-- Nav Item - KK -->
         <li class="nav-item {{ Nav::isRoute('kk.index') }}">
                <a class="nav-link" href="{{ route('kk.index') }}">
                <ion-icon name="id-card-sharp"></ion-icon>
                    <span>{{ __('Kepemilikan KK') }}</span>
                </a>
            </li>

            <!-- Nav Item - Agama -->
            <li class="nav-item {{ Nav::isRoute('agama.index') }}">
                <a class="nav-link" href="{{ route('agama.index') }}">
                <ion-icon name="reader"></ion-icon>       
                    <span>{{ __('Agama') }}</span>
                </a>
            </li>

            <!-- Nav Item - Umur -->
            <li class="nav-item {{ Nav::isRoute('umur.index') }}">
                <a class="nav-link" href="{{ route('umur.index') }}">
                    <ion-icon name="calendar-sharp"></ion-icon>
                    <span>{{ __('Umur') }}</span>
                </a>
            </li>

            <!-- Nav Item - Pendidikan -->
            <li class="nav-item {{ Nav::isRoute('pendidikan.index') }}">
                <a class="nav-link" href="{{ route('pendidikan.index') }}">
                    <ion-icon name="school-sharp"></ion-icon>
                    <span>{{ __('Pendidikan') }}</span>
                </a>
            </li>

            <!-- Nav Item - Pekerjaan -->
            <li class="nav-item {{ Nav::isRoute('pekerjaan.index') }}">
                <a class="nav-link" href="{{ route('pekerjaan.index') }}">
                    <ion-icon name="briefcase-sharp"></ion-icon>
                    <span>{{ __('Pekerjaan') }}</span>
                </a>
            </li>

            <!-- Nav Item - Status Kawin -->
            <li class="nav-item {{ Nav::isRoute('statuskawin.index') }}">
                <a class="nav-link" href="{{ route('statuskawin.index') }}">
                    <ion-icon name="heart-sharp"></ion-icon>
                    <span>{{ __('Status Kawin') }}</span>
                </a>
            </li>

            <!-- Nav Item - Golongan Darah -->
            <li class="nav-item {{ Nav::isRoute('goldarah.index') }}">
                <a class="nav-link" href="{{ route('goldarah.index') }}">
                    <ion-icon name="medkit-sharp"></ion-icon>
                    <span>{{ __('Golongan Darah') }}</span>
                </a>
            </li>

            <!-- Nav Item - Disabilitas -->
            <li class="nav-item {{ Nav::isRoute('disabilitas.index') }}">
                <a class="nav-link" href="{{ route('disabilitas.index') }}">
                <ion-icon name="shield"></ion-icon>            
               <span>{{ __('Disabilitas') }}</span>
                </a>
            </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Nav Item - Arship -->



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    
                <li class="nav-item">
          <a class="nav-link dark-mode-icon" href="javascript:;">
            <div class="mode-icon">
              <ion-icon name="moon-outline"></ion-icon>
            </div>
          </a>
        </li>
        
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

       
    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const darkModeToggle = document.querySelector(".dark-mode-icon");
    const body = document.body;

    // Cek apakah mode gelap aktif sebelumnya
    if (localStorage.getItem("darkMode") === "enabled") {
      body.classList.add("dark-mode");
    }

    darkModeToggle.addEventListener("click", function () {
      body.classList.toggle("dark-mode");

      // Simpan preferensi pengguna di localStorage
      if (body.classList.contains("dark-mode")) {
        localStorage.setItem("darkMode", "enabled");
      } else {
        localStorage.setItem("darkMode", "disabled");
      }
    });
  });
</script>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {$('#myTable').DataTable();} );</script>

</body>
</html>
