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
        return view('BackEnd.Konten.K_Konten');
    }
    public function getKonten(Request $request)
    {
        if($request->ajax()){
            $data = Konten::all();
            return DataTables::of($data)
            ->addColumn('action', function(){
                $btn = '<a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-outline-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])->make(true);
            
        }
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
            'slug' => str::slug($request->judul)
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
