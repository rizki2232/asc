<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/src/css/ext.css">
    <link rel="stylesheet" href="/src/css/app.css" />
    <script src="/src/js/alpine.js" defer></script>
</head>

<body class="min-h-screen bg-gray-50 font-normal text-gray-950 antialiased">
    <div x-data="{ open: false }" class="flex flex-row-reverse min-h-screen overflow-x-clip w-full">
        <div class="relative w-screen flex-1 flex-col">
            <div class="sticky top-0 z-20 overflow-x-clip">
                <nav class="flex h-16 items-center gap-x-4 px-4 md:px-6 lg:px-8">
                    <button x-on:click="open = ! open" type="button" class="flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 -m-1.5 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 lg:hidden">
                        <span class="sr-only">
                            Expand sidebar
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="ms-auto flex items-center gap-x-4">
                        <div x-data="{ toggle: false }">
                            <div x-on:click="!toggle" class="flex cursor-pointer">
                                <button aria-label="User menu" type="button" class="shrink-0">
                                    <img class="object-cover object-center sex rounded-full h-8 w-8" src="https://ui-avatars.com/api/?name=A&amp;color=FFFFFF&amp;background=09090b" alt="Avatar of Admin">
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>