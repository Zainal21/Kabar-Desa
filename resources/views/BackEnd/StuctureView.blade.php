<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../assets/css/font-awesome.css"> -->
  <!-- CSS Libraries -->
  {{-- <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css"> --}}

  <!-- Template CSS -->
    <!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('BackEnd/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('BackEnd/assets/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
         
          
        </form>
        <ul class="navbar-nav navbar-right">   
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="{{asset('BackEnd/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Kabar Desa</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">KabDes</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Master Data</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Penduduk</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/home/petugas')}}">Data Petugas</a></li>
                <li><a class="nav-link" href="{{url('/home/provinsi')}}">Data Provinsi</a></li>
                <li><a class="nav-link" href="{{url('/home/kabupaten')}}">Data Kabupaten</a></li>
                <li><a class="nav-link" href="{{url('/home/kecamatan')}}">Data Kecamatan</a></li>
                <li><a class="nav-link" href="{{url('/home/penduduk')}}">Data Penduduk</a></li>
                <li><a class="nav-link" href="{{url('/home/kebutuhan')}}">Data Kebutuhan</a></li>
                  <li><a class="nav-link" href="{{url('/home/pekerjaan')}}">Data Pekerjaan</a></li>
                </ul>
              </li>
              <li class="menu-header">Layanan Pengaduan</li>
              <li class="nav-item">
              <a href="{{url('/aspirasi/list')}}"><i class="fas fa-exclamation"></i>Daftar Aspirasi Masyarakat</a>
              </li>
              <li class="menu-header">Konten</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-th-large"></i> <span>Artikel / Konten</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">Data Penduduk</a></li>
                  <li><a class="nav-link" href="">Kebutuhan</a></li>
                  <li><a class="nav-link" href="">Pekerjaan</a></li>
                </ul>
              </li>
              <li class="menu-header">Pengaturan Website</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Manage</span></a>
                <ul class="dropdown-menu">
                  <li><a href="">Informasi Utama Website</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-exclamation"></i> <span>Menu Managemen</span></a>
              </li>
            
              
              
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{url('/auth/logout')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-logout"></i> Logout
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
     @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">Muhamad Zainal Arifin</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('BackEnd/assets/js/stisla.js')}}"></script>

  <script src="{{asset('BackEnd/assets/js/sweetalert2.all.min.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('BackEnd/assets/js/scripts.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('BackEnd/assets/js/page/index.js')}}"></script>
</body>
</html>
