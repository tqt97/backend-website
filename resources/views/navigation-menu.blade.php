<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100 shadow-md">
    <div id="header-left" class="flex items-center">
        {{-- <div class="text-gray-800 font-semibold">
            <span class="text-yellow-500 text-xl">&lt;Tuantq&gt;</span> Blog
        </div> --}}
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                {{-- <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('frontend/header.home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('frontend/header.blog') }}
                </x-nav-link> --}}
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <x-nav-custom.nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('frontend/header.home') }}
                    </x-nav-custom.nav-link>
                    <x-nav-custom.nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                        {{ __('frontend/header.blog') }}
                    </x-nav-custom.nav-link>
                </ul>
            </div>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>
