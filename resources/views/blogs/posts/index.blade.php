<x-app-layout title="Blog">
    <div class="w-full grid grid-cols-4 gap-10 mt-10">
        <div class="md:col-span-3 col-span-4 px-2">
            <livewire:blog.list-post/>
        </div>
        <div class="md:block hidden border-t border-t-gray-800 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-6  space-y-4
            py-6 md:border-l border-gray-100 h-screen sticky top-0 bg-white shadow-md rounded-xl">
            @include('blogs.posts.partials.search-box')
            <hr>
            @include('blogs.posts.partials.categories')
        </div>
    </div>
</x-app-layout>
