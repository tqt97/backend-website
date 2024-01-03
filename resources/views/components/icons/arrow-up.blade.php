@props(['size'])

@php
    $size = match ($size ?? null) {
        'xs' => 'w-5 h-5',
        'sm' => 'w-7 h-7',
        'md' => 'w-10 h-10',
        'lg' => 'w-12 h-12',
        default => 'w-5 h-5',
    };

    $classes = $size . ' shrink-0';
@endphp

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    data-slot="icon" {{ $attributes->merge(['class' => $classes]) }}>
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
</svg>
