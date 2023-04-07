<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Validator;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'phone' => 'required',
            'address' => 'required',
            'born_date' => 'required',
        
        ]);

        if($validator->fails()){
            return response()->json([
                'success'=> false,
                'massage' => 'ada kesalahan',
                'data'=> $validator -> errors()->first()
            ], 403);
        }
        $input = $request->all();
        $input['password']=bcrypt($input['password']);
        $input['level']='user';
        $input['photo']='can.png';
        $user = User::create($input);

        $success['token']=$user->createToken('auth_token')->plainTextToken;
        $success['name']=$user->name;

        return response()->json([
            'success'=> true,
            'massage'=> 'sukses register',
            'data'=> $success
        ]);
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['username'=> $request->username, 'password'=> $request->password, 'level'=>'admin'])){
            $auth = Auth::user();
            $success['token']=$auth->createToken('auth_token')->plainTextToken;

            $success['name']=$auth->name;

            $success['level']=$auth->level;

            return response()->json([
                'success'=> true,
                'massage'=> 'login admin sukses',
                'data'=> $success
            ]);
        }elseif(Auth::attempt(['username'=> $request->username, 'password'=> $request->password, 'level'=>'user'])){
            $auth = Auth::user();
            $success['token']=$auth->createToken('auth_token')->plainTextToken;
            $success['username']=$auth->username;
            $success['level']=$auth->name;
         

            return response()->json([
                'success'=> true,
                'massage'=> 'login user sukses',
                'data'=> $success
            ]);
            //return redirect('postingan'); 
        } else{
            return response()->json([
                'success'=> false,
                'massage'=> 'Pastikan username dan password sudah benar',
                'data'=> null
            ]);
        }
        
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'caption' => 'required',
            'post_latitude' => 'required',
            'post_longitude' => 'required',
            'user_id' => 'required'
        ]);
    
        if($validator->fails()){
            return response()->json([
                'success'=> false,
                'message' => 'Ada kesalahan',
                'data'=> $validator->errors()->first()
            ], 404);
        }
    
        // Proses upload gambar
        $file = $request->file('image')->getClientOriginalName();
        $path = $file->store('public/images');
        $url = Storage::disk('public')->url($path);

    
        // Simpan data post ke database
        $input = $request->all();
        $input['image_path'] = $path;
        $post = Post::create($input);
    
        $success = [
            'id' => $post->id,
            'caption' => $post->caption,
            'image_url' => $url,
            'image'=> $file
        ];
    
        return response()->json([
            'success'=> true,
            'message'=> 'Sukses membuat post baru',
            'data'=> $success
        ]);
    }
    
}