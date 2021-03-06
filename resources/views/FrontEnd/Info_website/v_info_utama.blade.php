@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
    <a href="{{url('/')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tentang Website</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Tentang Web</a></div>
    </div>
  </div>

  <div class="section-body">
   

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Infornasi Web</h4>
          </div>
          <div class="card-body">
            <form action="" method="post" id="form-about" enctype="multipart/form-data">
              @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nama</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="nama" value="{{$about->nama}}" readonly>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tagline</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="tagline" value="{{$about->tagline}}" readonly> 
              </div>
            </div>
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">alamat</label>
              <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="alamat" value="{{$about->alamat}}"readonly> 
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
              <div class="col-sm-12 col-md-7">
                <input type="email" class="form-control" name="email" value="{{$about->email}}"readonly> 
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">telp</label>
              <div class="col-sm-12 col-md-7">
                <input type="number" class="form-control" name="telp" value="{{$about->telp}}"readonly> 
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">kode Google UC</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="kode" value="{{$about->kode}}"readonly> 
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">deskripsi</label>
                <div class="col-sm-12 col-md-7">
                <textarea class="summernote-simple" name="deskripsi" readonly>{{$about->deskripsi }}</textarea>
                </div>
              </div>
            
          
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                {{-- <div class="col-sm-12 col-md-7">
                  <input type="submit" class="btn btn-primary" value="Simpan" id="btn-tentang">
                </div> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection