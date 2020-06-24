<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\provinsi;
use Illuminate\Support\Facades\DB;
class AlamatController extends Controller
{
    public function provinsi()
    {
        return view('BackEnd.Helper.Provinsi');
    }

    public function getprovinsi(Request $request)
    {
        if($request->ajax()){
            $data = provinsi::all();
            return DataTables::of($data)
            ->addColumn('action', function(){
                $btn = '<a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }

    public function kabupaten()
    {
        return view('BackEnd.Helper.Kabupaten');
    }
    public function getkabupaten(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('kabupaten')
                        ->join('provinsi', 'provinsi.id', '=', 'kabupaten.provinsi_id')
                        ->select('kabupaten.*','provinsi.nama_provinsi')
                        ->get();
            return DataTables::of($data)
            ->addColumn('action', function(){
                $btn = '<a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        }
    }

    public function kecamatan()
    {
        return view('BackEnd.Helper.Kecamatan');
    }
    public function getkecamatan(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('kecamatan')
                        ->join('kabupaten', 'kabupaten.id', '=', 'kecamatan.kabupaten_id')
                        ->select('kecamatan.*','kabupaten.nama_kabupaten')
                        ->get();
            return DataTables::of($data)
            ->addColumn('action', function(){
                $btn = '<a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        }
    }
}