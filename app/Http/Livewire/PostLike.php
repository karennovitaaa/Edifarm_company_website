<?php

namespace App\Http\Livewire;
use App\Models\Post;
use App\Models\Report;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PostLike extends Component
{
    public Post $post;
    public $body;

    
    public function suka(Post $post)
    {
        $like = $post->like();
        $user_id = auth()->id();

        if ($like->count() > 0) {
            $like->detach($user_id);

        } else {
            $like->attach($user_id);
        }
    }

    public function store(Post $post)
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
    }

    public function updatedPost()
    {
        $this->resetPage();
    }

    
    public function render()
    {
        return view('livewire.post-like',[
            'posts' => Post::with('likes', 'user', 'hasLike')->latest()->get(),
        ]);
    }
}
