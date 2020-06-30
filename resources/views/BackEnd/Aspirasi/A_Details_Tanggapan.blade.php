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
      <form method="post" class="needs-validation" id="Ftanggapan" action=""  enctype="multipart/form-data">  
        <div class="card-header">
          <h4>Detail Aspirasi Kami</h4>
        </div>
        <div class="card-body">
          <input type="hidden" name="id" class="form-control" id="" value="{{$item->id}}" readonly>
          <input type="hidden" name="slug" class="form-control" id="" value="{{$item->slug}}" readonly>
          {{-- <div class="row">
            <div class="col">
              <label for="">Nama</label>  
              <input type="text" class="form-control" value="{{$item->Nama_penduduk}}"  readonly>

            </div>
            <div class="col">
              <label for="">NIK</label>
             <input type="text" name="" id="" value="{{$item->NIK}}"   class="form-control"readonly>
              
            </div>
          </div>  --}}
          <div class="row mt-2">
            <div class="col">
              <label for="">pengaduan</label>
              <input type="text" name="pengaduan" class="form-control" id="" value="{{$item->pengaduan}}" readonly>
            </div>
            <div class="col">
              <label for="">Tanggapan</label>
            <input type="text" name="Tanggapan" class="form-control" id="" value="{{$item->Tanggapan}}" readonly >
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
     
      <a href="{{url('/home/aspirasi/list')}}" class="btn btn-info " >Kembali</a>
    </form>
    @endforeach

  </div>

</div>
</section>
@endsection