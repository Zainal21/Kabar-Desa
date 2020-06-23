@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Petugas</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Petugas</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Petugas</h4>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" width="100%" id="tbl_petugas">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
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