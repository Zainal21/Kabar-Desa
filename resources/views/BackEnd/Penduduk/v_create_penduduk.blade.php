@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{url('/home/penduduk')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
    <div class="row">
      <div class="col-6">
          <div class="card-body">
            <form action="" method="post" id="FactionPenduduk">
              <input type="hidden" name="id" id="" class="form-control" value="">
              <label for="">NIK</label>
              <input type="text" name="NIK" id="" class="form-control" value="" minlength="16" maxlength="16">
              <label for="">Nama Penduduk</label>
              <input type="text" name="Nama_penduduk" id="" class="form-control" value="">
               <label for="">Tanggal Lahir</label>
               <input type="date" name="tanggal_lahir" id="" class="form-control" value=""> 
               <label for="">Pekerjaan</label>
              <select name="pekerjaan_id" id="job" class="form-control">
                @foreach ($pekerjaan as $item)
              <option value="{{$item->id}}" class="form-control" id="">{{$item->nama_pekerjaan}}</option>
                @endforeach
              </select>
              <label for="">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="gender" class="form-control">
                <option value="Laki-Laki" class="form-control" id="">Laki-Laki</option>
                <option value="Perempuan" class="form-control" id="">Perempuan</option>
              </select>
              <label for="">Status Kawin</label>
              <select name="Status_kawin" id="stts" class="form-control">
                <option value="Belum Kawin" class="form-control" id="">Belum Kawin</option>
                <option value="Kawin" class="form-control" id="">Kawin</option>
                <option value="Janda" class="form-control" id="">Janda</option>
                <option value="Duda" class="form-control" id="">Duda</option>
              </select>
            </div>
            
          </div>
          <div class="col-6">
            <input type="hidden" name="" id="" class="form-control" value="">
            <label for="">Agama</label>
            <select name="agama" id="agama" class="form-control">
              <option value="Islam" class="form-control" id="">Islam</option>
              <option value="Kristen" class="form-control" id="">Kristen</option>
              <option value="Konghucu" class="form-control" id="">Konghucu</option>
              <option value="Budha" class="form-control" id="">Budha</option>
            </select>
             <label for="">Alamat</label>
              <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
            <label for="">E-mail</label>
            <input type="email" name="email" id="" class="form-control" value="">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" value="">
            <input type="hidden" name="role" id="" class="form-control" value="Masyarakat">
           <div class="modal-footer">
           <input type="submit" class="btn btn-primary btn-penduduk" id=""  value="Simpan">
           </div>
          </div>
        </form>
    </div>
    </div>
</section>

@endsection