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
            <div class="card-stats-item-count">{{$kebutuhan}}</div>
              <div class="card-stats-item-label">Kebutuhan</div>
            </div>
            <div class="card-stats-item">
            <div class="card-stats-item-count">{{$pekerjaan}}</div>
              <div class="card-stats-item-label">Pekerjaan</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{$umkm}}</div>
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
          {{$artikel}}
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
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>User</h4>
          </div>
          <div class="card-body">
            {{$user}}
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
          <i class="fas fa-book"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Aspirasi Masyarakat Terjawab</h4>
          </div>
          <div class="card-body">
            {{$aspirasi}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="card profile-widget">
        <div class="profile-widget-header">
        <img alt="image" src="{{asset('BackEnd/assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
        </div>
        <div class="profile-widget-description">
        <div class="profile-widget-name">{{Auth::user()->name}}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>{{Auth::user()->role}}</div></div>
        {{Auth::user()->deskripsi}}
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card profile-widget bg-primary">
        <div class="card-body text-white">
        <h6>Selamat Datang, <strong> {{Auth::user()->name}}</strong></h6>
        <h5 style="font-weight: 700" class="my-4">Selamat Datang Di Aplikasi Kabar Desa</h5>
        <p class="text-white" style="font-weight: 700">-- Sistem Pengaduan Masyarakat | Kabar Desa</p>
        </div>
      </div>
    </div>
  </div>
  
  
</section>
@endsection