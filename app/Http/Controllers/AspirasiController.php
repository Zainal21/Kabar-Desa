<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengaduan;
use Validator;
use DataTables;
use App\penduduk;
use DB;
class AspirasiController extends Controller
{
    public function index()
    {
        $data = [
          'pengaduan' => DB::table('pengaduan')
                        ->join('penduduk', 'penduduk.id', '=', 'pengaduan.penduduk_id')
                        ->select('pengaduan.*','penduduk.*')
                        ->get()
        ];
        return view('BackEnd.Aspirasi.A_Daftar_Aspirasi',$data);
    }
    public function create()
    {
        $data = [
            'penduduk' => penduduk::all()
        ];
        return view('BackEnd.Aspirasi.A_Aspirasi',$data);
    }

    Public function store(Request $request)
    { 
        $error = Validator::make($request->all(),[
            'penduduk_id' => 'required', 
            'pengaduan'=> 'required',  
           
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else if($request->file('foto') == ""){
            pengaduan::create([
                'penduduk_id' => $request->penduduk_id,
                'pengaduan' => $request->pengaduan,
                'status' => 'Belum Terjawab'
                ]);
                return response()->json(['success' =>'Pengaduan Berhasil Dikirim']);
            }
            else{
                pengaduan::create([
                    'penduduk_id' => $request->penduduk_id,
                    'pengaduan' => $request->pengaduan,
                    'foto' => $request->file('foto')->store('public/upload/pengaduan'),
                    'status' => 'Belum Terjawab'
                    ]);
                
            return response()->json(['success' =>'Pengaduan Berhasil Dikirim']);
            }
         
       
}
  
}
