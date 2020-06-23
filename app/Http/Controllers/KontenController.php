<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use Validator;
class KontenController extends Controller
{
    public function index()
    {
        return view('BackEnd.Konten.K_Konten');
    }
    public function create()
    {
        return view('BackEnd.Konten.K_Tambah');
    }
    public function store(Request $request)
    {
       $rule = [
           'judul' => 'required',
           'author' => 'required',
           'gambar' => 'required',
       ];
       $error = Validator::make($request->all(),$rule);
       if($error->fails()){
           return response()->json(['error' => $error->errors()->all()]);
       }else{
        $file = $request->file('image')->store('/upload/konten');
        $k = Konten::create([
            'author' => $request->author,
            'kategori' => $request->kategori,
            'gambar' => $file,
            'isi' => $request->isi,
            'status' => $request->status,
            'judul' => $request->judul,
        ]);
            return response()->json(['success' => 'Berhasil']);
       }
    }
    public function edit()
    {

    }
    public function update(Request $request)
    {
        
    }
}
