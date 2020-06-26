@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tambah Penduduk</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Penduduk</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Tambah Penduduk</h4>
    </div>
    <div class="card-body">
      <form action="" method="post" id="FactionProvinsi">
        <input type="hidden" name="id" id="" class="form-control" value="">
        <label for="">NIK</label>
        <input type="text" name="nama_provinsi" id="" class="form-control" value="">
        <label for="">Nama Penduduk</label>
        <input type="text" name="nama_provinsi" id="" class="form-control" value="">
         <label for="">Nama Penduduk</label>
        <input type="date" name="nama_provinsi" id="" class="form-control" value=""> 
        <label for="">Pekerjaan</label>
        <select name="" id="job" class="form-control">
          <option value="" class="form-control" id=""></option>
        </select>
        <label for="">Jenis Kelamin</label>
        <select name="" id="gender" class="form-control">
          <option value="Laki-Laki" class="form-control" id="">Laki-Laki</option>
          <option value="Perempuan" class="form-control" id="">Perempuan</option>
        </select>
        {{-- <label for="">Status Kawin</label>
        <select name="" id="stts" class="form-control">
          <option value="Laki-Laki" class="form-control" id="">Belum Kawin</option>
          <option value="Kawin" class="form-control" id="">Kawin</option>
          <option value="Janda" class="form-control" id="">Janda</option>
          <option value="Duda" class="form-control" id="">Duda</option>
        </select>
        <label for="">Agama</label>
        <select name="" id="agama" class="form-control">
          <option value="" class="form-control" id="">Islam</option>
          <option value="" class="form-control" id="">Kristen</option>
          <option value="" class="form-control" id="">Konghucu</option>
          <option value="" class="form-control" id="">Budha</option>
        </select>
         <label for="">Alamat</label>
          <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
        <label for="">E-mail</label>
        <input type="email" name="nama_provinsi" id="" class="form-control" value="">
        <label for="">Passowrod</label>
        <input type="password" name="nama_provinsi" id="" class="form-control" value="">
       <div class="modal-footer">
       <input type="submit" class="btn btn-primary btn-penduduk" id=""  value="Ubah">
       </div> --}}
      </form>
      </div>
    </div>
</section>

@endsection