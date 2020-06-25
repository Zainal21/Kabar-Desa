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
      <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#FmodalPekerjaan">
        <i class="fas fa-plus"></i> Tambah Item
      </button>
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
            
             
            </tbody>
          </table>
      </div>
    </div>
</section>
<div class="modal fade" id="FmodalPekerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post" id="FactionPekerjaan">
     
          <label for="">Nama pekerjaan</label>
          <input type="text" name="nama_pekerjaan" id="" class="form-control">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <input type="submit" class="btn btn-primary" id="btn-pekerjaan" value="Tambah">
        </div>
       </form>
      </div>
      
    </div>
  </div>
</div>
@endsection