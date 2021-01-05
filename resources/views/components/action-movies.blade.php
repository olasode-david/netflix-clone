@php
    $actionMovie = count($actionMovies['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Action Movies
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $actionMovie; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$actionMovies['results'][$i]['backdrop_path']}}" 
            data-name="{{$actionMovies['results'][$i]['name'] ?? $actionMovies['results'][$i]['title']}}"
            alt="{{$actionMovies['results'][$i]['name'] ?? $actionMovies['results'][$i]['title']}}"
            key="{{$actionMovies['results'][$i]['id']}}"
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>