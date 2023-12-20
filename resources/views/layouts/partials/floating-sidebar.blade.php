<nav x-data="{ showSidebar: false }" @scroll.window="showSidebar = (window.pageYOffset > window.innerHeight) ? true : false"
    :class="(showSidebar === true) ? 'md:flex' : ''"
    class="z-50  hidden shrink-0 grow-0 justify-around gap-4 border-t p-2.5 shadow-lg backdrop-blur-lg  fixed top-2/4 -translate-y-2/4 left-0 min-h-[auto] min-w-[64px] flex-col rounded-r-xl border-2  border-l-0 border-gray-600">

    <x-nav-custom.float-sidebar-a href="{{ route('home') }}" :active="request()->routeIs('home')" title="{{ __('frontend/header.home') }}">
        <x-icons.home />
    </x-nav-custom.float-sidebar-a>

    <x-nav-custom.float-sidebar-a href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" :last="true"
        title="{{ __('frontend/header.blog') }}">
        <x-icons.post />
    </x-nav-custom.float-sidebar-a>

    @auth
        <hr class="dark:border-gray-700/60" />
        <x-nav-custom.float-sidebar-a href="{{ route('profile') }}" :active="request()->routeIs('profile')"
            title="{{ __('frontend/header.profile') }}">
            <x-icons.user />
        </x-nav-custom.float-sidebar-a>
    @endauth
    <hr class="dark:border-gray-700/60" />
    <x-nav-custom.float-sidebar-a href="javascript:void(0)" :last="true"
        title="{{ __('frontend/header.go_to_top') }}" @click.window="window.scrollTo({top: 0, behavior: 'smooth'})">
        <x-icons.arrow-up />
    </x-nav-custom.float-sidebar-a>

</nav>
