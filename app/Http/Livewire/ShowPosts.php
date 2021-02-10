<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $content = "apenas um teste";

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $posts = Post::with('user')->latest()->paginate(10);

        return view('livewire.show-posts', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->validate();
        
        auth()->user()->posts()->create([
            'content' => $this->content,
        ]);

        $this->content = '';
    }

    public function like($idPost)
    {
        $post = Post::find($idPost);

        $post->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function unlike(Post $post)
    {
        $post->likes()->delete();
    }
}
