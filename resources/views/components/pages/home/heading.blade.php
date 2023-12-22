@props([])

@php
    $classes = 'text-xl text-white font-bold sm:text-2xl lg:text-[25px]';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ __('frontend/home.featured_posts') }}
</h2>
