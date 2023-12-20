<x-app-layout title="Home">
    @section('hero')
        @include('layouts.partials.hero')
    @endsection

    <div class="mb-10 z-30">
        <div class="mb-16 md:px-2 px-4">
            <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 mt-6 mb-5 md:px-2 px-4">
                <h2 class="text-xl text-white font-bold sm:text-2xl lg:text-[25px]">
                    {{ __('frontend/home.featured_posts') }}</h2>
                <a href="{{ route('posts.index') }}"
                    class="inline-flex rounded-sm leading-none text-white hover:scale-[0.95] transition-all duration-75"
                    wire:navigate>
                    {{ __('frontend/home.more_posts') }} →
                </a>
            </div>
            <div class="w-full md:mt-10 mb-5 md:px-2 px-4">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featurePosts as $post)
                        <x-posts.post-card :post="$post"
                            class="md:col-span-1 col-span-3 shadow-lg rounded-xl
                        bg-white transition ease-linear duration-300 group hover:-translate-y-1" />
                    @endforeach
                </div>
            </div>
        </div>

        <hr>

        <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 mt-6 mb-5 md:px-2 px-4">
            <h2 class="text-xl text-white font-bold sm:text-2xl lg:text-[25px]">
                {{ __('frontend/home.latest_posts') }}</h2>
            <a href="{{ route('posts.index') }}"
                class="inline-flex rounded-sm leading-none text-white hover:scale-[0.95] transition-all duration-75"
                wire:navigate>
                {{ __('frontend/home.more_posts') }} →
            </a>
        </div>
        <div class="w-full md:mt-10 mb-5 md:px-2 px-4">
            <div class="grid grid-cols-3 gap-10 gap-y-16 w-full">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post"
                        class="md:col-span-1 col-span-3 shadow-lg rounded-xl
                        bg-white transition ease-linear duration-300 group hover:-translate-y-1" />
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
