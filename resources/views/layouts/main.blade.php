<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/49b420f669.js" crossorigin="anonymous"></script>
    <title>Movie App</title>
</head>

<body class="font-sans bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white min-h-screen">
    <nav class="bg-gray-900 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">

            <!-- Logo: Left-aligned on larger screens, Centered on mobile -->
            <a href="#"
                class="text-2xl font-bold tracking-wider hover:opacity-80 transition-opacity duration-300 w-full md:w-auto text-center md:text-left">
                Movie<span class="text-blue-500">App</span>
            </a>

            <!-- Search Bar (Center aligned on desktop, below logo on mobile) -->
            <div class="flex-1 flex justify-center md:justify-center">
                <div class="hidden md:flex items-center relative w-1/2">
                    <input type="text"
                        class="bg-gray-800 text-sm rounded-full w-full pl-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow duration-300"
                        placeholder="Search..." id="search-input">
                    <svg class="absolute left-3 text-gray-500 w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                    </svg>
                </div>
            </div>

            <!-- Mobile Search Bar (Full width below logo on mobile) -->
            <div class="md:hidden flex flex-col items-center w-full mt-2">
                <input type="text"
                    class="bg-gray-800 text-sm rounded-full w-10/12 pl-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow duration-300"
                    placeholder="Search..." id="search-input-mobile">
                <svg class="absolute left-3 text-gray-500 w-5 h-5 mt-2" viewBox="0 0 24 24">
                    <path
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>

        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>

    <script src="../js/script.js"></script>
    <script>
        // Toggle mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
