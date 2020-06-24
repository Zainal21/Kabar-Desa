@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Kebutuhan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Kebutuhan</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Kebutuhan Penduduk</h4>
    </div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-hover" id="tbl_kebutuhan" width="100%">
              <thead>
                <tr>
                  <th scope="col">nama Kebutuhan</th>
                  <th scope="col">jumlah</th>
                  <th scope="col">nama_kabupaten</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection