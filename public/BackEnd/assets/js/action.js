

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
            title:data.success,
            text:'Berhasil Menambahkan Data ke Database',
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
          title:data.success,
          text:'Berhasil',
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
          title:data.success,
          text:'Berhasil',
          type:'success'
        }).then(function(){
          window.location.href =to;
        })
      }
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
  // about
  $('#form-about').on('submit', function(e){
    e.preventDefault();
     if($('#btn-tentang').val() == "Simpan"){
      FUpdateData('/home/tentang/update/1',$(this).serialize(),"/home/about")
     }
  });

  // petugas

  $('#FactionPetugas').on('submit', function(e){
    e.preventDefault();
    if($('#btn-petugas').val() == "Tambah"){
      SaveData("/home/petugas/add",$(this).serialize(),"/home/petugas")
    }
  })
  $('#FactionProvinsi').on('submit', function(e){
    e.preventDefault();
    if($('#btn-provinsi').val() == "Tambah"){
      SaveData("/home/provinsi",$(this).serialize(),"/home/provinsi")
    }
  })

});


