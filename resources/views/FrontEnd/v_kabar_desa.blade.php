@extends('FrontEnd.Schema')

@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Kabar Desa</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Home</a></div>
          <div class="breadcrumb-item"><a href="#">Kabar Desa</a></div>
    
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article shadow">
           
            <div class="article-details">
              <div class="article-user-details">
                <div class="user-detail-name">
                  <img alt="image" src="../assets/img/avatar/avatar-2.png">
                  <a href="#">Irwansyah Saputra</a>
                </div>
                <div class="text-job">Admin</div>
              </div>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
@endsection