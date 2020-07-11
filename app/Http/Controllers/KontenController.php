<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use Validator;
use Illuminate\Support\Str;
use DB;
use DataTables;

class KontenController extends Controller
{
    public function index()
    {
        $var = [
            'title' => 'Master Konten',
        ];
        return view('BackEnd.Konten.K_Konten',$var);
    }

    public function create()
    {
        $this->vars = 
        [
            'title' => 'Tambah Kebutuhan',
        ];
        return view('BackEnd.Konten.K_Tambah',$this->vars);
    }
    public function store(Request $request)
    {
       $rule = [
           'judul' => 'required',
           'author' => 'required',
           
       ];
       $error = Validator::make($request->all(),$rule);
       if($error->fails()){
           return response()->json(['error' => $error->errors()->all()]);
       }else{
        $file = $request->file('image')->store('public/upload/konten');
        $k = Konten::create([
            'author' => $request->author,
            'kategori' => $request->kategori,
            'gambar' => $file,
            'isi' => $request->isi,
            'status' => $request->status,
            'judul' => $request->judul,
            'slug' => str::slug($request->judul)
        ]);
            return response()->json(['success' => 'Berhasil menambahkan konten dari database']);
       }
    }
    public function edit($id)
    {
        $this->vars = [
            'konten' => Konten::find($id),
            'title' => 'Edit Konten',
            'kategori' => [
                'Kabar Desa',
                'Artikel'
            ],
            'Status' => [
                'Publish',
                'Draft',
                'Pending'
            ]
        ];
        return view('BackEnd.Konten.K_edit',$this->vars);
    }
    public function update(Request $request,$id)
    {
        $rule = [
            'judul' => 'required',
            'author' => 'required',
            
        ];
        $error = Validator::make($request->all(),$rule);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else if($request->file('gambar') == "")
        {
            $k = Konten::where(['id' => $request->id])->update([
                'author' => $request->author,
                'kategori' => $request->kategori,
                'isi' => $request->isi,
                'status' => $request->status,
                'judul' => $request->judul,
                'slug' => str::slug($request->judul)
                ]);
                return response()->json(['success' => 'Berhasil mengubah konten dari database']);
        }
        $file = $request->file('image')->store('public/upload/konten');
            $k = Konten::where(['id' => $request->id])->update([
                'author' => $request->author,
                'kategori' => $request->kategori,
                'gambar' => $file,
                'isi' => $request->isi,
                'status' => $request->status,
                'judul' => $request->judul,
                'slug' => str::slug($request->judul)
                ]);
                return response()->json(['success' => 'Berhasil mengubah konten dari database']);
    }
    public function destroy($id)
    {
        konten::destroy($id);
        return response()->json(['success' => 'Berhasil menghapus data dari database']);
    }
}
