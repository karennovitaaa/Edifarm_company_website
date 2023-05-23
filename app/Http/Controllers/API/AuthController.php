<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Session;
use App\Models\Documentation;
use App\Models\Rating;
use App\Models\Comment;
use App\Models\PostActivity;
use App\Models\Models\Documentation as ModelsDocumentation;
use App\Models\Report;
use PDF;
use League\Flysystem\FilesystemException;
use League\Flysystem\UnableToCreateDirectory;
use League\Flysystem\UnableToWriteFile;

use Illuminate\Support\Str;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use EmailServices;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
            // 'address' => 'required',
            'born_date' => 'required',
            'latitude' => 'required', 
            'longitude' => 'required'

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
    public function gantiPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'otp' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 403);
        }
    
        $otp = $request->input('otp');
        $user = User::where('otp', $otp)->first();
    
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'OTP tidak valid',
            ], 403);
        }
    
        $user->password = bcrypt($request->input('password'));
        $user->otp = null; // Hapus OTP setelah digunakan
        $user->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Sukses ganti password',
        ]);
    }
    
    public function gantiPasswordByUserId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'password' => 'required',
        'confirm_password' => 'required|same:password'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $user_id = $request->input('user_id');
    $user = User::find($user_id);

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User tidak ditemukan',
        ], 404);
    }

    $user->password = bcrypt($request->input('password'));
    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Sukses ganti password',
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
    public function checkEmail(Request $request)
    {
        $OTP_base = "";
    
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 403);
        }
    
        $email = $request->email;
        $user = User::where('email', $email)->first();
    
        if ($user) {
            $success['user'] = $user;
    
            $mail = new PHPMailer(true);
            $OTP_base = strval(mt_rand(100000, 999999));
    
            try {
                $mail->isSMTP();
                $mail->Host = 'leafeon.rapidplex.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'edifarm_company@okifirsyah.com';
                $mail->Password = '[~jcwaUM-Jh%';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
    
                $mail->setFrom('edifarm_company@okifirsyah.com', 'Edifarm_Company');
                $mail->addAddress($email);
                $mail->addAddress($email, 'Name');
    
                $mail->isHTML(true);
                $mail->Subject = 'Subject';
                $mail->Body = 'Kode OTP' . $OTP_base;
                $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                $mail->send();
    
                $user->otp = $OTP_base;
                $user->save();
    
                return response()->json([
                    'success' => true,
                    'message' => 'Email ditemukan',
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email gagal dikirim',
                    'error' => $e->getMessage()
                ], 500);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email tidak ditemukan',
                'data' => null
            ]);
        }
    }
    
    
    public function generateReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'session_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 400);
        }
    
        // Mengambil data user berdasarkan user_id
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User tidak ditemukan',
                'data' => null
            ], 404);
        }
    
        // Mengambil data session berdasarkan session_id dan user_id
        $session = Session::where('id', $request->session_id)
            ->where('user_id', $request->user_id)
            ->first();
    
        if (!$session) {
            return response()->json([
                'success' => false,
                'message' => 'Session tidak ditemukan',
                'data' => null
            ], 404);
        }
    
        // Mengambil data aktivitas berdasarkan session_id
        $activities = Activity::where('session_id', $request->session_id)->get();
    
        // Generate PDF menggunakan metode loadView()
        $pdf = PDF::loadView('report', ['user' => $user, 'session' => $session, 'activities' => $activities]);
    
        // Mendapatkan nama unik untuk file PDF
        $pdfFileName = 'report_' . time() . '.pdf';
    
        $pdf->save(public_path('reports/' . $pdfFileName));

    
        // Simpan informasi file PDF ke database
        $report = Documentation::create([
            'user_id' => $request->user_id,
            'session_id' => $request->session_id,
            'pdf_file' => $pdfFileName,
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Laporan PDF berhasil dibuat dan disimpan',
            'data' => [
                'report_id' => $report->id,
                'pdf_file' => $pdfFileName,
            ]
        ]);
    }
    
    public function downloadPDF(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid request',
            'errors' => $validator->errors(),
        ], 400);
    }

    $id = $request->input('id');

    $report = Documentation::find($id);

    if (!$report) {
        return response()->json([
            'success' => false,
            'message' => 'Report not found',
            'data' => null,
        ], 404);
    }

    $pdfFilePath = public_path('reports/' . $report->pdf_file);

    if (!file_exists($pdfFilePath)) {
        return response()->json([
            'success' => false,
            'message' => 'PDF file not found',
            'data' => null,
        ], 404);
    }

    // Mendapatkan URL tautan untuk mengunduh file PDF
    $downloadUrl = url('/reports/' . $report->pdf_file);

    return response()->json([
        'success' => true,
        'message' => 'Download link for PDF generated',
        'data' => [
            'download_url' => $downloadUrl,
        ],
    ]);
}

