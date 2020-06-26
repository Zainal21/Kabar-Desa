$(document).ready(function(){
  $('#kategori').select2();
  $('#status').select2();
  $('#job').select2();
  $('#op_kab').select2();
  $('#gender').select2();
  $('#stts').select2();
  $('#agama').select2();
 
  
 
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

    $('#tbl_provinsi').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"/home/provinsi/list",
        method:"GET",
      },
      columns:[
        {data:'nama_provinsi',name:'nama_provinsi'},
        {data:'action',name:'action', orderable:false},
      ]
    });
    
    $('#tbl_kabupaten').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"/home/kabupaten/list",
        method:"GET",
      },
      columns:[
        {data:'nama_kabupaten',name:'nama_kabupaten'},
        {data:'nama_provinsi',name:'nama_provinsi'},
        {data:'action',name:'action', orderable:false},
      ]
    });

    $('#tbl_kecamatan').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"/home/kecamatan/list",
        method:"GET",
      },
      columns:[
        {data:'nama_kecamatan',name:'nama_kecamatan'},
        {data:'nama_kabupaten',name:'nama_kabupaten'},
        {data:'action',name:'action', orderable:false},
      ]
    });
    $('#tbl_penduduk').DataTable({
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
        {data:'action',name:'action', orderable:false},
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
        {data:'action',name:'action', orderable:false},
      ],
    
    })
    $('#tbl_konten').DataTable({
      processing:true,
      serverSide:true,
   
      ajax:{
        url:"/home/konten/list",
        method:"GET",
      },
      columns:[
        {data:'judul',name:'judul'},
        {data:'author',name:'author'},
        {data:'kategori',name:'kategori'},
        {data:'status',name:'status'},
        {data:'action',name:'action', orderable:false},
      ],
    
    })


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


 })