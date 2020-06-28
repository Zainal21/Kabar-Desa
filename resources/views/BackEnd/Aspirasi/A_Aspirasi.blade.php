@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Aspirasi Masyarakat </h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Aspirasi Masyarakat</a></div>

    </div>
  </div>
  <div class="col-12 col-md-12 col-lg-12">
  <div class="card">
  <form method="post" class="needs-validation" id="FPengaduan" action=""  enctype="multipart/form-data">  
    <div class="card-header">
        <h4>Aspirasi Kami</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="">Nama</label>
              <select name="penduduk_id" id="status" class="form-control">
                <option value="">-Nama Penduduk-</option>
                @foreach ($penduduk as $item)   
                  <option value="{{$item->id}}">{{$item->Nama_penduduk}}</option>
                @endforeach
              </select>
            </div>
            <div class="col">
              <label for="">NIK</label>
              <select name="" id="status" class="form-control">
                <option value="">-NIK Penduduk-</option>
                @foreach ($penduduk as $item)   
                  <option value="{{$item->NIK}}">{{$item->NIK}}</option>
                @endforeach
              </select>
            </div>
          </div> 
          <div class="row mt-2">
            <div class="col">
              <label for="">pengaduan</label>
              <input type="text" name="pengaduan" class="form-control" id="" >
            </div>
            <div class="col">
              <label for=""><label for="">Foto / Lampiran</label></label>
              <input type="file" name="foto" class="form-control" id="" >
            </div>
          </div>
      </div>
      <div class="card-footer text-right">
        <input type="submit" class="btn btn-primary btn-pengaduan" value="Kirim">
    </form>
  </div>

</div>
</section>
@endsection