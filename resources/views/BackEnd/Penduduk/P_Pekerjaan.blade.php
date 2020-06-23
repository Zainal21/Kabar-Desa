@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Pekerjaan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Pekerjaan</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Pekerjaan Penduduk</h4>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_pekerjaan" width="100%">
            <thead>
              <tr>
                <th scope="col">Nama Pekerjaan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>Mark</td>
                <td>Otto</td>
              </tr>
             
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection