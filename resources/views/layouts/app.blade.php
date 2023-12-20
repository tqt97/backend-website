@props(['title'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' | ' : '' }} {{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/custom.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-outfit antialiased bg-gray-800 text-white dark:bg-gray-900 dark:text-white scroll-smooth relative1">
{{--<x-banner/>--}}

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

<main class="">
    <div class="max-w-7xl flex flex-grow mx-auto md:px-2 px-4 relative">
        {{ $slot }}
    </div>
</main>

@include('layouts.partials.footer')

@stack('modals')

@livewireScripts

{{--<script>--}}
{{--    const appData = () => {--}}
{{--        return {--}}
{{--            percent: 0,--}}
{{--            appInit() {--}}
{{--                window.addEventListener('scroll', () => {--}}
{{--                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,--}}
{{--                        height = document.documentElement.scrollHeight - document.documentElement.clientHeight;--}}
{{--                    this.percent = Math.round((winScroll / height) * 100);--}}
{{--                });--}}
{{--            },--}}
{{--        };--}}
{{--    };--}}
{{--</script>--}}

</body>

</html>
