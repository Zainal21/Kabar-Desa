<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
use App\kebutuhan;
class PendudukController extends Controller
{
    public function kebutuhan()
    {
        return view('BackEnd.Penduduk.P_Kebutuhan');
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
                    $btn = '<a href="" class="btn  btn-outline-danger"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
        }
    }
}
