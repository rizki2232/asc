<?php

$links = [
    [
        'title' => 'Beranda',
        'route' => '/',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>'
    ],
    [
        'title' => 'Artikel',
        'route' => '/artikel',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>'
    ],
    [
        'title' => 'Tentang',
        'route' => '/about',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect x="10" y="6" width="8" height="4" rx="1"/></svg>'
    ]
];

$current_page = $_SERVER['REQUEST_URI'];

?>

<header x-data="{ navOpen: false }" class="fixed top-0 left-0 right-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-primary/80 backdrop-blur-sm shadow dark:bg-neutral-800 dark:border-neutral-700">
    <nav class="relative max-w-7xl w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-x-1">
            <a href="" class="relative mr-6 flex items-center space-x-2 fill-primary text-white">
                <svg
                    version="1.0"
                    xmlns="http://www.w3.org/2000/svg"
                    width="225.000000pt"
                    height="225.000000pt"
                    viewBox="0 0 225.000000 225.000000"
                    preserveAspectRatio="xMidYMid meet"
                    class="size-12 bg-white rounded-full p-px">
                    <g
                        transform="translate(0.000000,225.000000) scale(0.100000,-0.100000)"
                        stroke="none">
                        <path
                            d="M980 2180 c-154 -22 -326 -89 -459 -179 -58 -40 -82 -63 -43 -42 41 22 116 22 195 2 116 -30 219 -83 472 -241 320 -200 395 -232 452 -195 25 16 25 20 20 85 -11 134 -112 348 -220 466 -89 97 -107 105 -240 109 -61 2 -141 0 -177 -5z" />
                        <path
                            d="M1414 2097 c124 -121 184 -235 231 -439 14 -64 32 -124 40 -134 10 -14 26 -18 69 -18 110 2 201 94 212 216 l6 53 -62 67 c-123 135 -324 259 -497 307 l-73 20 74 -72z" />
                        <path
                            d="M425 1916 c-67 -29 -204 -207 -271 -352 -37 -79 -76 -218 -89 -313 l-7 -53 38 6 c81 13 347 36 544 47 201 11 780 7 918 -7 l62 -7 0 105 0 105 -62 13 c-122 24 -234 81 -533 274 -141 91 -276 159 -360 181 -72 18 -199 19 -240 1z m308 -267 c25 -14 56 -49 57 -65 0 -7 -12 -15 -27 -18 -24 -7 -36 0 -45 26 -2 4 -17 10 -33 14 -43 8 -75 -20 -82 -73 -11 -80 15 -123 73 -123 27 0 38 6 52 29 14 23 21 27 40 20 28 -11 28 -31 -1 -64 -39 -46 -132 -50 -179 -8 -72 63 -57 216 25 257 38 18 90 21 120 5z m277 -4 c28 -15 50 -42 50 -64 0 -20 -55 -12 -68 10 -18 29 -86 24 -90 -7 -3 -19 6 -25 67 -43 44 -13 76 -30 86 -43 24 -35 19 -76 -14 -109 -26 -25 -37 -29 -86 -29 -67 0 -90 10 -110 50 -21 41 -19 50 14 50 21 0 32 -6 36 -21 9 -27 48 -41 80 -29 54 21 39 66 -26 76 -84 14 -128 69 -98 123 28 49 101 66 159 36z m-554 -130 c30 -71 56 -136 58 -142 4 -9 -5 -13 -29 -13 -29 0 -35 4 -45 35 -11 35 -12 35 -70 35 -58 0 -59 0 -70 -35 -10 -30 -16 -35 -42 -35 -35 0 -37 -12 27 158 l50 133 34 -3 c34 -3 35 -4 87 -133z" />
                        <path
                            d="M348 1530 l-16 -50 39 0 39 0 -17 43 c-24 62 -28 62 -45 7z" />
                        <path
                            d="M1986 1668 c-37 -128 -107 -189 -240 -210 l-78 -12 7 -105 c4 -59 8 -107 9 -107 0 -1 71 -10 156 -19 85 -9 197 -28 249 -41 52 -13 96 -22 98 -21 6 7 -17 170 -33 235 -9 37 -29 97 -44 133 -26 64 -97 199 -105 199 -2 0 -10 -24 -19 -52z" />
                        <path
                            d="M505 1195 c-93 -7 -232 -18 -308 -25 l-137 -13 0 -67 c0 -189 77 -420 196 -586 49 -70 77 -84 161 -84 127 0 250 56 518 235 350 234 454 285 592 293 l81 4 6 47 c19 166 19 168 -6 175 -122 33 -761 46 -1103 21z m-285 -105 c0 -5 -7 -10 -15 -10 -11 0 -15 -11 -15 -40 0 -22 -4 -40 -9 -40 -5 0 -8 18 -7 40 2 27 -2 40 -11 40 -7 0 -13 5 -13 10 0 6 16 10 35 10 19 0 35 -4 35 -10z m79 0 c9 0 12 -8 8 -27 -3 -15 -1 -36 4 -45 13 -24 -4 -23 -26 2 -21 23 -40 26 -32 5 4 -8 2 -17 -3 -20 -6 -4 -10 15 -10 46 0 48 1 51 23 45 12 -3 28 -6 36 -6z m99 -40 c12 -27 17 -50 12 -50 -5 0 -12 5 -15 10 -9 14 -42 12 -48 -2 -2 -7 -8 -10 -12 -6 -9 9 23 98 34 98 5 0 18 -22 29 -50z m71 18 l21 -33 0 33 c0 17 5 32 10 32 6 0 10 -22 10 -50 0 -58 -12 -63 -40 -17 l-20 32 0 -32 c0 -18 -4 -33 -10 -33 -11 0 -14 83 -3 93 9 10 9 10 32 -25z m129 14 c3 -9 -3 -11 -22 -6 -16 4 -26 2 -26 -5 0 -6 8 -11 19 -11 24 0 43 -23 35 -44 -7 -18 -59 -22 -69 -5 -11 17 3 23 20 9 12 -10 19 -10 27 -2 8 8 5 14 -14 21 -34 13 -43 28 -27 47 14 17 50 15 57 -4z m94 1 c16 -20 1 -43 -27 -43 -18 0 -25 -5 -25 -20 0 -11 -4 -20 -10 -20 -11 0 -14 83 -4 93 11 10 54 4 66 -10z m97 -2 c38 -38 -3 -97 -54 -78 -24 10 -30 55 -10 77 23 25 40 25 64 1z m105 -4 c8 -13 8 -20 -3 -27 -12 -7 -13 -11 -1 -24 7 -9 9 -20 5 -24 -4 -4 -14 3 -22 16 -19 27 -33 28 -33 2 0 -11 -4 -20 -10 -20 -5 0 -10 22 -10 49 0 47 0 48 31 47 19 -1 36 -8 43 -19z m96 13 c0 -5 -7 -10 -15 -10 -11 0 -15 -11 -15 -40 0 -23 -5 -40 -11 -40 -7 0 -10 15 -7 40 3 31 0 40 -12 40 -13 0 -13 1 0 10 20 13 60 13 60 0z m78 -37 c21 -49 21 -66 0 -45 -16 16 -45 15 -51 0 -2 -7 -8 -10 -12 -6 -8 8 24 98 35 98 4 0 17 -21 28 -47z m102 35 c0 -4 -7 -8 -15 -8 -11 0 -14 -10 -12 -40 2 -22 0 -40 -5 -40 -4 0 -8 18 -8 40 0 29 -4 40 -15 40 -8 0 -15 4 -15 10 0 5 16 9 35 8 19 -1 35 -5 35 -10z m38 -39 c-2 -59 -18 -58 -18 1 0 31 4 49 10 45 5 -3 9 -24 8 -46z m98 23 c16 -32 6 -61 -22 -68 -34 -9 -52 1 -60 32 -6 22 -2 31 16 46 29 23 51 20 66 -10z m71 -19 c10 -16 12 -14 12 15 1 51 21 28 21 -24 0 -51 -19 -59 -40 -16 l-14 27 -4 -27 c-2 -16 -8 -28 -13 -28 -11 0 -12 83 -2 94 7 7 13 1 40 -41z" />
                        <path
                            d="M257 1065 c6 -17 25 -15 31 3 2 7 -5 12 -17 12 -14 0 -19 -5 -14 -15z" />
                        <path
                            d="M366 1061 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z" />
                        <path
                            d="M640 1065 c0 -10 7 -15 18 -13 21 4 19 22 -2 26 -10 2 -16 -3 -16 -13z" />
                        <path
                            d="M733 1064 c-7 -18 6 -45 25 -52 15 -5 33 33 26 52 -8 21 -43 21 -51 0z" />
                        <path
                            d="M840 1065 c0 -17 2 -18 24 -9 23 9 20 24 -4 24 -11 0 -20 -7 -20 -15z" />
                        <path
                            d="M1036 1061 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z" />
                        <path
                            d="M1243 1064 c-7 -18 6 -45 25 -52 18 -6 36 37 21 54 -15 19 -38 18 -46 -2z" />
                        <path
                            d="M1677 1128 c-4 -24 -9 -72 -13 -109 l-6 -65 71 -28 c184 -72 274 -202 257 -371 l-6 -60 21 25 c37 47 128 245 149 325 23 92 43 246 32 256 -15 14 -377 69 -456 69 l-44 0 -5 -42z" />
                        <path
                            d="M1420 896 c-75 -28 -153 -74 -385 -226 -335 -220 -482 -289 -614 -290 l-56 -1 45 -40 c69 -62 185 -138 274 -180 105 -49 214 -77 351 -91 110 -11 110 -11 163 16 99 50 184 146 265 296 105 197 168 469 119 513 -23 21 -110 22 -162 3z" />
                        <path
                            d="M1660 868 c-5 -13 -25 -90 -44 -173 -55 -245 -116 -378 -229 -501 -32 -35 -80 -78 -108 -95 -27 -18 -49 -33 -49 -34 0 -4 119 17 171 30 180 47 371 162 498 300 39 44 51 65 57 101 16 110 -20 225 -96 308 -73 79 -179 113 -200 64z" />
                    </g>
                </svg>
                <div class="leading-[1.15] font-bold text-xs">
                    <div>Anugrah</div>
                    <div>Cahaya</div>
                    <div>Sejahtera</div>
                </div>
            </a>

            <!-- Collapse Button -->
            <button x-on:click="navOpen = ! navOpen" class="md:hidden p-2 border border-gray-200 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4" x-show="!navOpen">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4" x-show="navOpen">
                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>

                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>
        <div class="overflow-hidden" :class="navOpen ? '' : 'hidden md:block'">
            <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                    <div class="grow">
                        <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                            <?php foreach ($links as $key => $link) :
                                $isActive = ($current_page === $link['route']);
                            ?>
                                <a href="<?= $link['route'] ?>">
                                    <div class="p-2 flex items-center text-sm font-semibold text-white rounded-md hover:text-primary hover:bg-white/90 md:hover:text-gray-200 md:hover:bg-transparent">
                                        <span class="shrink-0 size-4 me-3 md:me-2 md:hidden"><?= $link['icon'] ?></span>
                                        <?= $link['title'] ?>
                                    </div>
                                </a>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=""></div>
    </nav>
</header>