

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

});


