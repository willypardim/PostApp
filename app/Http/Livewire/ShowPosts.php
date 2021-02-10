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
        $posts = Post::with('user')->get();

        return view('livewire.show-posts', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->validate();
        Post::create([
            'content' => $this->content,
            'user_id' => 4
        ]);

        $this->content = '';
    }
}
