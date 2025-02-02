@extends('layouts.main')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Search Results for "{{ $query }}"</h1>
    <div id="movie-list" class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($movies as $movie)
            <div class="bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ $movie->Poster }}" alt="{{ $movie->Title }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h5 class="text-lg font-semibold text-white truncate">{{ $movie->Title }}</h5>
                    <h6 class="text-gray-400">Year: {{ $movie->Year }}</h6>
                    <a href="{{ route('movies.show', $movie->imdbID) }}" class="text-blue-500 hover:underline">View
                        Details</a>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-300">No movies found.</p>
        @endforelse
    </div>
@endsection
