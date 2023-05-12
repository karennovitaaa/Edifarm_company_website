<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use App\Models\Post;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



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
        $input['latitude'] = 'gbhnjkm';
        $input['longitude'] = 'ftgyhuik';
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
          
            $success['name']=$auth->name;
            $success['username']=$auth->username;
            $success['photo']=$auth->photo;
            $success['address']=$auth->address;
            $success['phone']=$auth->phone;
            $success['born_date']=$auth->born_date;
            $success['email']=$auth->email;
            $success['id']=$auth->id;
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
            $success['level']=$auth->level;
            $success['name']=$auth->name;
            $success['username']=$auth->username;
            $success['photo']=$auth->photo;
            $success['address']=$auth->address;
            $success['phone']=$auth->phone;
            $success['born_date']=$auth->born_date;
            $success['email']=$auth->email;
            $success['id']=$auth->id;
            $success['level']=$auth->level;

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


public function update(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id' => 'required',
        'username' => 'required',
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'born_date' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors()->first(),
            'data' => $validator->errors()->first()
        ], 404);
    }

    $input = $request->all();
    $blog= User::where('id', $input['id'])->update([
        'username'=>$request->username, 
        'name'=>$request->name, 
        'email'=>$request->email, 
        'phone'=>$request->phone, 
        'address'=>$request->address, 
        'born_date'=>$request->born_date
    ]);

    return response()->json([
        'success' => true,
        'message' => 'sukses update pengguna',
        'data' => $input
    ]);
}




    public function post(Request $request)
{
    $validator = Validator::make($request->all(), [
        'caption' => 'required',
        'post_latitude' => 'required',
        'post_longitude' => 'required',
        'user_id' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

        if($validator->fails()){
            return response()->json([
                'success'=> false,
                'massage' => 'ada kesalahan',
                'data'=> $validator -> errors()->first()
            ], 403);
        }
        $imageName = time().'.'.request()->image->extension();
        request()->image->move(public_path('images/post'), $imageName);
        $path = "images/post/$imageName";

        $input = $request->all();
        $input['image'] = $path;

        $user = Post::create($input);

    return response()->json([
        'success' => true,
        'message' => 'Sukses membuat post',
        'data' => $user
    ]);
}

    public function getpost(Request $request)
    {
        $users = DB::table('posts')->join('users','users.id','=','posts.user_id')->get();
 
        return response()->json([
            'success'=> true,
            'massage'=> 'sukses',
            'data'=> $users
        ]);
    }

    public function getact(Request $request)
    {
        $id = $request->input('id');
        $today = date('Y-m-d');
    
        $activities = Activity::where('user_id', $id)
            ->whereDate('end', '>=', $today)
            ->whereDate('start', '<=', $today)
            ->get();
    
        if ($activities->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data Activity untuk user dengan ID tersebut',
                'data' => []
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Sukses mendapatkan data',
                'data' => $activities
            ]);
        }
    }
    

    public function getActFull(Request $request)
    {
        $id = $request->input('id');
        
        $activities = Activity::where('user_id', $id)->get();
        
        if ($activities->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data Activity untuk user dengan ID tersebut',
                'data' => []
            ]);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Sukses mendapatkan data Activity',
            'data' => $activities
        ]);
    }
    

public function addActivity(Request $request)
{
    $validator = Validator::make($request->all(), [
        'activity_name' => 'required',
        'status' => 'required',
        'start' => 'required',
        'end' => 'required',
        'user_id' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }
    $activity = new Activity();
    $activity->timestamps = false; // tambahkan baris ini
  
    $activity->activity_name = $request->activity_name;
    $activity->status = $request->status;
    $activity->start = $request->start;
    $activity->end = $request->end;
    $activity->user_id = $request->user_id;
    $activity->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menambahkan data aktivitas',
        'data' => $activity
    ]);
}

public function deleteData(Request $request)
{$id = $request->input('id');
    $userId = $request->input('user_id');
    

    $activity = Activity::where('user_id', $userId)->find($id);

    if (!$activity) {
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan'
        ], 404);
    }

    $activity->delete();

    return response()->json([
        'success' => true,
        'message' => 'Data berhasil dihapus'
    ]);
}

public function updateActivity(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id' => 'required',
        'user_id' => 'required',
        'activity_name' => 'required',
        'status' => 'required',
        'start' => 'required',
        'end' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $activity = Activity::where('user_id', $request->user_id)
                        ->where('id', $request->id)
                        ->first();

    if (!$activity) {
        return response()->json([
            'success' => false,
            'message' => 'Tidak ada data Activity untuk user dengan ID dan Activity ID tersebut',
            'data' => []
        ]);
    }

    $activity->activity_name = $request->activity_name;
    $activity->status = $request->status;
    $activity->start = $request->start;
    $activity->end = $request->end;
    $activity->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses mengupdate data Activity',
        'data' => $activity
    ]);
}


public function updateStatus(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'id' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $activity = Activity::find($request->id);

    if (!$activity) {
        return response()->json([
            'success' => false,
            'message' => 'Kegiatan tidak ditemukan',
            'data' => null
        ], 404);
    }

    $activity->user_id = $request->user_id;
    $activity->status = 'selesai'; // Set status ke "selesai" secara otomatis
    $activity->save();

    return response()->json([
        'success' => true,
        'message' => 'Data berhasil diupdate',
        'data' => $activity
    ]);
}

public function filterActivity(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'search' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $user_id = $request->user_id;
    $search = $request->search;

    $activities = Activity::where('user_id', $user_id)
        ->where(function ($query) use ($search) {
            $query->where('activity_name', 'like', "%$search%")
                ->orWhere('status', $search);
        })
        ->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menampilkan data aktivitas',
        'data' => $activities
    ]);
}



public function addSession(Request $request) {
    
    $validator = Validator::make($request->all(), [
        'plant_name' => 'required',
        'start' => 'required',
        'end' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }
    $input = $request->all();
    $input['status'] = "belum";
    $user = Session::create($input);

    return response()->json([
        'success' => true,
        'message' => 'Sukses menampilkan data aktivitas',
        'data' => $user
    ]);
}

}
