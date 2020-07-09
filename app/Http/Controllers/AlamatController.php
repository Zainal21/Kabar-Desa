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
        $this->vars = [
            'title' => 'Data Provinsi'
        ];
        return view('BackEnd.Helper.Provinsi',$this->vars);
    }

    public function getprovinsi(Request $request)
    {
        if($request->ajax()){
            $data = provinsi::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/provinsi/edit/'.$data->id.'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/provinsi/delete/'.$data->id.'" id="'.$data->id.'" class="btn btn-outline-danger ml-2 btn-provinsi-delete"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }

    public function kabupaten()
    {
        $this->vars = [
          'provinsi' =>  provinsi::all()
        ];
        return view('BackEnd.Helper.Kabupaten',$this->vars);
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
        $this->vars = [
           'kab' => kabupaten::find($id),
           'prov' => provinsi::all(),
        ];
        return view('BackEnd.Helper.v_detail_kabuputen',$this->vars);

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
    public function getkabupaten(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('kabupaten')
                        ->join('provinsi', 'provinsi.id', '=', 'kabupaten.provinsi_id')
                        ->select('kabupaten.*','provinsi.nama_provinsi')
                        ->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="/home/kabupaten/edit/'.$data->id.'" class="btn btn-outline-primary btn-edit-kabupaten" id="'.$data->id.'"><i class="fas fa-edit"></i></a><a href="/home/kabupaten/delete/'.$data->id.'" class="btn btn-outline-danger  btn-kabupaten-delete ml-2" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
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
    public function provinsiedit($id)
    {
        $this->vars = [
            'prov' => provinsi::find($id),
        ];
        return view('BackEnd.Helper.v_detail_provinsi',$this->vars);
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
