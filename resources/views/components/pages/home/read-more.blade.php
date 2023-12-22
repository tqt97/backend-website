@props([])

@php
    $classes="inline-flex rounded-sm leading-none text-white hover:scale-[0.95] transition-all duration-75";
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ __('frontend/home.more_posts') }}&nbsp;→
</a>
