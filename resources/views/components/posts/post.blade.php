@props(['post'])

<article
    {{ $attributes->merge(['class' => 'rounded-md shadow-md hover:shadow mb-10 bg-white transiton-all duration-200 group']) }}>
    <div class="md:grid md:grid-cols-12 md:gap-3">
        <div class="article-thumbnail md:col-span-4 col-span-1 flex items-center">
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                <img class="x-full mx-auto md:rounded-l-md rounded-t-md md:rounded-r-none"
                    src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" width="640"
                    height="480">
            </a>
        </div>
        <div class="col-span-8 px-4">
            <div class="article-meta flex py-1 text-sm items-center justify-between mt-2 md:mt-0">
                <x-posts.author :author="$post->user" size="sm" />
                <time class="text-gray-500 text-xs flex items-center">
                    <x-icons.calendar />
                    {{ $post->created_at->format('d-m-Y') }}
                </time>
            </div>

            <div class="flex items-center space-x-2 mt-2">
                <ul class="tags">
                    @foreach ($post->categories as $category)
                        <x-posts.category-badge :category="$category" />
                    @endforeach
                </ul>
            </div>
            {{-- <p class="mt-4 text-base text-gray-700 font-light">
                {{ $post->getExcerpt() }}
            </p> --}}
            <h2 class="text-xl font-bold text-gray-900 mt-2">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
                    class="relative cursor-pointer pb-1 underline-title transition-all duration-500">
                    {{ $post->title }}
                </a>
            </h2>
            <div class="mt-2 md:pb-0 pb-2 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex gap-x-2">
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-800 text-sm flex items-center">
                                <x-icons.clock />
                                {{ $post->time_to_read }}
                            </span>
                        </div>
                    </div>

                </div>
                <div>
                    <livewire:blog.like-button :key="'post-likeButton-' . $post->id" :$post />
                </div>
            </div>



        </div>
    </div>
</article>

{{-- 
<li {{ $attributes->merge(['class' => 'grid gap-4 py-8 md:grid-cols-3 md:gap-8']) }}>
    <a class="block" wire:navigate href="{{ route('posts.show', $post->slug) }}">
        <img class="aspect-[16/9] rounded-md" src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}">
    </a>

    <header class="md:col-span-2">
        <div class="article-meta flex py-1 text-sm items-center justify-between mt-3">
            <x-posts.author :author="$post->user" size="sm" />
            <span class="text-gray-500 text-xs flex items-center">
                <x-icons.calendar />
                <livewire:blog.like-button :key="'post-likeButton-' . $post->id" :$post />
            </span>
        </div>
        <div class="text-gray-600" bis_skin_checked="1">
            <time> 
                {{ $post->publishedDiffForHumans() }}
            </time>
            <span class="px-1">·</span>
            <span>{{ $post->time_to_read }}</span>
        </div>
        <div class="flex items-center space-x-2 mt-4">
            <ul class="tags">
                @foreach ($post->categories as $category)
                    <x-posts.category-badge :category="$category" />
                @endforeach
            </ul>
        </div>

        <h2 class="mt-2 text-xl font-bold tracking-tight md:text-2xl">
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </h2>


        <p class="mt-4 text-base text-gray-700 font-light">
            {{ $post->getExcerpt() }}
        </p>
        <div>
            <livewire:blog.like-button :key="'post-likeButton-' . $post->id" :$post />
        </div>
    </header>
</li> --}}
