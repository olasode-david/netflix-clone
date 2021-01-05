@php
     $netflixOriginal = count($netflixOriginals['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Netflix Originals
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $netflixOriginal; $i++)      
        <img src="https://image.tmdb.org/t/p/original/{{$netflixOriginals['results'][$i]['poster_path']}}"  
            data-name='{{$netflixOriginals["results"][$i]["name"] ?? $netflixOriginals["results"][$i]["title"]}}'
            alt='{{$netflixOriginals["results"][$i]["name"] ?? $netflixOriginals["results"][$i]["title"]}}'
            key='{{$netflixOriginals["results"][$i]["id"]}}'
            class=" w-full object-contain mr-5 trailer row-posterlarge row-poster">
    @endfor       
</div>