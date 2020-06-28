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
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_pengaduan" width="100%">
            <thead>
              <tr>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          
            <tbody>
              @foreach ($pengaduan as $item)
              <tr>
                <td>{{$item->NIK}}</td>
                <td>{{$item->Nama_penduduk}}</td>
                <td><?= $item->status == 'Terjawab' ? '<button type="button" class="btn btn-success"><span class="badge badge-light"></span>
                  <i class="fas  fa-check-circle"></i>
                </button>' : '<button type="button" class="btn btn-danger"><span class="badge badge-light"></span>
                  <i class="fas  fa-minus-circle"></i>
                </button>' ?></td>
                <td><a href="" class="btn btn-outline-primary btn-sm mr-2" ><i class="fas fa-eye"></i></a><a href="" class="btn btn-outline-danger btn-sm mr-2"  ><i class="fas fa-trash"></i></a><a href="" class="btn btn-outline-info btn-sm mr-2" ><i class="fas fa-comment"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
</section>
@endsection