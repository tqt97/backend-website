<div class="flex space-x-4">
    <x-nav-custom.li href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('frontend/nav.login') }}
    </x-nav-custom.li>
    {{-- <x-nav-custom.li href="{{ route('register') }}" :active="request()->routeIs('register')" class="border rounded-md bg-gray-900 dark:bg-white text-white dark:text-gray-900">
        {{ __('frontend/nav.register') }}
    </x-nav-custom.li> --}}
    <a wire:navigate=""
        class="py-1 px-3 transition duration-200 ease-in-out border rounded-md bg-gray-900 dark:bg-white text-white dark:text-gray-900"
        href="http://127.0.0.1:8000/register">
        {{ __('frontend/nav.register') }}
    </a>
    {{-- <x-nav-custom.li href="{{ route('login') }}" :active="request()->routeIs('login')">
        <x-icons.user/>
    </x-nav-custom.li> --}}
    {{-- <a href="{{ route('login') }}" class="font-semibold dark:text-white text-md px-2 transition duration-200 ease-in-out">
        <x-icons.user/>
    </a> --}}
</div>
