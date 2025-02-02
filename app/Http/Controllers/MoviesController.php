<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\Movie;



class MoviesController extends Controller
{
    public function show($imdbID)
    {
        // Fetch movie data from OMDB API using the imdbID
        $apiKey = 'dca61bcc';
        $url = "https://www.omdbapi.com?apikey={$apiKey}&i={$imdbID}";
        $movie = json_decode(file_get_contents($url));

        // Pass the movie data to the view
        return view('layouts.show', compact('movie'));
    }


}
