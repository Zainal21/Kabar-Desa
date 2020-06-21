@extends('FrontEnd.Schema')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Informasi Website</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Informasi</a></div>

    </div>
  </div>
  <div class="col-12 col-md-12 col-lg-12">
  <div class="card">
    <form method="post" class="needs-validation" novalidate="">
      <div class="card-header">
        <h4>Tentang Website</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="form-group col-md-6 col-12">
              <label>Judul</label>
              <input type="text" class="form-control" value="Ujang" required="">
            
            </div>
            <div class="form-group col-md-6 col-12">
              <label>Tagline</label>
              <input type="text" class="form-control" value="Maman" required="">
              
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-7 col-12">
            
          </div>
      </div>
      <div class="card-footer text-right">
        
    </form>
  </div>

</div>
</section>
@endsection