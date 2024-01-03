@props(['size'])

@php
    $sizeText = $size ?? 'text-2xl';
@endphp

<a href="{{ route('home') }}"
    class="flex items-center rounded transform shadow-sm bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-no-repeat bg-left-bottom bg-[length:100%_3px] transition-all duration-500">
    <span class="font-bold dark:bg-white dark:text-gray-950 bg-gray-950 text-white px-2  rounded {{ $sizeText }}">
        T
    </span>
</a>
