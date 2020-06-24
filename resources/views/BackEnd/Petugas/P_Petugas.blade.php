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
      <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#FmodalPetugas">
        <i class="fas fa-plus"></i> Tambah Item
      </button>
    </div>
    <div class="card-body">
         <div class="table-responsive">
          <table class="table table-hover" width="100%" id="tbl_petugas">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
      </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="FmodalPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post" id="FactionPetugas">
         <label for="">Nama</label>
         <input type="text" name="name" id="" class="form-control">
         <label for="">Email</label>
         <input type="email" name="email" id="" class="form-control">
         <label for="">Password</label>
         <input type="password" name="password" id="" class="form-control">
         <label for="">Role</label>
         <select name="role" class="form-control selectric" id="OP_User">
           <option value="Admin" class="form-control">Admin</option>
           <option value="Petugas" class="form-control ">Petugas</option>
           <option value="Masyarakat" class="form-control">Masyarakat</option>
         </select>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" id="btn-petugas" value="Tambah">
        </div>
       </form>
      </div>
      
    </div>
  </div>
</div>
@endsection