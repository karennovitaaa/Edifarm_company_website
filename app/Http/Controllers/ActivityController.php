<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
class ActivityController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'unique:users,username',
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'born_date' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        $input = $request->all();
        $input['password']=bcrypt($input['password']);
        $input['photo']='photo.jpg';
        $input['level']='user';
        $user = User::create($input);

        $success['token']=$user->createToken('auth_token')->plainTextToken;
        $success['name']=$user->name;
        // echo "<script>alert('Ada Kesalahan');</script>"; 
        return redirect('login')->with('toast_success', 'Registrasi Berhasil! Silahkan login dengan akun baru anda');
    }

    public function login(Request $request)
    {
        
        if(Auth::attempt(['username'=> $request->username, 'password'=> $request->password, 'level'=>'admin'])){
            $auth = Auth::user();
            $success['token']=$auth->createToken('auth_token')->plainTextToken;
            $success['name']=$auth->name;
            $success['level']=$auth->level;
            // Session::set('user_ids', $auth->id);
            // Session::set('names', $auth->name);
            $request->session()->put('nama',$auth->name);
            $request->session()->put('ids',$auth->id);
            return view('AdminTable');
        }elseif(Auth::attempt(['username'=> $request->username, 'password'=> $request->password, 'level'=>'user'])){
            $auth = Auth::user();
            $success['token']=$auth->createToken('auth_token')->plainTextToken;
            $success['name']=$auth->name;
            $success['level']=$auth->level;
            // Session::set('user_ids', $auth->id);
            // Session::set('names', $auth->name);
            $request->session()->put('nama',$auth->name);
            $request->session()->put('ids',$auth->id);
            return redirect('postingan'); 
        } else{
            return back()->with('toast_error', 'Periksa kembali username atau password anda!')->withInput();
        }
        
    }
}
