@props(['active','last'])
@php
    $last = $last ?? false ? '' : 'me-4 md:me-6';
    $active = $active ?? false ? 'underline' : '';

    $classes = $last . ' '. $active;
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
