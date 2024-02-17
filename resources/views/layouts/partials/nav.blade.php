<nav class="top-0 z-50 w-full  shadow-sm py-1 border-b dark:border-gray-700 transition-opacity duration-200"
    x-data="{
        percent: 0,
        sticky: false,
        isOpenMenuMobile: false,
        lastPos: window.scrollY + 0,
        scroll() {
            this.sticky = window.scrollY > this.$refs.navbar.offsetHeight && this.lastPos > window.scrollY;
            this.lastPos = window.scrollY;
        },
    }" x-ref="navbar" @scroll.window="scroll()"
    :class="{
        'md:sticky fixed top-0 backdrop-blur-xl bg-white/90 dark:bg-gray-900': sticky,
        'relative md:py-2 ': !sticky
    }"
    {{-- @scroll.window="atTop = (window.pageYOffset > 56) ? false : true" --}} {{--
    :class="(atTop === true) ? 'py-2 relative bg-red-200' : 'fixed top-0 backdrop-blur-xl bg-white/90 md:shadow-md '"
    --}}>

    <!-- Page Scroll Progress -->
    {{-- @include('layouts.partials.scroll-progress') --}}
    <!--End Page Scroll Progress -->

    <div class="max-w-7xl mx-auto md:px-2 px-4">
        <div class="flex justify-between">
            <div class="flex space-x-3 items-center">
                <div class="group py-1">
                    <!-- Website Logo -->
                    <x-pages.layout.logo />
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
                <button type="button" x-on:click="modalOpen =!modalOpen"
                    class="md:flex hidden items-center px-1 py-1 mr-2 text-sm text-gray-800
                    focus:outline-none bg-white rounded-md
                    border border-gray-200 shadow hover:shadow-md hover:border-gray-300">
                    <x-icons.search class="w-4 h-4 mr-1" />
                    {{ __('frontend/layout.search') }}
                    <kbd
                        class="ml-4 text-xs font-semibold px-1 py-1 bg-slate-300 border border-gray-300 rounded
                        ">
                        ⌘ + k/ ctrl + k
                    </kbd>
                </button>
                <!-- End Desktop Search -->

                @auth
                    @include('layouts.partials.header-right-auth')
                    {{-- @else
                    @include('layouts.partials.header-right-guest') --}}
                @endauth
                @include('layouts.partials.theme.switch')

            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-4 px-2">
                <div class="">
                    <button id="toggleSearchBoxMobile" x-on:click="modalOpen =!modalOpen"
                        x-mousetrap.global.command-k.ctrl-k
                        class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform focus:outline-none focus:ring-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                            </path>
                        </svg>
                    </button>
                </div>
                @include('layouts.partials.theme.switch-mobile')
                <button id="toggleMobileMenu" x-on:click="isOpenMenuMobile = !isOpenMenuMobile"
                    class="flex items-center space-x-2 focus:outline-none">
                    <div class="w-6 flex items-center justify-center relative">
                        <span x-bind:class="isOpenMenuMobile ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                            class="transform transition w-full h-px bg-current absolute duration-250 ease-in-out"></span>

                        <span x-bind:class="isOpenMenuMobile ? 'opacity-0 translate-x-3' : 'opacity-100'"
                            class="transform transition w-full h-px bg-current absolute duration-250 ease-in-out"></span>

                        <span x-bind:class="isOpenMenuMobile ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                            class="transform transition w-full h-px bg-current absolute duration-250 ease-in-out"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div x-description="Mobile menu, show/hide based on menu state."
        class=" lg:hidden text-gray-900 dark:text-white dark:bg-gray-900" id="mobile-menu" x-show="isOpenMenuMobile">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <x-nav-custom.li-mobile wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')" :last="true">
                {{ __('frontend/header.home') }}
            </x-nav-custom.li-mobile>
            <x-nav-custom.li-mobile wire:navigate href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" :last="true">
                {{ __('frontend/header.blog') }}
            </x-nav-custom.li-mobile>
        </div>
    </div>
</nav>
