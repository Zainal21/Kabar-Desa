<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $fillable = [
        'pengaduan_id', 'Tanggapan', 'petugas'
    ];
}
