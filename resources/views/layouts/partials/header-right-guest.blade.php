<div class="flex space-x-5">
    <x-nav-custom.li href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('frontend/nav.login') }}
    </x-nav-custom.li>
    <x-nav-custom.li href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('frontend/nav.register') }}
    </x-nav-custom.li>
</div>
