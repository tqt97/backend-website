<x-dropdown align="right" width="36">
    <x-slot name="trigger">
        <button class="flex text-sm transition border-transparent rounded-full focus:outline-none ">
            <x-icons.dark-mode :size="'md'" ::class="{ ' hidden ': darkMode !== 'dark' }" />
            <x-icons.light-mode :size="'md'" ::class="{ ' hidden ': darkMode !== 'light' }" />
            <x-icons.system-mode :size="'md'" ::class="{ ' hidden ': darkMode !== 'system' }" />
        </button>

    </x-slot>

    <x-slot name="content">
        <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('frontend/header.mode') }}
        </div>

        <x-read-mode.light-mode />

        <div class="border-t border-gray-200"></div>

        <x-read-mode.dark-mode />

        <div class="border-t border-gray-200"></div>

    </x-slot>
</x-dropdown>
