@props([])

@php
    $classes = 'flex flex-wrap items-center justify-between gap-x-8 gap-y-3 mt-10 mb-5 md:px-2 px-4';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <x-pages.home.heading />
    <x-pages.home.read-more />
</div>
