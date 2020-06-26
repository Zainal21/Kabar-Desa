@extends('FrontEnd.Schema')

@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Artikel</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Home</a></div>
          <div class="breadcrumb-item"><a href="#">Artikel</a></div>
    
        </div>
      </div>
      {{-- <div class="row">
        <div class="col">
          <div class="alert alert-danger" role="alert">
            Data Artikel tidak tersedia
          </div>
        </div>
      </div> --}}
      <div class="row">
        
        
        {{-- @if ($konten == "")
        <div class="row">
            <div class="col">
              <div class="alert alert-danger" role="alert">
                Data Kabar Desa tidak tersedia
              </div>
          </div>
        </div>
        @endif --}}
        @foreach ($konten as $item)
      
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article shadow">
            
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('BackEnd/assets/img/avatar/avatar-2.png')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title text-bold">{{$item->judul}}</h5>
              <p class="card-text text-bold">{{$item->author}}. <span style="float: right"> {{$item->created_at->format('Y n D')}}.</span></p>
              <a href="{{url('/news/artikel-desa/detail/'.$item->slug)}}" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </article>
          
      </div>
      @endforeach
      </div>
    </section>
@endsection