@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Konten</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Konten</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Konten</h4>
    </div>
    <div class="card-body">
    <a href="{{url('/konten/add')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Tambah</a>
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_konten" width="100%">
            <thead>
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">Author</th>
                <th scope="col">Status</th>
                <th scope="col">kategori</th>
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