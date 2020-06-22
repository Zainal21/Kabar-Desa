<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('BackEnd.v_home');
    }
    public function petugas()
    {
        return view('BackEnd.Petugas.P_Petugas');
    }
    public function  penduduk()
    {
        return view('BackEnd.Petugas.P_Penduduk');
    }
   
}
