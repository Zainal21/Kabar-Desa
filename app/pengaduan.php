<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = [
        'penduduk_id', 'pengaduan', 'foto', 'status'
    ];
}