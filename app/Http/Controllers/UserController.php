<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use Validator;
use Illuminate\Support\Str;
class UserController extends Controller
{
   
    public function store(Request $request)
    {
        $rule = [
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
        ];
        $error = Validator::make($request->all(),$rule);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'slug' => str::slug($request->name),
                'deskripsi' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, hic. Accusantium libero rem quas reiciendis illum aliquid, natus voluptatem officiis a quo! Aut est repudiandae ex culpa molestias magni eius.',
            ]);
            return response()->json(['success' => 'Data User Berhasil ditambah ke database']);
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['success' => 'Data User Berhasil dihapus dari database']);
    }
    public function edituser()
    {
        return view('BackEnd.Profile.v_profile');
    }
    public function updateuser(Request $request)
    {
        $rule = [
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',    
        ];
        $error = Validator::make($request->all(),$rule);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            User::where(['id' => $request->id])->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'slug' => str::slug($request->name),
                'deskripsi' => $request->deskripsi,
            ]);
            return response()->json(['success' => 'Data User diubah dari database']);
        }
    }
    public function edit($id)
    {
        $data = [
            'user' => User::find($id) 
        ];
        return view('BackEnd.Petugas.P_Edit',$data);
    }
    public function update(Request $request)
    {
        $rule = [
            'email' => 'required',
            'name' => 'required',
        
        
        ];
        $error = Validator::make($request->all(),$rule);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            User::where(['id' => $request->id])->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                
            ]);
            return response()->json(['success' => 'Data User diubah dari database']);
            }
        }
}