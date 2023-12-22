@props(['size','hidden'])

@php
    $size = match ($size ?? null) {
        'xs' => 'w-5 h-5',
        'sm' => 'w-7 h-7',
        'md' => 'w-8 h-8',
        'lg' => 'w-10 h-10',
        default => 'w-6 h-6',
    };

    $hidden = $hidden ?? false ? 'hidden' : 'showhaha';

    $classes =$hidden . ' ' . $size . " p-1 text-gray-700 transition rounded-full cursor-pointer bg-gray-50 hover:bg-gray-200";
@endphp


<svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{ 'border-2 border-red/50': darkMode === 'dark' }"
{{ $attributes->merge(['class' => $classes]) }}
    viewBox="0 0 20 20" fill="currentColor">
    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
</svg>
<span class="sr-only">dark</span>