public function getPostActivity(Request $request)
{
    $postActivity = PostActivity::join('sessions', 'post_activity.session_id', '=', 'sessions.id')
        ->join('users', 'post_activity.user_id', '=', 'users.id')
        ->select('post_activity.*', 'sessions.plant_name', 'users.name', 'users.username', 'users.email', 'users.address')
        ->orderBy('post_activity.created_at', 'desc')
        ->get();

    // Menghapus bagian waktu dari string tanggal
// Mengubah format tanggal
$postActivity = $postActivity->map(function ($activity) {
    $activity->created_at = date('Y-m-d', strtotime($activity->created_at));
    $activity->updated_at = date('Y-m-d', strtotime($activity->updated_at));
    return $activity;
});

// Menghapus bagian waktu dari string tanggal
$postActivity = $postActivity->map(function ($activity) {
    $activity->created_at = substr($activity->created_at, 0, 10);
    $activity->updated_at = substr($activity->updated_at, 0, 10);
    return $activity;
});

// Alternatif: Menggunakan Carbon
$postActivity = $postActivity->map(function ($activity) {
    $activity->created_at = \Carbon\Carbon::parse($activity->created_at)->toDateString();
    $activity->updated_at = \Carbon\Carbon::parse($activity->updated_at)->toDateString();
    return $activity;
});
    return response()->json([
        'success' => true,
        'message' => 'Data berhasil diambil',
        'data' => $postActivity
    ]);
}

    public function getAllDocumentations(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
    
        $user_id = $request->user_id;
    
        $documentations = Documentation::join('sessions', 'documentations.session_id', '=', 'sessions.id')
            ->where('documentations.user_id', $user_id)
            ->select('documentations.*', 'sessions.plant_name', 'documentations.created_at as documentation_created_at', 'sessions.created_at as session_created_at')
            ->get();
    
        return response()->json([
            'success' => true,
            'message' => 'Data documentations berhasil diambil',
            'data' => $documentations,
        ]);
    }
    
    public function addPostActivity(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'session_id' => 'required',
        'pdf_file' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors()
        ], 400);
    }

    $user_id = $request->input('user_id');
    $session_id = $request->input('session_id');
    $pdf_file = $request->input('pdf_file');

    $postAct = new PostActivity();
    $postAct->user_id = $user_id;
    $postAct->session_id = $session_id;
    $postAct->pdf_file = $pdf_file;
    $postAct->save();

    return response()->json([
        'success' => true,
        'message' => 'Data berhasil ditambahkan',
        'data' => $postAct
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
    public function createShareableLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|exists:posts,id'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }
    
        $post_id = $request->input('post_id');
        $post = Post::find($post_id);
    
        // Generate shareable link
        $link = 'your-mobile-app-scheme://open/post/' . $post->id;
    
        return response()->json([
            'success' => true,
            'message' => 'Link share berhasil dibuat',
            'data' => [
                'link' => $link
            ]
        ]);
    }
    
    public function deletePostByPostId(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()->first()
            ], 403);
        }
    
        $post_id = $request->input('post_id');
    
        $post = Post::find($post_id);
    
        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Post tidak ditemukan',
                'data' => null
            ], 404);
        }
    
        $post->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Sukses menghapus post',
            'data' => $post
        ]);
    }
    

    public function getPostsByUserId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $user_id = $request->input('user_id');

    $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address', 'users.latitude', 'users.longitude')
                ->where('posts.user_id', $user_id)
                ->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses',
        'data' => $posts
    ]);
}

