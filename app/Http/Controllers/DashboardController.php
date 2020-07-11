<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
use Validator;
use App\Konten;
use App\penduduk;
use App\pekerjaan;
use App\kebutuhan;
use App\User;
use App\UMKM;
use App\pengaduan;

use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
       $this->vars=
        [
            'title' => 'Dashboard | Kabar Desa',
            'artikel' => konten::all()->count(),
            'pekerjaan' => pekerjaan::all()->count(),
            'kebutuhan' => kebutuhan::all()->count(),
            'user' => User::all()->count(),
            'news' => Konten::where(['status' => 'Publish'])->latest()->paginate(1),
            'umkm' => umkm::all()->count(),
            'aspirasi'=> pengaduan::where(['status' => 'Terjawab'])->count()  
       ];
        return view('BackEnd.v_home',$this->vars);
    }
    public function petugas()
    {
        $this->vars = [
            'title' => 'Master Petugas',
           ];
        return view('BackEnd.Petugas.P_Petugas',$this->vars);
    }
    public function  penduduk()
    {
        $this->vars = [
            'title' => 'Master Penduduk',
           ];
        return view('BackEnd.Penduduk.P_Penduduk',$this->vars);
    }
  

    public function creatependuduk()
    {
        $this->vars = 
        [
            'title' => 'Tambah Penduduk',
            'pekerjaan' =>pekerjaan::all()
        ];
        return view('BackEnd.Penduduk.v_create_penduduk',$this->vars);
    }
    public function storependuduk(Request $request)
    {
        $error = Validator::make($request->all(),[
            'NIK' => 'required',
            'Nama_penduduk' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan_id' => 'required',
            'jenis_kelamin' => 'required',
            'Status_kawin' => 'required',
            'agama' => 'required', 
            'alamat' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
           $user =  User::create([
                'name' => $request->Nama_penduduk,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'slug' => str::slug($request->Nama_penduduk)
            ]);
            penduduk::create([
                'NIK' => $request->NIK,
                'Nama_penduduk' => $request->Nama_penduduk,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pekerjaan_id' => $request->pekerjaan_id,
                'jenis_kelamin' => $request->jenis_kelamin,
                'Status_kawin' => $request->Status_kawin,
                'agama' => $request->agama, 
                'alamat' => $request->alamat,
                'user_id' => $user->id
            ]);
         
         return response()->json(['success' => 'Data Masyarakat Berhasil ditambahkan ke database']);
        }
    }
    public function destroypenduduk($id)
    {
        penduduk::destroy($id);
        return response()->json(['success' => 'Data Masyarakat Berhasil dihapus dari database']);
    }
   public function editpenduduk($id)
   {
    $this->vars = 
    [
        'title' => 'Edit Penduduk',
        'pekerjaan' =>pekerjaan::all(),
        'penduduk' => penduduk::find($id)
    ];
        return view('BackEnd.Penduduk.v_edit',$this->vars);
   }
   public function updatedatapenduduk(Request $request,$id)
   {
        $request->validate([
            'NIK' => 'required',
            'Nama_penduduk' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'Status_kawin' => 'required',
            'agama' => 'required', 
            'alamat' => 'required'
        ]);
        penduduk::where(['id' => $id])->update([
            'NIK' => $request->NIK,
            'Nama_penduduk' => $request->Nama_penduduk,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan_id' => $request->pekerjaan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'Status_kawin' => $request->Status_kawin,
            'agama' => $request->agama, 
            'alamat' => $request->alamat,
        ]);
      return redirect()->back()->with('status', 'Data Sukses Diubah');
        
    
   }
}
