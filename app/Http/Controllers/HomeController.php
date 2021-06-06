<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use App\tentang;
use App\pekerjaan;
use App\kebutuhan;
use App\User;
use App\UMKM;
use App\pengaduan;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        return view('FrontEnd.v_index',[
            'title' => 'Home',
            'artikel' => konten::all()->count(),
            'pekerjaan' => pekerjaan::all()->count(),
            'kebutuhan' => kebutuhan::all()->count(),
            'user' => User::all()->count(),
            'news' => Konten::where(['status' => 'Publish'])->latest()->paginate(1),
            'umkm' => umkm::all()->count(),
            'aspirasi'=> pengaduan::where(['status' => 'Terjawab'])->count()
        ]);
    }
    public function kebutuhan()
    {
        return view('FrontEnd.Penduduk.v_kebutuhan',['title' => 'Data Kebutuhan per Wilayah']);
    }
    public function Pekerjaan()
    {
        return view('FrontEnd.Penduduk.v_pekerjaan',['title' => 'Data Pekerjaan']);
    }
    public function umkm()
    {
        return view('FrontEnd.Penduduk.v_UMKM',['title' => 'Data UMKM']);
    }
    public function penduduk()
    {
        return view('FrontEnd.Penduduk.v_penduduk',['title' => 'Data Penduduk']);
    }

    public function kabarDesa()
    {
        return view('FrontEnd.v_kabar_desa',[
            'kabardesa' => Konten::where(['kategori' => 'Kabar Desa'])->where(['status' => 'Publish'])->get(),
            'title' => 'Kabar Desa'
        ]);
    }
    public function detailkabar($slug)
    {
        return view('FrontEnd.v_detail_artikel',[
            'Konten' => Konten::where(['slug' => $slug])->first(),
            'title' => 'Detail Artikel'
        ]);
    }
    public function artikel()
    {
     
        return view('FrontEnd.v_artikel',[
            'konten' => Konten::where(['kategori' => 'Artikel'])->where(['status' => 'Publish'])->get(),
            'title' => 'Artikel'
        ]);
    }

    // informasi website
    public function informasi()
    {
        return view('FrontEnd.Info_website.v_info_utama',[
            'about' => Tentang::where(['id' =>1])->first(),
            'title' => 'Tentang Website'
        ]);
    }

    // sosial media
    public function hubungi()
    {
        return view('FrontEnd.Info_website.v_hubungi',[
              'pengaduan' => DB::table('pengaduan')
                          ->join('penduduk', 'penduduk.id', '=', 'pengaduan.penduduk_id')
                          ->select('pengaduan.*','penduduk.*')
                          ->get(),
              'title' => 'Data Pengaduan' 
        ]);
    }
}
