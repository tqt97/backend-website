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
                <svg class="baloon2">
                    <g id="baloon">
                        <circle cx="50" cy="50" r="20" fill="#29ABE2" />
                        <polygon points="34 62 66 62 56 75 45 75" fill="#29ABE2" />
                        <path d="M45 75 Q 20 40 50 30 Q 37 40 48 75" fill="crimson" />
                        <path d="M56 75 Q 80 40 50 30 Q 63 40 53 75" fill="crimson" />
                        <rect x="44" y="78" width="14" height="10" ry="5" fill="#1D1E22" />
                    </g>
                </svg>
            </div>

            <x-hero.bird />
            <svg class="birds2" width="100px" height="100px" viewbox="-5 -5 100 100">
                <style>
                </style>
                <symbol id="bird2" viewbox="-5 -5 100 100">
                    <path class="wing" d="M 15 0 Q 10 0 20 10 Q 10 7 5 0" fill="#1E1F26" />
                    <path class="wing" d="M 5 0 Q 5 10 10 10 Q 10 3 15 0" fill="#5A5E72" />
                    <path class="corpus" d="M 0 0 15 -1 15 1" fill="#1E1F26" />
                </symbol>
                <g id="birds2">
                    <use xlink:href="#bird" x="0" y="0" transform="scale(0.9)" />
                    <use xlink:href="#bird" x="10" y="20" />
                    <use xlink:href="#bird" x="30" y="15" transform="scale(0.8)" />
                </g>
            </svg>
            <svg class="birds3" width="100px" height="100px" viewbox="-5 -5 100 100">
                <style>
                </style>
                <symbol id="bird3" viewbox="-5 -5 100 100">
                    <path class="wing" d="M 15 0 Q 10 0 20 10 Q 10 7 5 0" fill="#1E1F26" />
                    <path class="wing" d="M 5 0 Q 5 10 10 10 Q 10 3 15 0" fill="#5A5E72" />
                    <path class="corpus" d="M 0 0 15 -1 15 1" fill="#1E1F26" />
                </symbol>
                <g id="birds3">
                    <use xlink:href="#bird" x="0" y="0" transform="scale(0.9)" />
                    <use xlink:href="#bird" x="10" y="20" />
                    <use xlink:href="#bird" x="30" y="15" transform="scale(0.8)" />
                </g>
            </svg>
            <div class="invisible">
                <x-hero.tree />
                <x-hero.bear />
                <x-hero.campfire />
            </div>

            <div
                class="w-full md:absolute relative z-20 sm:px-4 sm:mt-10 sm:py-30 md:top-[40%] md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 block items-center text-center py-24 my-16 text-gray-100 dark:text-gray-800">
                <h1
                    class="text-2xl md:text-3xl z-20 font-bold text-center lg:text-5xl text-gray-100 tracking-tight
            lg:leading-tight dark:text-gray-800">
                    {{ __('frontend/home.hero.title') }}
                    <span class="text-yellow-500">
                        < DEV />
                    </span>
                </h1>

                <div class="text-xl mt-10 z-20">{{ __('frontend/home.hero.desc') }}</div>
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
