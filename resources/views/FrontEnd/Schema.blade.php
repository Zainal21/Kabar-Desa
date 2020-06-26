<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/bootstrap.min.css')}}">
  <!-- <link rel="stylesheet" href="../assets/css/font-awesome.css"> -->
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/datatables.min.css')}}">
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
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
         
          {{-- <h6 class="text-white text-center">Selamat Datang Di Sistem Informasi <strong>Kabar Desa</strong></h5> --}}
        </form>
       
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
              <li class="menu-header">Data</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Data Penduduk</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/en/Data-umkm-desa')}}">Data UMKM Desa</a></li>
                <li><a class="nav-link" href="{{url('/en/Data-penduduk-desa')}}">Data Penduduk</a></li>
                <li><a class="nav-link" href="{{url('/en/Data-Kebutuhan-desa')}}">Data Kebutuhan</a></li>
                <li><a class="nav-link" href="{{url('/en/Data-Pekerjaan-desa')}}">Data Pekerjaan</a></li>
                </ul>
              </li>
               
            
              <li class="nav-item dropdown">
              <a href="{{url('/news/kabar-desa')}}" class="nav-link"><i class="fas fa-th-large"></i> <span>Kabar Desa</span></a>
              </li>
              <li class="nav-item dropdown">
              <a href="{{url('/news/artikel-desa')}}" class="nav-link"><i class="fas fa-columns"></i> <span>Artikel</span></a>
              </li>
              <li class="menu-header">Informasi website</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Utama</span></a>
                <ul class="dropdown-menu">
                <li><a href="{{url('/about/informasi-web-desa')}}">Informasi Utama Website</a></li>
                 
                <li><a href="{{url('/about/hubungi-web-desa')}}">Daftar Aspirasi Masyarakat</a></li>
                </ul>
              </li>
          
              
              
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{url('/auth/login')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-in-alt"></i> Login
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
  <script src="{{asset('BackEnd/assets/js/datatables.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('BackEnd/assets/js/scripts.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  

  <script src="{{asset('BackEnd/assets/js/select2.min.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/page/index.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/front.js')}}"></script>
  
</body>
</html>
