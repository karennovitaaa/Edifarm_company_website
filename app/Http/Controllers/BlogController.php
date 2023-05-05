<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function table(){
		$users = User::get();
        //$datas = compact('users');
		return view('AdminTable', compact('users'));
	}
	public function lapor(){
		// $reports = Report::with('users')->get();
		$reports = DB::table('reports')
		->join('users', 'reports.user_id', '=', 'users.id')->get();
		// return var_dump($reports);
		return view('AdminLapor', compact('reports'));
	}
	public function adminprofile(){
		return view('AdminProfile');
	}
    public function post(){
		return view('postingan');
	}
	public function profile(){
		return view('profile');
	}
	public function editprofile(){
		$id = session('ids');
		$reports = DB::table('users')->where('id', $id)->get();
		// return var_dump($reports);
		return view('edit_profile', compact('reports'));
	}
	public function destroy($id) {
		$blog = User::where('id',$id)->delete();
		return redirect('/table');
	}
	public function profileup(Request $request, $id) {
		$blog = User::where('id',$id)->update([
		'username'=> $request->username,
        'name'=> $request->name,
        'gender'=> $request->gender,
        'address'=> $request->address,
        'phone'=> $request->phone,
        'born_date'=> $request->born_date,
        'email'=> $request->email
	]);
		$request->session()->put('nama',$request->name);
		return redirect('/profile');
	}
}
