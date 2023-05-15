<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class ActivityController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'unique:users,username',
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'born_date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $validated = $validator->validated();

        $user = User::create([
            'username' => $validated['username'],
            'name' => $validated['name'],
            'gender' => 'Laki-laki',
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'born_date' => $validated['born_date'],
            'photo' => 'photo.jpg',
            'level' => 'user',
        ]);

        // echo "<script>alert('Ada Kesalahan');</script>";
        return redirect('login')->with('toast_success', 'Registrasi Berhasil! Silahkan login dengan akun baru anda');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'level' => 'admin'])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['level'] = $auth->level;
            // Session::set('user_ids', $auth->id);
            // Session::set('names', $auth->name);
            $request->session()->put('nama', $auth->name);
            $request->session()->put('ids', $auth->id);
            $request->session()->put('username', $auth->username);
            $request->session()->put('photo', $auth->photo);

            return redirect('table');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'level' => 'user'])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['level'] = $auth->level;
            // Session::set('user_ids', $auth->id);
            // Session::set('names', $auth->name);
            $request->session()->put('nama', $auth->name);
            $request->session()->put('ids', $auth->id);
            $request->session()->put('username', $auth->username);
            $request->session()->put('photo', $auth->photo);

            return redirect('postingan');
        } else {
            return back()->with('toast_error', 'Periksa kembali username atau password anda!')->withInput();
        }

    }
}
