@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data UMKM Desa</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">UMKM Desa</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data UMKM Desa</h4>
    </div>
    <div class="card-body">
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
</section>
@endsection