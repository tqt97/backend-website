<nav class="top-0 z-50 w-full shadow-sm py-1 border-b dark:border-gray-700 transition-opacity duration-200"
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
        'md:sticky fixed top-0 backdrop-blur-xl bg-[#fafafa]/90 dark:bg-slate-900/90': sticky,
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
            <div class="flex space-x-3">
                <div class="group px-2 py-1">
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
                {{-- <div class='flex items-center justify-center'>
                    <form action="" class="relative mx-auto flex">
                        <input type="text"
                            class="text-md peer cursor-pointer relative z-10 h-8 w-10 rounded-lg bg-transparent  pr-6 outline-none focus:rounded-r-none focus:w-full focus:cursor-text focus:border-taupeGray focus:px-3"
                            placeholder="Typing..." />
                        <button
                            class="absolute top-0 right-0 bottom-0 my-auto h-8 w-10 px-3 rounded-lg peer-focus:relative peer-focus:rounded-l-none">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="relative flex flex-col justify-center overflow-hidden">
                    <div
                        class="relative rounded-xl bg-white px-4 sm:mx-auto sm:max-w-lg sm:px-10">
                        <div class="mx-auto max-w-md">
                            <form action="" class="relative mx-auto w-max">
                                <input type="search"
                                    class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full bg-transparent outline-none focus:w-full focus:cursor-text focus:border-gray-300 focus:pl-16 focus:pr-4" />
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-gray-300 peer-focus:stroke-gray-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </form>


                        </div>
                    </div>
                </div> --}}
                {{-- @include('layouts.partials.dark-mode') --}}
                {{-- <div class="hidden md:flex border rounded-xl border-gray-300"> --}}
                {{-- <button x-on:click="modalOpen =!modalOpen"
                        class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform focus:outline-none focus:ring-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                            </path>
                        </svg>
                    </button> --}}
                <button type="button" x-on:click="modalOpen =!modalOpen"
                    class="md:flex hidden items-center px-1 py-1 mr-2 text-sm text-gray-800
                    focus:outline-none bg-white rounded-md
                    border border-gray-200 shadow hover:shadow-sm">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                        </path>
                    </svg> --}}
                    <x-icons.search class="w-4 h-4 mr-1" />
                    {{ __('frontend/layout.search') }}
                    <kbd
                        class="ml-4 text-xs px-1 py-1 bg-gray-100 border border-gray-200 rounded
                        ">
                        ⌘ + k/ ctrl + k
                    </kbd>
                </button>
                {{-- </div> --}}
                <!-- End Desktop Search -->



                @auth
                    @include('layouts.partials.header-right-auth')
                @else
                    @include('layouts.partials.header-right-guest')
                @endauth
                @include('layouts.partials.theme.switch')

            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-4 px-2">
                <div class="">
                    <button id="toggleSearchBoxMobile" x-on:click="modalOpen =!modalOpen" x-mousetrap.global.command-k.ctrl-k
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
    {{-- <div class="md:hidden mobile-menu transition-all duration-250 z-50 1translate-x-0"
        x-show.transition.duration.500ms="isOpenMenuMobile" @click.away="isOpenMenuMobile = false"
        :class="isOpenMenuMobile ? '' : 'hidden'">
        <ul class="px-2 border-t border-gray-300">
            <x-nav-custom.li-mobile wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('frontend/header.home') }}
            </x-nav-custom.li-mobile>
            <x-nav-custom.li-mobile wire:navigate href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" :last="true">
                {{ __('frontend/header.blog') }}
            </x-nav-custom.li-mobile>

        </ul>
    </div> --}}
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
