@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Kabupaten</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Kabupaten</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Edit Kabupaten</h4>
    </div>
    <div class="card-body">
      <form action="" method="post" id="FactionProvinsi">
        <input type="hidden" name="id" id="" class="form-control" value="{{$prov->id}}">
        <label for="">Nama Provinsi</label>
        <input type="text" name="nama_provinsi" id="" class="form-control" value="{{$prov->nama_provinsi}}">
       <div class="modal-footer">
       <input type="submit" class="btn btn-primary btn-provinsi" id="{{$prov->id}}"  value="Ubah">
       </div>
      </form>
      </div>
    </div>
</section>

@endsection