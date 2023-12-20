<x-app-layout :title="$post->title">
    <article class="col-span-4 md:col-span-3 mt-5 mx-auto py-5 w-full max-w-7xl rounded-2xl p-2">
        <div class="relative z-0">
            {{-- <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0, 0, 0, 0.0.2));">
            </div> --}}
            <img class="w-full md:h-[60vh] h-[40vh] object-cover my-2 rounded-xl shadow-md border border-gray-700 " src="{{ $post->getThumbnail() }}"
                alt="{{ $post->title }}">
        </div>

        <div class="w-[90%] md:w-[95%] mx-auto  bg-white rounded-2xl px-4 py-2 -mt-48 z-2 relative">
            <h1 class="md:text-4xl text-2xl font-bold text-left text-gray-800 ">
                {{ $post->title }}
            </h1>

            <div class="mt-2 flex justify-between items-center">
                <div class="flex py-5 text-base items-center text-gray-800">
                    <x-posts.author :author="$post->user" size="md" />
                    <span class="text-gray-700 text-md">| {{ $post->time_to_read }}</span>
                </div>
                <div class="flex items-center">
                    <x-icons.clock />

                    <span class="text-gray-500 ml-2">{{ $post->publishedDiffForHumans() }}</span>
                </div>
            </div>

            <div class="article-actions-bar my-1 flex text-sm items-center justify-between">

                <div>
                    <div class="flex items-center">
                        <ul class="tags">
                            @foreach ($post->categories as $category)
                                <x-posts.category-badge :category="$category" :margin_bottom="true" />
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="flex items-center">
                    <livewire:blog.like-button :key="'show-likeButton-' . $post->id" :$post />
                </div>
            </div>

            <div
                class="article-content py-3 mt-10 prose1 text-gray-800 text-lg justify-center border-t
            border-gray-200">
                {!! $post->content !!}
            </div>
            <livewire:blog.comment-post :key="'comments' . $post->id" :post="$post" />
        </div>

    </article>
</x-app-layout>
