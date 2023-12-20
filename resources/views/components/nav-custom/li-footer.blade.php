@props(['active'])
@php
    $classes = $active ?? false ? 'me-4 md:me-6 text-white' : 'me-4 md:me-6 text-gray-400';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
