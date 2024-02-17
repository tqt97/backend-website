<div id="recommended-topics-box text-gray-950 dark:text-gray-950">
    <h3 class="font-semibold text-gray-900 py-3 border-b border-gray-300">
        {{ __('frontend/sidebar.categories') }}
    </h3>
    {{-- <hr> --}}
    <div class="topics">
        <ul class="marker:text-blue-500 list-outside list-disc mt-5 px-5">
            @foreach ($categories as $category)
                <li class="group mb-1 py-1 hover:translate-x-1 transform duration-300">
                    <a wire:navigate href="{{ route('posts.index', ['category' => $category->slug]) }}"
                        class="capitalize text-gray-800 group-hover:text-blue-600">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
