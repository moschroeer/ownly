<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Item overview</title>
</head>
<body>
<header class="bg-white dark:bg-blue-500">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <!--Logo -->
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto dark:hidden" />
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="hidden h-8 w-auto dark:block" />
            </a>
        </div>

        <!-- Desktop nav links -->
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/items" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Items</a>
            <a href="/reservations" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Reservations</a>
            <a href="/users" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Users</a>
        </div>

        <!-- login -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-sm/6 font-semibold text-gray-900 dark:text-white">
                Log in <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </nav>
</header>
<main class="max-w-6xl mx-auto px-4 py-4">

    {{$slot}}

</main>
<footer class="bg-slate-900">
    <div class="mx-auto max-w-7xl px-6 py-12 text-center">
        <!-- Top links -->
        <nav class="flex flex-wrap items-center justify-center gap-x-12 gap-y-4 text-sm font-medium text-slate-300">
            <a href="#" class="hover:text-white">About</a>
            <a href="#" class="hover:text-white">Blog</a>
            <a href="#" class="hover:text-white">Jobs</a>
            <a href="#" class="hover:text-white">Press</a>
            <a href="#" class="hover:text-white">Accessibility</a>
            <a href="#" class="hover:text-white">Partners</a>
        </nav>

        <!-- Social icons -->
        <div class="mt-8 flex items-center justify-center gap-6 text-slate-300">
            <!-- Facebook -->
            <a href="#" aria-label="Facebook" class="rounded-full p-2 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M22 12.06C22 6.475 17.523 2 11.94 2 6.355 2 1.88 6.475 1.88 12.06c0 4.997 3.657 9.145 8.438 9.94v-7.03H7.898v-2.91h2.42V9.845c0-2.39 1.424-3.708 3.606-3.708 1.044 0 2.136.187 2.136.187v2.35h-1.203c-1.186 0-1.556.737-1.556 1.492v1.79h2.648l-.423 2.91h-2.225v7.03C18.343 21.205 22 17.057 22 12.06z"/>
                </svg>
            </a>
            <!-- Instagram -->
            <a href="#" aria-label="Instagram" class="rounded-full p-2 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5" />
                    <circle cx="12" cy="12" r="3.5" />
                    <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                </svg>
            </a>
            <!-- X/Twitter -->
            <a href="#" aria-label="X" class="rounded-full p-2 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M18.244 3H21l-6.52 7.45L22 21h-5.98l-4.68-5.77L5.9 21H3l7.06-8.06L2 3h6.08l4.22 5.32L18.244 3Zm-2.1 16h1.52L8.02 5H6.48l9.664 14Z"/>
                </svg>
            </a>
            <!-- GitHub -->
            <a href="#" aria-label="GitHub" class="rounded-full p-2 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12 2C6.477 2 2 6.62 2 12.29c0 4.522 2.865 8.356 6.839 9.712.5.095.682-.224.682-.5
            0-.247-.01-1.065-.015-1.933-2.782.624-3.37-1.216-3.37-1.216-.455-1.187-1.11-1.503-1.11-1.503-.907-.642.069-.63.069-.63
            1.003.073 1.53 1.06 1.53 1.06.892 1.57 2.341 1.117 2.91.855.091-.666.35-1.118.636-1.376-2.22-.261-4.555-1.15-4.555-5.118
            0-1.13.389-2.053 1.03-2.777-.104-.262-.447-1.314.098-2.739 0 0 .84-.273 2.75 1.061a9.25 9.25 0 0 1 5 0c1.91-1.334 2.75-1.061 2.75-1.061.545 1.425.202 2.477.099 2.739.64.724 1.029 1.647 1.029 2.777
            0 3.978-2.338 4.855-4.566 5.112.359.323.679.957.679 1.93 0 1.394-.013 2.517-.013 2.858 0 .278.18.6.688.498A10.03 10.03 0 0 0 22 12.29C22 6.62 17.523 2 12 2Z"/>
                </svg>
            </a>
            <!-- YouTube -->
            <a href="#" aria-label="YouTube" class="rounded-full p-2 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M23.5 7.5s-.23-1.64-.94-2.36c-.9-.95-1.91-.96-2.37-1.02C16.88 3.75 12 3.75 12 3.75h-.01s-4.88 0-8.19.37c-.47.06-1.47.07-2.37 1.02C.73 5.86.5 7.5.5 7.5S.25 9.44.25 11.39v1.21c0 1.95.25 3.89.25 3.89s.23 1.64.94 2.36c.9.95 2.08.92 2.61 1.02 1.89.18 8 .36 8 .36s4.88 0 8.19-.37c.47-.06 1.47-.07 2.37-1.02.71-.72.94-2.36.94-2.36s.25-1.94.25-3.89V11.4c0-1.95-.25-3.9-.25-3.9ZM9.75 14.75v-6l6 3-6 3Z"/>
                </svg>
            </a>
        </div>

        <!-- Copyright -->
        <p class="mt-8 text-sm text-slate-300">
            © 2025 Ownly Inc. All rights reserved.
        </p>
    </div>
</footer>

</body>
</html>


