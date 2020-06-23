<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tentang extends Model
{
    protected $table = 'tentang';
    protected $fillable = [
        'nama',
        'tagline',
        'alamat',
        'email',
        'telp',
        'kode',
        'deskripsi'
    ];
}
