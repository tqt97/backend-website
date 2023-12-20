<div class="lg:px-7 py-6 bg-white shadow-md rounded-xl md:px-2 px-4">
    <div class="flex justify-between items-center rounded-xl px-2">
        <div class="flex text-gray-800">
            @if ($this->activeCategory || $search)
                <span class="mr-2">Filter by:</span>
            @endif
            @if ($this->activeCategory)
                <ul class="tags">
                    <x-badges.category-sidebar wire:navigate
                        href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}" :textColor="$this->activeCategory->text_color"
                        :bgColor="$this->activeCategory->bg_color">
                        {{ $this->activeCategory->name }}
                    </x-badges.category-sidebar>
                </ul>
            @endif
            @if ($search)
                <span class="ml-2">
                    {{ __('blog.containing') }} : <strong>{{ $search }}</strong>
                </span>
            @endif
            @if ($this->activeCategory || $search)
                <button class="ml-3 text-md text-gray-800" wire:click="clearFilters()">X</button>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light">
            <x-checkbox wire:model.live="popular" />
            <x-label>{{ __('Popular') }}</x-label>
            <button
                class="{{ $sort === 'desc' ? 'text-gray-900 border-b-2 border-gray-700 font-normal' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">
                Latest
            </button>
            <button
                class="{{ $sort === 'asc' ? 'text-gray-900 border-b-2 border-gray-700 font-normal' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">
                Oldest
            </button>
        </div>
    </div>
    <div class="py-4 mt-5 border-t border-gray-200">
        @forelse($this->posts as $post)
            <x-posts.post wire:key="{{ $post->id }}" :post="$post" />
        @empty
            <h1>{{ __('No posts found') }}</h1>
        @endforelse

        <div class="my-3">
            @if (count($this->posts))
                {{ $this->posts->onEachSide(1)->links() }}
            @endif
        </div>
    </div>
</div>
