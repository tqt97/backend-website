@props(['active', 'name', 'last'])

@php
    $checkLabel = $name ?? false;
    $size = $checkLabel ? 'h-16 w-16' : 'h-8 w-8';
    $line = $last ?? false ? true : false;

    $classes = $active ?? false
    ? 'flex ' . $size . ' flex-col items-center justify-center gap-1 text-gray-950 bg-white rounded-lg'
    : 'flex ' . $size . ' flex-col items-center justify-center gap-1 text-white hover:bg-white hover:text-gray-950 rounded-lg';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }} >
    {{-- <x-icons.home /> --}}
    {{ $slot }}
    @if ($checkLabel)
        <small className="text-xs font-medium">{{ $name }}</small>
    @endif
    {{-- <small className="text-xs font-medium">{{ $name }}</small> --}}
</a>
@if ($line == false)
    {{-- <hr class="dark:border-gray-700/60" /> --}}
    <x-hr-float-sidebar/>

@endif
