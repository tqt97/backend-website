<div class="h-screen w-screen1">
    <div class="container-svg absolute w-full h-screen">
        {{-- @include('layouts.partials.nav') --}}
        <svg class="mountains" width="100%" viewBox="0 0 2000 400">
            <defs>
                <style type="text/css">
                    .mount3 {
                        fill: #17516b
                    }

                    .mount2 {
                        fill: #124156
                    }

                    .mount4 {
                        fill: #0e3141
                    }

                    .mount1 {
                        fill: #1b6180
                    }

                    .snow {
                        fill: white
                    }
                </style>
                <filter id="fireblur" x="0" y="0">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
                </filter>
                <linearGradient id="firegradient">
                    <stop offset="5%" stop-color="#fd4" />
                    <stop offset="95%" stop-color="red" />
                </linearGradient>
                <linearGradient id="water">
                    <stop offset="5%" stop-color="#CBA8C2" />
                    <stop offset="95%" stop-color="#46B0EA" />
                </linearGradient>
            </defs>
            <g id="mounts">
                <path class="mount1" d="M0 275 150 250 550 100 800 250 1200 150 1500 25 2000 300 2000 400 0 400" />
                <path class="snow" d="M 495 120 550 100 600 130 575 125 550 130 535 115" />
                <path class="snow" d="M 1380 75 1500 25 1635 100 1550 75 1500 85 1450 75" />
                <path class="mount3"
                    d="M0 350 350 225 500 300 800 200 1000 275 1250 200 1500 250 1850 175 2000 250 2000 400 0 400" />
                <path class="mount2" d="M0 400 650 250 900 300 1550 250 2000 300 2000 400" />
                <path class="mount4" d="M0 350 450 300 800 350 1200 300 1500 350 1750 275 2000 200 2000 400 0 400" />
                <symbol id="trees-group">
                    <use xlink:href="#tree" fill="#163546" x="1500" y="250" />
                    <use xlink:href="#tree" fill="#1E1F26" x="1530" y="240" />
                    <use xlink:href="#tree" fill="#1E1F26" x="1510" y="245" />
                    <use xlink:href="#tree" fill="#163546" x="1520" y="245" />
                    <use xlink:href="#tree" fill="#226282" x="1510" y="255" />
                    <use xlink:href="#tree" fill="#226282" x="1535" y="250" />
                </symbol>
                <g>
                    <use xlink:href="#trees-group" y="5" />

                    <use xlink:href="#campfire" x="3075" y="545" transform="scale(0.5)" filter="url(#fireblur)" />

                    <use xlink:href="#trees-group" x="45" y="15" />

                    <g class="lake" fill="url(#water)">
                        <ellipse cx="1480" cy="300" rx="80" ry="10" />
                        <ellipse cx="1430" cy="305" rx="50" ry="6" />
                    </g>

                    <use xlink:href="#trees-group" transform="translate(2990,-35) scale(-1,1.3)" />
                </g>
                <g id="sendit">
                    <use xlink:href="#bear" fill="#1B0D03" x="3880" y="350" transform="scale(0.5)" />
                </g>
            </g>
        </svg>
        <div class="sunrise">
            <div class="sun"></div>
            <div class="star" id="ray"></div>
        </div>

        <svg class="baloon">
            <g id="baloon">
                <circle cx="50" cy="50" r="20" fill="#29ABE2" />
                <polygon points="34 62 66 62 56 75 45 75" fill="#29ABE2" />
                <path d="M45 75 Q 20 40 50 30 Q 37 40 48 75" fill="crimson" />
                <path d="M56 75 Q 80 40 50 30 Q 63 40 53 75" fill="crimson" />
                <rect x="44" y="78" width="14" height="10" ry="5" fill="#1D1E22" />
            </g>
        </svg>

        <svg class="birds" width="100px" height="100px" viewbox="-5 -5 100 100">
            <style>
            </style>
            <symbol id="bird" viewbox="-5 -5 100 100">
                <path class="wing" d="M 15 0 Q 10 0 20 10 Q 10 7 5 0" fill="#1E1F26" />
                <path class="wing" d="M 5 0 Q 5 10 10 10 Q 10 3 15 0" fill="#5A5E72" />
                <path class="corpus" d="M 0 0 15 -1 15 1" fill="#1E1F26" />
            </symbol>
            <g id="birds">
                <use xlink:href="#bird" x="0" y="0" transform="scale(0.9)" />
                <use xlink:href="#bird" x="10" y="20" />
                <use xlink:href="#bird" x="30" y="15" transform="scale(0.8)" />
            </g>
        </svg>

        <div class="invisible">
            <svg id="tree">
                <symbol id="cone">
                    <polygon points="6 0 0 5 12 5" />
                </symbol>
                <g>
                    <use xlink:href="#cone" x="10" />
                    <use xlink:href="#cone" x="7" y="3" transform="scale(1.2)" />
                    <use xlink:href="#cone" x="4" y="5" transform="scale(1.5)" />
                    <use xlink:href="#cone" x="3" y="7" transform="scale(1.7)" />
                    <use xlink:href="#cone" x="1.5" y="8" transform="scale(2)" />
                </g>
            </svg>

            <svg id="bear">
                <g>
                    <path d="
                        M10 25
                        18 22
                        20 20
                        30 20
                        40 22
                        55 30
                        80 30
                        90 40
                        92 50
                        90 60
                        92 75
                        85 80
                        70 80
                        70 75
                        75 70
                        70 60
                        62 62
                        50 62
                        48 75
                        45 80
                        35 80
                        30 75
                        35 72
                        32 60
                        30 50
                        25 38
                        15 35
                        10 30">
                        <animate id="bearhead" dur="3s" begin="3s;bearhead.end+5s" attributeName="d"
                            fill="freeze"
                            values="
                        M10 25
                        18 22
                        20 20
                        30 20
                        40 22
                        55 30
                        80 30
                        90 40
                        92 50
                        90 60
                        92 75
                        85 80
                        70 80
                        70 75
                        75 70
                        70 60
                        62 62
                        50 62
                        48 75
                        45 80
                        35 80
                        30 75
                        35 72
                        32 60
                        30 50
                        25 38
                        15 35
                        10 30;

                        M12 20
                        20 18
                        22 17
                        30 18
                        40 22
                        55 30
                        80 30
                        90 40
                        92 50
                        90 60
                        92 75
                        85 80
                        70 80
                        70 75
                        75 70
                        70 60
                        62 62
                        50 62
                        48 75
                        45 80
                        35 80
                        30 75
                        35 72
                        32 60
                        30 50
                        25 38
                        15 30
                        12 25;

                        M10 25
                        18 22
                        20 20
                        30 20
                        40 22
                        55 30
                        80 30
                        90 40
                        92 50
                        90 60
                        92 75
                        85 80
                        70 80
                        70 75
                        75 70
                        70 60
                        62 62
                        50 62
                        48 75
                        45 80
                        35 80
                        30 75
                        35 72
                        32 60
                        30 50
                        25 38
                        15 35
                        10 30;" />
                    </path>
                </g>
            </svg>

            <svg id="campfire">
                <g>
                    <path d="M15 30 C 0 25 20 20 15 10 Q 30 20 15 30" fill="url(#firegradient)">
                        <animate id="fire" dur="2s" repeatCount="indefinite" attributeName="d"
                            fill="freeze"
                            values="M15 30 C 0 25 20 20 15 10 Q 30 20 15 30; M15 30 C 0 25 20 20 10 10 Q 30 20 15 30; M15 30 C 0 25 20 20 15 10 Q 30 20 15 30" />
                    </path>
                </g>
            </svg>

        </div>

        <div class="w-full text-center py-16 text-gray-100 dark:text-gray-800">
            <h1
                class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-100 tracking-tight
            lg:leading-tight dark:text-gray-800">
                {{ __('frontend/home.hero.title') }} <span class="text-yellow-500">
                    < TuanTQ.DEV />
                </span>
                <span class=""> Blogs</span>
            </h1>
            <p class="text-lg mt-1">{{ __('frontend/home.hero.desc') }}</p>
            <a class="px-3 py-2 border border-white bg-white text-black text-lg rounded mt-5 inline-block"
                href="{{ route('posts.index') }}">
                {{ __('frontend/home.hero.cta') }}
            </a>
        </div>

    </div>
</div>
