@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Penduduk Desa</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Penduduk Desa</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Penduduk Desa</h4>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_penduduk2" width="100%">
            <thead>
              <tr>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">tanggal Lahir</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">jenis Kelamin</th>
                <th scope="col">status Kawin</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection