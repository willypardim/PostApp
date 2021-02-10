<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $message = "apenas um teste";

    public function render()
    {
        $posts = Post::with('user')->get();

        return view('livewire.show-posts', [
            'posts' => $posts
        ]);
    }
}