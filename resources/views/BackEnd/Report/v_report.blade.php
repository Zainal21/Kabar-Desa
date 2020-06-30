@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Report</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Laporan </a></div>
    </div>
  </div>

  <div class="section-body">
  
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Presentasi Aplikasi</h4>
           <div class="root ml-auto">
            <a href="" class="btn btn-info">Cetak Tanggapan</a>
            <a href="" class="btn btn-success mx-2">Cetak Pengaduan</a>
            <a href="" class="btn btn-danger mx-2">Cetak Kebutuhan</a>
           </div>
          </div>
          <div class="card-body">
            <label for="">Tanggapan</label>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" data-width="10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <label for="">Pengaduan</label>
            <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" data-width="10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <label for="">Kebutuhan</label>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        
           
          </div>
        </div>
       
      </div>
</section>
@endsection