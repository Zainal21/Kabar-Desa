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
        $this->vars = [
   
            'title' => 'Home',
            'artikel' => konten::all()->count(),
            'pekerjaan' => pekerjaan::all()->count(),
            'kebutuhan' => kebutuhan::all()->count(),
            'user' => User::all()->count(),
            'news' => Konten::latest()->paginate(1),
            'umkm' => umkm::all()->count(),
            'aspirasi'=> pengaduan::where(['status' => 'Terjawab'])->count()
        ];
        return view('FrontEnd.v_index',$this->vars);
    }
    public function kebutuhan()
    {
        $this->vars = [
            'title' => 'Data Kebutuhan per Wilayah'
          ];
        return view('FrontEnd.Penduduk.v_kebutuhan');
    }
    public function Pekerjaan()
    {
        $this->vars = [
            'title' => 'Data Pekerjaan'
          ];
        return view('FrontEnd.Penduduk.v_pekerjaan');
    }
    public function umkm()
    {
        $this->vars = [
            'title' => 'Data UMKM'
          ];
        return view('FrontEnd.Penduduk.v_UMKM');
    }
    public function penduduk()
    {
        $this->vars = [
            'title' => 'Data Penduduk'
          ];
        return view('FrontEnd.Penduduk.v_penduduk');
    }

    public function kabarDesa()
    {
        $this->vars = [
            'kabardesa' => Konten::where(['kategori' => 'Kabar Desa'])
            ->where(['status' => 'Publish'])
            ->get(),
            'title' => 'Kabar Desa'
        ];
        return view('FrontEnd.v_kabar_desa',$this->vars);
    }
    public function detailkabar($slug)
    {
        $this->vars = [
            'Konten' => Konten::where(['slug' => $slug])->first(),
            'title' => 'Detail Artikel'
        ];
        return view('FrontEnd.v_detail_artikel',$this->vars);
    }
    public function artikel()
    {
        $this->vars = [
            'konten' => Konten::where(['kategori' => 'Artikel'])
                        ->where(['status' => 'Publish'])
                        ->get(),
            'title' => 'Artikel'
        ];
        return view('FrontEnd.v_artikel',$this->vars);
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
            'pengaduan' => DB::table('pengaduan')
                          ->join('penduduk', 'penduduk.id', '=', 'pengaduan.penduduk_id')
                          ->select('pengaduan.*','penduduk.*')
                          ->get(),
              'title' => 'Data Pengaduan' 
          ];
        return view('FrontEnd.Info_website.v_hubungi',$data);
    }





}
