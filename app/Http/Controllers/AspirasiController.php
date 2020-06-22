<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('BackEnd.Aspirasi.A_Daftar_Aspirasi');
    }
}
