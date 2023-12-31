@props(['post'])

@php
    $classes = 'post-card group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <a wire:navigate class="rounded-md" href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}">
        <figure class="w-full">
            <img class="w-full rounded-t-md" src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}">
        </figure>
    </a>
    <div class="mt-3 p-2">
        <div>
            <div class="flex items-center mb-3 gap-x-2">
                <ul class="tags">
                    @foreach ($post->categories as $category)
                        <x-posts.category-badge :category="$category" />
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3">
                <p class="text-gray-800 text-sm flex items-center">
                    <x-icons.calendar />
                    <time>{{ $post->created_at->format('d-m-Y') }}</time>
                </p>
                <p class="text-gray-800 text-sm flex items-center">
                    <x-icons.clock /> {{ $post->time_to_read }}
                </p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}"
                class="text-xl underline-title font-semibold text-gray-950 relative cursor-pointer pb-1">
                {{ $post->title }}
            </a>
        </div>

    </div>


</div>
