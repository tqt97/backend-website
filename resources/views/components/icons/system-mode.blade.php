@props(['size'])

@php
    $size = match ($size ?? null) {
        'xs' => 'w-5 h-5',
        'sm' => 'w-7 h-7',
        'md' => 'w-8 h-8',
        'lg' => 'w-10 h-10',
        default => 'w-6 h-6',
    };

    $classes = $size . " p-1 text-gray-700 transition rounded-full cursor-pointer bg-gray-50 hover:bg-gray-200";
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x-cloak x-show="! window.matchMedia('(prefers-color-scheme: dark)').matches"
    x-bind:class="{ 'border-2 border-red/50': darkMode === 'system' }"
    {{ $attributes->merge(['class' => $classes]) }} fill="none"
    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round"
        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
<span class="sr-only">system</span>
