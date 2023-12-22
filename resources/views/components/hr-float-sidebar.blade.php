@props(['class'])
@php
    $class = $class ?? null;

    $classes = match ($class) {
        'light' => 'border-gray-500',
        'dark' => 'border-gray-700',
        default => 'border-gray-700',
    };

@endphp
<hr {{ $attributes->merge(['class' => $classes]) }} />
