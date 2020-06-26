<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use DataTables;
use DB;
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
        return view('BackEnd.Penduduk.P_Penduduk');
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
                ->addColumn('action', function(){
                    $btn = '<a href="" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-sm  btn-outline-danger ml-2 d-inline"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
        }
    }

    public function creatependuduk()
    {
        return view('BackEnd.Penduduk.v_create_penduduk');
    }
   
}
