<div id="recommended-topics-box border-t border-gray-800">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('frontend/sidebar.categories') }}</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        <ul class="tags">
            @foreach ($categories as $category)
                <x-badges.category-sidebar wire:navigate
                    href="{{ route('posts.index', ['category' => $category->slug]) }}" :textColor="$category->text_color"
                    :bgColor="$category->bg_color" :marginBottom="true">
                    {{ $category->name }}
                </x-badges.category-sidebar>
            @endforeach
        </ul>

    </div>
</div>
