<div class="relative min-h-screen lg:px-5 bg-white rounded-l md:px-2 px-4">
    <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
        <div class="flex text-gray-800 group">
            @if ($this->activeCategory || $search)
                <span class="mr-2 flex items-center">
                    {{ __('frontend/blog/index.filter_by_category') }}:
                </span>
            @endif
            @if ($this->activeCategory)
                <a wire:navigate href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}"
                    class="capitalize text-bold font-semibold text-gray-800">
                    {{ $this->activeCategory->name }}
                </a>
            @endif
            @if ($search)
                <span class="ml-2">
                    {{ __('blog.containing') }} : <strong>{{ $search }}</strong>
                </span>
            @endif
            @if ($this->activeCategory || $search)
                <button class="ml-3 text-gray-800" wire:click="clearFilters()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-4 h-4 group-hover:w-5 group-hover:h-5 text-gray-400 group-hover:text-gray-900 transition duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            @endif
        </div>
        <div class="flex items-center">
            <div class="flex">
                <span>{{ __('frontend/blog/index.sort_by') }}:</span>
            </div>
            <div class="flex items-center border-r mx-2 px-2">
                <span>{{ __('frontend/blog/index.popular') }}</span>
                <button class="ml-1" wire:click="togglePopular">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 {{ $popular ? 'text-red-600 dark:text-red-600 font-semibold' : 'text-gray-400' }}">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center">
                <span>{{ __('frontend/blog/index.order') }}</span>
                <button class="ml-1" wire:click="toggleSort">
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
            </div>
        </div>
    </div>
    <div class=" border-gray-200">
        <section id="allPosts" class="mb-10">
            <div class="relative w-full md:px-2 px-2">
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 mt-5">
                    @forelse($this->posts as $post)
                        <x-posts.post-card wire:key="{{ $post->id }}" :post="$post" :post="$post" />
                    @empty
                        <h1>{{ __('No posts found') }}</h1>
                    @endforelse
                </div>
            </div>

        </section>
        <div class="px-2">
            @if (count($this->posts))
                {{ $this->posts->onEachSide(1)->links() }}
            @endif
        </div>
    </div>
</div>
