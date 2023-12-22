@props([])

<x-read-mode.button x-on:click="darkMode = 'light'">
    <x-icons.light-mode />
    <span class="ml-2">
        {{ __('frontend/layout.read_mode.light') }}
    </span>
</x-read-mode.button>
