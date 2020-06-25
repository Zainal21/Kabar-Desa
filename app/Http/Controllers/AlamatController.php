<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\provinsi;
use App\kabupaten;
use Illuminate\Support\Facades\DB;
use Validator;
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
                $btn = '<a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-outline-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }

    public function kabupaten()
    {
        $data = [
          'provinsi' =>  provinsi::all()
        ];
        return view('BackEnd.Helper.Kabupaten',$data);
    }
    public function kabupatenstore(Request $request)
    {
        $error = Validator::make($request->all(),[
            'nama_kabupaten' => 'required',
            'provinsi_id' => 'required',
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            kabupaten::create([
                'nama_kabupaten' => $request->nama_kabupaten,
                'provinsi_id' => $request->provinsi_id
            ]);
            return response()->json(['success' => 'Data Kabupaten berhasil ditambahkan ke databse']);
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
                $btn = '<a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/kabupaten/delete/'.$data->id.'" class="btn btn-outline-danger  btn-kabupaten-delete ml-2" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        }
    }

    public function kabupatendelete($id)
    {
        kabupaten::destroy($id);
        return response()->json(['success' => 'Data kabupaten berhasil dihapus dari database']);
    }
   
    public function provinsistore(Request $request)
    {
        $error = Validator::make($request->all(),['nama_provinsi' =>'required']);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            provinsi::create([
                'nama_provinsi' => $request->nama_provinsi
            ]);
            return response()->json(['success' => 'Data Provinsi berhasil ditambahkan ke database']);
        }
    }
}
