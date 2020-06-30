@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Detail Aspirasi Masyarakat </h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Aspirasi Masyarakat</a></div>

    </div>
  </div>
  <div class="col-12 col-md-12 col-lg-12">
  <div class="card">
    @foreach ($items as $item)
        
  <form method="post" class="needs-validation" id="FPengaduan" action=""  enctype="multipart/form-data">  
    <div class="card-header">
        <h4>Detail Aspirasi Kami</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="">Nama</label>
              <select name="penduduk_id" id="status" class="form-control">
              <option value="{{$item->Nama_penduduk}}" selected>{{$item->Nama_penduduk}}</option>

              </select>
            </div>
            <div class="col">
              <label for="">NIK</label>
              <select name="" id="status" class="form-control">
                <option value="{{$item->NIK}}">{{$item->NIK}}</option>
              
              </select>
            </div>
          </div> 
          <div class="row mt-2">
            <div class="col">
              <label for="">pengaduan</label>
              <input type="text" name="pengaduan" class="form-control" id="" value="{{$item->pengaduan}}">
            </div>
            <div class="col">
              <label for=""><label for="">Foto / Lampiran</label></label>
              <div class="card">
                <div class="card-body shadow">
                <img src="{{\Storage::url($item->foto)}}" alt="" width="200px" height="200px">
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="card-footer text-right">
      <a href="{{url('/home/aspirasi/list')}}" class="btn btn-info">Kembali</a>
    </form>
    @endforeach

  </div>

</div>
</section>
@endsection