<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    protected $table = 'umkm';
    protected $fillable = [
        'npwb_usaha',
        'nama_umkm',
        'email_pemilik',
        'pemilik',
        'modal_dasar',
        'modal_ditampatkan',
        'alamat',
        'jenis_kelamin',
        'penduduk_id'
    ];

  
}
