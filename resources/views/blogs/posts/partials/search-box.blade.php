<div id="search-box" x-data="{ query: '{{ request('search', '') }}' }" x-on:keyup.enter.window="$dispatch('search', {search:query})">
    {{-- <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3> --}}
    <div class="flex">
        <div class="relative w-full rounded-2xl bg-gray-2100 border-2 border-gray-500">
            <input x-model="query"
                class="block p-2.5 w-full z-20 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0
                                outline-none border-none text-md text-gray-900 placeholder:text-gray-600"
                placeholder="{{ __('Search here...') }}">
            <button x-on:click="$dispatch('search', {search:query})" type="submit"
                class="group flex items-center absolute top-0 end-0 p-2 text-sm font-medium h-full text-white bg-gray-800
                        rounded-e-2xl border border-gray-5001 hover:bg-gray-950 focus:ring-0 focus:outline-none">
                <x-icons.search class="w-5 h-5 text-white group-hover:scale-[1.08] duration-50" />
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</div>
