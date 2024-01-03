@props(['class'])
@php
    $class = $class ?? null;

    $classes = match ($class) {
        'light' => 'border-gray-400 dark:border-gray-500',
        'dark' => 'border-gray-400 dark:border-gray-500',
        default => 'border-gray-400 dark:border-gray-500',
    };

@endphp
<hr {{ $attributes->merge(['class' => $classes]) }} />
