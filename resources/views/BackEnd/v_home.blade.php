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
    <div class="col-md-4">
      <div class="card card-hero">
        <div class="card-header">
          <div class="card-icon">
            <i class="far fa-question-circle"></i>
          </div>
          {{-- <h4>14</h4> --}}
          <div class="card-description"><h4>Berita Terbaru</h4></div>
        </div>
        <div class="card-body p-0">
          <div class="tickets-list">
            <a href="#" class="ticket-item">
              <div class="ticket-title">
                <h4>Usaha Kecil Menengah Sedang dalam Proses Penyesuaian diera new Normal</h4>
              </div>
              <div class="ticket-info">
                <div></div>
                <div class="bullet"></div>
                <div class="text-primary">1 min ago</div>
              </div>
            </a>
         
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
</section>
@endsection