@props(['title'])

@php
    $classes = 'flex flex-wrap items-center justify-between gap-x-8 gap-y-3 md:px-2 px-4';
@endphp

<header {{ $attributes->merge(['class' => $classes]) }}>
    <x-pages.home.heading title="{{ $title }}"/>
    <x-pages.home.read-more href="{{ route('posts.index') }}"/>
</header>
