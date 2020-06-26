

$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function saveImg(url, Fdata,to)
{
  $.ajax({
    url: url,
    method:"POST",
    data:Fdata,
    dataType:"JSON",
    processData:false,
    contentType:false,
    success:function(data){ 
        if(data.error){
          Swal({
            title:'Kesalahan Input Data',
            text:data.error,
            type:'error'
          })
        }else{
          Swal({
            title:'Berhasil',
            text:data.success,
            type:'success'
          }).then(function(){
            window.location.href =to;
          })
        }
      }
  })

}

function FUpdateData(url,data,to){
  $.ajax({
    url:url,
    method:"POST",
    data:data,
    dataType:"JSON",
    success:function(data){
      if(data.error){
        Swal({
          title:'Kesalahan Input Data',
          text:data.error,
          type:'error'
        })
      }else{
        Swal({
          title:'Berhasil!',
          text:data.success,
          type:'success'
        }).then(function(){
          window.location.href =to;
        })
      }
    
    }

  })
}

function SaveData(url,data,to)
{
  $.ajax({
    url:url,
    data:data,
    method:"POST",
    success:function(data){
      if(data.error){
        Swal({
          title:'Kesalahan Input Data',
          text:data.error,
          type:'error'
        })
      }else{
        Swal({
          title:'Berhasil!',
          text:data.success,
          type:'success'
        }).then(function(){
          window.location.href =to;
        })
      }
    }
  })
}

function deleteData(url,to)
{
    Swal({
      title:'Apakah Anda Yakin?',
      text:'Data ini akan dihapus',
      type:'warning',
      showCancelButton: true,
      confirmButtonColor: '#308',
      cancelButtonColor:'$d33',
      confirmButtonText:'hapus Data'
    }).then((result)=>{
      if(result.value){
       
        $.ajax({
          url:url,
          method:"GET",
          success:function(data){
            Swal({
              title:'Berhasil',
              text:data.success,
              type:'success'
            }).then(function(){
              window.location.href =to;
            })
          }
        })
      }
  })
}


// action CRUD
// konten
  $('#form-konten').on('submit', function(e){
    e.preventDefault();
    
    if($('#btn-konten').val() == "Buah Konten"){
      var Fdata = new FormData(this);
      saveImg('/konten/add',Fdata,"/konten/list")
    }
  });
  $('#form-konten-edit').on('submit', function(e){
    e.preventDefault();
    
    if($('#btn-konten').val() == "Ubah Konten"){
      var Fdata = new FormData(this);
      var id = $(this).attr('id')
      saveImg('/konten/update/'+ id,Fdata,"/konten/list")
    }
  });


 $(document).on('click','.btn-hapus-konten', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/konten/delete/" + id;
    deleteData(url, "/konten/list")
  })




  // about
  $('#form-about').on('submit', function(e){
    e.preventDefault();
     if($('#btn-tentang').val() == "Simpan"){
      FUpdateData('/home/tentang/update/1',$(this).serialize(),"/home/about")
     }
  });

  // user

  $('#FactionPetugas').on('submit', function(e){
    e.preventDefault();
    if($('#btn-petugas').val() == "Tambah"){
      SaveData("/home/petugas/add",$(this).serialize(),"/home/petugas")
    }
  })


  $(document).on('click','.btn-user-delete', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/petugas/delete/" + id;
    deleteData(url, "/home/petugas")
  })


// alamat

  $('#FactionProvinsi').on('submit', function(e){
    e.preventDefault();
    if($('#btn-provinsi').val() == "Tambah"){
      SaveData("/home/provinsi",$(this).serialize(),"/home/provinsi")
    }
  })

  $('#FactionProvinsi').on('submit', function(e){
    e.preventDefault();
    if($('.btn-provinsi').val() == "Ubah"){
      var id = $(this).attr('id') 
      SaveData("/home/provinsi/update/" + id, $(this).serialize(),"/home/provinsi")
    }
  });

  $(document).on('click', '.btn-provinsi-delete', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/provinsi/delete/" + id;
    deleteData(url, "/home/provinsi")
  })







  // kabupaten
  $('#FactionKabupaten').on('submit', function(e){
    e.preventDefault();
    if($('#btn-kabupaten').val() == "Tambah"){
      SaveData("/home/kabupaten/add", $(this).serialize(),"/home/kabupaten")
    }
  });
  $(document).on('click', '.btn-kabupaten-delete', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/kabupaten/delete/" + id;
    deleteData(url, "/home/kabupaten")
  })

  $('#FactionKabupaten').on('submit', function(e){
    e.preventDefault();
    if($('.btn-kabupaten').val() == "Ubah"){
      var id = $(this).attr('id')
      SaveData("/home/kabupaten/update/" + id, $(this).serialize(),"/home/kabupaten")
    }
  });


  // kebutuhan
  
  $('#FactionKebutuhan').on('submit', function(e){
    e.preventDefault();
    if($('#btn-kebutuhan').val() == "Tambah"){
      SaveData("/home/kebutuhan/add", $(this).serialize(),"/home/kebutuhan")
    }
  });
  $(document).on('click', '.btn-kebutuhan-delete', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/kebutuhan/delete/" + id;
    deleteData(url, "/home/kebutuhan")
  })
  



  // pekerjaan
  $('#FactionPekerjaan').on('submit', function(e){
    e.preventDefault();
    if($('#btn-pekerjaan').val() == "Tambah"){
      SaveData("/home/pekerjaan/add", $(this).serialize(),"/home/pekerjaan")
    }
  });
  $(document).on('click', '.btn-pekerjaan-delete', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/pekerjaan/delete/" + id;
    deleteData(url, "/home/pekerjaan")
  })
})

