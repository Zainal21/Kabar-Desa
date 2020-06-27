@extends('BackEnd/StuctureView')

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Statistik
           
          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">24</div>
              <div class="card-stats-item-label">Kebutuhan</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">12</div>
              <div class="card-stats-item-label">Pekerjaan</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">23</div>
              <div class="card-stats-item-label">UMKM Desa</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Artikel / Konten</h4>
          </div>
          <div class="card-body">
            59
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="balance-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Petugas / User</h4>
          </div>
          <div class="card-body">
            24
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="sales-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Sales</h4>
          </div>
          <div class="card-body">
            4,732
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Data UMKM Desa</h4>
          <div class="card-header-action">
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>NPWP Pemilik</th>
                <th>Nama UMKM</th>
                <th>Email</th>
                <th>Pemilik</th>
                <th>Modal Dasar</th>
                <th>Modal Ditempatkan</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
              <tr>
                <td><a href="#">19.012.829.2-01.331</a></td>
                <td class="font-weight-600">UMKM ZAIN SHOP</td>
                <td><div class="badge badge-warning">Muhamad Zainal Arifin</div></td>
                <td>PenulisDuduk@gmail.com</td>
                <td>24.000/000</td>
                <td>20.000.000</td>
                <td>Sidorejo, Kaliboto, Mojogedang, Karanganyar</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
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
  </div>
  
  
</section>
@endsection