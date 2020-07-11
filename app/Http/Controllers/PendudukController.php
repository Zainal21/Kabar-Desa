<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
use App\kebutuhan;
use Validator;
class PendudukController extends Controller
{
    public function kebutuhan()
    {
        $this->vars = [
            'kabupaten' => \App\kabupaten::all(),
            'title' => 'Master Kebutuhan',
        ];
        return view('BackEnd.Penduduk.P_Kebutuhan',$this->vars);
    }

    public function savekebutuhan(Request $request)
    {
        $error = Validator::make($request->all(),[
            'nama_kebutuhan' => 'required',
            'jumlah' => 'required',
            'kabupaten_id' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            kebutuhan::create([
                'nama_kebutuhan' => $request->nama_kebutuhan,
                'jumlah' => $request->jumlah,
                'kabupaten_id' => $request->kabupaten_id,
            ]);
            return response()->json(['success' => 'Data Kebutuhan berhasil ditambahkan ke database']);
        }
    }
    public function deletekebutuhan($id)
    {
        kebutuhan::destroy($id);
        return response()->json(['success' => 'Data kebutuhan berhasil dihapus dari database']);
    }

 



    
}
