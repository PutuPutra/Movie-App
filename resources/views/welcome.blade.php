<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Page with TailwindCSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-500">MyCoolSite</h1>
            <nav class="space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Services</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Welcome to MyCoolSite</h2>
            <p class="text-lg mb-6">The perfect place to explore amazing ideas and solutions.</p>
            <a href="#features"
                class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-gray-200">
                Learn More
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-8">Our Features</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h11M9 21H4a2 2 0 01-2-2V9a2 2 0 012-2h5l3-3h4a2 2 0 012 2v4M17 16l4-4m0 0l-4-4m4 4H9" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Fast</h4>
                    <p class="text-gray-600">Our platform is optimized for speed and performance.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c.09-.33.176-.65.253-.97C12.87 5.26 14.49 3 17 3c3.19 0 3 5 1 6 0 0 1.48 2.61-.62 3.89m0 0A2.373 2.373 0 0118 14v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6c0-.343.056-.675.157-.992M9 21h6" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Secure</h4>
                    <p class="text-gray-600">We prioritize your security above everything else.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Innovative</h4>
                    <p class="text-gray-600">We provide cutting-edge solutions tailored to your needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-200 py-6">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm">&copy; 2024 MyCoolSite. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
