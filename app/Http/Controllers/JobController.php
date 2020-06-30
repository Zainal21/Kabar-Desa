<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pekerjaan;
use DataTables;
use Validator;
class JobController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Master Pekerjaan'
          ];
        return view('BackEnd.Penduduk.P_Pekerjaan');
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
    public function destroy($id)
    {
        pekerjaan::destroy($id);
        return response()->json(['success' => 'Data pekerjaan berhasil dihapus dari database']);
    }
    public function store(Request $request)
    {
        $error = Validator::make($request->all(),[
            'nama_pekerjaan' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            pekerjaan::create([
                'nama_pekerjaan' => $request->nama_pekerjaan
            ]);
            return response()->json(['success' => 'Data pekerjaan berhasil ditambah dari database']);
        }
    }
}
