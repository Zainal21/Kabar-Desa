@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Aspirasi</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Aspirasi</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Daftar Aspirasi / Pengaduan</h4>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_aspr" width="100%">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Aspirasi</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
          
            <tbody>
              @foreach ($pengaduan as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->Nama_penduduk}}</td>
                <td>{{$item->pengaduan}}</td>
                <td><?= $item->status == 'Terjawab' ? '<button type="button" class="btn btn-success"><span class="badge badge-light"></span>
                  <i class="fas  fa-check-circle"></i>
                </button>' : '<button type="button" class="btn btn-danger"><span class="badge badge-light"></span>
                  <i class="fas  fa-minus-circle"></i>
                </button>' ?></td>
                <td>
                  
              
                
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection