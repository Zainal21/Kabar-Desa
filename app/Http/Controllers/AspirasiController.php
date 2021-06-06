<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengaduan;
use Validator;
use DataTables;
use App\penduduk;
use DB;
use Illuminate\Support\Str;
use App\tanggapan;
use Auth;
use Mail;
use App\Mail\notif;

class AspirasiController extends Controller
{
    public function index()
    {
        $data = [
          'pengaduan' => DB::table('pengaduan')
                        ->join('penduduk', 'penduduk.id', '=', 'pengaduan.penduduk_id')
                        ->select('pengaduan.*','penduduk.*')
                        ->get(),
            'title' => 'Data Pengaduan' 
        ];
        return view('BackEnd.Aspirasi.A_Daftar_Aspirasi',$data);
    }
    public function create()
    {
        $data = [
            'penduduk' => penduduk::all(),
            'title' => 'Buat Aspirasi'
        ];
        return view('BackEnd.Aspirasi.A_Aspirasi',$data);
    }

    Public function store(Request $request)
    { 
        $error = Validator::make($request->all(),[
            'penduduk_id' => 'required', 
            'pengaduan'=> 'required',  
           
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else if($request->file('foto') == ""){
            pengaduan::create([
                'penduduk_id' => $request->penduduk_id,
                'pengaduan' => $request->pengaduan,
                'status' => 'Belum Terjawab',
                'slug' => str::slug($request->pengaduan)
                ]);
                return response()->json(['success' =>'Pengaduan Berhasil Dikirim']);
            }
            else{
                pengaduan::create([
                    'penduduk_id' => $request->penduduk_id,
                    'pengaduan' => $request->pengaduan,
                    'foto' => $request->file('foto')->store('public/upload/pengaduan'),
                    'status' => 'Belum Terjawab',
                    'slug' => str::slug($request->pengaduan),
                    'user_id' => Auth::user()->id
                    ]);
                
            return response()->json(['success' =>'Pengaduan Berhasil Dikirim']);
            }
         
       
    }

    public function show($slug)
    {
     $data = [
          'items' =>  DB::table('pengaduan')
                        ->join('penduduk', 'penduduk.id' ,'=','pengaduan.penduduk_id') 
                        ->where(['slug' => $slug])
                        ->select('penduduk.*','pengaduan.*')
                        ->get(),
            'title' => 'Detail Aspirasi'
      ];
        
        // dd($data);
        return view('BackEnd.Aspirasi.A_Details',$data);
    }

    public function details($slug)
    {
        $data = [
            'items' =>  DB::table('pengaduan')
                    ->join('penduduk', 'penduduk.id' ,'=','pengaduan.penduduk_id') 
                    ->where(['slug' => $slug])
                    ->select('penduduk.*','pengaduan.*')
                    ->get(),
            'title' => 'Detail Pengaduan'
                
        ];
        return view('BackEnd.Aspirasi.A_Tanggapan',$data);
    }

    public function send(Request $request, $slug)
    {
        $error = Validator::make($request->all(),[
            
            'Tanggapan'=> 'required',  
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
           $tanggapan =  tanggapan::create([
                'pengaduan_id' => $request->id,
                'Tanggapan' => $request->Tanggapan,
                'petugas' => Auth::user()->name,
            ]);
           $pengaduan = pengaduan::where(['slug' => $request->slug])->update([
               'status' => 'Terjawab'
           ]);
          
           $pengaduan_user = pengaduan::with(['user'])->find($tanggapan->pengaduan_id);
        // dd($pengaduan);  
        // // dd($pengaduan_user);
        //   Mail::to($pengaduan_user->user)
        //   ->send(new notif($pengaduan));
             return response()->json(['success' => 'Data Pengaduan Berhasil Dijawab']);
        }
    }
    public function tanggapandetail($slug)
    {
        $data = [
            'items' => DB::table('tanggapan')
                        ->join('pengaduan', 'pengaduan.id' ,'=','tanggapan.pengaduan_id') 
                        ->where(['slug' => $slug])
                        ->select('pengaduan.*','tanggapan.*')
                        ->get(),
                'title' => 'Detail Tanggapan'
        ];
        return view('BackEnd.Aspirasi.A_Details_Tanggapan',$data);
    }

  
  
}
