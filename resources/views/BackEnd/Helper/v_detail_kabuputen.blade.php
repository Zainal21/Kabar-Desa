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
      <form action="" method="post" id="FactionKabupaten">
        <input type="hidden" name="id" id="" class="form-control" value="{{$kab->id}}">
        <label for="">Nama Kabupaten</label>
        <input type="text" name="nama_kabupaten" id="" class="form-control" value="{{$kab->nama_kabupaten}}">
        <label for="">Nama Provinsi</label><br>
        <select name="provinsi_id" class="form-control" id="op_kab">
          @foreach ($prov as $item)   
          @if ($kab->provinsi_id == $item->id)
            <option value="{{$kab->provinsi_id}}" selected>{{$item->nama_provinsi}}</option>
            @else
            <option value="{{$item->id}}">{{$item->nama_provinsi}}</option>
            @endif     
          @endforeach
         </select>
       <div class="modal-footer">
       <input type="submit" class="btn btn-primary btn-kabupaten" id="{{$kab->id}}"  value="Ubah">
       </div>
      </form>
      </div>
    </div>
</section>

@endsection