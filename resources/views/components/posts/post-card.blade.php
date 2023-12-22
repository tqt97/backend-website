@props(['post'])

@php
    $classes = "md:col-span-1 col-span-3 shadow-lg rounded-xl bg-white transition ease-linear duration-300 group border border-gray-700  hover:border-gray-200";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
        <div>
            <img class="w-full rounded-t-xl" src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}">
        </div>
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
                    <x-icons.calendar /> {{ $post->created_at->format('M d, Y') }}
                </p>
                <p class="text-gray-800 text-sm flex items-center">
                    <x-icons.clock /> {{ $post->time_to_read }}
                </p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}"
                class="text-xl font-semibold text-gray-950 relative cursor-pointer pb-1
                bg-gradient-to-r from-green-900 via-blue-400 to-pink-800 bg-[length:0%_2px] bg-no-repeat bg-left-bottom group-hover:bg-[length:100%_2px] transition-all duration-500">
                {{ $post->title }}
            </a>
        </div>

    </div>


</div>
