$(document).ready(function(){
var _BASE_URL = 'http://localhost:8000'
  $('#tbl_aspr').DataTable()
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
 

// umkm
$('#tbl_umkm').DataTable({
  processing:true,
  serverSide:true,

  ajax:{
    url:"/home/list/umkm",
    method:"GET",
  },
  columns:[
    {data:'npwb_usaha',name:'npwb_usaha'},
    {data:'nama_umkm',name:'nama_umkm'},
    {data:'Nama_penduduk',name:'Nama_penduduk'},
    {data:'email_pemilik',name:'email_pemilik'},
    {data:'modal_dasar',name:'modal_dasar'},
    {data:'modal_ditampatkan',name:'modal_ditampatkan'},
    {data:'alamat',name:'alamat'},
    {data:'jenis_kelamin',name:'jenis_kelamin'},
   
  ],
})



});

