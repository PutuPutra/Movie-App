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

    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-start">
        <div class="relative group">
            <img src="{{ $movie->Poster }}" alt="{{ $movie->Title }}"
                class="w-64 md:w-96 rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105">
            <div
                class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                <button
                    class="bg-orange-500 text-white rounded-full px-4 py-2 font-semibold hover:bg-orange-600 transition ease-in-out duration-150">Watch
                    Trailer</button>
            </div>
        </div>
        <div class="md:ml-12 mt-8 md:mt-0 flex-1">
            <h2 class="text-4xl font-bold text-white">{{ $movie->Title }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                    <g data-name="Layer 2">
                        <path
                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                            data-name="star" />
                    </g>
                </svg>
                <span class="ml-1">{{ $movie->imdbRating }}%</span>
                <span class="mx-2">|</span>
                <span>{{ $movie->Released }}</span>
                <span class="mx-2">|</span>
                <span>{{ $movie->Genre }}</span>
            </div>
            <p class="text-gray-300 mt-6 leading-relaxed">{{ $movie->Plot }}</p>
            <div class="mt-8">
                <h4 class="text-xl font-bold text-white">Featured Cast</h4>
                <div class="flex flex-wrap mt-4 space-x-8">
                    @foreach (explode(',', $movie->Actors) as $actor)
                        <div>
                            <div class="text-lg text-white font-semibold">{{ $actor }}</div>
                            <div class="text-sm text-gray-400">Actor</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-10 flex space-x-4">
                <button onclick="window.history.back()"
                    class="bg-gray-600 text-white px-6 py-3 rounded font-bold hover:bg-gray-700 transition ease-in-out duration-150">
                    Back
                </button>
            </div>
        </div>
    </div>

</body>

</html>

