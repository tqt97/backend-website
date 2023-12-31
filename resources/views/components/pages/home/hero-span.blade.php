@props([''])

@php
    $classess = '';
@endphp

<span
    class="text-indigo-500 inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
    <ul class="block animate-text-slide-2 text-left leading-tight [&_li]:block">
        {{ $slot }}
    </ul>
</span>
