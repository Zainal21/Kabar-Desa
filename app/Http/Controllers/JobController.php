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
        $this->vras = [
            'title' => 'Master Pekerjaan'
          ];
        return view('BackEnd.Penduduk.P_Pekerjaan', $this->vars);
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
