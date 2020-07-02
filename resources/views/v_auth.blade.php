<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('BackEnd/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('BackEnd/assets/css/all.css')}}">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="{{asset('BackEnd/assets/css/')}}"> --}}

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('BackEnd/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
             <h3>Kabar Desa</h3>
              {{-- <img src="{{asset('BackEnd/assets/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle"> --}}
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
              <form method="POST" action="{{url('/auth/login')}}" class="needs-validation">
                @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1"  autofocus>
                  
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                       
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" >
                   
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-login" tabindex="4" >Login</button>
                     
                   
                  </div>
                </form>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">Muhamad Zainal Arifin</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
  </div>

  <!-- General JS Scripts -->
    <script src="{{asset('BackEnd/assets/js/jquery.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('BackEnd/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
 
  <script src="{{asset('BackEnd/assets/js/sweetalert2.all.min.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/scripts.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/custom.js')}}"></script>
  <script src="{{asset('BackEnd/assets/js/login.js')}}"></script>
  <!-- Page Specific JS File -->
</body>
</html>
