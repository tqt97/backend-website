{{-- flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 --}}

{{-- <button x-on:click="darkMode = darkMode === 'dark' ? 'light' : 'dark'" type="button"
    class="relative inline-flex flex-shrink-0 h-8 mr-5 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer bg-gray-200 dark:bg-gray-700 w-11 focus:outline-none focus:ring-none"
    role="switch" aria-checked="false"> --}}

<button x-on:click="darkMode = darkMode === 'dark' ? 'light' : 'dark'" type="button"
    class="inline-flex flex-shrink-0 ml-4 w-12 bg-gray-200 dark:bg-gray-700 transition border-2 border-transparent rounded-full focus:outline-none cursor-pointer focus:ring-none"
    role="switch" aria-checked="false">
    <span class="sr-only">Use setting</span>
    <span
        class="relative inline-block w-6 h-6 transition duration-500 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none dark:translate-x-5 ring-0">
        <span
            class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-500 ease-in opacity-100 dark:opacity-0 dark:duration-100 dark:ease-out"
            aria-hidden="true">
            {{--
                        <x-svg class="w-4 h-4 text-neutral-700" svg="sun" />
                        --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-5 h-5 text-yellow-600"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                </path>
            </svg>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-5 h-5 text-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg> --}}

        </span>
        <span
            class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-100 ease-out opacity-0 dark:opacity-100 dark:duration-200 dark:ease-in"
            aria-hidden="true">
            {{--
                        <x-svg class="w-4 h-4 text-neutral-700" svg="moon" />
                        --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon w-5 h-5 text-neutral-700"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                </path>
            </svg>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg> --}}

        </span>
    </span>
</button>
