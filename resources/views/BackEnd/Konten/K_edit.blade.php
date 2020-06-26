@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Konten</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Edit Konten</a></div>
    </div>
  </div>

  <div class="section-body">
   

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tulis Konten Anda</h4>
          </div>
          <div class="card-body">
            <form action="" method="post" id="form-konten-edit" enctype="multipart/form-data">
              @csrf
              <div class="form-group row mb-4">
                <input type="hidden" class="form-control" name="id" value="{{$konten->id}}">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="judul" value="{{$konten->judul}}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Author</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="author" value="{{Auth::user()->name}}" readonly> 
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="kategori" id="kategori">
                    @foreach ($kategori as $item)
                    <option value="{{$item}}">{{$item}}</option>
                  @endforeach
                
               
                  </select>
                </div>
              </div>
            
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                <div class="col-sm-12 col-md-7">
                  
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" class="form-control" name="image" id="image-upload" />
                 
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konten</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote-simple" name="isi">{{$konten->isi}}</textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status" id="status" data-toggle="select">
                    @foreach ($Status as $item)
                    @if ($item == $konten->Status)
                       <option value="{{$konten->Status}}" selected>{{$konten->Status}}</option>
                       @else
                       <option value="{{$item}}">{{$item}}</option>
                       @endif
                 @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <input type="submit" class="btn btn-primary" value="Ubah Konten" id="btn-konten">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection