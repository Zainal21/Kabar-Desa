<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('BackEnd.Penduduk.P_Pekerjaan');
    }
}
