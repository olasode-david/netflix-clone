@php
    $comedyMovie = count($comedyMovies['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Comedy Movies
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $comedyMovie; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$comedyMovies['results'][$i]['backdrop_path']}}" 
        data-name="{{$comedyMovies['results'][$i]['name'] ?? $comedyMovies['results'][$i]['title']}}"
        alt="{{$comedyMovies['results'][$i]['name'] ?? $comedyMovies['results'][$i]['title']}}"
        key="{{$comedyMovies['results'][$i]['id']}}"
        class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>