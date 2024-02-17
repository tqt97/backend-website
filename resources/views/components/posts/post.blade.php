@props(['post'])



articvle

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
