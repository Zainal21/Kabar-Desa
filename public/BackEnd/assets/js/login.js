$(document).ready(function(){
  $('#btn-login').on('click', function(e){
    e.preventDefault();
        var token = $("input[name=_token]").val();
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();
       
      $.ajax({
        url:"/auth/login",
        method:"POST",
        dataType:"JSON",
        cache:false,
        data:{
          _token:token,
          email:email,
          password:password,
        },
        success:function(data){
          // console.log(data)
          if(data.error){
            Swal({
              title:'Login Berhasil',
              text:data.error,
              type:'error'
            })
          }else{
            Swal({
              title:data.success,
              text:'Silahkan Tunggu, Halaman Segera dialihkan',
              type:'success'
            }).then(function(){
              window.location.href = "/home/admin";
            })
          }
          
        }
      })
    
  })
})