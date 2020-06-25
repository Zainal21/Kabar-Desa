<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use Validator;
class UserController extends Controller
{
    public function getpetugas(Request $request)
    {
        if($request->ajax()){
            $data = User::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="/home/petugas/delete/'.$data->id.'" class="btn btn-outline-danger ml-2 btn-user-delete" id="'.$data->id.'"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
    public function store(Request $request)
    {
        $rule = [
            'email' => 'required',
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
                'role' => $request->role
            ]);
            return response()->json(['success' => 'Data User Berhasil ditambah ke database']);
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['success' => 'Data User Berhasil dihapus dari database']);
    }
}
