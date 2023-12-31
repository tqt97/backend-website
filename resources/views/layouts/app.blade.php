@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{
    darkMode: localStorage.getItem('darkMode') ||
        localStorage.setItem('darkMode', 'system')
}" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    x-bind:class="{
        'dark': darkMode === 'dark' || (darkMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)')
            .matches)
    }"
    class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' | ' : '' }} {{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/@danharrin/alpine-mousetrap@0.x.x/dist/alpine-mousetrap.js" defer></script> --}}

    <!-- Styles -->
    @livewireStyles
</head>

<body x-cloak class="min-h-screen font-outfit antialiased theme-style relative" @keyup.meta.k="modalOpen = true"
    @keyup.escape="modalOpen = false" x-data="{
        modalOpen: false,
        result: '',
        selectedResultIndex: '',
        toggleSearch() {
            this.modalOpen = !this.modalOpen
        },
        reset() {
            this.modalOpen = false;
        },
        selectNextResult() {
            console.log('next')
            if (this.selectedResultIndex === '') {
                this.selectedResultIndex = 0;
            } else {
                this.selectedResultIndex++;
            }
            if (this.selectedResultIndex === this.filteredResults.length) {
                this.selectedResultIndex = 0;
            }
            this.focusSelectedResult();
        },
        selectPreviousResult() {
            if (this.selectedResultIndex === '') {
                this.selectedResultIndex = this.filteredResults.length - 1;
            } else {
                this.selectedResultIndex--;
            }
            if (this.selectedResultIndex < 0) {
                this.selectedResultIndex = this.filteredResults.length - 1;
            }
            this.focusSelectedResult();
        },
        focusSelectedResult() {
            this.$refs.results.children[this.selectedResultIndex + 1].scrollIntoView({ block: 'nearest' })
        },
    }">

    {{-- <x-banner/> --}}

    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div> --}}

    @include('layouts.partials.nav')
    {{-- @include('layouts.partials.mountain') --}}
    {{-- @include('layouts.partials.header') --}}

    @yield('hero')
    {{-- @include('layouts.partials.floating-sidebar') --}}
    @include('layouts.partials.search.modal')

    <main class="my-12">
        <div class="max-w-7xl mx-auto flex flex-grow mx-auto md:px-2 px-4 relative">
            {{ $slot }}
        </div>
    </main>

    @include('layouts.partials.footer')
    <div x-data="{ scrollBackTop: false }" x-cloak>
        <button x-show="scrollBackTop"
            x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false"
            @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})"
            x-on:click="$scroll('#top')" aria-label="Back to top"
            class="fixed bottom-0 right-0 py-2 px-1.5 rounded-md mx-3 my-3 md:my-10 text-white bg-gray-900 dark:bg-gray-800 hover:cursor-pointer focus:outline-none">
            <x-icons.arrow-up />
        </button>
    </div>
    @stack('modals')

    @livewireScripts

</body>

</html>
