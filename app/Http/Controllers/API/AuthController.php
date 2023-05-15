<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Report;
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
    $input = $request->all();
    if ($request->has('photo')) {

        $imageName = time().'.'.request()->photo->extension();
        request()->photo->move(public_path('images/user'), $imageName);
        $path = "images/user/$imageName";
        $input['photo'] = $path;

        $blog = User::where('id', $input['id'])->update($input);
    }else{
        $blog = User::where('id', $input['id'])->update($input);
    }

    return response()->json([
        'success' => true,
        'message' => 'sukses update pengguna',
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

    public function getpost()
    {
        $users = Post::latest()->get();
 
        return response()->json([
            'success'=> true,
            'massage'=> 'sukses',
            'data'=> $users
        ]);
    }

    public function getpostuse(Request $request)
    { $validator = Validator::make($request->all(),[
            'id' => 'required']);
        $users = Post::where($users->id = $request -> id)->get();

        return response()->json([
            'success'=> true,
            'massage'=> 'sukses register',
            'data'=> $users
        ]);
    }
    public function getact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required' // Make user_id required and check if it exists in the "sessions" table
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 400);
        }
    
        $user_id = $request->user_id;
        $today = date('Y-m-d'); // Include time in the current date
    
        $activities = DB::table('activities')
            ->join('sessions', 'sessions.id', '=', 'activities.session_id')
            ->where('sessions.user_id', $user_id)
            ->where('activities.end', '>=', $today)
            ->where('activities.start', '<=', $today)
            ->select('activities.*') // Select only the activity columns
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
        $validator = Validator::make($request->all(), [
            'user_id' => 'required' // Make user_id required and check if it exists in the "sessions" table
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 400);
        }
    
        $user_id = $request->user_id;
        $today = date('Y-m-d'); // Include time in the current date
    
        $activities = DB::table('activities')
            ->join('sessions', 'sessions.id', '=', 'activities.session_id')
            ->where('sessions.user_id', $user_id)
            ->select('activities.*') // Select only the activity columns
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
  

    public function deleteData(Request $request)
    {
        $id = $request->input('id');
    
        $activity = DB::table('activities')->find($id);
    
        if (!$activity) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
               
            ], 404);
        }
    
        DB::table('activities')->where('id', $id)->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            
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

    $activity = DB::table('activities')->join('sessions','sessions.id','=','activities.session_id')->where('sessions.user_id', $request->user_id)
                        ->where('activities.id', $request->id)
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
        'id' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $activity = DB::table('activities')->find($request->id);

    if (!$activity) {
        return response()->json([
            'success' => false,
            'message' => 'Kegiatan tidak ditemukan',
            'data' => null
        ], 404);
    }

    DB::table('activities')
        ->where('id', $request->id)
        ->update(['status' => 'selesai']);

    $updatedActivity = DB::table('activities')->find($request->id);

    return response()->json([
        'success' => true,
        'message' => 'Data berhasil diupdate',
        'data' => $updatedActivity
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

    $activities = DB::table('activities')->join('sessions','sessions.id','=','activities.session_id')->where('sessions.user_id', $user_id)
        ->where(function ($query) use ($search) {
            $query->where('activities.activity_name', 'like', "%$search%")
                ->orWhere('activities.status', $search);
        })
        ->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menampilkan data aktivitas',
        'data' => $activities
    ]);
}
public function getLike(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required', // Pastikan user_id diisi
        'post_id' => 'required' // Pastikan post_id diisi
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah like dengan user_id dan post_id tersebut ada dalam tabel "likes"
    $like = Like::where('user_id', $input['user_id'])
                ->where('post_id', $input['post_id'])
                ->first();

    if (!$like) {
        return response()->json([
            'success' => false,
            'message' => 'Data like tidak ditemukan'
        ], 404);
    }

    return response()->json([
        'success' => true,
        'message' => 'Sukses mendapatkan data like',
        'data' => $like
    ]);
}

public function addLike(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required', // Pastikan user_id diisi
        'post_id' => 'required' // Pastikan post_id diisi
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah user_id dan post_id ada dalam tabel "users" dan "posts" sesuai kebutuhan
    if (!User::where('id', $input['user_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'User tidak ditemukan'
        ], 404);
    }

    if (!Post::where('id', $input['post_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Post tidak ditemukan'
        ], 404);
    }

    // Buat data like baru
    $like = new Like();
    $like->user_id = $input['user_id'];
    $like->post_id = $input['post_id'];
    $like->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menambahkan data like',
        'data' => $like
    ]);
}

public function deleteLikeByPostId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_id' => 'required' // Pastikan post_id diisi
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah post_id ada dalam tabel "posts"
    if (!Post::where('id', $input['post_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Post tidak ditemukan'
        ], 404);
    }

    // Hapus data like berdasarkan post_id
    Like::where('post_id', $input['post_id'])->delete();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menghapus data like berdasarkan post_id'
    ]);
}

