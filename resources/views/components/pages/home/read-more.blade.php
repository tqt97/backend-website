@props([])

@php
    $classes="inline-flex cursor-pointer";
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ __('frontend/home/index.read_more') }}&nbsp;→
</a>
