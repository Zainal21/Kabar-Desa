<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
class UserController extends Controller
{
    public function getpetugas(Request $request)
    {
        if($request->ajax()){
            $data = User::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
}
