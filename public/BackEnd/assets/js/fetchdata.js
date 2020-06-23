$(document).ready(function(){
  $('#kategori').select2();
  $('#status').select2();



  // datatable
    $('#tbl_pekerjaan').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"/home/list/pekerjaan",
        method:"GET",
      },
      columns:[
        {data:'nama_pekerjaan',name:'nama_pekerjaan'},
        {data:'action',name:'action',orderable:false},
      ]
    });

    // petugas
    $('#tbl_petugas').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"/home/petugas/list",
        method:"GET",
      },
      columns:[
        {data:'name',name:'name'},
        {data:'email',name:'email'},
        {data:'role',name:'role'},
        {data:'action',name:'action',orderable:false},
      ]
    });







 })