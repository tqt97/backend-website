@props(['active'])

@php
    $classes = $active ?? false ? 'text-lg py-0 py-1 px-2 text-white transition duration-200 ease-in-out' : 'text-lg py-1 px-2 text-gray-400 hover:text-white transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
