<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\provinsi;
use App\kabupaten;
use App\pekerjaan;
use App\penduduk;
use App\kebutuhan;
use App\UMKM;
use DB;

class DataTableController extends Controller
{
    public function getprovinsi(Request $request)
    {
        if($request->ajax()){
            $data = provinsi::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/provinsi/edit/'.$data->id.'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/provinsi/delete/'.$data->id.'" id="'.$data->id.'" class="btn btn-outline-danger ml-2 btn-provinsi-delete"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
    public function getkabupaten(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('kabupaten')
                        ->join('provinsi', 'provinsi.id', '=', 'kabupaten.provinsi_id')
                        ->select('kabupaten.*','provinsi.nama_provinsi')
                        ->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/kabupaten/edit/'.$data->id.'" class="btn btn-outline-primary btn-edit-kabupaten" id="'.$data->id.'"><i class="fas fa-edit"></i></a><a href="/home/kabupaten/delete/'.$data->id.'" class="btn btn-outline-danger  btn-kabupaten-delete ml-2" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        }
    }
    public function getpekerjaan(Request $request)
    {
        
        if($request->ajax()){
            $data = pekerjaan::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/pekerjaan/delete/'.$data->id.'" class="btn btn-outline-danger ml-2 btn-pekerjaan-delete" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
    public function getPenduduk(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('penduduk')
                    ->join('pekerjaan','pekerjaan.id' ,'=', 'penduduk.pekerjaan_id')
                    ->select('penduduk.*', 'pekerjaan.nama_pekerjaan')
                    ->get();
                return DataTables::of($data)
                ->addColumn('action', function($data){
                    $btn = '<a href="/home/penduduk/edit/'.$data->id.'" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/penduduk/delete/'.$data->id.'" class="btn btn-sm  btn-outline-danger btn-penduduk-hapus" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
        }
    }
    public function getKonten(Request $request)
    {
        if($request->ajax()){
            $data = Konten::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/konten/edit/'.$data->id.'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="konten/delete/'.$data->id.'" class="btn btn-outline-danger ml-2 btn-hapus-konten" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
            
        }
    }
    public function getkebutuhan(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('kebutuhan')
                    ->join('kabupaten', 'kabupaten.id' ,'=','kebutuhan.kabupaten_id')
                    ->select('kebutuhan.*', 'kabupaten.nama_kabupaten')
                    ->get();
                return DataTables::of($data)
                ->addColumn('action', function($data){
                    $btn = '<a href="/home/kebutuhan/delete/'.$data->id.'" class="btn  btn-outline-danger btn-kebutuhan-delete" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
        }
    }
    public function getUMKM(Request $requets)
    {
    $data = DB::table('umkm')
                ->join('penduduk', 'penduduk.id','=','umkm.penduduk_id')
                ->select('umkm.*', 'penduduk.*')
                ->get();
        return DataTables::of($data)
        ->addColumn('action', function($data){
            $btn = '<a href="/home/umkm-desa/edit/'.$data->id.'" class="btn btn-outline-primary btn-sm mr-2" ><i class="fas fa-edit"></i></a><a href="/home/umkm-desa/delete/'.$data->id.'" class="btn btn-outline-danger btn-sm btn-umkm-delete" id="'.$data->id.'" ><i class="fas fa-trash"></i></a>';
            return $btn;
        })->rawColumns(['action'])
        ->make(true);
    }
    public function getpetugas(Request $request)
    {
        if($request->ajax()){
            $data = User::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/petugas/edit/'.$data->id.'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/petugas/delete/'.$data->id.'" class="btn btn-outline-danger ml-2 btn-user-delete" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
}
