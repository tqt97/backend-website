<div class="w-full mx-auto md:px-0 px-4 border-t border-gray-700">
    <footer class="max-w-7xl mx-auto flex flex-wrap items-center justify-between px-4 py-2 text-sm">
        <div class="w-full max-w-screen-xl mx-auto py-1">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ route('home') }}" title="{{ __('frontend/header.home') }}"
                    class="flex items-center shadow-lg transition duration-150  relative
                        rounded-md ">
                    <span
                        class="relative rounded border-2 font-semibold text-white bg-gray-950 text-xl  px-2 py-1 transition-all">
                        T.Q.T
                    </span>
                    {{-- <span class="font-bold text-xl">&nbsp; Tuantq Blog</span> --}}
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-200 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:text-white me-4 md:me-6">{{ __('menu.login') }}</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white me-4 md:me-6">{{ __('menu.profile') }}</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white">{{ __('menu.blog') }}</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-700 sm:mx-auto dark:border-gray-700 lg:my-4" />
            <span class="block text-sm text-gray-200 sm:text-center dark:text-gray-400">© 2023
                <a href="" class="hover:underline">TuanTQ™</a>. All Rights Reserved.
            </span>
        </div>
        {{-- <div class="flex space-x-4"> --}}
        {{-- @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('locale', $locale) }}">
                <x-dynamic-component :component="'flag-language-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach --}}
        {{-- <x-flag-language-vi class="w-6 h-6"/> --}}
        {{-- Tuantq
        </div> --}}
        {{-- <div class="flex space-x-4">
            <a class="text-gray-100 hover:text-yellow-500" href="">{{ __('menu.login') }} </a>
            <a class="text-gray-100 hover:text-yellow-500" href="">{{ __('menu.profile') }} </a>
            <a class="text-gray-100 hover:text-yellow-500" href="">{{ __('menu.blog') }} </a>
        </div> --}}
    </footer>
</div>
