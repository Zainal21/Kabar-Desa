<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tentang;
class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'about' => Tentang::where(['id' =>1])->first()
        ];
        return view('BackEnd.Tentang.v_Tentang',$data);
    }
    public function update(Request $request, $id)
    {
        tentang::where(['id' => 1])->update([
            'nama' => $request->nama,
            'tagline'=>$request->tagline,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'kode'=>$request->kode,
            'deskripsi'=>$request->deskripsi
        ]);
      return response()->json(['success' => 'Data berhasil diubah dari Database']);
    }
}
