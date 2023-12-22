{{-- <nav class="md:border-0 border-b border-gray-200 top-0 z-50 w-full md:shadow-md" x-data="{
    percent: 0,
    appInit() {
        window.addEventListener('scroll', () => {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            this.percent = Math.round((winScroll / height) * 100);
        });
    },
    open: false,
    atTop: true
}" --}}
<nav class="bg-gray-900 border-b border-gray-800 top-0 z-50 w-full md:shadow-md py-1 relative z-12"
    x-data="{
        percent: 0,
        appInit() {
            window.addEventListener('scroll', () => {
                let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                    height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                this.percent = Math.round((winScroll / height) * 100);
            });
        },
        open: false,
    }" x-init="appInit()" {{-- @scroll.window="atTop = (window.pageYOffset > window.innerHeight) ? false : true"
    :class="(atTop === true) ? 'py-2 relative' : 'fixed top-0 bg-gray-800 md:shadow-md'" --}}>

    <!-- Page Scroll Progress -->
    <div class="fixed inset-x-0 top-0 z-50 h-1 mt-0.5  bg-gradient-to-r from-slate-100 via-blue-100 to-pink-100"
        :style="`width: ${percent}%`">
    </div>
    <!--End Page Scroll Progress -->

    <div class="max-w-7xl mx-auto md:px-2 px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div class="group p-2">
                    <!-- Website Logo -->
                    {{-- <a href="{{ route('home') }}" title="{{ __('frontend/header.home') }}"
                        class="flex items-center p-2 shadow-lg transition duration-150  relative
                        rounded-md">
                        <span
                            class="relative rounded border-2 shadow-sm border-white gradient1 font-semibold bg-gray-950 text-white text-xl py-1 px-1 transition-all">
                            T.Q.T
                        </span>
                    </a> --}}
                    <a href="{{ route('home') }}"
                        class="flex items-center rounded p-0 ml-1 transform gradient-border bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-no-repeat bg-left-bottom bg-[length:100%_3px] transition-all duration-500">
                        <span class="font-bold bg-gray-900 p-2 rounded">
                            T.Q.T
                        </span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <x-nav-custom.li wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('frontend/header.home') }}
                    </x-nav-custom.li>
                    <x-nav-custom.li wire:navigate href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                        {{ __('frontend/header.blog') }}
                    </x-nav-custom.li>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3">
                @include('layouts.partials.dark-mode')
                @auth
                    @include('layouts.partials.header-right-auth')
                @else
                    @include('layouts.partials.header-right-guest')
                @endauth
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button" x-on:click="open = !open">
                    <svg class=" w-6 h-6 text-white hover:text-gray-200 " fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="md:hidden mobile-menu transition duration-250 z-10" :class="open ? '' : 'hidden'">
        <ul class="px-2 border-t border-gray-300">
            <li class="active">
                <a href="{{ route('home') }}"
                    class="block text-md px-2 py-2 bg-white text-gray-950 hover:bg-gray-950 hover:text-white
                    font-bold transition-colors duration-50 border-b border-gray-300">
                    {{ __('frontend/header.home') }}
                </a>
            </li>
            <li>
                <a href="{{ route('posts.index') }}"
                    class="block text-md px-2 py-2 text-gray-700 bg-white hover:bg-gray-950 hover:text-white
                    transition-colors duration-50 border-b border-gray-300">
                    {{ __('frontend/header.blog') }}
                </a>
            </li>
        </ul>
    </div>
</nav>
