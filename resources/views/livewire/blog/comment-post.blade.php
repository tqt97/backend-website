<div class="mt-10 comments-box border-t border-gray-100 pt-10">
    <h2 class="text-2xl font-semibold text-gray-900 mb-5">Discussions</h2>
    @auth
        <textarea wire:model="comment"
            class="w-full rounded-lg p-4 bg-gray-50 focus:outline-none focus:ring-gray-800 text-sm text-gray-700 border-gray-200 placeholder:text-gray-400"
            cols="30" rows="7"></textarea>
        <button wire:click="postComment"
            class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
            Post Comment
        </button>
    @else
        <a wire:naviggate class="text-yellow-500 underline py-1" href="{{ route('login') }}"> Login to Post Comments</a>

    @endauth

    <div class="user-comments py-2 mt-5">
        @forelse ($this->comments as $comment)
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-1 border shadow-sm rounded-lg my-3 px-2">
                {{-- <div class="user-meta flex mb-4 text-sm items-center text-gray-800">
                    <x-posts.author :author="$comment->user" size="sm" />
                    <span class="text-gray-500">&nbsp; {{ $comment->created_at->diffForHumans() }}</span>
                </div> --}}

                <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3  py-1">
                    {{-- <h2 class="text-xl text-white font-bold sm:text-2xl lg:text-[25px]">
                        {{ __('frontend/home.featured_posts') }}</h2>
                    <a href="{{ route('posts.index') }}"
                        class="inline-flex rounded-sm transition duration-300
                leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-600/80 font-bold
                text-white hover:text-yellow-700"
                        wire:navigate>
                        {{ __('frontend/home.more_posts') }} →
                    </a> --}}
                    <x-posts.author :author="$comment->user" size="md" />
                    <span class="flex items-center text-gray-500 text-sm"><x-icons.clock /> {{ $comment->created_at->diffForHumans() }}</span>
                </div>

                <div class="text-justify text-gray-700 text-md ml-12 py-1 border-t border-dotted border-gray-300">
                    {!! $comment->content !!}
                </div>
            </div>
        @empty
            <div class="text-gray-500 text-center">
                <span> No Comments Posted</span>
            </div>
        @endforelse
    </div>
    <div class="my-2">
        {{ $this->comments->links() }}
    </div>
</div>
