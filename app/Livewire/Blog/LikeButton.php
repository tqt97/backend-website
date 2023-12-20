<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Reactive;

class LikeButton extends Component
{
    #[Reactive]
    public Post $post;

    public function toggleLike(Post $post)
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }
        $user = auth()->user();

        if ($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }

        $user->likes()->attach($this->post);
    }

    public function render()
    {
        return view('livewire.blog.like-button');
    }
}
