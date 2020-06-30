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
      confirmButtonColor: 'red',
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


  $('#FactionUser').on('submit', function(e){
    e.preventDefault();
    if($('.btn-user-update').val() == "Simpan"){
      var id = $(this).attr('id')
      SaveData("/home/user/update/" + id,$(this).serialize(),"/home/user/edit/")
    }
  })




// penduduk
  
  $('#FactionPenduduk').on('submit', function(e){
    e.preventDefault();
    if($('.btn-penduduk').val() == "Simpan"){
      SaveData("/home/penduduk/create",$(this).serialize(),"/home/penduduk")
    }
  })
 
  $('#FactionPetugas').on('submit', function(e){
    e.preventDefault();
    if($('.btn-petugas').val() == "Ubah"){
      var id = $(this).attr('id')
      SaveData("/home/petugas/update/" + id,$(this).serialize(),"/home/petugas/")
    }
  })

  $(document).on('click','.btn-penduduk-hapus', function(e){
    e.preventDefault();
    var id = $(this).attr('id')
    url = "/home/penduduk/delete/" + id;
    deleteData(url, "/home/penduduk")
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


// UMKM

$('#FactionUMKM').on('submit', function(e){
  e.preventDefault();
  if($('.btn-umkm').val() == "Tambah"){
    SaveData("/home/umkm-desa/add",$(this).serialize(),"/home/umkm-desa")
  }
})
$('#FactionUMKM').on('submit', function(e){
  e.preventDefault();
  if($('.btn-umkm').val() == "Ubah"){
    var id = $(this).attr('id')
    SaveData("/home/umkm-desa/update/"+ id,$(this).serialize(),"/home/umkm-desa")
  }
})
$(document).on('click', '.btn-umkm-delete', function(e){
  e.preventDefault();
  var id = $(this).attr('id')
  url = "/home/umkm-desa/delete/" + id;
  deleteData(url, "/home/umkm-desa")
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
    // pengaduan
    $('#FPengaduan').on('submit', function(e){
      e.preventDefault();
      if($('.btn-pengaduan').val() == "Kirim"){
        var FD = new FormData(this);
        saveImg("/home/aspirasi/kirim-pengaduan", FD,"/home/aspirasi/buat-pengaduan")
      }
    });
 
    $('#Ftanggapan').on('submit', function(e){
      e.preventDefault();
      if($('.btn-tanggapan').val() == "Kirim"){
        var slug = $(this).attr('id');
        SaveData("/home/aspirasi/kirim-tanggapan/"+ slug, $(this).serialize(),"/home/aspirasi/list")
      }
    });
    $(document).on('click', '.btn-hapus-pengaduan', function(e){
      e.preventDefault();
      var id = $(this).attr('id')
      url = "/home/aspirasi/hapus-pengaduan/" + id;
      deleteData(url, "/home/aspirasi/list")
  })
    
    
   
});