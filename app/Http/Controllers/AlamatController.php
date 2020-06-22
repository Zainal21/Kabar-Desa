<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function provinsi()
    {
        return view('BackEnd.Helper.Provinsi');
    }
    public function kabupaten()
    {
        return view('BackEnd.Helper.Kabupaten');
    }
    public function kecamatan()
    {
        return view('BackEnd.Helper.Kecamatan');
    }
}
