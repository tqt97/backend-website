@props([])

<x-read-mode.button x-on:click="darkMode = 'system'">
    <x-icons.system-mode />
    <span class="ml-2">
        {{ __('frontend/layout.read_mode.system') }}
    </span>
</x-read-mode.button>