public function getPostsByUsername(Request $request)
{
    $validator = Validator::make($request->all(), [
        'search' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 403);
    }

    $search = $request->input('search');

    $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address', 'users.latitude', 'users.longitude')
                ->where('users.username', $search)
                ->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses',
        'data' => $posts
    ]);
}

public function update(Request $request)
{   
    $user_id = $request->input('user_id');
    $user = User::find($user_id);
    
    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User not found',
            'data' => null
        ], 404);
    }
    
    $user->username = $request->input('username');
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    $user->address = $request->input('address');
    $user->born_date = $request->input('born_date');
    
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = time().'.'.$photo->extension();
        $photo->move(public_path('images/user'), $photoName);
        $user->photo = 'images/user/'.$photoName;
    }
    
    $user->save();
    
    return response()->json([
        'success' => true,
        'message' => 'User updated successfully',
        'data' => $user
    ]);
}
public function checkOtp(Request $request)
{
    $validator = Validator::make($request->all(), [
        'otp' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors()
        ], 400);
    }

    $userOtp = $request->input('otp');

    $user = User::where('otp', $userOtp)->first();
    if ($user) {
        // OTP valid, lakukan tindakan yang sesuai
        return response()->json([
            'success' => true,
            'message' => 'OTP valid'
        ]);
    } else {
        // OTP tidak valid, berikan respons yang sesuai
        return response()->json([
            'success' => false,
            'message' => 'OTP tidak valid'
        ], 400);
    }
}


//     if(isset($input['password'])){
//         $input['password'] = bcrypt($input['password']);
//     }

//     $user->update($input);
    
//     return response()->json([
//         'success'=> true,
//         'message'=> 'User updated successfully',
//         'data'=> $user
//     ], 200);
// }


    // public function post(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
           
    //         'caption' => 'required',
    //         'post_latitude' => 'required',
    //         'post_longitude' => 'required',
    //         'user_id' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);
    
    //     if($validator->fails()){
    //         return response()->json([
    //             'success'=> false,
    //             'message' => 'Ada kesalahan',
    //             'data'=> $validator->errors()->first()
    //         ], 404);
    //     }
    
    //     // Proses upload gambar
    //     $image = $request->file('image');
    //     $fileName = time() . '.' . $image->getClientOriginalExtension();
    //     $path = $image->storeAs('public/images', $fileName);
    //     $url = Storage::url($path);
    
    //     // Simpan data post ke database
    //     $input = $request->all();
    //     $input['image_path'] = $fileName; // mengupdate nama file ke database
    //     $post = Post::create($input);
    
    //     $success = [
    //         'id' => $post->id,
    //         'caption' => $post->caption,
    //         'image' => $url
    //     ];
    
    //     return response()->json([
    //         'success'=> true,
    //         'message'=> 'Sukses membuat ',
    //         'data'=> $success
    //     ]);
    // }
//     public function post(Request $request)
//     {
//         $validator = Validator::make($request->all(),[
//             'image' => 'required|file|max:7000', // max 7MB
//             'caption' => 'required',
//             'post_latitude' => 'required',
//             'post_longitude' => 'required',
//             'user_id' => 'required'
//         ]);

//         if($validator->fails()){
//             return response()->json([
//                 'success'=> false,
//                 'massage' => 'ada kesalahan',
//                 'data'=> $validator -> errors()->first()
//             ], 403);
//         }
//         $file = $request->file('image');
//         $name = $file->getClientOriginalName();
//         $path = $file->store('public/images');
//         $url = Storage::url($path);

//         // $path = Storage::putFile(
//         //     'public/images',
//         //     $request->file('image'),
//         // );

