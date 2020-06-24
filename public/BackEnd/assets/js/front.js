$(document).ready(function(){
  $('#OP_User').select2();
  $('#tbl_penduduk2').DataTable({
    processing:true,
    serverSide:true,
 
    ajax:{
      url:"/home/penduduk/list",
      method:"GET",
    },
    columns:[
      {data:'NIK',name:'NIK'},
      {data:'Nama_penduduk',name:'Nama_penduduk'},
      {data:'tanggal_lahir',name:'tanggal_lahir'},
      {data:'nama_pekerjaan',name:'nama_pekerjaan'},
      {data:'jenis_kelamin',name:'jenis_kelamin'},
      {data:'Status_Kawin',name:'Status_Kawin'},
      {data:'agama',name:'agama'},
      {data:'alamat',name:'alamat'},
    ],
  })
  $('#tbl_kebutuhan').DataTable({
    processing:true,
    serverSide:true,
 
    ajax:{
      url:"/home/kebutuhan/list",
      method:"GET",
    },
    columns:[
       {data:'nama_kebutuhan',name:'nama_kebutuhan'},
        {data:'jumlah',name:'jumlah'},
        {data:'nama_kabupaten',name:'nama_kabupaten'},
    ],
  })
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
      ]
    });
 

})