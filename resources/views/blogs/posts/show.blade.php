<x-app-layout :title="$post->title">
    <article class="col-span-4 md:col-span-3 mx-auto rounded-md px-2">
        {{-- <div class="relative z-0">
            <img class="w-full md:h-[60vh] h-[40vh] object-cover my-2 rounded-xl shadow-md" src="{{ $post->getThumbnail() }}"
                alt="{{ $post->title }}">
        </div> --}}

        <div class="md:max-w-7xl mx-auto bg-white shadow-sm border rounded-md px-8 py-4">
            <h1 class="md:text-4xl text-2xl font-bold text-left text-gray-800 ">
                {{ $post->title }}
            </h1>

            <div class="mt-2 flex justify-between items-center">
                {{-- <div class="flex py-5 text-base items-center text-gray-800"> --}}
                <x-posts.author :author="$post->user" size="sm" />
                {{-- <span class="text-gray-700 text-md">| {{ $post->time_to_read }}</span> --}}
                {{-- </div> --}}
            </div>
            <div class="my-4 flex justify-between items-center">
                <div class="flex items-center">
                    <x-icons.calendar />
                    <span class="text-gray-500">{{ $post->created_at->format('d-m-Y') }}</span>
                </div>
                <div class="flex text-base items-center text-gray-800">
                    <x-icons.clock />
                    <span class="text-gray-700 text-md"> {{ $post->time_to_read }}</span>
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
                    <div>
                        <x-icons.bookmark class="mr-2" />
                    </div>
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
