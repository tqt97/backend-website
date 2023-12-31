<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchLive extends Component
{
    public $q = "";

    public function updating($key): void
    {
        // if ($key === '') {
        //     $this->resetPage();
        // }
    }

    public function render()
    {
        $results = [];
        if($this->q !== ''){
            $results = Post::published()->search($this->q)->get();
        }
    

        return view('livewire.search-live', [
            'results' => $results,
        ]);
    }
}
