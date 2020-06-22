<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('v_auth');
    }
    public function proccess(Request $request)
    {
        $rule = [
            'email' => 'required',
            'password' => 'required'
        ];
        $error = Validator::make($request->all(),$rule);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }
       if(Auth::attempt(['email' =>$request->email, 'password'=>$request->password])){
           return response()->json(['success' => 'Login Berhasil!']);
       } else{
           return response()->json(['error' => 'Password atau Email anda Salah !']);
       }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
 
}