<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pekerjaan;
use DataTables;
class JobController extends Controller
{
    public function index()
    {
        return view('BackEnd.Penduduk.P_Pekerjaan');
    }
    public function getpekerjaan(Request $request)
    {
        
        if($request->ajax()){
            $data = pekerjaan::all();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-outline-danger ml-2"><i class="fas fa-trash"></i></a>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
        }
    }
}
