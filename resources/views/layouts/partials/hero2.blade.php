<section id="hero">
    <div class="w-full overflow-hidden relative block items-center text-center md:py-12 py-6 px-4">

        <x-hero.birds />
        <div class="hidden md:block">
            <x-hero.baloon />
            <x-hero.baloon2 />
        </div>

        <h1
            class="text-xl md:text-2xl font-bold text-center lg:text-4xl  tracking-tight
                lg:leading-tight ">
            {{ __('frontend/home.hero.title') }}
            <a href="{{ route('home') }}"
                class="p-2 ml-1 transform bg-gradient-to-r from-red-500 via-blue-400 to-lime-600 bg-no-repeat bg-left-bottom bg-[length:100%_3px] transition-all duration-500">
                <span class="font-bold
                animate-typing overflow-hidden whitespace-nowrap">
                    Dev Blog
                    <span
                        class="w-full animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5 text-5xl text-white font-bold">
                        Hello World
                    </span>
                </span>
            </a>
        </h1>

        <br>

        <br>

        <div class="font-extrabold text-3xl md:text-4xl">
            Trusted by the most innovative minds in
            <x-pages.home.hero-span>
                <x-hero.slide-li>
                    Laravel
                </x-hero.slide-li>
                <x-hero.slide-li>
                    Filament
                </x-hero.slide-li>
                <x-hero.slide-li>
                    Livewire
                </x-hero.slide-li>
            </x-pages.home.hero-span>
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
            <a class="shadow-border px-3 py-3 mt-10 bg-gray-950 text-white dark:bg-white dark:text-gray-950 text-xl rounded inline-block z-20 group-hover:scale-[0.99] transition-all duration-75"
                href="{{ route('posts.index') }}">
                {{ __('frontend/home.hero.cta') }}
                <span class="transition ease-in duration-50">
                    →
                </span>
            </a>
        </div>
    </div>
</section>