public function addSession(Request $request)
{
    $validator = Validator::make($request->all(), [
        'plant_name' => 'required|unique:sessions,plant_name',
        'start' => 'required',
        'end' => 'required',
        'user_id' => 'required' // Make user_id required and check if it exists in the "users" table
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

    $session = new Session();
    $session->plant_name = $input['plant_name'];
    $session->start = $input['start'];
    $session->end = $input['end'];
    $session->status = $input['status'];
    $session->user_id = $input['user_id'];
    $session->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menambahkan data sesi',
        'data' => $session
    ]);
}

public function getSessionByUserId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required' // Make user_id required and check if it exists in the "users" table
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $user_id = $request->user_id;

    $sessions = Session::where('user_id', $user_id)->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses mendapatkan data sesi berdasarkan user_id',
        'data' => $sessions
    ]);
}

public function getses(Request $request){
    $validator = Validator::make($request->all(), [
        'user_id' => 'required' // Make user_id required and check if it exists in the "users" table
    ]);
    
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }
    
    $user_id = $request->user_id;
    
    $sessions = Session::where('user_id', $user_id)
                        ->where('status', 'belum')
                        ->get();
    
    return response()->json([
        'success' => true,
        'message' => 'Sukses mendapatkan data sesi berdasarkan user_id dan status belum',
        'data' => $sessions
    ]);
    
}

public function countLikesByPostId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_id' => 'required' // Pastikan post_id diisi
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah post_id ada dalam tabel "posts"
    if (!Post::where('id', $input['post_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Post tidak ditemukan'
        ], 404);
    }

    // Hitung jumlah user_id berdasarkan post_id
    $count = Like::where('post_id', $input['post_id'])->count();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menghitung jumlah likes',
        'data' => $count
    ]);
}

public function updateSession(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id' => 'required',
        'start' => 'required',
        'end' => 'required',
        'status' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $id = $request->input('id');

    $session = Session::where('id', $id)
        ->first();

    if (!$session) {
        return response()->json([
            'success' => false,
            'message' => 'Data sesi tidak ditemukan'
        ], 404);
    }

    $session->fill($request->all());
    $session->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses mengupdate data sesi',
        'data' => $session
    ]);
}


public function updateStatusSession(Request $request)
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

    $activity = Session::find($request->id);

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

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'massage' => 'data tdk lengkap',
                'data' => $validator->errors()->first(),
            ], 403);
        }

        $input = $request->all();
        $report = Report::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Sukses menambah komentar',
            'data' => $report
        ]);
        
    }

public function deleteStatusSession(Request $request)
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

    $activity = Session::find($request->id);

    if (!$activity) {
        return response()->json([
            'success' => false,
            'message' => 'Kegiatan tidak ditemukan',
        
        ], 404);
    }

    $activity->user_id = $request->user_id;
  
    $activity->delete();

    return response()->json([
        'success' => true,
        'message' => 'Data berhasil diupdate',
       
    ]);
}

public function postLike(Request $request)
    {
        $id = $request->input('user_id');
    
        $posts = DB::table('likes')->join('posts','posts.id','=','likes.post_id')->where('likes.user_id', $id)
            ->get();
    
        if ($posts->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data Postingan yang anda sukai',
                'data' => []
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Sukses mendapatkan data',
                'data' => $posts
            ]);
        }
    }

    public function getComment(Request $request)
    {
        $postId = $request->input('post_id');
    
        $comment = DB::table('comments')->join('users','comments.user_id','=','users.id')->where('post_id', $postId)->get();
    
        if ($comment->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data komentar',
                'data' => []
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Sukses mendapatkan data',
                'data' => $comment
            ]);
        }
    }

    public function addComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required',
            'user_id' => 'required',
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'massage' => 'data tdk lengkap',
                'data' => $validator->errors()->first(),
            ], 403);
        }

        $input = $request->all();
        $user = Comment::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Sukses menambah komentar',
            'data' => $user
        ]);
        
    }

    public function deleteComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required',
            'user_id' => 'required',
            'comment_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'massage' => 'data tdk lengkap',
                'data' => $validator->errors()->first(),
            ], 403);
        }

        $user = Comment::where('user_id', $request['user_id'])->where('post_id', $request['post_id'])->where('id', $request['comment_id'])->get();
        if ($user->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }else{
            Comment::where('id', $request['comment_id'])->delete();
            return response()->json([
                'success' => true,
                'message' => 'Sukses menghapus data',
            ]);
        }
    }

    public function addReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required',
            'user_id' => 'required',
            'reason' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'massage' => 'data tdk lengkap',
                'data' => $validator->errors()->first(),
            ], 403);
        }

        $input = $request->all();
        $report = Report::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Sukses menambah komentar',
            'data' => $report
        ]);
        
    }
}
