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
       $data = [
        'title' => 'Dashboard | Kabar Desa',
        'artikel' => konten::all()->count(),
        'pekerjaan' => pekerjaan::all()->count(),
        'kebutuhan' => kebutuhan::all()->count(),
        'user' => User::all()->count(),
        'news' => Konten::latest()->paginate(1),
        'umkm' => umkm::all()->count(),
        'aspirasi'=> pengaduan::where(['status' => 'Terjawab'])->count()
    
       ];
        return view('BackEnd.v_home',$data);
    }
    public function petugas()
    {
        $data = [
            'title' => 'Master Petugas',
           ];
        return view('BackEnd.Petugas.P_Petugas',$data);
    }
    public function  penduduk()
    {
        $data = [
            'title' => 'Master Penduduk',
           ];
        return view('BackEnd.Penduduk.P_Penduduk',$data);
    }
    public function getPenduduk(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('penduduk')
                    ->join('pekerjaan','pekerjaan.id' ,'=', 'penduduk.pekerjaan_id')
                    ->select('penduduk.*', 'pekerjaan.nama_pekerjaan')
                    ->get();
                return DataTables::of($data)
                ->addColumn('action', function($data){
                    $btn = '<a href="/home/penduduk/edit/'.$data->id.'" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/penduduk/delete/'.$data->id.'" class="btn btn-sm  btn-outline-danger btn-penduduk-hapus" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
        }
    }

    public function creatependuduk()
    {
        $data = 
        [
            'title' => 'Tambah Penduduk',
            'pekerjaan' =>pekerjaan::all()
        ];
        return view('BackEnd.Penduduk.v_create_penduduk',$data);
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
    $data = 
    [
        'title' => 'Edit Penduduk',
        'pekerjaan' =>pekerjaan::all(),
        'penduduk' => penduduk::find($id)
    ];
        return view('BackEnd.Penduduk.v_edit',$data);
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
