<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function kebutuhan()
    {
        return view('BackEnd.Penduduk.P_Kebutuhan');
    }
}
