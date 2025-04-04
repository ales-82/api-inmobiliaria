<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(RegisterPostRequest $request){      
       
        //return $request->username;
        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        return response()->json([
            'message'=>'Usuario registrado con exito',            
        ],200);

    }

    public function login(LoginPostRequest $request){

        $user = User::select('id','username','email','password')->where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message'=>'usuario no registrado'],401);
        }

        return response()->json([
            'message'=>'usuario encontrado',
            'usuario'=>$user,
        ],200);

    }

}
