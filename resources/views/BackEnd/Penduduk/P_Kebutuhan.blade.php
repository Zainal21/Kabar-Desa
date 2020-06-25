@extends('BackEnd.StuctureView')
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
      <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#FmodalKebutuhan">
        <i class="fas fa-plus"></i> Tambah Item
      </button>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" id="tbl_kebutuhan" width="100%">
            <thead>
              <tr>
                <th scope="col">nama Kebutuhan</th>
                <th scope="col">jumlah</th>
                <th scope="col">nama_kabupaten</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
           
            </tbody>
          </table>
      </div>
    </div>
</section>
<div class="modal fade" id="FmodalKebutuhan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post" id="FactionKebutuhan">
         <label for="">Nama Kebutuhan</label>
         <input type="text" name="nama_kebutuhan" id="" class="form-control">
         <label for="">Jumlah</label>
         <input type="number" name="jumlah" id="" class="form-control">
         <label for="">Nama Kabupaten</label><br>
         <select name="kabupaten_id" class="form-control">
           @if (!$kabupaten)
           <option value="">-Provinsi Tidak Tersedia-</option>
           @else
           @foreach ($kabupaten as $item)
           <option value="{{$item->id}}">{{$item->nama_kabupaten}}</option>
           @endforeach
           @endif
          </select>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <input type="submit" class="btn btn-primary" id="btn-kebutuhan" value="Tambah">
        </div>
       </form>
      </div>
      
    </div>
  </div>
</div>
@endsection
