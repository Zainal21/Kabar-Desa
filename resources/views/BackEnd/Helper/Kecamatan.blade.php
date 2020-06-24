@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Kecamatan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Kecamatan</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Kecamatan</h4>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" width="100%" id="tbl_kecamatan">
            <thead>
              <tr>
                <th scope="col">Nama Kecamatan</th>
                <th scope="col">Nama Kabupaten</th>
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