@props([])

@php
    $classes = 'group inline-flex cursor-pointer hover:text-blue-500 p-2 hover:scale-110 transition';
@endphp
<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ __('frontend/home/index.read_more') }}&nbsp;→
    {{-- <span class="group-hover:animate-bounce">
        →
    </span> --}}
</a>
