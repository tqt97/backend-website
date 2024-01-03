<footer class="bg-white rounded-md shadow dark:bg-gray-900 border-t  border-gray-200 dark:border-gray-600">
    <div class="container w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center mb-4 sm:mb-0">
                <span class="font-bold dark:bg-white dark:text-gray-950 bg-gray-950 text-white px-2  rounded text-2xl">
                    T
                </span>
                <span class="ml-1 self-center text-2xl font-semibold whitespace-nowrap dark:text-white"> TuanTQ</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-800 sm:mb-0 dark:text-gray-100">
                @auth
                    <x-nav-custom.li-footer href="{{ route('profile.show') }}" :active="request()->routeIs('profile')">
                        {{ __('frontend/header.profile') }}
                    </x-nav-custom.li-footer>
                @else
                    <x-nav-custom.li-footer href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('frontend/header.login') }}
                    </x-nav-custom.li-footer>
                    <x-nav-custom.li-footer href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('frontend/header.register') }}
                    </x-nav-custom.li-footer>
                @endauth
                <x-nav-custom.li-footer href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" :last="true">
                    {{ __('frontend/header.blog') }}
                </x-nav-custom.li-footer>

            </ul>

        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="{{ route('home') }}"
                class="hover:underline">TuanTQ™</a>. All Rights Reserved.</span>
    </div>
</footer>
