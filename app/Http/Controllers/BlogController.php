<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class BlogController extends Controller
{
    public function table()
    {
        $users = User::get();
        //$datas = compact('users');
        return view('AdminTable', compact('users'));
    }

    public function lapor()
    {
        // $reports = Report::with('users')->get();
        $reports = DB::table('reports')
            ->join('users', 'reports.user_id', '=', 'users.id')->get();
        // return var_dump($reports);
        return view('AdminLapor', compact('reports'));
    }

    public function adminprofile()
    {
        return view('AdminProfile');
    }

    public function post()
    {
        // $posts = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.id', 'DESC')->get();

        $posts = Post::with('likes', 'user')->latest()->get();
        // return var_dump($posts);
        return view('postingan', compact('posts'));
    }

    public function profile()
    {
        $id = session('ids');
        $reports = DB::table('users')->where('id', $id)->get();

        return view('profile', compact('reports'));
    }

    public function postingan()
    {
        return view('postingan_profile');
    }

    public function komen(Post $post)
    {
        $post->load('comments');
        // dd($post['comments']['0']['pivot']['comment']);

        return view('komen', compact('post'));
    }

    public function comment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string',
            'post_id' => 'required',
        ]);

        if ($validator->fails()) {

            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $validated = $validator->validated();

        auth()->user()->postComments()->attach($validated['post_id'], [
            'comment' => $validated['comment']
        ]);

        return redirect('/komen/'.$validated['post_id']);
    }

    public function suka(Post $post)
    {
        $like = $post->like();
        $user_id = auth()->id();

        if ($like->count() > 0) {
            $like->detach($user_id);

            return redirect('postingan');
        }

        $like->attach($user_id);

        return redirect('postingan');
    }

    public function like()
    {
        return view('like');
    }

    public function editprofile()
    {
        $id = session('ids');
        $reports = DB::table('users')->where('id', $id)->get();
        // return var_dump($reports);
        return view('edit_profile', compact('reports'));
    }

    public function destroy($id)
    {
        $blog = User::where('id', $id)->delete();

        return redirect('/table');
    }

    public function profileup(Request $request, $id)
    {
        request()->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->has('photo')) {
            $imageName = time().'.'.request()->photo->extension();
            request()->photo->move(public_path('images/user'), $imageName);
            $path = "images/user/$imageName";

            $blog = User::where('id', $id)->update([
                'photo' => $path,
                'username' => $request->username,
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->phone,
                'born_date' => $request->born_date,
                'email' => $request->email,
                'bio' => $request->bio,

            ]);
            $request->session()->put('photo', $path);
        }else{
            $blog = User::where('id', $id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->phone,
                'born_date' => $request->born_date,
                'email' => $request->email,
                'bio' => $request->bio,
            ]);
        }

        $request->session()->put('nama', $request->name);

        return redirect('/profile');
    }

    public function passwordup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cpassword' => 'required',
            'npassword' => 'required',
            'vpassword' => 'required|same:npassword',
        ]);

        if ($validator->fails()) {

            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        if (Auth::attempt(['password' => $request->cpassword])) {
            return var_dump('lolos');
            $blog = User::where('id', $id)->update([
                'password' => bcrypt($request->npassword)]);

            return redirect('table');
        } else {
            return var_dump($request->cpassword);
        }
    }

    public function postup(Request $request)
    {
        request()->validate([
            'caption' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        $input['user_id'] = session('ids');
        $input['post_latitude'] = 'k6789';
        $input['post_longitude'] = '345678';

        if ($request->has('image')) {
            $imageName = time().'.'.request()->image->extension();
            request()->image->move(public_path('images/post'), $imageName);
            $input['image'] = "images/post/$imageName";
        }
        $user = Post::create($input);

        return redirect('/postingan');
    }
}
