@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Aspirasi / Pengaduan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Aspirasi</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Aspirasi</h4>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Tambah</a>
         <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection