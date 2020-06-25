<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    protected $table = 'kebutuhan';
    protected $fillable = [
        'nama_kebutuhan','kabupaten_id', 'jumlah'
    ];
}
