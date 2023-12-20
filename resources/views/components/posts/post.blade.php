@props(['post'])

<article
    {{ $attributes->merge(['class' => 'rounded-xl shadow-lg hover:shadow-md mb-10 bg-white transiton-all duration-200 group']) }}>
    <div class="article-body grid grid-cols-12 gap-3 items-start radius-xl">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                <img class="mw-100 mx-auto rounded-l-xl" src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}">
            </a>
        </div>
        <div class="col-span-8 py-2 px-4">
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
                    class="relative cursor-pointer pb-1
                bg-gradient-to-r from-green-900 via-blue-400 to-pink-800 bg-[length:0%_2px] bg-no-repeat bg-left-bottom group-hover:bg-[length:100%_2px] transition-all duration-500">
                    {{ $post->title }}
                </a>
            </h2>

            <div class="article-meta flex py-1 text-sm items-center justify-between mt-3">
                <x-posts.author :author="$post->user" size="sm" />
                <span class="text-gray-500 text-xs flex items-center">
                    <x-icons.calendar />
                    {{ $post->publishedDiffForHumans() }}
                </span>
            </div>


            <div class="flex items-center space-x-2 mt-4">
                <ul class="tags">
                    @foreach ($post->categories as $category)
                        <x-posts.category-badge :category="$category" />
                    @endforeach
                </ul>
            </div>
            <p class="mt-4 text-base text-gray-700 font-light">
                {{ $post->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex gap-x-2">

                        <div class="flex items-center space-x-4">
                            <span class="text-gray-800 text-sm flex items-center">
                                <x-icons.clock />
                                {{ $post->time_to_read }}
                            </span>
                        </div>
                    </div>

                </div>
                <div>
                    <livewire:blog.like-button :key="'post-likeButton-' . $post->id" :$post />
                </div>
            </div>
        </div>
    </div>
</article>
