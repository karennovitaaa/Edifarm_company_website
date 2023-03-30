<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BlogController extends Controller
{
    public function table(){
		$users = User::get();

        //$datas = compact('users');
		return view('AdminTable', compact('users'));
	}
	public function lapor(){
		return view('AdminLapor');
	}
    public function post(){
		return view('postingan');
	}
	public function profile(){
		return view('profile');
	}
	public function editprofile(){
		return view('edit_profil');
	}
	public function destroy($id) {
		$blog = User::where('id',$id)->delete();
		return redirect('/table');
	}
}
