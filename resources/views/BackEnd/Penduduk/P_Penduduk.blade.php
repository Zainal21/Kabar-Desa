@extends('BackEnd.StuctureView')
@section('content')
<section class="section">


  <div class="section-header">
    <h1>Data Penduduk</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Penduduk</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Penduduk</h4>
    <a href="{{url('/home/penduduk/add')}}" class="btn btn-outline-primary ml-auto">
        <i class="fas fa-plus"></i> Tambah Item
      </a>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" width="100%" id="tbl_penduduk">
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
                <th scope="col">Action</th>
              </tr>
            </thead>
        
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection