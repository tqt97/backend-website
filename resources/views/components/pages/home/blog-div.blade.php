@props([''])

@php

    $classes = "w-full mt-5 md:px-2 px-2";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 ">
        {{ $slot }}
    </div>
</div>
