<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = [
        'NIK','Nama_penduduk','tanggal_lahir', 'pekerjaan_id',
        'jenis_kelamin','Status_kawin','agama', 'alamat','user_id'
    ];
}