//         $input = $request->all();
//         $input['image'] = $path;
//         $user = Post::create($input);

//         return response()->json([
//             'success'=> true,
//             'massage'=> 'sukses post'
//         ]);
//     }

// public function getpost()
// {
//     $users = Post::join('users', 'posts.user_id', '=', 'users.id')
//                 ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address', 'users.latitude', 'users.longitude')
//                 ->get();

//     return response()->json([
//         'success' => true,
//         'message' => 'Sukses',
//         'data' => $users
//     ]);
// }




public function getLikesByUserId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid user ID',
            'errors' => $validator->errors(),
        ], 400);
    }

    $userId = $request->input('user_id');
    $likes = Like::where('likes.user_id', $userId)
    ->join('posts', 'likes.post_id', '=', 'posts.id')
    ->join('users', 'posts.user_id', '=', 'users.id')
    ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address', 'users.latitude', 'users.longitude')
    ->get();


    return response()->json([
        'success' => true,
        'message' => 'Likes retrieved successfully',
        'data' => $likes,
    ]);
}


public function getpost(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid user ID',
            'errors' => $validator->errors()
        ], 400);
    }

    $userId = $request->input('user_id');

    $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
        ->leftJoin('likes', function ($join) use ($userId) {
            $join->on('likes.post_id', '=', 'posts.id')
                ->where('likes.user_id', '=', $userId);
        })
        ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address', 'users.latitude', 'users.longitude')
        ->orderBy('posts.created_at', 'desc')
        ->orderBy('likes.created_at', 'desc')
        ->get();

    return response()->json([
        'success' => true,
        'message' => 'Sukses',
        'data' => $posts
    ]);
}








    public function getCommentsByPostId(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }
    
        $postId = $request->input('post_id');
    
        $comments = Comment::join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*', 'users.username', 'users.photo', 'users.id as user_id')
        ->where('comments.post_id', $postId)
        ->get();
    
    
        return response()->json([
            'success' => true,
            'message' => 'Data komentar berhasil diambil',
            'data' => $comments
        ]);
    }

public function addComment(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_id' => 'required',
        'comment' => 'required',
        'user_id' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors()
        ], 400);
    }

    $postId = $request->input('post_id');
    $commentText = $request->input('comment');
    $userId = $request->input('user_id');

    $comment = new Comment();
    $comment->post_id = $postId;
    $comment->user_id = $userId;
    $comment->comment = $commentText;
    $comment->save();

    return response()->json([
        'success' => true,
        'message' => 'Komentar berhasil ditambahkan',
        'data' => $comment
    ]);
}
public function addReason(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_id' => 'required',
        'reason' => 'required',
        'user_id' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors()
        ], 400);
    }

    $postId = $request->input('post_id');
    $reasonText = $request->input('reason');
    $userId = $request->input('user_id');

    // Tambahkan pengecekan jika reason kosong
    if (empty($reasonText)) {
        return response()->json([
            'success' => false,
            'message' => 'Reason tidak boleh kosong'
        ], 400);
    }

    $reason = new Report();
    $reason->post_id = $postId;
    $reason->user_id = $userId;
    $reason->reason = $reasonText;
    $reason->save();

    return response()->json([
        'success' => true,
        'message' => 'Berhasil Melaporkan',
        'data' => $reason
    ]);
}

