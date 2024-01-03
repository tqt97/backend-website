@props(['size'])

@php
    $size = match ($size ?? null) {
        'xs' => 'w-5 h-5',
        'sm' => 'w-7 h-7',
        'md' => 'w-8 h-8',
        'lg' => 'w-10 h-10',
        default => 'w-6 h-6',
    };

    $classes = $size . ' p-1 bg-gray-100 transition rounded-full cursor-pointer text-yellow-500 hover:bg-gray-200';
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{ 'border-2 border-red/50': darkMode === 'light' }"
    {{ $attributes->merge(['class' => $classes]) }} fill="none" viewBox="0 0 24 24" stroke="currentColor"
    stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round"
        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
</svg>
<span class="sr-only">light</span>
