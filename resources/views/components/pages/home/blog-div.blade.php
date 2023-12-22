@props([''])

@php
    
    $classes = "w-full md:mt-10 mb-5 md:px-2 px-2";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="grid grid-cols-3 gap-10 gap-y-16 w-full">
        {{ $slot }}
    </div>
</div>
