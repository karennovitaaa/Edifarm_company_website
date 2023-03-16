<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'level' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'hp' => 'required',
            'alamat' => 'required',
            'lahir' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=> false,
                'massage' => 'ada kesalahan',
                'data'=> $validator -> errors()
            ]);
        }
        $input = $request->all();
        $input['password']=bcrypt($input['password']);
        $user = tb_akun::create($input);

        $success['token']=$user->createToken('auth_token')->plainTextToken;
        $success['name']=$user->name;

        return response()->json([
            'success'=> true,
            'massage'=> 'sukses register',
            'data'=> $success
        ]);
    }
}
