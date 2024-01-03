<?php

namespace App\Livewire\Blog;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ListPost extends Component
{
    use WithPagination;

    #[Url()]
    public string $sort = 'desc';

    #[Url()]
    public string $search = '';

    #[Url()]
    public string $category = '';

    #[Url()]
    public bool $popular = false;

    public function setSort(string $sort): void
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    public function toggleSort(){
        $this->sort = ($this->sort === 'desc') ? 'asc' : 'desc';
    }

    public function togglePopular(){
        $this->popular = !$this->popular;
    }

    #[On('search')]
    public function updateSearch($search): void
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->search = '';
        $this->category = '';
        $this->popular = false;
        $this->sort = 'desc';
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
            ->with('user', 'categories')
            ->when($this->activeCategory, fn ($q) => $q->withCategory($this->category))
            ->when($this->popular, fn ($q) => $q->popular())
            ->search($this->search)
            ->orderBy('published_at', $this->sort)
            ->paginate(9);
    }

    #[Computed()]
    public function activeCategory()
    {
        if ($this->category === '' || $this->category === null) {
            return;
        }

        return Category::where('slug', $this->category)->first();
    }

    public function render()
    {
        return view('livewire.blog.list-post');
    }
}
