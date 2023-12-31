@props(['title'])

@php
    $classes = 'text-xl font-bold sm:text-2xl lg:text-[25px]';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{-- {{ __('frontend/home.featured_posts') }} --}}
    {{ $title }}
    {{-- {{ $slot }} --}}
</h2>
