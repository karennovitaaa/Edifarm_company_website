<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;

class PostLikeProfile extends Component
{


    public function mount($id)
    {
        $this->postId = $id;
    }

    public function sukaProfile(Post $post)
    {
        $like = $post->like();
        $user_id = auth()->id();

        if ($like->count() > 0) {
            $like->detach($user_id);

        } else {
            $like->attach($user_id);
        }
    }

    public function storeProfile(Post $post)
    {
        $id = $post->id;
        $this->validate([
            'body' => 'required'
        ]);

        $report = Report::create([
            'user_id' => Auth::user()->id,
            'reason' => $this->body,
            'post_id' => $id
        ]);
        $this->emit('tableCreated');
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {
        return view('livewire.post-like-profile',[
            'posts' => Post::with('likes', 'comments', 'user')->where('id', $this->postId)->get(),
        ]);
    }
}
