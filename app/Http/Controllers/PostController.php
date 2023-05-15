<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function post()
    {
        $posts = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.id', 'DESC')->get();
        // return var_dump($posts);
        return view('postingan', compact('posts'));
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
