<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use App\tentang;
use App\pekerjaan;
use App\kebutuhan;
use App\User;
class HomeController extends Controller
{
    public function index()
    {
        $data = [
           
            'artikel' => konten::all()->count(),
            'pekerjaan' => pekerjaan::all()->count(),
            'kebutuhan' => kebutuhan::all()->count(),
            'user' => User::all()->count(),
            'news' => Konten::latest()->paginate(1),
        ];
        return view('FrontEnd.v_index',$data);
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

    public function kabarDesa()
    {
        $data = [
            'kabardesa' => Konten::where(['kategori' => 'Kabar Desa'])->get()
        ];
        return view('FrontEnd.v_kabar_desa',$data);
    }
    public function detailkabar($slug)
    {
        $data = [
            'Konten' => Konten::where(['slug' => $slug])->first()
        ];
        return view('FrontEnd.v_detail_artikel',$data);
    }
    public function artikel()
    {
        $data = [
            'konten' => Konten::where(['kategori' => 'Artikel'])
                        ->where(['status' => 'Publish'])->get()
        ];
        return view('FrontEnd.v_artikel',$data);
    }

    // informasi website
    public function informasi()
    {

        $data = [
            'about' => Tentang::where(['id' =>1])->first()
        ];
        return view('FrontEnd.Info_website.v_info_utama',$data);
    }

    // sosial media
    public function hubungi()
    {
        return view('FrontEnd.Info_website.v_hubungi');
    }





}
