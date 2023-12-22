@props([])

<x-read-mode.button x-on:click="darkMode = 'dark'">
    <x-icons.dark-mode />
    <span class="ml-2">
        {{ __('frontend/layout.read_mode.dark') }}
    </span>
</x-read-mode.button>
