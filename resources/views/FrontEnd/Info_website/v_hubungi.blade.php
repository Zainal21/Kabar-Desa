@extends('FrontEnd.Schema')
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
    <form method="post" class="needs-validation" novalidate="">
      <div class="card-header">
        <h4>Aspirasi Kami</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="form-group col-md-6 col-12">
              <label>Nama</label>
              <input type="text" class="form-control" value="Ujang" required="">
            
            </div>
            <div class="form-group col-md-6 col-12">
              <label>Email</label>
              <input type="text" class="form-control" value="Maman" required="">
            </div>
          </div>
          <div class="form-group col-md-12 col-12">
            <label for="">Aspirasi</label>
            <textarea name="" id="" cols="20" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group col-md-12 col-12">
            <label for="">lampiran</label>
           <input type="file" name="" class="form-control" id="">
          </div>
          <div class="row">
            <div class="form-group col-md-12 col-12">  
          </div>
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>

</div>
</section>
@endsection