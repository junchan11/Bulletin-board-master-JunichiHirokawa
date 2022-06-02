<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Users\User;



class RegisterController extends Controller
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

public function register(){

        return view('auth.register');
    }


protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'mail' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);
    }



    protected function create(Request $request)
    {
        $input=$request->input();
        User::create([
            'username' =>$input['username'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        return view('auth.added');
    }



}
