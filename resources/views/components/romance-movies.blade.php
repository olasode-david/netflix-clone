@php
    $romanceMovie = count($romanceMovies['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Romance Movies
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $romanceMovie; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$romanceMovies['results'][$i]['backdrop_path']}}" 
            data-name="{{$romanceMovies['results'][$i]['name'] ?? $romanceMovies['results'][$i]['title']}}"
            alt="{{$romanceMovies['results'][$i]['name'] ?? $romanceMovies['results'][$i]['title']}}"
            key="{{$romanceMovies['results'][$i]['id']}}"
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>