<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SideController extends Controller
{
    public function post(){
		return view('postingan');
	}
	public function profile(){
		return view('profile');
	}
	public function editprofile(){
		return view('edit_profil');
	}
	public function activity(){
		return view('activity');
	}
}