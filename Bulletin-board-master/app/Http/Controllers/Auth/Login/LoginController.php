<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if($request->isMethod('post')){ //POSTメソッドか判定

            $data=$request->only('email','password');

            if(Auth::attempt($data)){
                return redirect('/top');
            }
        }
        return view("auth.login");
    }

    public function logout(){
        Auth::logout();

        return view("auth.login");
    }
}
