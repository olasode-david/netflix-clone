@php
    $horrorMovie = count($horrorMovies['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Horror Movies
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $horrorMovie; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$horrorMovies['results'][$i]['backdrop_path']}}" 
            data-name="{{$horrorMovies['results'][$i]['name'] ?? $horrorMovies['results'][$i]['title']}}"
            alt="{{$horrorMovies['results'][$i]['name'] ?? $horrorMovies['results'][$i]['title']}}"
            key="{{$horrorMovies['results'][$i]['id']}}"
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>