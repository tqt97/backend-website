<x-app-layout title="Home">
    @section('hero')
        {{-- @include('layouts.partials.hero2') --}}
    @endsection

    <div class="mb-10">
        <section id="feature" class="py-5">
            <x-pages.home.heading-div title="{{ __('frontend/home/index.featured') }}"/>

            <x-pages.home.blog-div>
                @foreach ($featurePosts as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </x-pages.home.blog-div>
        </section>

        <section id="latest" class="py-5">
            <x-pages.home.heading-div title="{{ __('frontend/home/index.latest') }}"/>

            <x-pages.home.blog-div>
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </x-pages.home.blog-div>
        </section>

    </div>

</x-app-layout>
