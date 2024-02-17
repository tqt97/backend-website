@props(['post'])

@php
    $classes = 'post-card group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <a wire:navigate class="rounded-md" href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}">
        <div class="p-3">
            <figure class="">
                <img class="w-full rounded-xl group-hover:scale-[1.0] transition-all" src="{{ $post->getThumbnail() }}"
                    alt="{{ $post->title }}">
            </figure>
        </div>
        <div class="p-3">
            <div class="">
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
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}"
                    class="text-xl group-hover:text-blue-500 underline-title1 font-semibold text-gray-950 relative cursor-pointer pb-1">
                    {{ $post->title }}
                </a>
            </div>
        </div>
    </a>
</div>
