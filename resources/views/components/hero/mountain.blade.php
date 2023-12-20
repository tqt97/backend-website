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
                    <path class="mount4"
                        d="M0 350 450 300 800 350 1200 300 1500 350 1750 275 2000 200 2000 400 0 400" />
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
