<div
    class="w-full overflow-hidden bg-gray-950 relative block items-center text-center md:py-24 py-12 text-gray-100 dark:text-gray-800">

    <x-hero.birds />
    <div class="hidden md:block ">
        <x-hero.baloon />
        <x-hero.baloon2 />
    </div>

    <h1
        class="text-xl md:text-2xl font-bold text-center lg:text-4xl text-gray-100 tracking-tight
                lg:leading-tight dark:text-gray-800">
        {{ __('frontend/home.hero.title') }}
        {{-- <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-blue-400 to-pink-600"> --}}
        <a href="{{ route('home') }}"
            class="p-2 ml-1 transform gradient-border bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-no-repeat bg-left-bottom bg-[length:100%_3px] transition-all duration-500">
            <span
                class="font-bold bg-gray-9501
                {{-- bg-gradient-to-r from-orange-700 via-blue-500 to-green-400 text-transparent bg-clip-text bg-300%  --}}
                animate-gradient1">
                Dev Blog
            </span>
        </a>
        {{-- </span> --}}
    </h1>
    <br>
    {{-- <div class="gradient-border relative1 transform overflow-hidden w-full p-1" id="box">
        <div class="bg-gray-900 p-3">
            <h1>Tuantq</h1>
        </div>
    </div> --}}

    <br>

    <div
        class="font-extrabold text-3xl md:text-4xl [text-wrap:balance] bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200">
        Trusted by the most innovative minds in
        <span
            class="text-indigo-500 inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
            <ul class="block animate-text-slide-2 text-left leading-tight [&_li]:block">
    
                <x-hero.slide-li>
                    Laravel
                </x-hero.slide-li>
                <x-hero.slide-li>
                    Filament
                </x-hero.slide-li>
                <x-hero.slide-li>
                    Livewire
                </x-hero.slide-li>

            </ul>
        </span>
    </div>

    <a href=""
            class="bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-[length:100%_3px] bg-no-repeat bg-left-bottom transition-all duration-500">
            adipisicing elit. Repellat rerum sint cupiditate ad, neque nulla, illo, quaerat culpa
    </a>

    <div class="text-xl mt-10 z-10">
        {{ __('frontend/home.hero.desc') }}
        <br>
        <a href=""
            class="bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-[length:0%_5px] bg-no-repeat bg-left-bottom hover:bg-[length:100%_5px] transition-all duration-500">
            adipisicing elit. Repellat rerum sint cupiditate ad, neque nulla, illo, quaerat culpa
        </a>
    </div>
    <div class="group">
        <a class="px-3 py-2 mt-10 border-2 text-white bg-gray-950 text-xl rounded inline-block z-20 hover:scale-[0.95] transition duration-100
            hover:text-gray-950 hover:bg-white"
            href="{{ route('posts.index') }}">
            {{ __('frontend/home.hero.cta') }}
            <span class="transition ease-in duration-50">
                →
            </span>
        </a>
    </div>
</div>
