@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Data UMKM</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">UMKM</a></div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data UMKM</h4>
    <a href="{{url('/home/umkm-desa/add')}}" class="btn btn-outline-primary ml-auto" >
        <i class="fas fa-plus"></i> Tambah data UMKM
      </a>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" width="100%" id="tbl_umkm">
            <thead>
              <tr>
                <th scope="col">NPWP Pengusuha</th>
                <th scope="col">Nama UMKM</th>
                <th scope="col">Email Pemilik</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
      </div>
    </div>
</section>

@endsection