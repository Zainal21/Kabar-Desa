<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $fillable = ['nama_pekerjaan'];
}
