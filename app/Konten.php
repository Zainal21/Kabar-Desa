<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'konten';
    protected $fillable = ['author', 'kategori', 'gambar', 'isi', 'status', 'judul'];
}
