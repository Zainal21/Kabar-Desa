<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UMKM;
use DataTables;
use App\penduduk;
use Validator;
use Illuminate\Support\Facades\DB;
class UMKMController extends Controller
{
    public function index()
    {
        return view('BackEnd.UMKM.v_umkm');
    }
    public function getUMKM(Request $requets)
    {
    $data = DB::table('umkm')
                ->join('penduduk', 'penduduk.id','=','umkm.penduduk_id')
                ->select('umkm.*', 'penduduk.NIK')
                ->get();
        return DataTables::of($data)
        ->addColumn('action', function($data){
            $btn = '<a href="" class="btn btn-outline-primary " ><i class="fas fa-plus"></i></a><a href="" class="btn btn-outline-danger " ><i class="fas fa-trash"></i></a>';
            return $btn;
        })->rawColumns(['action'])
        ->make(true);
    }
    public function create(Request $requets)
    {
        $data = [
            'nik' => penduduk::all()
        ];
        return view('BackEnd.UMKM.v_create',$data);
    }
    public function store(Request $requets)
    {
        $error = Validator::make($requets->all(),[
            'npwb_usaha' => 'required',
            'nama_umkm' => 'required',
            'email_pemilik' => 'required',
            'pemilik'=> 'required',
            'modal_dasar'=> 'required',
            'modal_ditampatkan'=> 'required',
            'alamat'=> 'required',
            'jenis_kelamin'=> 'required',
            'penduduk_id'=> 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            UMKM::create([
                'npwb_usaha' => $requets->npwb_usaha,
                'nama_umkm' => $requets->nama_umkm,
                'email_pemilik' => $requets->email_pemilik,
                'pemilik'=> $requets->pemilik,
                'modal_dasar'=> $requets->modal_dasar,
                'modal_ditampatkan'=> $requets->modal_ditampatkan,
                'alamat'=> $requets->alamat,
                'jenis_kelamin'=> $requets->jenis_kelamin,
                'penduduk_id'=> $requets->penduduk_id
            ]);
            return response()->json(['success' => 'Data UMKM berhasil ditambahkan ke database']);
        }
    }
}
