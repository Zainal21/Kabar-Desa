@extends('FrontEnd.Schema')
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
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Data UMKM Desa</h4>
          <div class="card-header-action">
          </div>
        </div>
        <div class="card-body p-0 ml-2 mr-2">
          <div class="table-responsive table-invoice">
            <div class="table-responsive">
              <table class="table table-hover" id="tbl_umkm" width="100%">
                <thead>
                  <tr>
                    <th scope="col">NPWP Usaha</th>
                    <th scope="col">Nama UMKM</th>
                    <th scope="col">Pengusaha</th>
                    <th scope="col">Email Pemilik</th>
                    <th scope="col">Modal Dasar</th>
                    <th scope="col">Modal Ditempatkan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                  </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
    </div>
    @foreach ($news as $item)
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
          <a href="{{url('/news/artikel-desa/detail/'.$item->slug)}}" class="ticket-item">
              <div class="ticket-title">
              <h4>{{$item->judul}}</h4>
              </div>
              <div class="ticket-info">
                <div></div>
                <div class="bullet"></div>
                <div class="text-primary">{{$item->created_at->format('Y n D')}}</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
  
</section>
@endsection