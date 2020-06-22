<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('FrontEnd.v_index');
    }
    public function kebutuhan()
    {
        return view('FrontEnd.Penduduk.v_kebutuhan');
    }
    public function Pekerjaan()
    {
        return view('FrontEnd.Penduduk.v_pekerjaan');
    }
    public function umkm()
    {
        return view('FrontEnd.Penduduk.v_UMKM');
    }
    public function penduduk()
    {
        return view('FrontEnd.Penduduk.v_penduduk');
    }

    public function kabardesa()
    {
        return view('FrontEnd.v_kabar_desa');
    }
    public function artikel()
    {
        return view('FrontEnd.v_artikel');
    }

    // informasi website
    public function informasi()
    {
        return view('FrontEnd.Info_website.v_info_utama');
    }

    // sosial media
    public function hubungi()
    {
        return view('FrontEnd.Info_website.v_hubungi');
    }





}
