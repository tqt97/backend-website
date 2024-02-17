@props(['active'])

@php
    $classes = $active ?? false ? 'text-gray-950 dark:text-white font-semibold py-1 px-2 transition duration-200 ease-in-out' : 'text-gray-800 dark:text-gray-300 py-1 px-2 transition duration-200 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
