<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {   
       
        //All movies list
        $trending = json_decode(file_get_contents("https://api.themoviedb.org/3/trending/all/week?api_key=9c6521dedf9a3498429a6b36d9eab02c&language=en-US"), true);

        $netflixOriginals = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/tv?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_network=213"), true);

        $topRated = json_decode(file_get_contents("https://api.themoviedb.org/3/movie/top_rated?api_key=9c6521dedf9a3498429a6b36d9eab02c&language=en-US"), true);

        $actionMovies = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_genres=28"), true);

        $comedyMovies = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_genres=35"), true);

        $horrorMovies = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_genres=27"), true);

        $romanceMovies = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_genres=10749"), true);

        $documentaries = json_decode(file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=9c6521dedf9a3498429a6b36d9eab02c&with_genres=99"), true);

        //img url 
        $st = "https://image.tmdb.org/t/p/original/";
        @$time = substr(microtime()*100,0,1);

        //outputing the data
        return view('welcome', [
            'netflixOriginals' => $netflixOriginals,
            'trendings' => $trending,
            'topRateds' =>   $topRated,
            'actionMovies' => $actionMovies,
            'comedyMovies' => $comedyMovies,
            'horrorMovies' =>  $horrorMovies,
            'romanceMovies' =>  $romanceMovies,
            'documentaries' => $documentaries,
            'sts' => $st,
            'times' => $time,
        ]);
    }
    
}
