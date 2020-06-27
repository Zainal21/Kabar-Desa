@extends('BackEnd.StuctureView')

@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Data UMKM</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item">Data UMKM</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row mt-sm-4">
      <div class="col-12">
        <div class="card">
          <form method="post" class="needs-validation " id="FactionUMKM" novalidate="">
            <div class="card-header">
              <h4>Tambah Data UMKM</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <input type="hidden" class="form-control" value="" required="" name="id">
                  <label>NIK</label>
                  <select name="penduduk_id" id="nik" class="form-control">
                    <option value="" class="form-control" id="">-NIK-</option>
                    @foreach ($nik as $item)
                      <option value="{{$item->id}}" class="form-control" id="">{{$item->NIK}}</option>
                    @endforeach
                   
                  </select>
                  <div class="invalid-feedback">
                    Please fill in the  NPWP
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label>Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="gender" class="form-control">
                      <option value="Laki-Laki" class="form-control" id="">Laki-Laki</option>
                      <option value="Perempuan" class="form-control" id="">Perempuan</option>
                    </select>
                  <div class="invalid-feedback">
                    Please fill in the email
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>NPWP UMKM</label>
                    <input type="hidden" class="form-control" value="" required="" name="id">
                  <input type="number" class="form-control" value="" required="" name="npwb_usaha">
                    <div class="invalid-feedback">
                      Please fill in the  NPWP
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Nama UMKM</label>
                    <input type="text" class="form-control" value="" required="" name="nama_umkm">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Email Pemilik</label>
                    <input type="email" class="form-control" name="email_pemilik" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the password
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Pemilik</label>
                    <input type="text" class="form-control" name="pemilik" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the Pemilik
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Modal Dasar</label>
                    <input type="text" class="form-control" name="modal_dasar" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the Modal Dasar
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Modal Ditempatkan</label>
                    <input type="text" class="form-control" name="modal_ditampatkan" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the 
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Alamat</label>
                  <textarea class="form-control summernote-simple" name="alamat"></textarea>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
            <input type="submit" class="btn btn-primary btn-umkm" id="" value="Tambah">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection