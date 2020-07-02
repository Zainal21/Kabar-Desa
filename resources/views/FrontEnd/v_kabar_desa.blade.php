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
  
      
          {{-- @empty($kabardesa)
          <div class="row">
          
          </div>
          @endempty --}}
       <div class="row">
        @forelse ($kabardesa as $item)
        <div class="col-md-3 mx-2">
          <article class="article shadow">
                
                <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="{{\Storage::url($item->gambar)}}" alt="Card image cap" >
                  <div class="card-body">
                  <h5 class="card-title text-bold">{{$item->judul}}</h5>
                    <p class="card-text text-bold">{{$item->author}}. <span style="float: right"> {{$item->created_at->format('Y n D')}}.</span></p>
                 
                  <a href="{{url('/news/artikel-desa/detail/'.$item->slug)}}" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              
          </div>
        @empty
        <div class="col">
          <div class="alert alert-danger" role="alert">
            Data Kabar Desa tidak tersedia
          </div>
        </div>
        @endforelse
       </div>
    </section>
@endsection