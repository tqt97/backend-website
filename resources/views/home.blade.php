<x-app-layout title="Home">
    @section('hero')
        @include('layouts.partials.hero2')
    @endsection

    <div class="mb-10 z-30">
        <div class="mb-161">
            <x-pages.home.heading-div />

            <x-pages.home.blog-div>
                @foreach ($featurePosts as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </x-pages.home.blog-div>
        </div>

        <hr class="border-gray-700 border shadow-sm">

        <x-pages.home.heading-div />

        <x-pages.home.blog-div>
            @foreach ($latestPosts as $post)
                <x-posts.post-card :post="$post" />
            @endforeach
        </x-pages.home.blog-div>
    </div>

</x-app-layout>
