@extends('FrontEnd.Schema')

@section('content')
    <section class="section">
      <div class="section-header">
          <div class="section-header-back">
          <a href="{{url('/news/kabar-desa')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
          </div>
        <h1>Artikel</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Home</a></div>
          <div class="breadcrumb-item"><a href="#">Artikel</a></div>
    
        </div>
      </div>

      <div class="row">
        
        <div class="col-lg-8">
        
            <div class="card" style="width: 24rem;">
              <img class="card-img-top" src="{{asset('BackEnd/assets/img/news/img01.jpg')}}" alt="Card image cap" width="100%">
              <div class="card-body">
              <h5 class="card-title text-bold">{{$Konten->judul}}</h5>
              <p class="card-text text-bold">{{$Konten->author}}. <span style="float: right"> {{$Konten->created_at->format('Y n D')}}.</span></p>
            </div>
          </div>
      </div>
      </div>
      <div class="row">
       
        <div class="col-lg">
          <article class="article shadow">
            <div class="card" style="width: 24rem;">
  
              <div class="card-body">
              <p class="card-text text-bold">{{strip_tags($Konten->isi)}}. <span style="float: right"> 
            </div>
          </div>
          </div>
  
        </article>
          </div>
    </div>
  </section>
@endsection