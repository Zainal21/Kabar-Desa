@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>
  <div class="section-body">
  <h2 class="section-title">Hi, {{Auth::user()->name}}!</h2>
    <p class="section-lead">
     Ubah Informasi Anda di halaman ini.
    </p>

    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
          <img alt="image" src="{{asset('BackEnd/assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
          </div>
          <div class="profile-widget-description">
          <div class="profile-widget-name">{{Auth::user()->name}}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>{{Auth::user()->role}}</div></div>
          {{Auth::user()->deskripsi}}
          </div>
          <div class="card-footer text-center"> 
            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-github mr-1">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
          <form method="post" class="needs-validation " id="FactionUser" novalidate="">
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>nama</label>
                    <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required="" name="id">
                  <input type="text" class="form-control" value="{{Auth::user()->name}}" required="" name="name">
                    <div class="invalid-feedback">
                      Please fill in the  name
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>email</label>
                    <input type="email" class="form-control" value="{{Auth::user()->email}}" required="" name="email">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the password
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Bio</label>
                  <textarea class="form-control summernote-simple" name="deskripsi">{{Auth::user()->deskripsi}}</textarea>
                  </div>
                </div>
               
            </div>
            <div class="card-footer text-right">
            <input  type="submit" class="btn btn-primary btn-user-update" id="{{Auth::user()->id}}" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection