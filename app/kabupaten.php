<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $fillable = [
        'nama_kabupaten', 'provinsi_id'
    ];
}
