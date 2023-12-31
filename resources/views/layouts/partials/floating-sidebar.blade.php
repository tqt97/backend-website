<div class="relative">

    <nav x-data="{ showSidebar: false, showMenu: true }" @scroll.window="showSidebar = (window.pageYOffset > window.innerHeight) ? true : false"
        :class="[(showSidebar === true) ? 'md:flex' : '', (showMenu === true) ? '' : '']"
        class="z-50 hidden shrink-0 grow-0 justify-around gap-2 border-t p-1.5 shadow-md backdrop-blur-lg fixed top-2/4 opacity-90 hover:opacity-100
    -translate-y-2/4 left-0 min-h-[auto] flex-col rounded-r-xl border border-l-0 border-gray-200 dark:border-gray-600 overflow-hidden">

        <div class="flex flex-col justify-around gap-2 items-center w-8 h-8  rounded group">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="cursor-pointer  w-5 h-5 text-gray-900 dark:text-white" @click="showMenu = !showMenu"
                :class="(showMenu === true) ? '' : 'hidden'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="cursor-pointer w-6 h-6 text-gray-900 dark:text-white" @click="showMenu = !showMenu"
                :class="(showMenu === true) ? 'hidden' : ''">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
            </svg>
        </div>

        <x-hr-float-sidebar ::class="{ 'hidden': !showMenu }" />

        <div class="flex flex-col justify-around gap-2" :class="showMenu === true ? '' : 'hidden'">

            <x-nav-custom.float-sidebar-a href="{{ route('home') }}" :active="request()->routeIs('home')"
                title="{{ __('frontend/header.home') }}" {{-- size="{{ showMenu === true ? 'lg' : 'sm' }}" --}}>
                <x-icons.home />
            </x-nav-custom.float-sidebar-a>

            <x-nav-custom.float-sidebar-a href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" :last="true"
                title="{{ __('frontend/header.blog') }}">
                <x-icons.post />
            </x-nav-custom.float-sidebar-a>

            @auth
                <x-hr-float-sidebar />
                <x-nav-custom.float-sidebar-a href="{{ route('profile.show') }}" :active="request()->routeIs('profile')"
                    title="{{ __('frontend/header.profile') }}">
                    <x-icons.user />
                </x-nav-custom.float-sidebar-a>
                <x-hr-float-sidebar />
                <x-nav-custom.float-sidebar-a href="{{ route('profile.show') }}" :active="request()->routeIs('profile')"
                    title="{{ __('Bookmark') }}">
                    <x-icons.bookmark />
                </x-nav-custom.float-sidebar-a>
            @endauth
            <x-nav-custom.float-sidebar-a href="" :last="true"
                title="{{ __('frontend/header.go_to_top') }}" @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})">
                <x-icons.arrow-up />
            </x-nav-custom.float-sidebar-a>
        </div>

    </nav>
</div>
