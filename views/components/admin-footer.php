<?php

$links = [
    [
        'title' => 'Dashboard',
        'route' => '/admin/',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>'
    ],
    [
        'title' => 'Mobil',
        'route' => '/admin/mobil/',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>'
    ],
    [
        'title' => 'Merek',
        'route' => '/admin/merek/',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>'
    ],
    [
        'title' => 'Artikel',
        'route' => '/admin/artikel/',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect x="10" y="6" width="8" height="4" rx="1"/></svg>'
    ]
];

$current_page = $_SERVER['REQUEST_URI'];

?>


</div>
<div x-show="open" x-on:click="open = false" class="fixed inset-0 z-30 bg-gray-950/75 transition duration-500 lg:hidden" x-transition.opacity.300ms></div>
<aside :class="open ? 'fi-sidebar-open w-[--sidebar-width] translate-x-0 shadow-xl ring-1 ring-gray-950\/5 dark:ring-white\/10 rtl:-translate-x-0 lg:sticky' : 'w-[--sidebar-width] -translate-x-full rtl:translate-x-full lg:sticky'" class="w-80 fixed inset-y-0 start-0 z-30 flex flex-col h-screen content-start bg-white transition-all lg:z-0 lg:bg-transparent lg:shadow-none lg:ring-0 lg:transition-none lg:translate-x-0 lg:sticky"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full">
    <div class="overflow-x-clip">
        <header class="flex h-16 items-center px-6">
            <div>
                <a href="">
                    <div class="fi-logo flex text-xl font-bold leading-5 tracking-tight text-gray-950 dark:text-white">
                        ACS Transportation
                    </div>
                </a>
            </div>
        </header>
    </div>
    <div class="flex flex-col flex-grow gap-y-7 overflow-x-hidden overflow-y-auto px-6 py-8" style="scrollbar-gutter: stable">
        <ul class="-mx-2 flex flex-col gap-y-1 h-auto">
            <?php foreach ($links as $key => $link) :
                // $isActive = ($current_page === $link['route']) ? $active : $inactive;
                $isActive = ($current_page === $link['route']);
            ?>
                <li class="">
                    <a href="<?= $link['route'] ?>" class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 <?= $isActive ? 'bg-white border border-gray-950/10 shadow-2xs' : 'hover:bg-gray-100'; ?> focus-visible:bg-gray-100">
                        <div class="<?= $isActive ? 'text-primary' : 'text-gray-500'; ?>">
                            <?= $link['icon'] ?>
                        </div>
                        <span class="flex-1 truncate text-sm font-medium <?= $isActive ? 'text-gray-950' : 'text-gray-700'; ?>">
                            <?= $link['title'] ?>
                        </span>
                    </a>
                </li>
            <?php
            // echo $current_page;
            endforeach;
            ?>
        </ul>
    </div>
</aside>
</div>
</body>

</html>