@props(['category','margin_bottom'])

<x-badges.category-sidebar wire:navigate href="{{ route('posts.index', ['category' => $category->slug]) }}">
    {{ $category->name }}
</x-badges.category-sidebar>
