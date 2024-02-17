<x-app-layout title="Blog">
    <div class="w-full grid grid-cols-4">
        <div class="md:col-span-3 col-span-4">
            <livewire:blog.list-post />
        </div>
        <div
            class="md:block hidden col-span-4 md:col-span-1 px-3
            md:border-l border-gray-200 dark:border-gray-200 rounded-r h-screen sticky top-0 bg-white">
            @include('blogs.posts.partials.categories')
        </div>
    </div>
</x-app-layout>
