@props(['active', 'last'])

@php
    $active = $active ?? false ? 'font-semibold bg-gray-50 dark:bg-gray-800' : '';
    $last = $last ?? false ? '' : 'border-b border-gray-200 dark:border-gray-700';
    $classes =
        "block text-md py-1 text-gray-900 dark:text-white px-4
        transition-colors duration-100" .
        ' ' .
        $last .
        ' ' .
        $active;
@endphp
{{-- <li> --}}
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
{{-- </li> --}}
