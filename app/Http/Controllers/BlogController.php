<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function table(){
		return view('AdminTable');
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
	
}
