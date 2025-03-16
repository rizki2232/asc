<?php include __DIR__ . "/../views/components/admin-header.php" ?>

<main class="main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl bg-white shadow">
    <section class="flex flex-col gap-y-8 py-8">
        <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Dashboardd
                </h1>
            </div>
            <!-- <div class="flex shrink-0 items-center gap-3">
                <div class="gap-23 flex flex-wrap items-center justify-start">
                    <a href="" class="relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg bg-primary gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 xpc fi-ac-btn-action">
                        <span>New product</span>
                    </a>
                </div>
            </div> -->
        </header>
        <div class="grid gap-6 md:grid-cols-3">
            <div class="grid gap-y-2">
                <div class="text-sm font-medium text-gray-500">Orders</div>
                <div class="text-3xl font-semibold tracking-tight text-gray-950">232</div>
                <div class="flex items-center gap-x-1 text-sm text-green-600">
                    <span>+6.5% from last year</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M15.22 6.268a.75.75 0 0 1 .968-.431l5.942 2.28a.75.75 0 0 1 .431.97l-2.28 5.94a.75.75 0 1 1-1.4-.537l1.63-4.251-1.086.484a11.2 11.2 0 0 0-5.45 5.173.75.75 0 0 1-1.199.19L9 12.312l-6.22 6.22a.75.75 0 0 1-1.06-1.061l6.75-6.75a.75.75 0 0 1 1.06 0l3.606 3.606a12.695 12.695 0 0 1 5.68-4.974l1.086-.483-4.251-1.632a.75.75 0 0 1-.432-.97Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="grid gap-y-2">
                <div class="text-sm font-medium text-gray-500">Orders</div>
                <div class="text-3xl font-semibold tracking-tight text-gray-950">232</div>
                <div class="flex items-center gap-x-1 text-sm text-red-600">
                    <span>+6.5% from last year</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M1.72 5.47a.75.75 0 0 1 1.06 0L9 11.69l3.756-3.756a.75.75 0 0 1 .985-.066 12.698 12.698 0 0 1 4.575 6.832l.308 1.149 2.277-3.943a.75.75 0 1 1 1.299.75l-3.182 5.51a.75.75 0 0 1-1.025.275l-5.511-3.181a.75.75 0 0 1 .75-1.3l3.943 2.277-.308-1.149a11.194 11.194 0 0 0-3.528-5.617l-3.809 3.81a.75.75 0 0 1-1.06 0L1.72 6.53a.75.75 0 0 1 0-1.061Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="grid gap-y-2">
                <div class="text-sm font-medium text-gray-500">Orders</div>
                <div class="text-3xl font-semibold tracking-tight text-gray-950">232</div>
                <div class="flex items-center gap-x-1 text-sm text-red-600">
                    <span>+6.5% from last year</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M1.72 5.47a.75.75 0 0 1 1.06 0L9 11.69l3.756-3.756a.75.75 0 0 1 .985-.066 12.698 12.698 0 0 1 4.575 6.832l.308 1.149 2.277-3.943a.75.75 0 1 1 1.299.75l-3.182 5.51a.75.75 0 0 1-1.025.275l-5.511-3.181a.75.75 0 0 1 .75-1.3l3.943 2.277-.308-1.149a11.194 11.194 0 0 0-3.528-5.617l-3.809 3.81a.75.75 0 0 1-1.06 0L1.72 6.53a.75.75 0 0 1 0-1.061Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../views/components/admin-footer.php" ?>