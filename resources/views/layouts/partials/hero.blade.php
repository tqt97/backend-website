<div class="w-full text-center md:p-0 md:m-0 py-36 sm:py-20 sm:my-28 text-gray-100 dark:text-gray-800 overflow-hidden">
    <div class="md:h-screen h-auto sm:my-15 w-full">
        <div class="container-svg absolute w-full h-screen">
            <div class="md:block hidden">
                <x-hero.mountain />

                <div class="sunrise">
                    <div class="sun"></div>
                    <div class="star" id="ray"></div>
                </div>
                <x-hero.baloon />
                
            </div>

            <x-hero.birds />

            <div class="invisible">
                <x-hero.tree />
                <x-hero.bear />
                <x-hero.campfire />
            </div>

            <div
                class="w-full md:absolute relative z-20 sm:px-4 sm:mt-10 sm:py-30 md:top-[30%] md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 block items-center text-center py-24 my-16 text-gray-100 dark:text-gray-800">
                <h1
                    class="text-2xl md:text-3xl z-20 font-bold text-center lg:text-5xl text-gray-100 tracking-tight
                        lg:leading-tight dark:text-gray-800">
                    {{ __('frontend/home.hero.title') }}
                    <span class="text-yellow-500">
                        < DEV />
                    </span>
                </h1>

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

        </div>
    </div>

</div>
