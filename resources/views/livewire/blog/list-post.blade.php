<div class="lg:px-7 py-6 bg-white shadow-lg rounded-lg md:px-2 px-4">
    <div class="flex justify-between items-center rounded-lg">
        <div class="flex text-gray-800">
            @if ($this->activeCategory || $search)
                <span class="mr-2 flex items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg> --}}
                    Filter by:

                </span>
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
        <div class="flex items-center">
            {{-- <x-checkbox class="p-2.5" wire:model.live="popular" />
            <x-label class="ml-2">{{ __('Popular') }}</x-label> --}}
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
            </svg> --}}

            <button class="ml-4" wire:click="togglePopular">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 {{ $popular ? 'text-red-600 dark:text-red-600 font-semibold' : 'text-gray-400' }}">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
            </button>

            <button class="ml-4" wire:click="toggleSort">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 text-gray-950 dark:text-gray-950 transition-all duration-200 {{ $sort === 'asc' ? 'hidden x-cloak' : '' }}">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 text-gray-950 dark:text-gray-950 transition-all duration-200 {{ $sort === 'desc' ? 'hidden x-cloak' : '' }}">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                </svg>

            </button>
            {{-- <button
                class="{{ $sort === 'desc' ? 'text-gray-900 border-b-2 border-gray-700 font-normal' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                </svg>
            </button>
            <button
                class="{{ $sort === 'asc' ? 'text-gray-900 border-b-2 border-gray-700 font-normal' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
                </svg>
            </button> --}}
        </div>
    </div>
    <div class="py-4 mt-5 border-t-2 border-gray-200">
        <ul class="divide-y divide-gray-900/5">
            @forelse($this->posts as $post)
                <x-posts.post wire:key="{{ $post->id }}" :post="$post" />
            @empty
                <h1>{{ __('No posts found') }}</h1>
            @endforelse
        </ul>



        <div class="my-3">
            @if (count($this->posts))
                {{ $this->posts->onEachSide(1)->links() }}
            @endif
        </div>
    </div>
</div>
