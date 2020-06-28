@extends('BackEnd.StuctureView')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Petugas</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Home</a></div>
      <div class="breadcrumb-item"><a href="#">Petugas</a></div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Data Petugas</h4>
    </div>
    <div class="card-body">
      <form action="" method="post" id="FactionPetugas">
        <label for="">Nama</label>
      <input type="hidden" name="id" id=""  value="{{$user->id}}" class="form-control">
      <input type="text" name="name" id="" value="{{$user->name}}" class="form-control">
        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{$user->email}}" class="form-control">
        <label for="">Role</label>
        <select name="role" class="form-control selectric" id="OP_User" >
          @if ($user->role)
          <option value="{{$user->role}}" class="form-control" selected>{{$user->role}}</option>
          @endif
          <option value="Admin" class="form-control">Admin</option>
          <option value="Petugas" class="form-control ">Petugas</option>
          <option value="Masyarakat" class="form-control">Masyarakat</option>
        </select>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <input type="submit" class="btn btn-primary btn-petugas" id="{{$user->id}}" value="Ubah">
       </div>
      </form>
    </div>
</section>

@endsection