public function countUserByPost(Request $request)
{
    // Validasi inputan menggunakan Validator
    $validator = Validator::make($request->all(), [
        'post_id' => 'required',
    ]);

    // Jika validasi gagal, kembalikan pesan error
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $postId = $request->input('post_id');

    // Hitung jumlah komentar berdasarkan post_id
    $commentCount = Comment::where('post_id', $postId)->count();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menghitung jumlah komentar',
        'data' => $commentCount
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

    
    public function getpoststalk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }
    
        $user_id = $request->input('user_id');
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->where('users.id', $user_id)
            ->select('posts.*', 'users.name', 'users.email', 'users.photo', 'users.username', 'users.address')
            ->get();
    
        return response()->json([
            'success' => true,
            'message' => 'Sukses mendapatkan data post',
            'data' => $posts
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
            'activity_name' => 'required',     
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
    
        $activity = DB::table('activities')
            ->where('id', $request->id)
            ->first();
    
        if (!$activity) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data Aktivitas dengan ID tersebut',
                'data' => []
            ]);
        }
    
        DB::table('activities')
            ->where('id', $request->id)
            ->update([
                'activity_name' => $request->activity_name,
              
                'start' => $request->start,
                'end' => $request->end
            ]);
    
        $updatedActivity = DB::table('activities')
            ->where('id', $request->id)
            ->first();
    
        return response()->json([
            'success' => true,
            'message' => 'Sukses mengupdate data Aktivitas',
            'data' => $updatedActivity
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

public function addActivity(Request $request)
{
    $validator = Validator::make($request->all(), [
        'activity_name' => 'required',
        'status' => 'required',
        'start' => 'required',
        'end' => 'required',
      
        'session_id' => 'required'
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

    $activity->session_id = $request->session_id;
    $activity->save();
    return response()->json([
        'success' => true,
        'message' => 'Sukses menambahkan data aktivitas',
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
public function addRating(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required', // Pastikan user_id diisi
        'post_activity_id' => 'required', // Pastikan post_activity_id diisi
        'rate' => 'required|integer' // Pastikan rate diisi dengan nilai integer
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah user_id dan post_activity_id ada dalam tabel "users" dan "post_activity" sesuai kebutuhan
    if (!User::where('id', $input['user_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'User tidak ditemukan'
        ], 404);
    }

    if (!PostActivity::where('id', $input['post_activity_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Post Activity tidak ditemukan'
        ], 404);
    }

    // Buat data rating baru
    $rating = new Rating();
    $rating->user_id = $input['user_id'];
    $rating->post_activity_id = $input['post_activity_id'];
    $rating->rate = $input['rate'];
    $rating->save();

    return response()->json([
        'success' => true,
        'message' => 'Berhasil Memberikan Bintang ',
        'data' => $rating
    ]);
}

public function deleteRatingByPostActivityId(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_activity_id' => 'required' // Pastikan post_activity_id diisi
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Ada kesalahan',
            'data' => $validator->errors()->first()
        ], 400);
    }

    $input = $request->all();

    // Cek apakah post_activity_id ada dalam tabel "post_activity"
    if (!PostActivity::where('id', $input['post_activity_id'])->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Post Activity tidak ditemukan'
        ], 404);
    }

    // Hapus data rating berdasarkan post_activity_id
    Rating::where('post_activity_id', $input['post_activity_id'])->delete();

    return response()->json([
        'success' => true,
        'message' => 'Sukses menghapus data rating berdasarkan post_activity_id'
    ]);
}

public function calculateAverageRating(Request $request)
{
    $validator = Validator::make($request->all(), [
        'post_activity_id' => 'required|exists:post_activity,id'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid post activity id',
            'errors' => $validator->errors()
        ], 400);
    }

    $postActivityId = $request->input('post_activity_id');

    $averageRating = Rating::where('post_activity_id', $postActivityId)->avg('rate');

    if ($averageRating === null) {
        $averageRating = 0.0;
    }

    return response()->json([
        'success' => true,
        'message' => 'Average rating by post activity id',
        'data' => (double) $averageRating
    ]);
}


public function checkUserRating(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id',
        'post_activity_id' => 'required|exists:post_activity,id'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid user id or post activity id',
            'errors' => $validator->errors()
        ], 400);
    }

    $userId = $request->input('user_id');
    $postActivityId = $request->input('post_activity_id');

    $rating = Rating::where('user_id', $userId)
                    ->where('post_activity_id', $postActivityId)
                    ->first();

    $hasRated = !is_null($rating);

    return response()->json([
        'success' => true,
        'message' => 'Anda Sudah Menberi Rating',
        'data' => [
            'user_id' => $userId,
            'post_activity_id' => $postActivityId,
            'has_rated' => $hasRated
        ]
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
}
