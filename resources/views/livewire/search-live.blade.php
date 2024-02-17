<div class="relative">
    <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
            <!-- Heroicon name: search -->
            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <input wire:model.live.debounce.250ms="q" id="search" name="search" x-ref="inputSearch"
            x-on:keyup.down="selectNextResult" x-on:keyup.up="selectPreviousResult"
            class="block w-full px-3 py-2 mt-2 text-gray-900 border-2 placeholder-gray-600 bg-white border-gray-600
            rounded focus:border-gray-700 focus:outline-none1 focus:ring-transparent
            pl-10 pr-3 text-sm focus:text-gray-800 sm:text-base"
            placeholder="{{ __('frontend/layout.search_here') }}" type="search">
    </div>
    @if (count($results))
        <p class="text-sm mt-2 1px-4 py-2">
            {{ __('frontend/layout.search_for') }}
            <b>"{{ $q }}"</b>
            {{ __('frontend/layout.has') }}
            <b>{{ count($results) }}</b> {{ __('frontend/layout.results') }}
        </p>
    @endif
    @if ($q)
        <div
            class="origin-top-right lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent1
            scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded
            max-h-96 lg:supports-scrollbars:pr-2 lg:max-h-96 right-0 mt-5 w-full rounded bg-white ring-1 ring-black ring-opacity-5">
            <div class="text-sm text-gray-800">

                @forelse($results as $result)
                    <a href="{{ route('posts.show', ['post' => $result]) }}"
                        class="flex items-center text-md text-gray-800 px-4 py-3 transition-all border-b
                        hover:bg-slate-50/50 hover:text-blue-500 cursor-pointer duration-250">
                        <span>
                            <x-icons.post class="mr-2" />
                        </span>
                        {{ $result['title'] }}
                    </a>
                @empty
                    <div class="block px-4 py-2">{{ __('frontend/layout.no_results') }}<b>{{ $q }}</b></div>
                @endforelse
            </div>
        </div>

    @endif
</div>
