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
        return view('BackEnd.Helper.Provinsi',[
             'title' => 'Data Provinsi'
        ]);
    }
    public function kabupaten()
    {
        return view('BackEnd.Helper.Kabupaten',['provinsi' =>  provinsi::all()]);
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
    public function kabupatenedit($id)
    {   
        return view('BackEnd.Helper.v_detail_kabuputen',[
            'kab' => kabupaten::find($id),
           'prov' => provinsi::all(),
        ]);

    }
    public function kabupatenupdate(Request $request,$id)
    {
        $error = Validator::make($request->all(),[
            'nama_kabupaten' => 'required',
            'provinsi_id' => 'required',
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            kabupaten::where(['id' => $request->id])->update([
                'nama_kabupaten' => $request->nama_kabupaten,
                'provinsi_id' => $request->provinsi_id
            ]);
            return response()->json(['success' => 'Data Kabupaten berhasil mengubah ke database']);
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
    public function provinsiedit($id)
    {
        return view('BackEnd.Helper.v_detail_provinsi',['prov' => provinsi::finfOrfail($id),]);
    }
    public function provinsiupdate(Request $request)
    {
        $error = Validator::make($request->all(),[
            'nama_provinsi' => 'required',
           
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            provinsi::where(['id' => $request->id])->update([
                'nama_provinsi' => $request->nama_provinsi,      
            ]);
            return response()->json(['success' => 'Data Provinsi berhasil mengubah ke database']);
        }
    }
    public function provinsidestroy($id)
    {
        provinsi::destroy($id);
        return response()->json(['success' => 'Data Provinsi berhasil dihapus ke database']);
    }
   
}
