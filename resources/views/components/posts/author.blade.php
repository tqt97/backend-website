@props(['author', 'size'])

@php
    $imageSize = match ($size ?? null) {
        'xs' => 'w-5 h-5',
        'sm' => 'w-7 h-7',
        'md' => 'w-10 h-10',
        'lg' => 'w-12 h-12',
        default => 'w-6 h-6',
    };

    $textSize = match ($size ?? null) {
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-md',
        'lg' => 'text-lg',
        default => 'text-sm',
    };
@endphp

<div class="flex items-center">
    <img class="{{ $imageSize }} rounded-full mr-1" src="{{ $author->profile_photo_url }}"
        alt="{{ $author->name }}">
    <span class="mr-1 text-gray-800 font-normal {{ $textSize }}">{{ $author->name }}</span>
</div>
