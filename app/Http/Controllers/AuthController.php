<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
       $username=  $request['username'];
        $password= $request['password'];
        if(Auth::attempt(['name'=>$username,'password'=>$password]))
        {

            return view(   'admin.Layout',['user'=>Auth::user()]);
        }
        else{
            return view('dangnhap',['error'=>'dang nhap that bai']);
        }

    }
}
