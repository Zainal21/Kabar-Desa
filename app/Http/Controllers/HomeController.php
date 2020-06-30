<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use App\tentang;
use App\pekerjaan;
use App\kebutuhan;
use App\User;
use App\UMKM;
class HomeController extends Controller
{
    public function index()
    {
        $data = [
   
            'title' => 'Home',
            'artikel' => konten::all()->count(),
            'pekerjaan' => pekerjaan::all()->count(),
            'kebutuhan' => kebutuhan::all()->count(),
            'user' => User::all()->count(),
            'news' => Konten::latest()->paginate(1),
            'umkm' => umkm::all()
        ];
        return view('FrontEnd.v_index',$data);
    }
    public function kebutuhan()
    {
        $data = [
            'title' => 'Data Kebutuhan per Wilayah'
          ];
        return view('FrontEnd.Penduduk.v_kebutuhan');
    }
    public function Pekerjaan()
    {
        $data = [
            'title' => 'Data Pekerjaan'
          ];
        return view('FrontEnd.Penduduk.v_pekerjaan');
    }
    public function umkm()
    {
        $data = [
            'title' => 'Data UMKM'
          ];
        return view('FrontEnd.Penduduk.v_UMKM');
    }
    public function penduduk()
    {
        $data = [
            'title' => 'Data Penduduk'
          ];
        return view('FrontEnd.Penduduk.v_penduduk');
    }

    public function kabarDesa()
    {
        $data = [
            'kabardesa' => Konten::where(['kategori' => 'Kabar Desa'])->get(),
            'title' => 'Kabar Desa'
        ];
        return view('FrontEnd.v_kabar_desa',$data);
    }
    public function detailkabar($slug)
    {
        $data = [
            'Konten' => Konten::where(['slug' => $slug])->first(),
            'title' => 'Detail Artikel'
        ];
        return view('FrontEnd.v_detail_artikel',$data);
    }
    public function artikel()
    {
        $data = [
            'konten' => Konten::where(['kategori' => 'Artikel'])
                        ->where(['status' => 'Publish'])->get(),
            'title' => 'Artikel'
        ];
        return view('FrontEnd.v_artikel',$data);
    }

    // informasi website
    public function informasi()
    {

        $data = [
            'about' => Tentang::where(['id' =>1])->first(),
            'title' => 'Tentang Website'
        ];
        return view('FrontEnd.Info_website.v_info_utama',$data);
    }

    // sosial media
    public function hubungi()
    {
        $data = [
            'title' => 'Data Pengaduan'
          ];
        return view('FrontEnd.Info_website.v_hubungi');
    }





}
